<?php

namespace App\Controllers;

use App\App;
use App\DB\Json;
use App\Services\Messages as M;

class ClientController
{
    public function create()
    {
        return App::view('client_create', ['title' => 'New Client']);
    }
    public function store()
    {
        if (validatePersonalId($_POST['client_id'])) {
            Json::connect()->create([
                'name' => $_POST['name'],
                'surname' => $_POST['surname'],
                'IBAN' => $_POST['IBAN'],
                'client_id' => $_POST['client_id'],
                'balance' => 0,

            ]);
            return App::redirect('');
        }
            M::makeMsg('crimson', 'Wrong ID');
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

        Json::connect()->update($id, [
            'balance' => $_POST['balance'],
        ]);
        return App::redirect('clients_list');
    }
    public function delete(int $id)
    {
        Json::connect()->delete($id);
        return App::redirect('clients_list');
    }
    private function validatePersonalId($id)
    {
        if (strlen($id) !== 11 || (!preg_match("/\d{11}/", $id)) || (!preg_match("/^[1-6]/", $id))) {
            return false; // worng input message, must be 11 digits only;
        } else {
            $checkArray = str_split($id);
            $sum1 = $checkArray[0] * 1 + $checkArray[1] * 2 + $checkArray[2] * 3 + $checkArray[3] * 4 + $checkArray[4] * 5 + $checkArray[5] * 6 + $checkArray[6] * 7 + $checkArray[7] * 8 + $checkArray[8] * 9 + $checkArray[9] * 1;
            $sum2 = $checkArray[0] * 3 + $checkArray[1] * 4 + $checkArray[2] * 5 + $checkArray[3] * 6 + $checkArray[4] * 7 + $checkArray[5] * 8 + $checkArray[6] * 9 + $checkArray[7] * 1 + $checkArray[8] * 2 + $checkArray[9] * 3;
            if ($sum1 % 11 !== 10 && $sum1 % 11 == $checkArray[10]) {
                return true; //ID number is valid
            } elseif ($sum2 % 11 !== 10 && $sum2 % 11 == $checkArray[10]) {
                return true; //ID number is valid
            } elseif ($sum2 % 11 == 10 && ($checkArray[10] == 0)) {
                return true; //ID number is valid
            }
            return false; //id is not valid                                                                          
        }
    }
}
