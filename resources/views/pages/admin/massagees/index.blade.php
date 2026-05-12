@extends('layouts.admin')

@section('content')
    <div class="container">
       <h1>Massage For Client</h1>
       <div class="row">
        <div class="col-md-12"> 
            @if (session('success'))               
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>                
            @endif
        </div>
       </div>
       <div class="row">
        <div class="col-md-12"> 
            @if (session('error'))               
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>                
            @endif
        </div>
       </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="bg-danger text-center fw-bold text-white">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Pesan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $massagees as $item)
                                <tr class="fw-bold text-dark">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->pesan }}</td>
                                    <td class=" d-flex justify-content-end">
                                       
                                        <form action="{{ route('admin.massagees.destroy', $item->id) }}" method="post">
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
                                <td colspan="7" class="text-center">
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