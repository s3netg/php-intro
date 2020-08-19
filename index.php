<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  
<form class ="container" action="/script.php" method='post'>
  <div class="form-group">
    <label for="nome">Nome: </label>
    <input type="text" class="form-control" name="nome" placeholder="Enter nome" id="nome">
  </div>
  <div class="form-group">
    <label for="idade">Idade: </label>
    <input type="text" class="form-control" name = "idade" placeholder="idade" id="idade">
  </div>
  <button type="submit" class="btn btn-primary">Enviar dados competitdor</button>
</form>

</html>