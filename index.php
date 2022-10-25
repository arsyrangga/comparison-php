<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        body{
            background-image: url("https://picsum.photos/seed/861/1200");
            background-size: cover;
        }
        img{
            transition-duration: 1s;
            cursor: pointer;
        }
        img:hover{
            transform: rotate(2160deg);
            /* opacity: .8; */
        }
    </style>
  </head>
  <body>
    <main class="container pb-5">
        
        <form action="" class="d-flex flex-column align-items-center w-100 mt-2">
            <div class="col-md-5 shadow py-5 px-5 rounded bg-light">
                <h3 class="text-center mt-4"> Belajar PHP Sederhana</h3>
                <h3 class="text-center"> Aplikasi Latihan Operator</h3>
            
                <div class="form-group mt-5">
                    <label for="x">Masukkan Nilai X</label>
                    <input id="x" name="x" type="text" class="form-control mt-2" type="number">
                </div>
                <div class="form-group mt-2">
                    <label for="y">Masukkan Nilai Y</label>
                    <input id="y" name="y" type="text" id="" class="form-control mt-2" type="number">
                </div>
                <button class="btn btn-primary rounded w-100 mt-4">Input</button>

                <h4 class="mt-3">
                <?php 
                 $x = isset($_GET['x']) ? $_GET['x'] : null;
                 $y = isset($_GET['y']) ? $_GET['y'] : null;
 
                 echo "$x > $y : ", $x > $y ? 1 : 0;
                 echo "<br>$x < $y : ", $x < $y ? 1 : 0;
                 echo "<br>$x == $y : ", $x == $y ? 1 : 0;
                 echo "<br>$x != $y : ", $x != $y ? 1 : 0;
                 echo "<br>$x >= $y : ", $x >= $y ? 1 : 0;
                 echo "<br>$x <= $y : ", $x <= $y ? 1 : 0;
                ?>    
                </h4>
            </div>
            
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>