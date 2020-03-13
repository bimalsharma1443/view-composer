<html>
    <head>
        <title>This is a view Composer</title>
    </head>
    <body>
        <ul>
            @foreach($channel as $row)
                <li>{{ $row['name'] }}</li>
            @endforeach
        </ul>
    </body>
</html>