<?php
    require_once('db_connect.php');
    $user_id = $_POST["user_id"];
    $password = $_POST["password"];
    $passwd_hashed = hash("sha256", $password);
    // $arr = sql_query("SELECT * FROM USER");
    
    $res = sql_query("SELECT * FROM USER WHERE urs_id LIKE '{$user_id}'");
    echo("SELECT * FROM USER WHERE usr_id LIKE '{$user_id}'");
    
    $row = mysqli_fetch_assoc($res);
    echo($row);
    print_r($row);
    // while($row = mysqli_fetch_array($res)){
    //     $idx = $row[0];
    //     echo($idx);
    // }
    

    // $row = mysqli_fetch_assoc($res);
    // $passwd_db = $row[0]['usr_passwd'];
    // $usr_level = $row[0]['user_level'];
    // $usr_idx = $row[0]['idx'];
    // echo($passwd_hashed."\n");
    // echo("???");
    // echo($usr_idx);
    // if($passwd_db == $passwd_hashed){
    //     echo("yes");
    //     $result = array();
    //     array_push($result, array('try' => "success", 'usr_idx' => $usr_idx, 'usr_level' => $usr_level));
    //     echo json_encode(array("result" => $result), JSON_UNESCAPED_UNICODE);
    // }
    // else{
    //     $result = array();
    //     array_push($result, array('try' => "fail", 'usr_idx' => '-1', 'usr_level' => '-1'));
    //     echo json_encode(array("result" => $result), JSON_UNESCAPED_UNICODE);
    // }


    // $arr = sql_query("SELECT * FROM USER WHERE usr_id LIKE '".$user_id."'");
    // // echo("SELECT * FROM USER WHERE usr_id LIKE '".$userid."'");
    // $result = array();
    // while($row = mysqli_fetch_array($arr)){
        // array_push($result, array('idx'=>$row[0], 'user_id' => $row[2]));
    // }
    // echo json_encode(array("result" => $result), JSON_UNESCAPED_UNICODE);

?>