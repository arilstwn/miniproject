<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
body {
  background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20230601/pngtree-abstract-blue-yellow-background-vector-image_2999623.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
<style>


input[type=text], input[type=gender] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}


button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}


.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}


.modal {
  display: none; 
  position: fixed;
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%;
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4); 
  padding-top: 60px;
}


.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; 
  border: 1px solid #888;
  width: 80%; 
}

.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}


.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>



</head>
<body>
  <center><h1 style="background-color:DodgerBlue;" style="color:yellow">Pendaftaran Online Di Class Roam Of The Elite</h1></center>
  <center><h3>エリートクラス登録の徘徊</h3></center>
  <hr>
  <center><img src="https://o.remove.bg/downloads/540c71b8-cc3a-47f5-b215-99a451d154aa/images-removebg-preview.png" alt="" width="230" height="250"></center>
  <center><p style="color:white">エリートの授業放浪へようこそ 下のリンクに慎重に記入してください。ほんのわずかな間違いが致命的になるため、間違いを犯さないようにしてください。</p></center>
  <center><p style="color:yellow">Erīto no jugyō hōrō e yōkoso shita no rinku ni shinchō ni kinyū shite kudasai. Hon'no wazukana machigai ga chimei-teki ni naru tame, machigai o okasanai yō ni shite kudasai.</p></center>
  <center><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><a href="http://localhost/miniproject/auth/register">register</a></button>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button></center>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="<?php echo base_url(); ?>Auth/aksi_login" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <a></a>
      <img src="https://o.remove.bg/downloads/383c6786-4bfa-4c2f-967c-7638985a63dd/class_roam-removebg-preview.png" alt="" width="660" height="300">
    </div>
        <center><a style="color:red">記入してください。姉/妹</a></center>
        <center><a style="color:blue">Para Member Baru Wajib Mengisi</a></center>
    <div class="container">
      <label for="uname"><b>Email:</b></label>
      <input type="text" placeholder="Mēruadoresu o nyūryoku shite" name="email" required>
      <label><b>Password:</b></label>
      <input type="text" placeholder="Pasuwādo o nyūryoku suru" name="password" required>
`
      

      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">gender?</a></span>
    </div>
  </form>
</div>

<script>git 
var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}





</html>