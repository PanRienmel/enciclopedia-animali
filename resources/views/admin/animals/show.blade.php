@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if (session('status'))
                <div class="alert alert-danger">
                    {{ session('status') }}
                </div>
            @endif
        </div>

        <div class="row">
            <div class="col">
                <h1>
                    {{ $animal->name }}
                </h1>
                <h2>Specie: {{ $animal->specie()->first()->name }} </h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                {{ $animal->description }}
            </div>
        </div>
    </div>
@endsection