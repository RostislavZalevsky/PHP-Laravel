<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Table</title>
</head>
<body>
@foreach($table as $row)
    {{ $row->Id }}) {{ $row->Name }}
    <a href='edit/{{ $row->Id }}'>Edit</a>
    <a href = 'delete/{{ $row->Id }}'>Delete</a>
    <br/>
@endforeach
<a href="/insert">New</a>
</body>
</html>