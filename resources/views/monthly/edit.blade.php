@extends('layouts.app')
  
@section('title', 'Add Monthly Monitoring')
  
@section('header')
 <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
    <div class="container-fluid px-4">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="file-plus"></i></div>
                        Create Monthly Monitoring
                    </h1>
                </div>
                <div class="col-12 col-xl-auto mb-3">
                    <a class="btn btn-sm btn-light text-primary" href="{{ route('monthly') }}">
                        <i class="me-1" data-feather="arrow-left"></i>
                        Back to All Monthly Monitoring
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section('contents')

<?php
use Carbon\Carbon;
?>

<div class="container-fluid px-4">
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <form action="{{ route('monthly.update', $monthly->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row gx-4">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header">Monitoring Details</div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <input type="hidden" id="petugas_id" name="petugas_id" value="{{ $monthly->petugas_id }}">
                        <input type="hidden" id="bulan" name="bulan" value="{{$monthly->bulan}}">
                        <input type="hidden" id="tahun" name="tahun" value="{{$monthly->tahun}}">
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputTahun">Tahun</label>
                                <input class="form-control" name="tanggal" id="inputTahun" type="text" value="{{$monthly->tahun}}" disabled/>
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBulan">Bulan</label>
                            <input class="form-control" name="bulan" id="inputBulan" type="text" value="{{$monthly->bulan}}" disabled/>
                            </div>
                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-4">
                                <label class="small mb-1" for="suhu_ruang">Suhu Ruang</label>
                                <input class="form-control" name="suhu_ruang" id="suhu_ruang" type="number" placeholder="Enter suhu Ruang" value="{{$monthly->suhu_ruang}}"/>
                            </div>
                            <div class="col-md-4">
                                <label class="small mb-1" for="suhu_chiller">Suhu Chiller</label>
                                <input class="form-control" name="suhu_chiller" id="suhu_chiller" type="number" placeholder="Enter suhu Chiller" value="{{$monthly->suhu_chiller}}" />
                            </div>
                            <div class="col-md-4">
                                <label class="small mb-1" for="suhu_freezer">Suhu Freezer</label>
                                <input class="form-control" name="suhu_freezer" id="suhu_freezer" type="number" placeholder="Enter suhu Freezer" value="{{$monthly->suhu_freezer}}" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputStatus">Status</label>
                            <input class="form-control" name="status" id="inputStatus" type="text" placeholder="Enter suhu status" value="{{$monthly->status}}"></input>
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputKeterangan">Keterangan</label>
                            <textarea class="form-control" name="keterangan" id="inputKeterangan" rows="3">{{$monthly->keterangan}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-header-actions">
                    <div class="card-header">
                        Publish
                        <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left" title="After submitting, your daily monitoring will be published."></i>
                    </div>
                    <div class="card-body">
                        <div class="d-grid mb-3"><button class="fw-500 btn btn-primary-soft text-primary">Save</button></div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection