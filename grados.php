<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Conversor de temperaturas PHP</title>
    </head>
    <body>
	<?php
	$temp = $_POST['temp']; 
    $unidad = $_POST['unidad']; 
                  
    if ($temp == "") { 
            echo "<p>No has escrito ninguna temperatura</p><p><input type='button' value='Atras' onClick='history.go(-1);'></p>";         
    } elseif ($unidad == 'c') { 
        //Pasar de celcius a Fahrenheit 
        $unidad = $temp * 1.8 + 32; 
        echo "Temp: ".$unidad."<p><input type='button' value='Atras' onClick='history.go(-1);'></p>"; 
    } else { 
        //Pasar de Fahrenheit a celsius 
        $unidad = $temp / 1.8 - 32;         
        echo "Temp: ".$unidad."<p><input type='button' value='Atras' onClick='history.go(-1);'></p>"; 
    }     
        
        
    try {
        
        
    }    
        
    catch (Exception $e) {
     
        
    }    
?>
     </body>
</html> 