@extends('layouts.app')

@section('title', 'Regisztráció')

@section('content')
    <article id="register" class="wrapper style4" style="padding: 4rem 0;">
        <div class="container medium">
            <header>
                <h2>Regisztráció</h2>
                <p>Hozzon létre egy új fiókot a rendszerben.</p>
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

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <div class="col-12" style="margin-bottom: 20px;">
                        <input type="text" name="name" placeholder="Felhasználónév" value="{{ old('name') }}" required />
                    </div>
                    <div class="col-12" style="margin-bottom: 20px;">
                        <input type="email" name="email" placeholder="E-mail cím (1 e-mail / 1 fiók)"
                            value="{{ old('email') }}" required />
                    </div>
                    <div class="col-12" style="margin-bottom: 20px;">
                        <input type="password" name="password" placeholder="Jelszó" required />
                    </div>
                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="Regisztráció" /></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </article>
@endsection