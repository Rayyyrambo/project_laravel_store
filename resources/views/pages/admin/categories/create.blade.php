@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>tambah kategori</h1>
        </div>
    </div>
   {{-- alert succes --}}
   {{-- @if (session('success'))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger">
                    {{ session('success') }}
                </div>
            </div>
        </div>
       
   @endif --}}
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>  
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.categories.store') }}" method="POST">
                        @csrf
                        <div class="from-group">
                            <label>Nama Kategori</label>
                            <input type="text" name="name" class="form-control" placeholder="Silahkan isi category" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection