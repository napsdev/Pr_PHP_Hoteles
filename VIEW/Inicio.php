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

                    <div class="mt-4">
                    <a href="RegHotel.htm" class="btn btn-success">Registrar hotel</a>
                    <a href="RegHabitacion.php" class="btn btn-success">Registrar habitación</a>
                    
                    <div class="my-3">
                      <h3>Hoteles</h3>
                    <?php include_once "../PHP/lista.php"; 
                    //eliminar con onclik
                    ?>
                    </div>

                  </div>
            </div>
        </div>
    </div>

    


    <!--jQuery -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>