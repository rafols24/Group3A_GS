<?php include 'function.php';?>
<!DOCTYPE html>

<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="index.js">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</head>

<body>

<div class="overlay">
<!-- LOGN IN FORM by Omar Dsoky -->
<form>
   <!--   con = Container  for items in the form-->
   <div class="con">
   <!--     Start  header Content  -->
   <header class="head-form">
      <h2> HOPIA DE TRES</h2>
      <!--     A welcome message or an explanation of the login form -->
      <h4>Admin</h4>
   </header>
   <!--     End  header Content  -->
   <br>

   <div class="field-set">
      <!--   user name -->
         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
        <!--   user name Input-->
         <input class="form-input" id="txt-input" type="text" placeholder="@UserName" required>
      <br>
           <!--   Password -->
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <!--   Password Input-->
      <input class="form-input" type="text" placeholder="Password" id="pwd"  name="password" required>
     
<!--      Show/hide password  -->
     <span>
        <i class="fa fa-eye" aria-hidden="true "  type="button" id="eye"></i>
     </span>
      <br><br>
<!--        buttons -->
<!--      button LogIn -->
      <button class="log-in"> Log In </button>
   </div> 
   
<!--   End Conrainer  -->
  </div>

  <!-- End Form -->
</form>
</div>