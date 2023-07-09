@extends('layouts.app')
  
@section('title', 'Daily Monitoring')
  
@section('header')
<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container-xl px-4">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="filter"></i></div>
                        Daily Monitoring
                    </h1>
                    <div class="page-header-subtitle">Daily Temperature Data for Vaccine Chillers</div>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section('contents')
<div class="container-xl px-4 mt-n10">
    <div class="card card-header-actions mb-4">
        <div class="card-header">
            Monitoring Temperature Table
            <a class="btn btn-sm btn-primary" type="button" href="{{ route('daily.create') }}"><i class="me-1" data-feather="plus"></i> Create New Monitoring</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Suhu Pagi (08.00)</th>
                        <th>Suhu Sore (16.00)</th>
                        <th>Petugas</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Tanggal</th>
                        <th>Suhu Pagi (08.00)</th>
                        <th>Suhu Sore (16.00)</th>
                        <th>Petugas</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @if($daily->count() > 0)
                        @foreach($daily as $rs)
                            <tr>
                                <td>{{ $rs->tanggal }}</td>
                                <td>{{ $rs->suhu_pagi }} &deg;C</td>
                                <td>{{ $rs->suhu_sore }} @if($rs->suhu_sore) &deg;C @endif</td>
                                <td>{{ $rs->petugas_name }}</td>
                                <td>
                                    @if($rs->status === 'Complete')    
                                        <div class="badge bg-success text-white rounded-pill">{{ $rs->status }}</div></td>
                                    @else
                                         <div class="badge bg-warning text-white rounded-pill">{{ $rs->status }}</div></td>
                                    @endif
                                <td>{{ $rs->keterangan }}</td>
                                <td>
                                    @if($rs->status === 'Incomplete')    
                                        <a class="btn btn-datatable btn-icon btn-transparent-dark me-2" href="{{ route('daily.edit', $rs->id)}}"><i data-feather="edit"></i></a>
                                    @endif
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