<?php
    $con = mysqli_connect("localhost", "born", "Alstn1234", "dlwlrma") or die ("MySQL 접속 실패!!");

    $sql="
        CREATE TABLE IF NOT EXISTS userTBL
        (   username VARCHAR(10) NOT NULL PRIMARY KEY,
            eMailp CHAR(30) NOT NULL,
            userMessage CHAR(200) NOT NULL,
            mDate DATE
        )
    ";
    
    $ret = mysqli_query($con,$sql);

    if($ret){
        echo "userTBL이 성공적으로 생성됨..";
    
    }
    else{
        echo "userTBL 생성실패!!"."<BR>";
        echo "실패 원인 : ".mysqli_error($con);
    }

    mysqli_close($con);

?>