@extends('layouts.master')
@section('main-content')

    <div class="row">

        <div class="col">
<table class="table">
    <thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>status</th>
        <th>capacity</th>
        <th>Ha_ac</th>
    </tr>

    </thead>
    <tbody>
    @foreach($rooms as $room)
    <tr>
        <td>{{$room->id}}</td>
        <td>{{$room->name}}</td>
        <td>{{$room->status}}</td>
        <td>{{$room->capacity}}</td>
        <td>{{$room->has_account}}</td>
    </tr>

        @endforeach
    </tbody>
</table>
        </div>
    </div>
@endsection

