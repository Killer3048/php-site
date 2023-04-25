<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="static/auth.css">
</head>
<body>
<body>
  <div class="form">
    <h1 class="form__header">Login & Register Form</h1>
    <div class="form__switch">
    <span class="form__switch-link" id="register-link">Register</span>
      <span class="form__switch-link" id="login-link">Login</span>
    </div>
    <form action="lib/reg.php" method="post" id="register-form" class="">
      <input type="email" placeholder="Email" name="email" class="form__input" required><br>
      <input type="password" placeholder="Password" name="pass" class="form__input" required><br>
      <input type="password" placeholder="Confirm Password" name="confirm" class="form__input" required><br>
      <button type="submit" class="form__submit">Зарегаться</button>
    </form>
    <form action="lib/login.php" method="post" id="login-form" class="form--hidden">
      <input type="email" placeholder="Email" name="email" class="form__input" required><br>
      <input type="password" placeholder="Password" name="pass" class="form__input" required><br>
      <button type="submit" class="form__submit">Залогиниться</button>
    </form>
  </div>
  <script src="static/script.js"></script>
  <script>

const registerLink = document.getElementById('register-link');
const loginLink = document.getElementById('login-link');
const loginForm = document.getElementById('login-form');
const registerForm = document.getElementById('register-form');

registerLink.addEventListener("click", function() {
    registerForm.style.display = "block";
    loginForm.style.display = "none";
});

loginLink.addEventListener("click", function() {
    loginForm.style.display = "block";
    registerForm.style.display = "none";
});

registerLink.addEventListener('click', function() {
registerLink.style.textDecoration = 'underline';
loginLink.style.textDecoration = 'none';
});

loginLink.addEventListener('click', function() {
registerLink.style.textDecoration = 'none';
loginLink.style.textDecoration = 'underline';
});

  </script>
</body>
</html>
</body>
</html>