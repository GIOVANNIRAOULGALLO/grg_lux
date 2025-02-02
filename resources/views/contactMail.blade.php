<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Grazie per il tuo ordine, {{$contact['user']}}!</h1>
    <ul>
        <li>Email: {{$contact['email']}}</li>
    </ul>
    <h4>Riepilogo:</h4>
    @foreach($products as $product)
    <p>{{$product['name']}}</p>
    @endforeach

</body>
</html>