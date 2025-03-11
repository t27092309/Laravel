<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product list</title>
</head>
<body>
    <h1>Hello</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($listProduct as $product)
            <tr>
                <td>{{ $product['id'] }}</td>
                <td>{{$product['name']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>