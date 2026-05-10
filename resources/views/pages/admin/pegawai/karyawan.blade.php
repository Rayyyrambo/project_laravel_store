

@extends('layouts.admin')
@section('tittle', 'karyawan')
    
@section('content')
            <h1>data admin</h1>
           <div class="table-responsive">
                        <table class="table  table-bordered  table-hover">
                            <thead>
                                <tr class="bg-danger fw-bold text-white ">
                                    <th>NO</th>
                                    <th>nama</th>
                                    <th>email</th>
                                    <th>alamat</th>
                                    <th>tanggal lahir</th>
                                    <th>Nik</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <tr class="fw-bold text-dark">
                                    <td>1</td>
                                    <td>Rayyan Maulana</td>
                                    <td>rayyanmaulana18@gmail.com</td>
                                    <td>pinrang</td>
                                    <td>18-04-2004</td>
                                    <td>166667788</td>
                                    <td class="text-center">
                                        <button class="btn-danger btn-sm">
                                            Delete
                                        </button>
                                        <button class="btn-success btn-sm">
                                            Edit
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                 <tr class="fw-bold text-dark">
                                    <td>2</td>
                                    <td>radian bilhaqi</td>
                                    <td>radianbilahqi18@gmail.com</td>
                                    <td>pinrang</td>
                                    <td>21-11-2012</td>
                                    <td>166667788</td>
                                    <td class="text-center">
                                        <button class="btn-danger btn-sm">
                                            Delete
                                        </button>
                                        <button class="btn-success btn-sm">
                                            Edit
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                    </table>      
                </div>
                    
    @endsection
               