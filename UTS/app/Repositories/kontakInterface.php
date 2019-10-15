<?php

namespace App\Repositories;
use App\kontakModel;


interface kontakInterface{
    function create(char $nama, char $telepon, char $email, char $alamat);
    function all();
    function update($id, $nama, $telepon, $email, $alamat);
    function delete($id);


    // function create(string $description);
    // function all();
    // function getById($id);
    // function update($id, string $description, $status);
    // function delete($id);
}   