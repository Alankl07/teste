<?php
    $username = $_POST['selec'];
    $password = $_POST['senha'];

    $username = stripcslashes ($username);
    $password = stripcslashes ($password);
    $username = mysql_real_escape_string ($username);
    $password = mysql_real_escape_string ($password);

    mysql_connect("bd_bruxo", "root", "");
    mysql_select_db("telalogin.php");

    $result = mysql_query("select * from cadastro where herarquia = '$username and hub = '$password'")
                or die("Failed to query database".mysql_erro());
    $row = mysql_fetch_array($result);
    if($row['username'] == $username && $row['password'] == $password){
        echo "Login sucess!!! welcome".$row['username'];  
    }else{
        echo "Failed to login!";
    }

?>