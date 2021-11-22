<?php
    // echo("ddd");
    $conn = mysqli_connect('localhost', 'ryu', 'fbehddls147!', "ilsung");
    if (mysqli_connect_errno($conn))
{
  echo "데이터베이스 연결 실패: " . mysqli_connect_error();
}
else
{
  echo "데이터베이스 연결 성공\n";
// to do something
    

}

    // $db = mysqli_select_db('ilsung', $conn);
    // if($db) echo("DB 연결 성공");
    // else echo("DB 연결 실패");
?>