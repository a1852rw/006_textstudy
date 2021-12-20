<head><title>chapter02_q03_price</title>
</head>

<body>

<?php
$price = 5;
$off = 0.35;
printf ('Price : $%.1f', $price * (1 - $off));
echo "<br />" ; 
printf ('Price : $%.2f', $price * (1 - $off));
?>

</body>