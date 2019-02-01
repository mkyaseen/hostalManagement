<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>web page</title>
</head>
<body>

<table>
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
    total number of person {{count($people)}}
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


</body>
</html>