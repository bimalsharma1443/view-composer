<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <select>
            @foreach($channel as $row)
                <option>{{ $row['name'] }}</option>
            @endforeach
        </select>
        
    </body>
</html>