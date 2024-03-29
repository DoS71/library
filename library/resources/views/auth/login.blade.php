@extends('layouts.home')

@section('title') Logowanie @endsection

@section('content')

@include('include.navbar')

<h3 class="text-center">Zaloguj sie do naszej biblioteki</h3>
{{-- 12 to jest szerokosc (musi byc suma 12 w col-lg-x) --}}
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form action="{{ route('login') }}" method="POST">
                {{-- musi to byc w celach autoryzacji - dowod na to ze zadanie wyszlo odemnie a nie zewnatrz --}}
                @csrf
                <div class="mb-3">

                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror"  id="email" name="email" placeholder="np. przyklad@gmail.pl"
                    value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror



                </div>
                <div class="mb-3">

                    <label for="password" class="form-label">Haslo</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror"  id="password" name="password" required>

                    @error('password')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="termscheck" name="remember">
                        <label class="form-check-label" for="termscheck">Zapamiętaj mnie</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark">Zaloguj się</button>
            </form>
        </div>


@endsection
