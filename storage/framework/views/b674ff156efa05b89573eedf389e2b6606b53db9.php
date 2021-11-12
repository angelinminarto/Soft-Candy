<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ('style/style.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<div class="header">
    <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Soft Candy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">Register</a>
        </li>
        <li class="nav-item">
            <a href="/chat" class="chat">
            <span>Chats</span>
            <span class="badge">3</span>
            </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </div>
    <div class="container">
        <div class="login">
            <h2>Login</h2>
        </div>
        <div class="mt-5">
            <label for="exampleInputUsername" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter your username">
        </div>
        <div class="mt-5">
            <label for="exampleInputEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="mt-5">
            <label for="exampleInputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password">
        </div>

        <div class="containersignin">
            <p>You don't have a account? <a href="/register">Register</a>.</p>
        </div>

        <button type="button" class="loginbtn">Login</button>
    </div>


    <div class="footer">
      <p>Copyright &copy Soft Candy</p>
    </div>
</body>
</html>
<?php /**PATH D:\Other\B_Semester 5\Projects\Web Progamming\Project-Web\resources\views/login.blade.php ENDPATH**/ ?>