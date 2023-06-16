<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Deportes</title>
</head>
<body>
<form method="post" >
@csrf
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Nombre del equipo:</label>
      <input type="text" class="form-control" name="NomEquipo" placeholder="E.j: Mazatlan">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Representante:</label>
      <input type="text" class="form-control" name="NomRepresentante" placeholder="E.j: Osvaldo Aviles Guzmán">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">Numero de jugadores:</label>
      <input type="text" class="form-control" name="NumJugadores" placeholder="E.j: 15">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Categoria:</label>
      <select name="inputState" class="form-control" >
        <option selected>Selecciona una opcion</option>
        <option value="Junior">Junior</option>
        <option value="Juvenil">Juvenil</option>
        <option value="Mayores">Mayores</option>
      </select>
    </div>
  </div>
</div>
  <button type="submit" class="btn btn-primary">Guardar</button>
  <button type="#" class="btn btn-primary"><a href="index2.html">Cancelar</button>
</form>
</body>
</html>