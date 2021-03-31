@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Hello! ') }} {{$profile->name ?? ''}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                    <div class="row">
                        <div class="col-7">
                            <div class="pt-3">
                                <h4>Name: {{$profile->name ?? 'N/A'}}</h4>
                            </div>
                            <div>
                                <h4>Surname: {{$profile->surname ?? 'N/A'}}</h4>
                            </div>
                            <div>
                                <h4>Address: {{$profile->address ?? 'N/A'}}</h4>
                            </div>
                            <div>
                                <h4>Wallet: {{$profile->wallet ?? 'N/A'}}</h4>
                            </div>

                            <div class="pt-1">
                                <a href="/profile/{{$profile->user->id}}/edit"><h5 class="d-inline-block">Edit profile!</h5></a>
                            </div>
                        </div>

                        <div class="col-4">
                            <a href="http://127.0.0.1:8000" class="pl-5">
                                <img src="/img/carsLogo.png" alt="profile logo" class="w-100">
                                <h4 class="pl-5">Ren new Car!</h4>
                            </a>
                        </div>

                        <div class="col-4">
                            <img src="/img/carsLogo.png" alt="profile logo" class="w-100">
                        </div>
                        <div class="col-4">
                            <img src="/img/carsLogo.png" alt="profile logo" class="w-100">
                        </div>
                        <div class="col-4">
                            <img src="/img/carsLogo.png" alt="profile logo" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
