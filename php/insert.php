<?php
include ("db_info.php");
pg_select($db_connect, "guestbook");

extract($_POST);
echo "$name <p>";
echo "$content <p>";

$result=pg_query($db_connect, "insert into guestbook values('$name','$content')");
pg_close($db_connect);

echo "정상적으로 저장되었습니다.<p>";
echo "<a href=list.php>글 목록 보기</a>";
?>
