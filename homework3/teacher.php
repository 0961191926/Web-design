<?php
session_start();
if( $_SESSION['UserType']==='TC' || $_SESSION['UserType']==='MH'){
    echo "登入成功，歡迎老師<br>";
    echo "<a href='teacher.php'>老師<br></a>";
    echo "<a href='headmaster.php'>校長<br></a>";
    echo "<a href='student.php'>學生<br></a>";
}      

else{
    header("Refresh:3;url=check.php");
        echo "登入錯誤，將於3秒回到登入畫面";

    
}



?>