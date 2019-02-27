@extends('layouts.master')

@section('main-content')

    <div class="container">
        <div class="row">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }} :{{ old('name') }}
                </div>
            @endif @if (session('key'))
                <div class="alert alert-success">
                    {!! session('key') !!}
                </div>

            @endif

        </div>


        <div class="row mb-2">
            <div class="col">
            </div>

        </div>
        <div class="row">

            <div class="col">
                <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Mobile NO</th>
                <th>Date-Of-Birth</th>
                <th>Institute</th>
                <th>CNIC</th>
                <th>Room_Id</th>


            </tr>

            </thead>
            <tbody>

            @foreach($people as $people)
                <tr>
                    <td>{{$people->id}}</td>
                    <td>{{$people->name}}</td>
                    <td>{{$people->phone}}</td>
                    <td>{{$people->date_of_birth}}</td>
                    <td>{{$people->institute}}</td>
                    <td>{{$people->cnic}}</td>
                    <td>{{$people->room_id}}</td>



                </tr>

            @endforeach

            </tbody>
        </table>
            </div>
        </div>

@endsection
