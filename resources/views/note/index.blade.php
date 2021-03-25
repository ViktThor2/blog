@extends('layout.app')

@section('content')

  <h3>Bejegyzések</h3>

  <table class="table table-hover">

    <thead>
      <tr>
        <th scope="col" width="15%">Név</th>
        <th scope="col" width="20%">Leírás</th>
        <th scope="col" width="15%">Címkék</th>
        <th scope="col" width="20%">Írta</th>
        <th scope="col" width="10%">Létrehozva</th>
        <th><a href="{{route('note.create')}}" class="btn btn-success">Új Bejegyzés<th>
      </tr>
    </thead>

    <tbody>

      @foreach( $notes as $note )
        <tr>
          <td>{{ $note->name }}</td>
          <td>{{ $note->desc }}</td>
          <td>@foreach($note->tags as $tag)
                {{$tag->name}} <br>
              @endforeach
          </td>
          <td>{{ $note->customer->name }}</td>
          <td>{{ $note->created_at }}</td>
          <td></td>
        </tr>
      @endforeach

    </tbody>

  </table>

@stop
