<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>web page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<form action='{{route('people.store')}}' method="post">
    @csrf
    name <input type="text" name="name" value="yaseen"><br>
    phone <input type="text" name="phone" value="03008889267"><br>
    date_of_birth <input type="text" name="date_of_birth" value="10-04-2018"><br>
    institute <input type="text" name="institute" value="superior"><br>
    cnicNo <input type="text" name="cnic" value="3620231893552"><br>


    <select name="room_id" id="">
    @foreach($rooms as $room)

        <option value="{{ $room->id  }}">{{$room->name}}</option>

      @endforeach
    </select>

    <input type="submit" value="submit">
</form>

</body>
</html>