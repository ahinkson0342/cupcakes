<?php
echo "Thank you," .$_POST['name']. ", for your order! \nThe flavors you ordered are: \n";
$flavors = $_POST['flavor'];
foreach ($flavors as $flavor)
    echo($flavor)."\n";
