<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Admin</h1>    

    <!-- Authentication -->
    <form method="POST" action="{{ route('logout') }}">
        
        @csrf
        
        <input type="submit" value="Logout">        

    </form>

</body>
</html>