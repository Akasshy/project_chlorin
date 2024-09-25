<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>ROLE</th>
        </tr>
        @foreach ($users as $item)
            <tr>
                <td>{{ $item['username'] }}</td>
                <td>{{ $item['email'] }}</td>
                <td>{{ $item['role'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>