<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if statement</title>
</head>
<body>
    <h1>#if statement</h1>
    @verbatim
        <pre>
            @if (count($array)==1)
                I have one element
            @elseif(count($array)>1)
                I have multiple element!
            @else
                I don't have any element
        </pre>
    @endverbatim
    <h1>mảng: @{{$array}}</h1>
    @if (count($array)==1)
                I have one element!
         @elseif(count($array)>1)
                I have multiple element!
         @else
                I don't have any element!
         @endif       

</body>
</html>