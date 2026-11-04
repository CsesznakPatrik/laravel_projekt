@extends('layouts.app')

@section('title', 'Főoldal - Miniport')

@section('content')

<article id="top" class="wrapper style1">
    <div class="container">
        <div class="row">
            <div class="col-4 col-5-large col-12-medium">
                <span class="image fit"><img src="{{ asset('images/pic00.jpg') }}" alt="" /></span>
            </div>
            <div class="col-8 col-7-large col-12-medium">
                <header>
                    <h1>Üdvözöljük a <strong>Laravel</strong> beadandónkban!</h1>
                </header>
                <p>Ez egy szerver oldali webalkalmazás, amelyet a Miniport reszponzív témával valósítottunk meg.</p>
                <a href="#work" class="button large scrolly">Adatbázis megtekintése</a>
            </div>
        </div>
    </div>
</article>