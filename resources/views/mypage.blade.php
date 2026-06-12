<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
        @foreach($students as $std)
        <li>{{$std}}</li>
        @endforeach
          </ol>
         @php
        $num = 2;
    @endphp

    @for($n = 1; $n <= 10; $n++)
        <div>2 x {{$n}} = {{$num*$n}}</div>
    @endfor
</body>
</html>