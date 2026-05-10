@extends('layouts.admin')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>tambah kategori</h1>
        </div>
    </div>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>    
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="from-group">
                            <label>Nama Kategori</label>
                            <input type="text" name="name" class="form-control" placeholder="Silahkan isi category" value="{{ old('name', $category->name) }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

