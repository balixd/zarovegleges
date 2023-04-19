<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <title>Regisztráció</title>

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

<div class="center">
      <h1>Regisztráció</h1>
      <form method="post">
        <div class="txt_field">
        <input type="username" id="username" onblur="vrfusername(this)" name="username"  placeholder="Felhasználó név" required autofocus>
          <span></span>
          <label>Felhasználónév</label>
        </div>
        <div class="txt_field">
        <input onblur="checkhossz(this)" type="password" id="password" name="password"  placeholder="Jelszó" required>
          <span></span>
          <label>Jelszó</label>
        </div>
        <input type="button"  class="register" onclick="newUser()" value="Regisztráció"></button>
        <div class="signup_link">
        </div>
      </form>
      <div class="msg"></div>
    </div>

 
    <script>
      let errors=false
  let user = {
    username: false,
    email: false
  }
  function vrfusername(obj) {
    console.log(obj.value)
    verifyuser('../server/verifyuser.php?username=' + obj.value, rendervryusername);
  }
  function rendervryusername(data) {
    console.log("nr", data)
    if (data.nr == 0)
      user.username = true
    else
      user.username = false
  }
  function newUser() {
    
    console.log(errors)
    if (user.username && errors==false) {
      const myFormData = new FormData(document.querySelector('form'));
      /*for(let obj of myFormData){
        console.log(obj);
      }*/
      let configObj = {
        method: 'POST',
        body: myFormData
      }
      postdata('../server/register.php', configObj, render)
    }
    else{
      console.log('hiba')
    }

  }
  function render(data) {
    console.log(data);
    document.querySelector('.msg').innerHTML = data.msg;
    if (data?.id) {
      user.username = false
      document.querySelector('.msg').innerHTML +=`<button onclick="login()">Jelentkezz be!</button>`
    }
  }
  function login(){
    window.location.href='index.php?prog=loginout/bejelentkezes.php'
  }
  function checkhossz(obj){
   console.log(obj.value.length)
    if(obj.value.length<6){
   errors=true 
  document.querySelector('.register').disabled=true
    document.querySelector('.msg').innerHTML='A jelszó túl rövid, minimum 6 karakter kell ,hogy legyen.'
    
  }else{

    errors=false
document.querySelector('.register').disabled=false
  document.querySelector('.msg').innerHTML=''
  
}
return errors
  }

  
  

</script>
