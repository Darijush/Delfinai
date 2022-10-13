<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'country_id', 'price', 'term',];

    const SORT_SELECT = [
        ['rate_asc', 'Rating 1-9'],
        ['rate_desc', 'Rating 9-1'],
        ['title_asc', 'Title A-Z'],
        ['title_decs', 'Title Z-A'],
        ['price_asc', 'Price low..high'],
        ['price_desc', 'Price high..low'],
    ];
    public function getCountry()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
    public function getPhotos()
    {
        return $this->hasMany(HotelImage::class, 'hotel_id', 'id');
    }

    public function lastImageUrl()
    {
        return $this->getPhotos()->orderBy('id', 'desc')->first()->url;
    }

    public function addImages(?array $photos): self
    {
        if ($photos) {
            $hotelImage = [];
            $time = Carbon::now();
            foreach ($photos as $photo) {
                $ext = $photo->getClientOriginalExtension();
                $name = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                $file = $name . '-' . rand(100000, 999999) . '.' . $ext;
                $photo->move(public_path() . '/images', $file);
                $hotelImage[] = [
                    'url' => asset('/images') . '/' . $file,
                    'hotel_id' => $this->id,
                    'created_at' => $time,
                    'updated_at' => $time
                ];
            }
            HotelImage::insert($hotelImage);
        }
        return $this;
    }

    public function removeImages(?array $photos): self
    {
        if ($photos) {
            $toDelete = HotelImage::whereIn('id', $photos)->get();
            foreach ($toDelete as $photo) {
                $file = public_path() . '/images/' . pathinfo($photo->url, PATHINFO_FILENAME) . '.' . pathinfo($photo->url, PATHINFO_EXTENSION);
                if (file_exists($file)) {
                    unlink($file);
                }
            }
            HotelImage::destroy($photos);
        }
        return $this;
    }
}
