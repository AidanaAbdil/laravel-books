<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.scss">
    <title>Document</title>
</head>
<body>


 <ul>
    @foreach ($authors as $author )

        <li>
            <a>
                {{$author->name}}
            </a>
        </li>
    @endforeach
 </ul>   

        <div id="latest-books">
           
        </div>

</body>
</html>