@extends('layouts.home')

@section('title') Panel uzytkownika @endsection

@section('content')

@include('include.navbar')

<div class="text-center mx-4">
<h1>Witamy cie! {{ Auth::user()->firstname }}!</h1>
</div>

<div class="row">
    <div class="col-lg-3">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action" aria-current="true">Autorzy</a>
            <a href="#" class="list-group-item list-group-item-action">Książki</a>
            <a href="#" class="list-group-item list-group-item-action">Wypożyczenia</a>
          </div>
    </div>
</div>

@endsection
