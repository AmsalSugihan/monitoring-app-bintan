@extends('layouts.app')
  
@section('title', 'Dashboard')
  
@section('contents')

<?php
use Carbon\Carbon;
?>
<div class="container-xl px-4 mt-5">
    <!-- Custom page header alternative example-->
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="me-4 mb-3 mb-sm-0">
            <h1 class="mb-0">Dashboard</h1>
            <div class="small">
                <span class="fw-500 text-primary">{{Carbon::now()->isoFormat('dddd')}}</span>
                &middot; {{Carbon::now()->format('F d, Y')}} &middot; {{Carbon::now()->format('h:i A')}}
            </div>
        </div>
        
    </div>
    <!-- Illustration dashboard card example-->
    <div class="card card-waves mb-4 mt-5">
        <div class="card-body p-5">
            <div class="row align-items-center justify-content-between">
                <div class="col">
                    <h2 class="text-primary">Welcome back, your dashboard is ready!</h2>
                    <p class="text-gray-700">Great job, your affiliate dashboard is ready to go! You can view sales, generate links, prepare coupons, and download affiliate reports using this dashboard.</p>
                    <a class="btn btn-primary p-3" href="#!">
                        Get Started
                        <i class="ms-1" data-feather="arrow-right"></i>
                    </a>
                </div>
                <div class="col d-none d-lg-block mt-xxl-n4"><img class="img-fluid px-xl-4 mt-xxl-n5" src="{{ asset('admin_assets/assets/img/illustrations/statistics.svg') }}" /></div>
            </div>
        </div>
    </div>

    <div class="container-xl px-4">
        <h4 class="mb-0 mt-5">Knowledge Base</h4>
        <hr class="mt-2 mb-4" />
        <!-- Knowledge base main category card 1-->
        <a class="card card-icon lift lift-sm mb-4" href="knowledge-base-category.html">
            <div class="row g-0">
                <div class="col-auto card-icon-aside bg-primary"><i class="text-white-50" data-feather="compass"></i></div>
                <div class="col">
                    <div class="card-body py-4">
                        <h5 class="card-title text-primary mb-2">Getting Started</h5>
                        <p class="card-text mb-1">Basic information about getting started including installation instructions, setup, and basic usage.</p>
                        <div class="small text-muted">5 articles in this category</div>
                    </div>
                </div>
            </div>
        </a>
        <!-- Knowledge base main category card 2-->
        <a class="card card-icon lift lift-sm mb-4" href="knowledge-base-category.html">
            <div class="row g-0">
                <div class="col-auto card-icon-aside bg-secondary"><i class="text-white-50" data-feather="users"></i></div>
                <div class="col">
                    <div class="card-body py-4">
                        <h5 class="card-title text-secondary mb-2">Account Information</h5>
                        <p class="card-text mb-1">Troubleshooting guides specific to your account including creating new accounts, modifying existing accounts, and deleting accounts.</p>
                        <div class="small text-muted">3 articles in this category</div>
                    </div>
                </div>
            </div>
        </a>
        <!-- Knowledge base main category card 3-->
        <a class="card card-icon lift lift-sm mb-4" href="knowledge-base-category.html">
            <div class="row g-0">
                <div class="col-auto card-icon-aside bg-teal"><i class="text-white-50" data-feather="book"></i></div>
                <div class="col">
                    <div class="card-body py-4">
                        <h5 class="card-title text-teal mb-2">Terms of Service</h5>
                        <p class="card-text mb-1">Our terms, licensing, and other legal documentation.</p>
                        <div class="small text-muted">7 articles in this category</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

@endsection