<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Komis samochodowy</title>
        <link rel="stylesheet" type="text/css" href="auto.css">
    </head>
    <body>
<header>
    <h1>SAMOCHODY</h1>
</header>
<div id="lewy">
   <h2>Wykaz samochodów </h2>
   <ul>
       <?php skrypt1(); ?>
   </ul>
   <h2>Zamówienia</h2>
   <ul>
       <?php //skrypt2 ?>
   </ul>
</div>
<div id="prawy">
    <h2>Pełne dane: Fiat</h2>
    <?php //skrypt3 ?>
    </div>
<footer>
    <table>
        <tr>
            <td>
                <a href="kwerendy.txt">Kwerendy</a>
             </td>
            <td>Autor: 12345987656</td>
            <td>
                <img src="auto.png" alt="komis samochodowy">
            </td>
        </tr>
    </table>
</footer>
    </body>
</html>

<?php
function skrypt1()
{
    $host="localhost";
    $user="root";
    $pass="";
    $db="komis";

    $conn=mysqli_connect($host,$user,$pass,$db);
    
    $sql="SELECT id,marka,model FROM samochody";

    $res=mysqli_query($conn,$sql);

    while($row=mysqli_fetch_assoc($res))
    {
        echo "<li>".$row['id'].$row['marka'].$row['model']."</li>";
    }




    mysqli_close($conn);
}
?>