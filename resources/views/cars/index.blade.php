@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-3 text-center">Cars</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <a href="/cars/create" class="btn btn-primary my-4">Add new car <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>

        <div class="row">
            @foreach ($cars as $car)
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div>
                            <span class="founded">Founded: {{$car->founded}}</span>
                            <h2 class="name">{{$car->name}}</h2>
                        </div>
                        <div>
                            <a href="/cars/{{ $car->id }}/edit " class="btn btn-success"><i class="bi bi-pencil"></i></a>
                        </div>
                    </div>

                    <p class="description">{{$car->description}}</p>
                    <hr>
                </div>
            @endforeach
        </div>
    </div>
@endsection
