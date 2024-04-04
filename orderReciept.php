<!doctype html>
<html lang="en">
<head>

    <!-- BOOTSTRAP CDNS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- END BOOTSTRAP CDNS -->

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="text-center col-3 mx-auto fs-5">
        <?php
        $totalCost = 0;
        echo "Thank you, " .$_POST['name']. ", for your order!<br><br> Order Summary: <br> ";
        $flavors = $_POST['flavor'];
        echo"<ul class='text-start'>";
        foreach ($flavors as $flavor)
        {
            echo "<li>$flavor<br></li> ";
            $totalCost += 3.50;
        }
        echo"</ul>";
        $totalCost = number_format($totalCost, 2);
        echo"Order Total: $$totalCost";
        ?>
    </div>
</body>
</html>

