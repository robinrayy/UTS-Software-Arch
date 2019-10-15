@extends('kontakView.base')
@section('body')
<h1>Datar Kontak</h1>
<button onclick="location.href = '{{route('create_kontak')}}';" id="button_new">Tambah Kontak</button>
<form action="{{route('search_kontak')}}" method="get">
<input type="text" name="keyword" placeholder="Cari Nama">
<button type="submit">Search</button>
</form>
        
    <br><br>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Telepon</td>
            <td>Email</td>
            <td>Alamat</td>
        </tr>
    @foreach ($daftarKontak as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->telepon}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->alamat}}</td>

            <td>
                <button onclick="location.href = '{{route('edit_kontak',['id'=>$item->id])}}';" id="button_edit">Edit</button>
                <button onclick="if(confirmDelete()) location.href = '{{route('delete_kontak',['id'=>$item->id])}}';" id="button_delete">Delete</button>
            </td>
        </tr>
    @endforeach
    </table>
    <script>
        function confirmDelete() {
            return confirm("Are you sure to delete this data ?");
        }
    </script>
@endsection