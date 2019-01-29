<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Registreer jezelf voor de 4-daagse</title>
</head>
<body>
    <div class="container">
        <form action="/deelnemers" method="post">
        @csrf
        <label class="label" for="naam">Naam</label>
        <input class="form-control" type="text" name="naam" placeholder="Voornaam + Achternaam"><br>
        <label class="label" for="email">Email</label>
        <input class="form-control" name="email" placeholder="Emailadres"><br>
        <select name="route">
            <option value="5" checked>5 Km Route</option>
            <option value="10">10 Km Route</option>
            <option value="15">15 Km Route</option>
        </select>
        <button class="btn btn-info" type="submit">Meld mij aan</button>
        </form>
    </div>
</body>
</html>
