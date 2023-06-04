
<div class="container">
    @php
    $countries = \App\Models\Country::all();
    $categories= \App\Models\Category::all();
    $highestRange = $categories->max('range');
    $highestRangeCategoryInfo = $categories->where('range', $highestRange)->first();
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
<div class="container">
    <h3>El rango mas alto es {{$highestRangeCategoryInfo->name}}-{{$highestRangeCategoryInfo->range}} </h3>
    
</div>
