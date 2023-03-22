<?php
session_start();
$STUpwd="a1103340";
$STUid="lsk";
$TCpwd="kang";
$TCid="yan";
$MHpwd="chen";
$MHid="chen";
$password=$_POST['pwd'];
$id=$_POST['id'];
if($password===$STUpwd && $id===$STUid){
    $_SESSION['UserType']='STU';
    header("Location:student.php");
    
}elseif ($password===$TCpwd && $id===$TCid) {
    $_SESSION['UserType']='TC';
    header("Location:teacher.php");
    
}elseif ($password===$MHpwd && $id===$MHid) {
    $_SESSION['UserType']='MH';
    header("Location:headmaster.php");
}else{
    $_SESSION['UserType']='VISITOR';
    echo"你只是個訪問者，不能看任何資料";
}





?>