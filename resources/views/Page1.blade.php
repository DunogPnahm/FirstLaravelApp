<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page1</title>
</head>
<body>
    Hello World!<br>
    {{$heading}}
    @php
        $var1 = 'testing directive'
    @endphp
    @if(count($list) != 0)
        @foreach($list as $i)
            <h2>
                {{$i['name']}}
            </h2>
            <p>
                {{$i['city']}}
            </p>
        @endforeach      
    @else
        <h1>The list was empty!</h1>
    @endif
    @foreach($prodList as $i)
        <h2>
            <a href='/Page2/{{$i['id']}}'>{{$i['name']}}</a>
        </h2>
    @endforeach
    {{$firstProd['name']}}
    {{$var1}}
    <br>
</body>
</html>