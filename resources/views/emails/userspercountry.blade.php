@extends('layouts.app')

@section('content')
<div class="container">
    @php
    $countries = \App\Models\Country::all();
    
    @endphp

    @if (count($countries))
        @foreach ($countries as $country)
            <h3>{{ $country->name }}</h3>
            <p>Cantidad de usuarios: {{ $country->users->count() }}</p>

            @foreach ($country->users as $user)
                <div class="card">
                    <div class="card-title">

                        Nombre: {{ $user->name }}
                    </div>
                    <div class="card-body">

                        Rango: {{ $user->category->name }}
                    </div>

                </div>
            @endforeach
        @endforeach
    @endif
</div>

@endsection
