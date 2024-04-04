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
    <h1>Cupcake Fundraiser</h1>
    <div class="align-items-center col-6">
        <form action="orderReciept.php" method="POST" class="w-100">
            <p>Your name:</p>
            <input type="text" name="name">
            <input type="checkbox" name="flavor[]" value="The Grasshopper">The Grasshopper
            <input type="checkbox" name="flavor[]" value="The Grasshopper">Whiskey Maple Bacon
            <input type="checkbox" name="flavor[]" value="The Grasshopper">Carrot Walnut
            <input type="checkbox" name="flavor[]" value="The Grasshopper">Salted Caramel Cupcake
            <input type="checkbox" name="flavor[]" value="The Grasshopper">Red Velvet
            <input type="checkbox" name="flavor[]" value="The Grasshopper">Lemon Drop
            <input type="checkbox" name="flavor[]" value="The Grasshopper">Tiramisu
            <input type="submit" name="submit" value="Order">
        </form>
    </div>
</body>
</html>
<?php
