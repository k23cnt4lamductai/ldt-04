<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if statement</title>
</head>
<body>
    <h1>#if statement</h1>
    
        <pre>
            @if (count($array)==1)
                I have one element
            @elseif(count($array)>1)
                I have multiple element!
            @else
                I don't have any element
        </pre>
    
    <h1>mảng: {{$array}}</h1>
    <?php if(count($array)==1): ?>
                I have one element!
         <?php elseif(count($array)>1): ?>
                I have multiple element!
         <?php else: ?>
                I don't have any element!
         <?php endif; ?>       

</body>
</html><?php /**PATH C:\Project 1\K23CNT4_LamDucTai_Project1Lab\ldt-lesson04-blade\resources\views/ldt-view2.blade.php ENDPATH**/ ?>