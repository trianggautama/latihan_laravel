@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Rooms
                <div class="float-end">
                    <a href="" class="btn btn-primary"> Tambah Data</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td><span class="warna-hijau">Kode</span></td>
                                <td>Nama Ruangan</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection