@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row pt-4">
            @foreach($cars as $car)
                <div class="col-4 pb-4">
                    <a href="/cars/{{ $car->id }}">
                        <img src="/storage/{{ $car->image }}" class="w-100" alt="car image">
                    </a>
                </div>
            @endforeach
        </div>

            <div class="col-12 d-flex justify-content-center">
                {{ $cars->links() }}
            </div>

    </div>
@endsection
