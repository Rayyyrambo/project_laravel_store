@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-end">
                <a href="{{ route('admin.products.create') }}" class="btn btn-success mb-3">Tambah Data</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-header">
                    Produk
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="bg-danger text-center fw-bold text-white">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Stock</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $item)
                                <tr class="fw-bold text-dark">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td>{{ number_format($item->price) }}</td>
                                    <td>{{ $item->stock }}</td>
                                    <td>
                                        @if ($item->image)
                                            <img src="{{ asset('storage/products/' . $item->image) }}" alt="{{ $item->name }}" width="100">  
                                        @endif

                                    </td>
                                    
                                    <td>
                                        <a href="{{ route('admin.products.edit', $item->id) }}" class="btn btn-primary btn-sm">edit</a>
                                        <form action="{{ route('admin.products.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" type="submit">
                                                Hapus
                                            </button>
                                        </form>
                                        
                                    </td>
                                 </tr>
                            @empty
                             <tr>
                                <td colspan="3" class="text-center">
                                    Data tidak tersedia
                                </td>
                            </tr>
                            @endforelse 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection