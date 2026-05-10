@extends('layouts.admin')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>edit produk</h1>
        </div>
    </div>
    {{-- alert error --}}
    {{-- @if (session('error'))
    <div class="">
        {{  }}
    </div>
        
    @endif --}}
    {{-- alert succes --}}
    {{-- @if (session('success'))
        <div class="row">
            <div class="col-md-12">
                <div class=""></div>
            </div>
        </div>
        
    @endif --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                   <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="from-group">
                            <label for="">pili kategori</label>
                            <select name="category_id" id="" class="form-control" required>
                                @foreach ($categories as $item )
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    
                                @endforeach
                            </select>
                            {{-- <input type="text" name="name" class="form-control" placeholder="Silahkan isi category" required> --}}
                        </div>
                        <div class="form-group">   
                            <label>Nama produk</label>
                            <input type="text" name="name" class="form-control" placeholder="Silahkan isi nama produk" value="{{ $product->name }}" required>
                            <label>Harga</label>
                            <input type="number" name="price" class="form-control" placeholder="Masukkan harga"  value="{{ $product->price }}">
                            <label>stock</label>
                            <input type="number" name="stock" class="form-control" placeholder="Masukkan stock" value="{{ $product->stock }}">
                            <div>
                                @if ($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100">
                                    
                                @endif
                            </div>
                            <label>Gambar</label>
                            <input type="file" name="image" class="form-control" placeholder="Masukkan gambar" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Masukkan deskripsi produk" {{ $product->description }}></textarea> 
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


