<?php

namespace App\Repositories;
use App\kontakModel;


class kontakRepo implements kontakInterface{

    function create(char $nama, char $telepon, char $email, char $alamat) {
        $newKontak = new kontakModel;
        $newKontak->nama = $nama;
        $newKontak->telepon = $telepon;
        $newKontak->email = $email;
        $newKontak->alamat = $alamat;
        $newKontak->save();
    }

    function all(){
        return kontakModel::all();
    }

    function getById($id){
        return kontakModel::findOrFail($id);
    }

    function update($id, $nama, $telepon, $email, $alamat){
        kontakModel::findOrFail($id)->update(['nama'=>$nama, 'telepon'=>$telepon, 'email'=>$email, 'alamat'=>$alamat]);
    }

    function delete($id){
        kontakModel::find($id)->delete();
    }
  
}   