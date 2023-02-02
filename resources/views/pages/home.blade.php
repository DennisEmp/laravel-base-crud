@extends('layouts.main-layout')

@section('content')
    <div class="d-flex justify-content-center align-center">
        <h1>Lista dei Santi</h1>
    </div>
    <ul>
      <div class="container">
        <table>
          <tr>
            <th>Nome</th>
            <th>Luogo di Nascita</th>
            <th>Data Benedizione</th>
            <th>Numero Miracoli</th>
          </tr>
        </table>
      </div>
        @foreach ($saints as $saint)

            <div class="container">
              <table>
                <tr>
                  <td>{{ $saint -> name }}</td>
                  <td>{{ $saint -> birth_place }}</td>
                  <td>{{ $saint -> blessing_date }}</td>
                  <td>{{ $saint -> miracles }}</td>
                </tr>
              </table>
            </div>

        @endforeach

    </ul>
@endsection