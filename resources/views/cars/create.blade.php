@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="display-3 text-center">New car</h1>
        </div>
    </div>
    {{-- {{ $errors}} --}}

    <div class="row">
        <div class="col-12 col-md-5 mx-auto">
            <form action="/cars" method="post">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name"
                        placeholder="Brand name..." name="name">
                        <label for="name">Brand name...</label>

                    @if ($errors->first('name'))
                    <p>Kötelező kitölteni!</p>
                    @endif

                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="founded"
                        placeholder="Founded..." name="founded">
                    <label for="founded">Founded...</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea type="text" class="form-control" id="description"
                        placeholder="Founded..." name="description" style="height: 150px"></textarea>
                    <label for="description">description...</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

                {{-- {{ $errors}} --}}
            @endif
        </div>
    </div>
</div>
@endsection
