@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-end">
                <a href="{{ route('admin.categories.create') }}" class="btn btn-success mb-3">Tambah Data</a>
            </div>
        </div>
        {{-- aller success --}}
        @if (session('success'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                </div>
            </div>
            
        @endif
        {{-- alert error --}}
        @if (session('error'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                </div>
            </div>            
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card card-header">
                    Kategori
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="bg-danger text-center fw-bold text-white">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $item)
                                <tr class="fw-bold text-dark">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td class=" d-flex justify-content-end">
                                        <a href="{{ route('admin.categories.edit', $item->id) }}" class="btn btn-primary btn-sm mb-3 mr-3">edit</a>
                                        <form action="{{ route('admin.categories.destroy', $item->id) }}" method="post">
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