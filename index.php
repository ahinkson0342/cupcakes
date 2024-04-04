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
    <title>Cupcake Orders</title>
</head>
<body>
    <h1 class="text-center">Cupcake Fundraiser</h1>
    <div class="align-items-center col-6 fs-5 text-center mx-auto">
        <form action="orderReciept.php" method="POST" class="text-start col-4 mx-auto">
            <p>Your name:</p>
            <input type="text" name="name" placeholder="Please input your name."><br>
            <input type="checkbox" name="flavor[]" value="The Grasshopper">The Grasshopper<br>
            <input type="checkbox" name="flavor[]" value="Whiskey Maple Bacon">Whiskey Maple Bacon<br>
            <input type="checkbox" name="flavor[]" value="Carrot Walnut">Carrot Walnut<br>
            <input type="checkbox" name="flavor[]" value="Salted Caramel Cupcake">Salted Caramel Cupcake<br>
            <input type="checkbox" name="flavor[]" value="Red Velvet">Red Velvet<br>
            <input type="checkbox" name="flavor[]" value="Lemon Drop">Lemon Drop<br>
            <input type="checkbox" name="flavor[]" value="Tiramisu">Tiramisu<br>
            <input type="submit" name="submit" value="Order">
        </form>
    </div>
</body>
</html>
<?php
