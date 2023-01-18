<?php 
    
    include "header.php";
    include "../../connection.php";
    $conn = Conn();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Login</title>
    <link rel="stylesheet" href="../static/css/user.css">
    <script src="https://kit.fontawesome.com/f63b075892.js" crossorigin="anonymous"></script>
</head>
<body>
      
 <main class="container bo">
     <div class="background">
         <div class="round">
            <i class="fas fa-user fa-4x" style="padding-left:14px; padding-top:10px;"></i>
         </div>
         <div class="slidelogin">
         <form action="#" mwthod="POST">
             <h1 style="text-align: center; font-weight:bold; color: z-index: 12; black; padding-top: 30px;">LOGIN HERE</h1>
             <div class="box-input">
             <i class="fas fa-envelope"></i>
                 <input type="email" id="email" placeholder="email" name"email">
              </div>
              <div class="inpu">
              <i class="fas fa-unlock-alt"></i>
                 <input type="password" id="password" placeholder="password" name"password">
              </div>
              <div style="margin-top:25px;">
                  <button style="margin-left: 150px;" type="submit" class="btn btn-danger btn-lg active">LOGIN</button>
                   <span>Forgot Password?</span>
              </div>
         </form>
         </div>
     </div>
</main>
</body>
</html>