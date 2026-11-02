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

	<article id="work" class="wrapper style2">
		<div class="container">
			<header>
				<h2>Adatbázis / Főbb funkciók</h2>
				<p>Az alkalmazás a választott adatbázis adatait jeleníti meg.</p>
			</header>
			<div class="row aln-center">
				<div class="col-4 col-6-medium col-12-small">
					<section class="box style1">
						<span class="icon featured fa-comments"></span>
						<h3>Adatbázis Menü</h3>
						<p>ORM, Migrációk és Seederek használatával feltöltött adatok.</p>
					</section>
				</div>
				<div class="col-4 col-6-medium col-12-small">
					<section class="box style1">
						<span class="icon solid featured fa-camera-retro"></span>
						<h3>Diagram</h3>
						<p>Chart.js alapú vizuális adatábrázolás az adatbázis alapján.</p>
					</section>
				</div>
				<div class="col-4 col-6-medium col-12-small">
					<section class="box style1">
						<span class="icon featured fa-thumbs-up"></span>
						<h3>Kapcsolat &amp; Üzenetek</h3>
						<p>Szerver oldali validációval ellátott kapcsolat űrlap.</p>
					</section>
				</div>
			</div>
		</div>
	</article>

	<article id="portfolio" class="wrapper style3">
		<div class="container">
			<header>
				<h2>Projekt Részletei</h2>
				<p>A beadandó feladat lépései és dokumentációja.</p>
			</header>
		</div>
	</article>

	<article id="contact" class="wrapper style4">
		<div class="container medium">
			<header>
				<h2>Írjon nekünk üzenetet!</h2>
				<p>A kapcsolat űrlap segítségével üzenetet küldhet az oldal tulajdonosának.</p>
			</header>
		</div>
	</article>

@endsection