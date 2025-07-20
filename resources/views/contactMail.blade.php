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
    <h1>Il team di G2R ti ringrazia per l'ordine effettuato, {{$contact['user']}}!</h1>
    <h4>Di seguito il riepilogo degli articoli:</h4>
    @php
        $sum=0;
    @endphp
    <div class="mail-card">
        @foreach($products as $product)
            <p>{{$product['name']}} , {{$product->brand->name }} - {{$product['price']}} €</p>
            <div class="p-2"><img src="https://picsum.photos/250/250" class="" alt=""></div>
            @php
                $sum=$sum + $product->price;
            @endphp
        @endforeach
    </div>
    <p>Per un totale di: {{$sum}} €</p>
    <p>__________________________________</p>
    <p>La invieremo a: </p>
    <p>{{$address->city}} , via {{$address->road}} {{$address->number}} ({{$address->state}})</p>

</body>
</html>