@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update your details</div>

                    <div class="container">
                        <div class="col-8 offset-2 pb-3 pt-3">
                            <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
                                @csrf
                                @method('PUT')

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                                    <div class="col-md-6">
                                        <input type="text"
                                               id="name"
                                               name="name"
                                               class="form-control"
                                               value="{{old('name') ?? $user->profile->name}}"
                                               autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="surname" class="col-md-4 col-form-label text-md-right">Surname</label>
                                    <div class="col-md-6">
                                        <input type="text"
                                               id="surname"
                                               name="surname"
                                               class="form-control"
                                               value="{{old('surname') ?? $user->profile->surname}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="production_year" class="col-md-4 col-form-label text-md-right">Address</label>
                                    <div class="col-md-6">
                                        <input type="text"
                                               id="address"
                                               name="address"
                                               class="form-control"
                                               value="{{old('address') ?? $user->profile->address}}">
                                    </div>
                                </div>

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <button class="btn btn-primary">Send</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
