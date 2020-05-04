@extends('layouts.main')

@section('title')
Ajouter une pièce
@endsection

@section('content')
<table class="table striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Arduino id</th>
            <th>Temperature</th>
            <th>Pression</th>
            <th>Luminosité</th>
            <th>Humidité</th>
            <th>Heure</th>
        </tr>
    </thead>
    <tbody>
        @foreach($datas as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->arduino_id }}</td>
            <td>{{ $data->temperature }}</td>
            <td>{{ $data->pressure }}</td>
            <td>{{ $data->brightness }}</td>
            <td>{{ $data->humidity }}</td>
            <td>{{ $data->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection