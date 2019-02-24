@extends('layouts.master')

@section('main-content')

    <div class="container">
        <div class="row">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }} :{{ old('phone') }}
                </div>
            @endif @if (session('key'))
                <div class="alert alert-success">
                    {!! session('key') !!}
                </div>

            @endif

        </div>


        <div class="row mb-2">
            <div class="col">
                <span class="h2">people Details</span>
            </div>

            <div class="d-flex justify-content-start">
                <i class="fas fa-igloo"></i> <a class="btn btn-success" href={{route( 'people.create')}}>Add person</a>
            </div>

        </div>


        <table table border="1px" style="margin-top: 20px">
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

@endsection
