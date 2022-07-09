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
    
    <form action="register_server.php" method="post">
    <h2>회원가입</h2>
    
    <label>아이디</label>
    <input type="text" placeholder="문자 및 숫자를 입력해주세요" name="user_id">

    <label>닉네임</label>
    <input type="text" placeholder="원하시는 닉네임을 입력해주세요" name="user_nick">

    <label>비밀번호</label>
    <input type="password" placeholder="숫자만 입력해주세요" name="pass1">

    <label>비밀번호 확인</label>
    <input type="password" name="pass2">
    <div>
    <button type="submit">저장</button>
    <a href="login_view.php">이미 회원이신가요? (로그인 페이지)</a>
    </div>
    </form>
</body>
</html>