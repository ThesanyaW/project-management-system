@extends('layouts/main_layout')

@section('title', 'Dashboard')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h2 class="mb-0">Welcome, {{ Auth::user()->name ?? 'User' }}!</h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text">You're logged in to your dashboard. Manage your content and explore new features.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
