<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="content">
    
    <form action="login_server.php" method="post">
    <h2>로그인</h2>
    
    <label>아이디</label>
    <input type="text" placeholder="문자 및 숫자를 입력해주세요" name="user_id">


    <label>비밀번호</label>
    <input type="password" placeholder="숫자만 입력해주세요" name="pass1">
    <div>
    <button type="submit" name="login_btn">로그인</button>
    <a href="register_view.php">아직 회원이 아니신가요? (회원가입 페이지)</a>
    </div>
    </form>
</body>
</html>