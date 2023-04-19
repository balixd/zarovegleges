<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <title>Bejelentkezés</title>

    <style>
            @import url('https://fonts.cdnfonts.com/css/spiky-016');

    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }
    body{
      margin: 0;
      padding: 0;
      background: linear-gradient(180deg,lightgray, purple);
      height: 100vh;
      overflow: hidden;
    }
    .center{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 400px;
      background: linear-gradient(180deg,plum, purple);
      border-radius: 10px;
      box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
    }
    .center h1{
      font-family: 'Spiky-016', sans-serif;
      text-align: center;
      padding: 20px 0;
      border-bottom: 1px solid silver;
      color: white;
    }
    .center form{
      padding: 0 40px;
      box-sizing: border-box;
    }
    form .txt_field{
      position: relative;
      border-bottom: 2px solid #adadad;
      margin: 30px 0;
    }
    .txt_field input{
      width: 100%;
      padding: 0 5px;
      height: 40px;
      font-size: 16px;
      border: none;
      background: none;
      outline: none;
    }
    .txt_field label{
      position: absolute;
      top: 50%;
      left: 5px;
      color: #adadad;
      transform: translateY(-50%);
      font-size: 16px;
      pointer-events: none;
      transition: .5s;
    }
    .txt_field span::before{
      content: '';
      position: absolute;
      top: 40px;
      left: 0;
      width: 0%;
      height: 2px;
      background: #ffffff;
      transition: .5s;
    }
    .txt_field input:focus ~ label,
    .txt_field input:valid ~ label{
      top: -5px;
      color: #ffffff;
    }
    .txt_field input:focus ~ span::before,
    .txt_field input:valid ~ span::before{
      width: 100%;
    }
    .pass{
      margin: -5px 0 20px 5px;
      color: #a6a6a6;
      cursor: pointer;
    }
    .pass:hover{
      text-decoration: underline;
    }
    input[type="button"]{
      width: 100%;
      height: 50px;
      border: 1px solid;
      background: purple;
      border-radius: 25px;
      font-size: 18px;
      color: #e9f4fb;
      font-weight: 700;
      cursor: pointer;
      outline: none;
    }
    input[type="button"]:hover{
      border-color: plum;
      transition: .5s;
    }
    .signup_link{
      margin: 30px 0;
      text-align: center;
      font-size: 16px;
      color: #666666;
    }
    .signup_link a{
      color: #ffffff;
      text-decoration: none;
    }
    .signup_link a:hover{
      text-decoration: underline;
    }
  </style>

  </head>

  <body>
    <div class="center">
      <h1>Belépés</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label>Felhasználónév</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Jelszó</label>
        </div>
        <input type="button" onclick="loginuser()" value="Belépés">
        <div class="signup_link">
          Még nem regisztráltál? <a href="index.php?prog=./loginout/regisztracio.php">Regisztráció</a>
        </div>
      </form>
    </div>
<script>
  function loginuser(){
      const myFormData = new FormData(document.querySelector('form'));
    let configObj={
      method: 'POST',
      body: myFormData
    }
    postdata('../server/bejelentkezes.php',configObj,render)
  }

  function render(data){
    console.log(data)
    if(data.msg=='ok')
    location.href='./index.php'
  }
</script>