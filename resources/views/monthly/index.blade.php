@extends('layouts.app')
  
@section('title', 'Monthly Monitoring')
  
@section('header')
<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container-xl px-4">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="filter"></i></div>
                        Monthly Monitoring
                    </h1>
                    <div class="page-header-subtitle">Monthly Temperature Data</div>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section('contents')
<div class="container-xl px-4 mt-n10">
    <div class="card mb-4">
        <div class="card-header">
           <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto ">
                   Monitoring Temperature Table
                </div>
                <div class="col-12 col-xl-auto">
                    <a class="btn btn-sm btn-light text-primary" href="{{ route('monthly.create') }}">
                        <i class="me-1" data-feather="plus"></i>
                        Create New Monitoring
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Tahun</th>
                        <th>Bulan</th>
                        <th>Suhu Ruang</th>
                        <th>Suhu Chiller</th>
                        <th>Suhu Freezer</th>
                        <th>Petugas</th>
                        <th>Status Penyesuaian</th>
                        <th>Keterangan</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Tahun</th>
                        <th>Bulan</th>
                        <th>Suhu Ruang</th>
                        <th>Suhu Chiller</th>
                        <th>Suhu Freezer</th>
                        <th>Petugas</th>
                        <th>Status Penyesuaian</th>
                        <th>Keterangan</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                     @if($monthly->count() > 0)
                        @foreach($monthly as $rs)
                            <tr>
                                <th>{{$rs->tahun}}</th>
                                <td>{{$rs->bulan}}</td>
                                <td>{{$rs->suhu_ruang}} &deg;C</td>
                                <td>{{$rs->suhu_chiller}} &deg;C</td>
                                <td>{{$rs->suhu_freezer}} &deg;C</td>
                                <th>{{$rs->petugas_name}}</th>
                                <td>{{$rs->status}}</td>
                                <td>{{$rs->keterangan}}</td>
                                <td>
                                    <a class="btn btn-datatable btn-icon btn-transparent-dark me-2" href="{{ route('monthly.edit', $rs->id)}}"><i data-feather="edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection