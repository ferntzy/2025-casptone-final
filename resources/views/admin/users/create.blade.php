@php
  $container = 'container-xxl';
  $containerNav = 'container-xxl';
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Create User')
@include("admin.users.js")
<head>
  <!-- Bootstrap Icons -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

@section('content')
 <div class="{{ $container }}">
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Create New Account</h5>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('users.store') }}">
                @csrf


                <!-- First Name + Last Name -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Firstname</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Lastname</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>
                </div>


                   <!-- Type + Username Row -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Type</label>
                        <input type="text" name="type" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" required>
                        <small id="username-error" class="text-danger" style="display:none;">
                            Username already exists
                        </small>
                    </div>
                </div>

                <!-- Password -->
                <div class="mb-3 position-relative">
                    <label class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" name="password" class="form-control password-field" required>
                        <span class="input-group-text toggle-password" style="cursor:pointer;">
                            <i class="bi bi-eye-slash"></i>
                        </span>
                    </div>
                </div>

                <!-- Re-type Password -->
                <div class="mb-3 position-relative">
                    <label class="form-label">Re-type Password</label>
                    <div class="input-group">
                        <input type="password" name="password_confirmation" class="form-control password-field" required>
                        <span class="input-group-text toggle-password" style="cursor:pointer;">
                            <i class="bi bi-eye-slash"></i>
                        </span>
                    </div>

                    <div class="text-danger mt-1" id="password-match-error" style="display:none; font-size: 0.9rem;">
                        Passwords do not match
                    </div>
                </div>

                <!-- Account Role -->
                <div class="mb-3">
                    <label class="form-label">Account Role</label>
                    <select name="account_role" class="form-select" required>
                        <option value="">Select Role</option>
                        <option value="Student_Organization">Student Organization</option>
                        <option value="SDSO_Head">SDSO Head</option>
                        <option value="Faculty_Adviser">Faculty Adviser</option>
                        <option value="VP_SAS">VP SAS</option>
                        <option value="SAS_Director">SAS Director</option>
                        <option value="BARGO">BARGO</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Create</button>
            </form>
        </div>
    </div>
</div>




@endsection
