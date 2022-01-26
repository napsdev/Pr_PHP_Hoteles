<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DECAMERON</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <form action="/PHP/regh.php" method="POST" class="pt-4">
                    
                    <div class="mb-3">
                        <label for="ho" class="form-label">Hotel</label>
                        <select class="form-select" id="ho" name="ho" aria-describedby="ho">
                        <?php include_once "../PHP/listalhoteles.php"; ?>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                    <label for="ti" class="form-label">Tipo</label>
                        <select class="form-select" id="ti" name="ti" aria-describedby="ti">    
                        <option value="Estándar">Estándar</option>
                        <option value="Junior">Junior</option>
                        <option value="Suite">Suite</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <a href="Inicio.php" class="btn btn-success">Inicio</a>
                </form>

            </div>
        </div>
    </div>


    <!--jQuery -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>