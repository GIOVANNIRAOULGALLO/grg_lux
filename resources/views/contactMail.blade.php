<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    *{
        background-color: gold;
        font-family: "Questrial", serif;
        letter-spacing: 1.2px;   
    }
    .mail-card{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        
    }
</style>
<body>
    <h1>G2R ti dice Grazie per il tuo ordine, {{$contact['user']}}!</h1>
    <ul>
        <li>Email: {{$contact['email']}}</li>
    </ul>
    <h4>Riepilogo:</h4>
    <div class="mail-card">
        @foreach($products as $product)
            <p>{{$product['name']}} , {{$product->brand->name }} - {{$product['price']}} €</p>
            <div class="p-2"><img src="https://picsum.photos/250/250" class="" alt=""></div>
        @endforeach
    </div>
   
    <p>La invieremo a: </p>
    <p>{{$address->city}} , via {{$address->road}} {{$address->number}} ({{$address->state}})</p>

</body>
</html>