@extends('kontakView.base')
@section('body')
    <h1>Edit Kontak</h1>
    <form action="{{route('update_kontak',['id'=>$kontak->id])}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$kontak->id}}">
        <h3>Nama &nbsp&nbsp:
        <input type="text" name="nama" id="nama" class = "tab" value="{{$kontak->nama}}">
        </h3>
        <h3>Telepon :
        <input type="text" name="telepon" id="telepon" class = "tab" value="{{$kontak->telepon}}">
        </h3>
        <h3>Email &nbsp&nbsp&nbsp:
        <input type="email" name="email" id="email" class = "tab" value="{{$kontak->email}}">
        </h3>
        <h3>Alamat &nbsp:
        <input type="text" name="alamat" id="alamat" class = "tab" value="{{$kontak->alamat}}">
        </h3>
        <input type="submit" value ="Edit">   
    </form>
    
@endsection