@extends('layouts.main')

@section('title')
Ajouter une pièce
@endsection

@section('content')
<table class="table striped">
    <thead>
        <tr>
            <th>Pièce</th>
            <th>Arduino id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($rooms as $room)
        <tr>
            <td>Salle à manger</td>
            <td>{{ $room->arduino_id }}</td>
            <td><a href="{{ url('/getWeather/'.$room->arduino_id) }}" class="btn blue">Voir les données</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
<form action="{{ route('addRoom.post') }}" method="POST">
    @csrf
    <div class="form-field">
        <label for="arduino-id">Entrer l'id de l'arduino :</label>
        <input type="text" id="arduino-id" name="arduino_id" class="form-control" placeholder="Entrer l'id de l'Arduino" />
    </div>
    <button class="btn blue" type="submit">Ajouter</button>
</form>
@endsection