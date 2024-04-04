<?php
echo "Thank you," .$_POST['name']. ", for your order! \n\r The flavors you ordered are: \n\r ";
$flavors = $_POST['flavor'];
foreach ($flavors as $flavor)
    echo($flavor)."\n\r ";
