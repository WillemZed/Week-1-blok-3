<?php
    date_default_timezone_set("Europe/Amsterdam");
    $naam = ["Nacht", "Morgen", "Middag", "Avond"];
    $class = ["Nacht", "Morgen", "Middag", "Avond"];
    $tijd = date("H:i:s");

    if ($tijd < 6) {
        $naam = 0;
    }

    elseif ($tijd < 12) {
        $naam = 1;
    }

    elseif ($tijd < 18) {
        $naam = 2;
    }

    else ($tijd < 24) {
        $naam = 3
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class = "<?php echo $class[$naam]; ?>">
    <h1> Goede <?php echo $class[$naam]; ?>! </h1>
    <h1> Het is nu: <?php echo $tijd; ?> </h1>
    
</body>
</html>

<style>
    .Nacht {
        background-image: url(night.png);
        background-size: 100% ;
        text-align: center;
        margin-top: 350px;
        color: white;
    }
    .Morgen {
        background-image: url(morning.png);
        background-size: 100% ;
        text-align: center;
        margin-top: 350px;
        color: white;
    }
    .Middag {
        background-image: url(afternoon.png);
        background-size: 100% ;
        text-align: center;
        margin-top: 350px; 
        color: white;   
    }
    .Avond {
        background-image: url(evening.png);
        background-size: 100% ;
        text-align: center;
        margin-top: 350px;
        color: white;
    }
</style>

 

<script> 
setTimeout(function() {
window.location = window.location;
},450)
</script>







