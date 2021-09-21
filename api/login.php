<?php include_once "../base.php";

$chk=$Admin->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);

if($chk>0){
    $_SESSION['admin']=1;
    to("../backend.php?do=hero");
}else{
    echo "<script>";
    echo  "alert('帳號密碼錯誤');\n";
    echo "location.href='../login.php'";
    echo "</script>";
}

?>