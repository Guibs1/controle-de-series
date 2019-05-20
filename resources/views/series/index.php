<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Controle de Series</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron" >
            <h1> Series </h1>
        </div>

        <a href="" class="btn btn-dark mb-2">Adicionar</a>

        <ul class="list-group">
        <?php foreach ($series as $serie) : ?>
            <li class="list-group-item"> <?= $serie; ?> </li>
        <?php endforeach; ?>
        </ul>
        
    </div>
</body>
</html>