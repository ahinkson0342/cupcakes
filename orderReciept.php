<?php
echo "Thank you," .$_POST['name']. ", for your order!<br> The flavors you ordered are: <br> ";
$flavors = $_POST['flavor'];
foreach ($flavors as $flavor)
    echo($flavor)."<br> ";
