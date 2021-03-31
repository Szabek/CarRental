@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $car->model,}}{{" "}}{{ $car->mark }}</div>

                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <img src="/storage/{{$car->image}}" alt="car" class="w-100">
                            </div>
                            <div class="col-6 pt-3">
                                <div>
                                    <h2>Model: {{$car->model}}</h2>
                                </div>
                                <div>
                                    <h2>Mark: {{$car->mark}}</h2>
                                </div>
                                <div>
                                    <h2>Production Year: {{$car->production_year}}</h2>
                                </div>
                                <div>
                                    <h2>Price/day: {{$car->price_per_day}}</h2>
                                </div>
                                <div>
                                    @if($car->available)
                                        <h2>available: yes</h2>
                                    @else
                                        <h2>available: no</h2>
                                    @endif
                                </div>
                                @auth
                                    <div>
                                        <form  action="{{route('transactions', $car)}}" method="post" class="pb-3">
                                            @csrf
                                            <button class="btn-primary rounded">RENT CAR</button>
                                        </form>
                                        <form  action="{{route('transactions', $car)}}" method="post" class="pb-3">
                                            @csrf
                                            @method('PUT')
                                            <button class="btn-primary rounded">RETURN CAR</button>
                                        </form>
                                    </div>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
