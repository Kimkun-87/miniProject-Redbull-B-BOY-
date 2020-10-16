<?php
    $con = mysqli_connect("localhost", "keims87", "Alstn1234", "keims87") or die ("MySQL 접속 실패!!");
    $username = $_POST["name"];
    $eMailp = $_POST["email"];
    $userMessage = $POST["comment"];
    $mDate = date("Y-m-j");

    $sql = "INSERT INTO userTBL VALUES ('".$username."','".eMailp."','".userMessage."','".mDate."')";

    $ret = mysqli_query($con, $sql);

    echo "<H1> 결과 </H1>";

    if($ret){
        echo "데이터가 성공적으로 입력됨.";
    }

    mysqli_close($con);

    echo "<br> <a href='../../workspace/HTML/프로젝트/main.html'> 초기 화면 </a>";

?>