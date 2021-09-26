<?php 

    $answer = "";
    if(isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["c"]))
    {
        $a = (int) $_GET["a"];
        $b = (int) $_GET["b"]; 
        $c = (int) $_GET["c"];
        if($a <> 0)
        {
            $delta = (pow($b, 2) - (4 * $a * $c));
            if($delta > 0)
            {
                $x1 = (-$b - sqrt($delta)) / (2 * $a);
                $x2 = (-$b + sqrt($delta)) / (2 * $a);
                $answer = "x1 = " . $x1 . "<br>x2 = " . $x2 . "<br>"; 
            }
            else if($delta == 0)
            {
                $x0 = (-$b / (2 * $a));
                $answer = "x0 = " . $x0 . "<br>";    
            }
            else if($delta < 0)
            {
                $answer = "Delta less than zero. <br>";
            }
        }
        else if($a == 0 && $b <> 0 && $c <> 0)
        {
            $x0 = (-$c / $b);
            $answer = "It is a linear function: " . $x0 . " <br>";
        }
        else if($a == 0 && $b == 0 && $c <> 0) 
        {
            $answer = "It is a linear function.";
        }
        else if($a == 0 && $b == 0 && $c == 0)
        {
            $answer = "Identity equation, the solution is the entire set of real numbers. <br>";
        }
    
    }

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Math calculator</title>
    </head>
    <body>
        <nav class="nav justify-content-center">
          <a class="nav-link active" href="index.php">Quadratic equation</a>
          <a class="nav-link" href="#">Binomial theorem (soon)</a>
        </nav>
        <div class="container mt-5" style="max-width: 30rem;">
            <h2>Calculating a quadratic equation</h2>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
                <div class="form-group mt-3">
                    <label for="a">Enter the number 1: </label>
                    <input type="number" class="form-control" name="a" id="a" aria-describedby="helpId" value="0">
                </div>
                <div class="form-group mt-3">
                    <label for="b">Enter the number 2: </label>
                    <input type="number" class="form-control" name="b" id="b" aria-describedby="helpId" value="0">
                </div>
                <div class="form-group mt-3">
                    <label for="c">Enter the number 3: </label>
                    <input type="number" class="form-control" name="c" id="c" aria-describedby="helpId" value="0">
                </div>
                <button type="submit" class="btn btn-primary mt-2" name="submit">Submit</button>
            </form>
            <?php if(isset($_GET["submit"]) ) 
            { ?>
                <div class="container mt-5" style="border: 1px solid black; border-radius: 10px;">
                    <?php echo $answer; ?>    
                </div>
            <?php } ?>
        </div>
 


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>