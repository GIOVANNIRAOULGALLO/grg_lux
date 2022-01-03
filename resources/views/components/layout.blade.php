<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{$title}}</title>
  </head>
  <body>
      <x-navbar/>
    {{$slot}}
    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>