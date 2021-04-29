{{-- @extends('layouts.app')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@section('content') --}}
@extends('layouts.public_app')
@section('css')
    <link rel="stylesheet" href="public_assets/profile.bundle.css">
@endsection
@section('main_con')

@endsection
