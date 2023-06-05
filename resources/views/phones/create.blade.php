@extends('layouts.app')
@section('content')
<div class="container mt-3">
    <div class="card mb-4">
        <h5 class="card-header">Create new product</h5>
        <form class="card-body" method="POST" action="{{ route('phone.store') }}"
            enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="col-md-6">
                <h3>{{$user->name}} </h3>
                <div class="card-header">

                    Add new phone
                </div>
                <label class="form-label" for="multicol-username">Phone</label>
                <input type="number" name="phone" class="form-control" placeholder="253300"
                    value="{{ old('phone') }}" />
            </div>
            <input type="number" name="areacode" class="form-control d-none"
            value="{{ $user->country->iso_code }}" />
            <input type="number" name="user_id" class="form-control d-none" 
            value="{{ $user->id }}" />
            <div class="col-12">
                <button type="reset" class="btn btn-secondary">
                    Reset
                </button>
                <button type="submit" class="btn btn-primary">
                    Create
                </button>
            </div>
    </div>
    </form>
</div>
</div>
@endsection