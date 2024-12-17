<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>cấu trúc lặp [foreach, forelse, while,...]</h1>
    <hr>
    @for ($i = 0;$i < S; $i++)
    <p>the current value is {{ $i }}</p>
    @endfor
    <hr>
    @foreach ($name as $item)
        <p>this is item: <b>{{ $item }}</b></p>
    @endforeach
    <hr>
    @forelse ($users as user)
        <li>{{ $user }}</li>
    @empty
        <p> No user</p>
    @endforelse
    @php
     $i=0
    @endphp
    @while ($i < 5)
        <p>current @$i = {{$i}}</p>
        @php
         $i++;
        @endphp
    @endwhile
    <hr>
    @foreach ($arr as $item)
        @if ($loop->first)
            @continue
        @endif
        @if ($loop->last)
            <p>this is the last iteration
        @endif
        <li>{{ $item }}</li>
    @endforeach
</body>
</html>