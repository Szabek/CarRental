@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add new car!</div>

                    <div class="container">
                        <div class="col-8 offset-2 pb-3 pt-3">
                            <form action="/cars" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="model" class="col-md-4 col-form-label text-md-right">Car Model</label>
                                    <div class="col-md-6">
                                        <input type="text" id="model" name="model" class="form-control" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="mark" class="col-md-4 col-form-label text-md-right">Car Mark</label>
                                    <div class="col-md-6">
                                        <input type="text" id="mark" name="mark" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="production_year" class="col-md-4 col-form-label text-md-right">Production
                                        year</label>
                                    <div class="col-md-6">
                                        <input type="number" id="production_year" name="production_year"
                                               class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="price_per_day"
                                           class="col-md-4 col-form-label text-md-right">Price/day</label>
                                    <div class="col-md-6">
                                        <input type="number" id="price_per_day" name="price_per_day"
                                               class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="available"
                                           class="col-md-4 col-form-label text-md-right">Available</label>
                                    <label for="available"><input type="radio" , class="form-control-file"
                                                                  id="available" name="available" value="1"
                                                                  checked="checked">Yes</label>
                                    <label for="available"><input type="radio" , class="form-control-file"
                                                                  id="available" name="available" value="0">No</label>
                                </div>

                                <div class="form-group row">
                                    <label for="image" class="col-md-4 col-form-label text-md-right">Car Image</label>
                                    <input type="file" , class="form-control-file" id="image" name="image">
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
