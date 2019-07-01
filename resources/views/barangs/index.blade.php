@extends('layouts.app')
@section('content')
<div class="container">
    <a class="btn btn-success" href="{{route('barangs.create')}}">+ Tambah Barang</a>
    <table class="table table-striped">
    <thead>
        <tr>
          <td>Kode</td>
          <td>Nama Barang</td>
          <td>Deskripsi</td>
          <td>Stok</td>
          <td>Harga (RP)</td>
          <td>Berat (Gram)</td>
          <td colspan="2" class="text-center">Aksi</td>
        </tr>
    </thead>
    <tbody>
        @foreach($barangs as $barang)
        <tr>
            <td>{{$barang->kode}}</td>
            <td>{{$barang->nama}}</td>
            <td>{{$barang->deskripsi}}</td>
            <td>{{$barang->stok}}</td>
            <td>{{$barang->harga}}</td>
            <td>{{$barang->berat}}</td>
            <td class="text-center"><a href="{{ route('barangs.edit', $barang->id)}}" class="btn btn-primary">Edit</a></td>
            <td class="text-center">
                <form action="{{ route('barangs.destroy', $barang->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
   {{$barangs->links()}}
<div>
</div>
@endsection
