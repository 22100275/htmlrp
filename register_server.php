<?php

include('db.php'); //db.php안에 있는 변수를 사용할 수 있음

if(isset($_POST['user_id']) && isset($_POST['user_nick']) && isset($_POST['pass1']) && isset($_POST['pass2'])) {
    //보안코딩 시큐어코딩
    $user_id = mysqli_real_escape_string($db, $_POST['user_id']);
    $user_nick = mysqli_real_escape_string($db, $_POST['user_nick']);
    $pass1 = mysqli_real_escape_string($db, $_POST['pass1']);
    $pass2 = mysqli_real_escape_string($db, $_POST['pass2']);


    //에러를 체크
    if(empty($user_id))
    {
        echo 
        "<script>alert('아이디가 비어있습니다.');
        history.back();
        </script>";
    }
    else if(empty($user_nick))
    {
        echo
        "<script>alert('닉네임이 비어있습니다.');
        location.replace('register_view.php');
        </script>";
    }
    else if(empty($pass1))
    {
        echo 
        "<script>alert('비밀번호가 비어있습니다.');
        history.back(); 
        </script>";
    }
    else if($pass1 != $pass2) {
        echo 
        "<script>alert('비밀번호가 일치하지 않습니다');
        history.back(); 
        </script>";
    }

    else
    {
        //암호화
        //$md5 = md5($pass1); //양방향 암호 단점 -> 복호화 가능

        $pass1 = password_hash($pass1, PASSWORD_DEFAULT);
        $sql_save = "insert into member(mb_id, mb_nick, password) values('$user_id', '$user_nick', '$pass1')";
        $result = mysqli_query($db, $sql_save);

        if($result) {
            echo "<script>alert('성공적으로 가입하셨습니다');</script>";
            exit();
        }
        else {
            echo "<script>alert('가입에 실패하였습니다');</script>";
            exit();
        }
       
        //아이디 또는 닉네임, 또는 아이디와 동시에 닉네임 중복 체크
        
        //저장

    }
}
else {
    echo 
        "<script>alert('알 수 없는 오류가 발생했습니다.');
        exit();
        </script>";
}





?>