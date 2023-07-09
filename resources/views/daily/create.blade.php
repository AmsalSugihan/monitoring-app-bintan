@extends('layouts.app')
  
@section('title', 'Add Daily Monitoring')
  
@section('header')
 <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
    <div class="container-fluid px-4">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="file-plus"></i></div>
                        Create Daily Monitoring
                    </h1>
                </div>
                <div class="col-12 col-xl-auto mb-3">
                    <a class="btn btn-sm btn-light text-primary" href="{{ route('daily') }}">
                        <i class="me-1" data-feather="arrow-left"></i>
                        Back to All Daily Monitoring
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
    <form action="{{ route('daily.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
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
                        <input type="hidden" id="petugas_id" name="petugas_id" value="{{ auth()->user()->id }}">
                        <input type="hidden" id="tanggal" name="tanggal" value="{{ Carbon::now()->isoFormat('dddd') }} , {{Carbon::now()->format('F d, Y')}}">
                        <div class="mb-3">
                            <label class="small mb-1" for="inputTanggal">Tanggal</label>
                            <input class="form-control" name="tanggal" id="inputTanggal" type="text" value="{{ Carbon::now()->isoFormat('dddd') }} , {{Carbon::now()->format('F d, Y')}}" disabled/>
                        </div>
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="suhuPagi">Suhu Pagi (08.00)</label>
                                <input class="form-control" name="suhu_pagi" id="suhuPagi" type="number" placeholder="Enter suhu pagi" value="" require/>
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="suhuSore">Suhu Sore (16.00)</label>
                                <input class="form-control" name="suhu_sore" id="suhuSore" type="number" placeholder="Enter suhu sore" value="" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputKeterangan">Keterangan</label>
                            <textarea class="form-control" name="keterangan" id="inputKeterangan" rows="3"></textarea>
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