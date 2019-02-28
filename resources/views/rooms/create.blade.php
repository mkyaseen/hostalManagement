@extends('layouts.master')

@section('main-content')

    <div class="container" style="background-color: mintcream; margin-top: 20px; width: 500px">

        <form action={{route('rooms.store')}} method="post">
            @csrf
            <div class="form-group row">
                <label for="name" class="col"></label>
                <input type="text" id="name" class="form-control" name="name" placeholder="RoomName">
            </div>
            <div class="form-group row">
                <label for="status" class="col"></label>
                <input type="text" id="status" class="form-control" name="status" placeholder="status">
            </div>
            <div class="form-group row">
                <label for="Capacity" class="col"></label>
                <input type="text" id="capacity" class="form-control" name="capacity" placeholder="capacity">
            </div>
            <div class="form-group row">
                <label for="Has_AC" class="col"></label>
                <input type="text" id="has_ac" class="form-control" name="has_ac" placeholder="Has_ac">
            </div>

            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn-group" style="width: 80px; background-color: #00cc00; padding-left: 15px">save</button>
                </div>
            </div>
        </form>

    </div>

@endsection