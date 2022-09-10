<?php

namespace App\Controllers;

use App\App;
use App\DB\Json;

class AnimalController
{
    public function create()
    {
        return App::view('client_create', ['title' => 'New Client']);
    }
    public function store()
    {
        Json::connect()->create([
            'name' => $_POST['name'],
            'surname' => $_POST['surname'],
            'IBAN' => $_POST['IBAN'],
            'client_id' => $_POST['client_id'],
            'balance' => 0,

        ]);
        return App::redirect('');
    }
    public function list()
    {
        return App::view('clients_list', ['title' => 'Clients list', 'clients' => Json::connect()->showAll()]);
    }
    public function addAsset(int $id)
    {
        return App::view('client_addAssets', ['title' => 'Add Assets', 'client' => Json::connect()->show($id)]);
    }
    public function withdrawAsset(int $id)
    {
        return App::view('client_withdrawAssets', ['title' => 'withdraw Assets', 'client' => Json::connect()->show($id)]);
    }
    public function update(int $id)
    {
        
        Json::connect()->update($id,[
            'balance' => $_POST['balance'],
        ]);
        return App::redirect('clients_list');
    }
    public function delete(int $id)
    {
        Json::connect()->delete($id);
        return App::redirect('clients_list');
    }
}
