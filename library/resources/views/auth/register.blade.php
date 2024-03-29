@extends('layouts.home')

@section('title') Rejestracja @endsection

@section('content')

@include('include.navbar')

<h1 class="text-center">Zarejesruj się w naszej bibliotece</h1>
{{-- 12 to jest szerokosc (musi byc suma 12 w col-lg-x) --}}
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form action="{{ route('register') }}" method="POST">
                {{-- musi to byc w celach autoryzacji - dowod na to ze zadanie wyszlo odemnie a nie zewnatrz --}}
                @csrf
                <div class="mb-3">
                    <label for="firstname" class="form-label">Imie</label>
                    <input type="text" class="form-control" id="fristname" name="firstname" placeholder="np. Jan"
                    value="{{ old('firstname') }}" required>
                  </div>

                <div class="mb-3">

                    <label for="lastname" class="form-label">Nazwisko</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="np. Kowalski"
                    value="{{ old('lastname') }}" required>

                </div>

                <div class="mb-3">

                    <label for="name" class="form-label">Nazwa uzytkownika</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="np. Czytelnik1"
                    value="{{ old('name') }}" required>

                </div>

                <div class="mb-3">

                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email " name="email" placeholder="np. przyklad@gmail.pl"
                    value="{{ old('email') }}" required>

                </div>






                <div class="mb-3">

                    <label for="password" class="form-label">Haslo</label>
                    <input type="password" class="form-control" id="password" name="password" required>

                </div>

                <div class="mb-3">

                    <label for="password_confirmation" class="form-label">Haslo</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>

                </div>

                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="termscheck" name="termscheck" required>
                        <label class="form-check-label" for="termscheck">Akceptuję regulamin biblioteki</label>
                    </div>
                </div>



                <button type="submit" class="btn btn-success">Zarejestruj sie</button>
            </form>
        </div>


@endsection
