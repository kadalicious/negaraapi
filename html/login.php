<?php 


 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" type="image/x-icon" href="/img/logovebtoo.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login Premium user</title>
  </head>
  <body>


    <!-- open komponen register 1 -->

    <div style="display: flex; margin-left: 20px; margin-top: 20px;">
      <a href="index.php" style="text-decoration: none; outline: none; color: red;">back to home</a>
    </div>

       <h2 style="text-align: center; font-weight: bolder;margin-top: 50px; margin-bottom: 50px;">PREMIUM USER</h2>

       <div style="display: flex; justify-content: center; padding: 10px; margin: 10px;">
         
        <form method="POST">

          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="masukkan username" autofocus>
          </div>

         

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="masukkan password" name="password">
            <div  class="form-text">Note : <font color="red">*</font>jika lupa password, silahkan menghubungi admin</div>
          </div>

         
          <button type="submit" class="btn btn-secondary" name="submit" disabled>Login</button>

          <div>
          <!--
          <p>Belum memiliki akun ? <a href="register.php" style="text-decoration: none; color: red;"><span style="font-weight: bolder;">Register</span></a></p>
          </div>
        -->

        </form>

        </div>


       <!-- close komponen register 1 -->   
    




   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</html>