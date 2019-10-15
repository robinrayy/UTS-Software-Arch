<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kontakModel;
use App\Repositories\kontakRepo;

class kontakController extends Controller
{
    protected $kontakRepo;

    public function __construct(kontakRepo $repo){
        $this->kontakRepo = $repo;
    }

    function index(){
        $daftarKontak = $this->kontakRepo->all();
        return view('kontakView.index', compact('daftarKontak'));
    }
    
    function create(){
        return view('kontakView.create');
    }

    function add(Request $request) {
        $newKontak = new kontakModel;
        $newKontak->nama = $request->nama;
        $newKontak->telepon = $request->telepon;
        $newKontak->email = $request->email;
        $newKontak->alamat = $request->alamat;
        $newKontak->save();
        return redirect(route('home'));
    }

    function update(Request $request){
        $this->kontakRepo->update($request->id, $request->nama, $request->telepon, $request->email, $request->alamat);
        return redirect()->route("home");
    }

    function edit($id){
        $kontak =  $this->kontakRepo->getById($id);
        return view('kontakView.edit', compact('kontak'));
    }

    function delete($id){
        $this->kontakRepo->delete($id);
        return back();
    }

    public function search(Request $request)
    {
        $kontak = kontakModel::when($request->keyword, function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->keyword}%");})->get();
        return view('kontakView.index', ['daftarKontak'=>$kontak]);
    }   
    
}
