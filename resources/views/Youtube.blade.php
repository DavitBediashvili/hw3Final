<!DOCTYPE html>
<html>
    <head></head>
    <body>
    @foreach ($info as $each)
        <br>
        <td>{{ $each->title }}</td>
        <br>
        <td>{{ $each->link }}</td>
        <br>
        <td>{{ $each->description }}</td>
        <br>
        <td>{{ $each->likes }}</td>
        <br>
        <td>{{ $each->dislikes }}</td>
        <br>
        <td>{{ $each->date }}</td>
        <br>
    
    @endforeach
</html>