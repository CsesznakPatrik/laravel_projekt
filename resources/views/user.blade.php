@extends('layouts.app')

@section('title', 'Üzenetek - Regisztrált Felhasználói Felület')

@section('content')

  <article id="user-messages" class="wrapper style2" style="padding: 4rem 0;">
    <div class="container">
      <header>
        <h2>Beérkezett üzenetek</h2>
      </header>

      <div class="row">
        <div class="col-12">
          @if($messages->isEmpty())
            <p style="text-align: center; padding: 20px;">Még nincsenek elküldött üzenetek az adatbázisban.</p>
          @else
            <div class="table-wrapper">
              <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                <thead>
                  <tr style="border-bottom: 2px solid #ddd; text-align: left;">
                    <th style="padding: 12px;">Küldés ideje</th>
                    <th style="padding: 12px;">Név</th>
                    <th style="padding: 12px;">E-mail</th>
                    <th style="padding: 12px;">Tárgy</th>
                    <th style="padding: 12px;">Üzenet</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($messages as $msg)
                    <tr style="border-bottom: 1px solid #eee;">
                      <td style="padding: 12px; white-space: nowrap;">{{ $msg->created_at->format('Y-m-d H:i') }}</td>
                      <td style="padding: 12px;"><strong>{{ $msg->name }}</strong></td>
                      <td style="padding: 12px;">{{ $msg->email }}</td>
                      <td style="padding: 12px;">{{ $msg->subject }}</td>
                      <td style="padding: 12px;">{{ $msg->message }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          @endif
        </div>
      </div>

      <div style="text-align: center; margin-top: 30px;">
        <a href="{{ route('home') }}" class="button large">Vissza a főoldalra</a>
      </div>
    </div>
  </article>

@endsection