<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>author details</title>
</head>
<body>
    <h1>Author Details</h1>

    <ul>
        <li>Name: {{$author->name}}</li>
        <li>Biography: {{$author->bio}}</li>
        
    </ul>

    <a href="{{'authors.index'}}">Back to Authors</a>
</body>
</html>