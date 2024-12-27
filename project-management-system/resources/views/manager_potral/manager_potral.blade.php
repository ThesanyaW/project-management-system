@extends('layouts/main_layout')

@section('title', 'Manager Portal')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm" style="background-color: #e3f8fc; border-radius: 15px;">
                    <div class="card-header text-center" style="background-color: #d1c4a9; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                        <h2 class="mb-0">Manager Portal</h2>
                    </div>
                    <div class="card-body text-center">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <a href="{{ route('users.create') }}" class="text-decoration-none">
                                    <i class="fas fa-user-plus fa-3x mb-2"></i>
                                    <p class="mb-0">Add User</p>
                                </a>
                            </div>
                            <div class="col-md-6 mb-4">
                                <a href="#" class="text-decoration-none">
                                    <i class="fas fa-briefcase fa-3x mb-2"></i>
                                    <p class="mb-0">Manage Projects</p>
                                </a>
                            </div>
                            <div class="col-md-6 mb-4">
                                <a href="#" class="text-decoration-none">
                                    <i class="fas fa-users fa-3x mb-2"></i>
                                    <p class="mb-0">Manage Workers</p>
                                </a>
                            </div>
                            <div class="col-md-6 mb-4">
                                <a href="#" class="text-decoration-none">
                                    <i class="fas fa-chart-bar fa-3x mb-2"></i>
                                    <p class="mb-0">Monitor Projects</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
