<?php
    require_once('db_connect.php');
    $user_id = $_POST["user_id"];
    $password = $_POST["password"];
    $passwd_hashed = hash("sha256", $password);
    // $arr = sql_query("SELECT * FROM USER");
    
    $res = sql_query("SELECT idx, user_level, usr_passwd FROM USER WHERE urs_id LIKE '{$user_id}'");
    echo("SELECT idx, user_level, usr_passwd FROM USER WHERE usr_id LIKE '{$user_id}'");
    
    while($row = $res -> fetch_assoc()){
        $passwd_db = $row['usr_passwd'];
        $usr_level = $row['user_level'];
        $usr_passwd = $row['usr_passwd'];
        
        echo("yes");
        if($passwd_db == $passwd_hashed){
            
            $result = array();
            array_push($result, array('try' => "success", 'usr_idx' => $usr_level, 'usr_level' => $usr_passwd));
            echo json_encode(array("result" => $result), JSON_UNESCAPED_UNICODE);
        }
        else{
            $result = array();
            array_push($result, array('try' => "fail", 'usr_idx' => '-1', 'usr_level' => '-1'));
            echo json_encode(array("result" => $result), JSON_UNESCAPED_UNICODE);
        }
    }


    // $arr = sql_query("SELECT * FROM USER WHERE usr_id LIKE '".$user_id."'");
    // // echo("SELECT * FROM USER WHERE usr_id LIKE '".$userid."'");
    // $result = array();
    // while($row = mysqli_fetch_array($arr)){
        // array_push($result, array('idx'=>$row[0], 'user_id' => $row[2]));
    // }
    // echo json_encode(array("result" => $result), JSON_UNESCAPED_UNICODE);

?>