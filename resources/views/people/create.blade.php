@extends('layouts.master')

@section('main-content')
    <div class="container" style="background-color: mintcream; margin-top: 20px; width: 500px">

        <form action='{{route('people.store')}}' method="post">
            @csrf
            <div class="form-group row">
                <label for="name" class="col"></label>
                <input type="text" id="name" class="form-control" name="name" placeholder="user name">
            </div>
            <div class="form-group row">
                <label for="phone" class="col"></label>
                <input type="text" id="phone" class="form-control" name="phone" placeholder="mobile number">
            </div>
            <div class="form-group row">
                <label for="Date_of_birth" class="col"></label>
                <input type="text" id="date_of_birth" class="form-control" name="date_of_birth" placeholder="dd/month/year">
            </div>
            <div class="form-group row">
                <label for="institute" class="col"></label>
                <input type="text" id="institute" class="form-control" name="institute" placeholder="institute">
            </div>

            <div class="form-group row">
                <label for="institute" class="col"></label>
                <input type="text" id="institute" class="form-control" name="cnic" placeholder="36202-3189355-2">
            </div>

            <select name="room_id" id="">
                @foreach($rooms as $room)

                    <option value="{{ $room->id  }}">{{$room->name}}</option>

                @endforeach
            </select>

            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn-group" style="width: 80px; background-color: #00cc00; padding-left: 15px">save</button>
                </div>
            </div>


        </form>

    </div>

@endsection