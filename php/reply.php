<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $con = mysqli_connect("localhost", "born", "Alstn1234", "dlwlrma") or die ("MySQL 접속 실패!!");
        $sql = "SELECT * FROM userTBL";

        $ret = mysqli_query($con, $sql);
        if($ret){
            $count = mysqli_num_rows($ret);
        }
        else{
            echo "userTBL 데이터 검색 실패!!!"."<BR>";
            echo "실패 원인 : ".mysqli_error($con);
            exit();
        }

        echo "<TABLE BORDER=1>";
        echo "<TR>";
        echo "<TH>ID</TH> <TH>E-mail</TH> <TH>Message</TH> <TH>Date</TH> ";
        echo "</TR>";

        while($row = mysqli_fetch_array($ret)){
            echo "<TH>";
            echo "<TD>", $row['username'], "</TD>";
            echo "<TD>", $row['eMailp'], "</TD>";
            echo "<TD>", $row['userMessage'], "</TD>";
            echo "<TD>", $row['mDate'], "</TD>";
            echo "<TD class='td_01'>", "<a href='update.php?userName=", $row['username'],"'>Modify</a></td>";
            echo "<TD class='td_01'>", "<a href='delete.php?userName=", $row['username'],"'>Delete</a></td>";
            echo "</TH>";
        }

        mysql_close($con);
        echo "</TABLE>";
    ?>      
</body>