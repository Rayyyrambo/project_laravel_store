@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-between align-items-center mb-3">
                <form action="{{ route('admin.products.index') }}" method="get" class="d-flex gap-2 flex-grow-1 mx-3">
                    <input type="text" name="search" class="form-control" placeholder="Cari nama produk..." value="{{ $search ?? '' }}">
                     <select name="category_id" id="categoryFilter" class="rounded-pill text-center mx-2 bg-primary text-white" style="min-width: 200px;">
                        <option value="" class="text-center text-white">Pilih Kategori</option>
                        @foreach ($golongan as $item)
                             <option class="text-white" value="{{ $item->id }}" @if($categoryFilter == $item->id) selected @endif>{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary mx-2">Cari</button>
                    @if ($search||$categoryFilter)
                        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Reset</a>
                    @endif
                </form>
                <a href="{{ route('admin.products.create') }}" class="btn btn-success ms-2">Tambah Data</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                
                @if (session('success'))
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        </div>
                    </div>
                @endif
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