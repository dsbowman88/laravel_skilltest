<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toon deelnemer</title>
</head>
<body>
    <h1>Deelnemer</h1>
    <h1>{{ $deelnemers->naam }}</h1>
    <h3>{{ $deelnemers->email }}</h3>
    <?= $deelnemers->naam ?>
</body>
</html>
