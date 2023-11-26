<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <div class="topbar">
        <div class="logo-container">
            <a href="../main/main.php">   
                <img class="logo" src="../img/PF_big.png" alt="none"> 
            </a>
        </div>
    </div>
    
    <form class="join_form" method = 'post' action = '../signup/signup_process.php'>

        
        <div class="sign" >
            <h1 style="text-align: center; margin-right: 470px;">SIGN UP</h1>

            <h3 class="text-position" style="margin-right: 540px;">아이디</h3>
            <div class="sign_id">
                <input type="text" name="id" id="sign_id" pattern="[a-zA-Z0-9]+" placeholder="아이디를 입력하세요">
            </div>

            <h3 class="text-position" style="margin-right: 520px;">비밀번호</h3>
            <div class="sign_pw">
                <input type="password" name="pw" id="sign_pw" placeholder="비밀번호를 입력하세요">
            </div>

            <h3 class="text-position" style="margin-right: 460px;">비밀번호 재확인</h3>
            <div class="sign_rpw">
                <input type="password" name="repass" id="sign_rpw" placeholder="비밀번호를 재입력하세요">
            </div>

            <h3 class="text-position" style="margin-right:  540px;">닉네임</h3>
            <div class="sign_name">
                <input type="text" name="name" id="sign_name" placeholder="닉네임을 입력하세요">
            </div>

            <div class="submit-sign">
                <button type="submit">회원가입</button>
            </div>


        </div>
    </form>
</body>

</html>