@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>DASHBOARD</h1>
            <h3>{{ Auth::user()->name }}</h3>
            <h3>{{ Auth::user()->surname }}</h3>
            <h3>{{ Auth::user()->address }}</h3>
            <h3>{{ Auth::user()->city }}</h3>
            <h3>{{ Auth::user()->CF }}</h3>
            <h3>{{ Auth::user()->date_of_birth }}</h3>
            <h3>{{ Auth::user()->phone_number }}</h3>
            <img src="{{ asset('storage/'.Auth::user()->url_img) }}" alt="">
            <img src="{{ asset('storage/'.Auth::user()->url_cv) }}" alt="">

            <span>
                Per vedere i messaggi <button class="btn btn-secondary"><a href="/dashboard/messages">Clicca qui</a></button>
            </span>

            ({{ dd(Auth::user()->specializations()) }})
        </div>
    </div>
</div>
@endsection
