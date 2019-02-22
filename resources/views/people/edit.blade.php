@extends('layouts.master')

<div class="container" style="background-color: whitesmoke;">

    <form action={{route( 'people.update',['id'=>$room->id])}} method="POST">
        @csrf @method('PUT')
        <div class="form-group row">
            <label for="name" class="col"></label>
            <input type="text" id="name" class="form-control" name="name" placeholder="user name"

                   value={{$people->name}}
            />

        </div>
        <div class="form-group row">
            <label for="phone" class="col"></label>
            <input type="text" id="phone" class="form-control" name="phone" placeholder="mobile number"

                   value={{$people->location}}
            />

        </div>
        <div class="form-group row">
            <label for="Date_of_birth" class="col"></label>
            <input type="text" id="date_of_birth" class="form-control" name="date_of_birth" placeholder="dd/month/year"

                   value={{$people->location}}
            />

        </div>
        <div class="form-group row">
            <label for="institute" class="col"></label>
            <input type="text" id="institute" class="form-control" name="institute" placeholder="institute"

                   value={{$people->location}}
            />

        </div>

        <div class="form-group row">
            <label for="institute" class="col"></label>
            <input type="text" id="institute" class="form-control" name="cnic" placeholder="36202-3189355-2"

                   value={{$people->location}}
            />

        </div>
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Update Department</button>
            </div>
        </div>
    </form>
</div>