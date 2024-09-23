<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style2.css">
<link rel="stylesheet" href="tab.css">


<meta name="viewport" content="width=device-width, initial-scale=1">
<img id="ei" src="./e.jpeg" alt="" srcset="">

<div id="form">
<form  id ="" action="" method="get">
    <h1>Moltiplica online!</h1>
    <input type="text" name="number1" id="" placeholder="esempio: 6" id="input" required>
    <h1 id="multi">   X    </h1>
    <input type="text" name="number2" id="" placeholder="esempio: 2" id="input" required>
    <hr>
    <input  type="submit" name="button" value="Inizia !" id="button">
</form>
<?php 
if (isset($_GET['number1']) && isset($_GET['number2'])) {
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];

    if (is_numeric($number1) && is_numeric($number2)) {
        if ($number1 >= 0 && $number2 >= 0) {
            echo "<br>";
            echo "<br>";

            echo '<br>';
            echo ('<h3 class="result">'.'Il risultato e '. ($number1 * $number2).' ✅'.'</h3>');
           
        } else {
            echo "<h1>Numero non positivo, o non corretto</h1>";
        }
    } else {
        echo "<h3>⚠️ Inserisci solo numeri positivi   ! ⚠️</h3>";

       

    }
} else {
    echo "<h3>Inserisci i numeri prima di continuare!</h3>";

}



    header("refresh: 20;");
?>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'index.php';
    }
    if (parseInt(i.innerHTML)!=0) {
        i.innerHTML = parseInt(i.innerHTML)-1;
    }
}
setInterval(function(){ countdown(); },1000);
</script>

</div>
<img id="warning" src="./warning.gif" alt="" >
<p> La pagina si ricarica in automatico fra <span id="counter">20</span> secondi.</p>

</body>
</html>