<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Register</h1>
      <form method="post" action="register.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
          <label for="fname">First Name</label>
          <br>
           <input type="text" name="fName" id="fName" placeholder="Enter your first name" required>
           
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <label for="lName">Last Name</label>
            <br>
            <input type="text" name="lName" id="lName" placeholder="Enter your last name" required>
           
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
              <label for="email">Email</label>
            <br>

            <input type="email" name="email" id="email" placeholder="Enter your email address" required>
          
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <label for="password">Password</label>
            <br>
            <input type="password" name="password" id="password" placeholder="Enter password" required>
           
        </div>
        <div class="btncontainer">
       <input type="submit" class="btn" value="Sign Up" name="signUp">
      </div>
      </form>
      <p class="or">
        or
      </p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>
      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
      </div>
   
 </div>
    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <label for="email">Email</label>
                <br>
              <input type="email" name="email" id="email" placeholder="Enter valid email address" required>
            
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
                <label for="password">Password</label>
                <br>
              <input type="password" name="password" id="password" placeholder=" Enter password" required>
            
          </div>
          <p class="recover">
            <a href="#">Recover Password</a>
          </p>
          <div class="btncontainer">
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </div>
        </form>
        <div class="check">
        <input class="checkbox" type="checkbox"><span class="afterCheck">Keep me logged in </span></div>
        <p class="or">
         or
        </p>
        <div class="icons">
          <i class="fab fa-google"></i>
          <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
          <p>Don't have account yet?</p
          
          .............>
          <button id="signUpButton">Sign Up</button>
        </div>
      </div>
      <script src="script.js"></script>
</body>
</html>