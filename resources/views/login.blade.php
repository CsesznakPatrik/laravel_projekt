@extends('layouts.app')

@section('title', 'Bejelentkezés')

@section('content')
    <article id="login" class="wrapper style4" style="padding: 4rem 0;">
        <div class="container medium">
            <header>
                <h2>Bejelentkezés</h2>
                <p>Lépjen be a felhasználónevével és jelszavával.</p>
            </header>

            @if ($errors->any())
                <div style="background: red; color: white; padding: 10px; margin-bottom: 20px; border-radius: 5px;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login.submit') }}">
                @csrf
                <div class="row">
                    <div class="col-12" style="margin-bottom: 20px;">
                        <input type="text" name="name" placeholder="Felhasználónév" value="{{ old('name') }}" required />
                    </div>
                    <div class="col-12" style="margin-bottom: 20px;">
                        <input type="password" name="password" placeholder="Jelszó" required />
                    </div>
                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="Bejelentkezés" /></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </article>
@endsection