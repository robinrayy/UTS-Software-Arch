@extends('kontakView.base')
@section('body')
    <h1>Create</h1>
    <form action="{{route('add_kontak')}}" method="post">
        @csrf
        <h3>Nama &nbsp&nbsp:
        <input type="text" name="nama" id="nama" class = "tab">
        </h3>
        <h3>Telepon :
        <input type="text" name="telepon" id="telepon" class = "tab">
        </h3>
        <h3>Email &nbsp&nbsp&nbsp:
        <input type="email" name="email" id="email" class = "tab">
        </h3>
        <h3>Alamat &nbsp:
        <input type="text" name="alamat" id="alamat" class = "tab">
        </h3>
        <input type="submit" value ="Add"> 
    </form>
@endsection