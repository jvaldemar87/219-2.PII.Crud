<?php 
session_start();
include_once 'clase_Usuario.php';
$user = new Usuario;

if (isset($_POST['submit'])) { 
		extract($_POST);   
	    $login = $user->check_login($emailusername, $password);
	    if ($login) {
	        // Registration Success
	       header("location:index.php");

	    } else {
	        // Registration Failed
	        echo 'Wrong username or password'
	        ;
	    }
	}
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Login </title>
  </head>

  <body>
    <div id="container" class="container">
      <h1>Iniciar Secion</h1>
      <form action="" method="post" name="login">
        <table class="table " width="400">
          <tr>
            <th>Email :</th>
            <td>
              <input type="text" name="emailusername" required>
            </td>
          </tr>
          <tr>
            <th>Contracenia:</th>
            <td>
              <input type="password" name="password" required>
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>
              <input class="btn" type="submit" name="submit" value="Login" onclick="return(submitlogin());">
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>

        </table>
      </form>
    </div>
    <script>
      function submitlogin() {
        var form = document.login;
        if (form.emailusername.value == "") {
          alert("Email no capturado");
          return false;
        } else if (form.password.value == "") {
          alert("Contacenia no capturada.");
          return false;
        }
      }
    </script>


  </body>