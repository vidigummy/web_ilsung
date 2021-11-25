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

function sql_query($sql){
	
    global $conn;
	//lee 201007 오류수정 조건 stripos($sql,"select") != false) 를 stripos($sql,"select") !== false) 로 수정.
	$is_select = (stripos($sql,"select") < 3 && stripos($sql,"select") !== false) ? 1 : 0;
	//var_dump(stripos($sql,"select"));
	//var_dump(stripos($sql,"select") != false);
	if($is_select){
		//return "select문입니다.";
		//echo "select문입니다.";
		return $conn->query($sql);
	}else{
		//echo "select문이 아닙니다";
    	return $conn->query($sql);
	}
	//error_log("QUERY  DB : $LAST_CALLED_DB");
}
 
?>