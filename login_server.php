<?php

include('db.php'); //db.php안에 있는 변수를 사용할 수 있음

if(isset($_POST['user_id']) && isset($_POST['pass1'])) {
    //보안코딩 시큐어코딩
    $user_id = mysqli_real_escape_string($db, $_POST['user_id']);
    $pass1 = mysqli_real_escape_string($db, $_POST['pass1']);


    //에러를 체크
    if(empty($user_id))
    {
        echo 
        "<script>alert('아이디가 비어있습니다.');
        history.back();
        </script>";
    }

    else if(empty($pass1))
    {
        echo 
        "<script>alert('비밀번호가 비어있습니다.');
        history.back(); 
        </script>";
    }


    else
    {
        $sql = "select * from member where mb_id = '$user_id'";
        $result = mysqli_query($db, $sql);

        if(mysqli_num_rows($result)===1) {


            //1. 해당열을 가져왔다
            //2. 배열의 형태로 가져왔구나
            //3. print_r은 배열을 출력하는 함수구나
            $row = mysqli_fetch_assoc($result);
            //print_r($row); //출력함수, 배열 출력 => echo 배열을 출력하지 못해요
            $hash = $row['password'];

            if(password_verify($pass1, $hash)) {
                header("location: main.html");
                exit();
            }
            else {
                echo "<script>alert('로그인에 실패하였습니다');</script>";
                exit();
            }
        }
        else {
            echo "<script>alert('아이디가 잘못되었습니다');</script>";
                exit(); 
        }
    }
}
else {
    echo 
        "<script>alert('알 수 없는 오류가 발생했습니다.');
        exit();
        </script>";
}





?>