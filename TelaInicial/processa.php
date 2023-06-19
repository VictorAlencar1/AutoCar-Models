<?php

 echo $_POST["usuario"] . "<br>";
 echo $_POST["senha"] . "<br>";

 $logins = array("VictorAlencar" => "123456", "msr@gmaila.com" => "038098403");
//fazer processamento de login e senha
foreach($logins as $usuario=>$senha ){
    if($usuario == $_POST["usuario"] && $senha ==  $_POST["senha"] ){
        header('Location: Carros.php');
    }
}



?>