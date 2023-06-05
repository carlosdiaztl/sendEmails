@extends('layouts.app')
@section('content')
    {{-- @livewire('admin.users-index') --}}
    <div class="container">


        <div class="card">
            <div class="card-header">
                <form class="form-inline my-2 my-lg-0 d-flex">


                    <input class="form-control mr-sm-2 mx-2 form-control-sm" type="search" name="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

                </form>
            </div>

            @if ($users->count())
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Range</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Numbers</th>
                                    <th scope="col">Actions</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user->id }} </th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->category->name }}{{ $user->category->range }}</td>
                                        <td>{{ $user->country->name }}</td>
                                        <td class="">
                                            @foreach ($user->phones  as $number )
                                            {{$number->phone}}
                                        @endforeach
                                             
                                        
                                        </td>
                                        <td> <a href="{{route('phone.create',$user)}}">ADD phone</a></td>
                                       
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                        <div class="row">
                            <div class="col-10">

                                {{ $users->links('pagination::bootstrap-5') }}
                            </div>

                            <div class="col-2">

                            </div>
                            {{-- @dump(DB::getQueryLog()) --}}
                        </div>

                    </div>

                </div>
            @else
                <div class="card-body">
                    <strong>No hay registros</strong>
                </div>
            @endif
        </div>
    </div>

@endsection
