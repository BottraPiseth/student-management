<?php 
    
    include "../views/fronts/header.php";
    include "../connection.php";
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
   <main class="container">
      <div class="row">
       <div class="col-md-12">
           <!-- <div class="round">
              <i class="fas fa-user fa-4x" style="padding-left:14px; padding-top:10px;"></i>
           </div> -->
           <div class="slidelogin">
              
                <div class="round">
                  <i class="fas fa-user fa-4x" style="padding-left:14px; padding-top:10px;"></i>
               </div>
            
             <form action="#" method="POST">
                 <h1 style="text-align: center; font-weight:bold; color: z-index: 12; black; padding-top: 30px;">User Login</h1>
                 <div class="box-input">
                 <i class="fas fa-envelope"></i>
                     <input type="email" id="email" placeholder="email" name"email">
                  </div>
                  <div class="inpu">
                  <i class="fas fa-unlock-alt"></i>
                     <input type="password" id="password" placeholder="password" name"password">
                  </div>
                 
                  <div style="width: 100%; text-align: center; margin-top:25px;">
                      <!-- <span>Forgot Password?</span> -->
                      <button style="" type="submit" class="btn btn-danger btn-lg active">LOGIN</button>
                      
                  </div>
                  <div style="width: 100%; text-align: center; margin-top: 20px;">
                    <p>Forgot Password?</p>
                  </div>
             </form>
           </div>
       </div>
     </div>
  </main>
</body>
</html>