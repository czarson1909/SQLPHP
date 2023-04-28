<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Samochodowy</title>
</head>
<body>

<style>
    body {
	background: linear-gradient(0deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
    width: 100vw;
    height: 100vh;
    margin: 0;
    padding: 0;
    text-decoration: none;
    font-family: "Comic Sans MS";
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
 #matkaPatryka{
     position: absolute;
     left: calc( 50% - 132px);
     top: calc( 50% - 32px);
     animation: rotationAnimation 1.0s linear 1;
     border: 2px solid black;
     padding: 40px; 
     background: linear-gradient(#23a6d5, #23d5ab); 
 }
 @keyframes rotationAnimation{
     0% {transform: rotate(0deg);}
     50% {transform: rotate(180deg);}
     100% {transform: rotate(360deg);}
 }
 #matkaPatryka:hover{
    border: 2px solid white;
</style>
<?php
if(isset($_GET['w']))
{
    switch($_GET['w'])
    {
        case 1:
            {
     function error($errorVar)
         {
         switch($errorVar)
         {
              case 1: 
                          {
               echo    '<script>
                 alert("Błąd logowania!");
                 window.location = "main.php";
                    </script>';
                         break;
                            }
                        default:
                            break;
                    }
                    
                }
                session_start();
$db = mysqli_connect('localhost', 'root', '', 'samochodowy_kat');
 $login = $_POST['login'];
$haslo = $_POST['haslo'];
 $query = "SELECT * FROM userzy WHERE login='$login' AND haslo='$haslo';";
 $array = mysqli_query($db, $query); 

 if(mysqli_num_rows($array) == 0) return error(1);

 while($row = mysqli_fetch_array($array))
     {
       if($row['czyszef'] == 1)
       {
         header("HTTP/1.1 301 Moved Permanently"); 
         header("Location: szef.php");
         //header("Location: main.php");
                    } 
                    else
                    {                       
         header("HTTP/1.1 301 Moved Permanently"); 
         header("Location: robol.php");
                    }

                    
$_SESSION['czyszef'] = $row['czyszef']; 
$_SESSION['id'] = $row['id']; 
 $_SESSION['zalogowany'] = 1; 
                }
                break;
            }
        case 2:
            {
   session_destroy();
      echo    '<script>
     alert("Wylogowałeś się z konta.");
        window.location = "main.php";
          </script>';
             break;
            }
        default:
      return;
    }
}
?>
<div id="matkaPatryka">
<form action="main.php?w=1" method="post"> 
 <label for="login">Login: </label>
 <input type="text" value="" name="login" maxlength="25"> <br> 
 <label for="haslo">Hasło:  </label>
 <input type="password" value="" name="haslo" maxlength="25"> <br>
 <input type="submit" value="Zaloguj">
            </form>
</div>
</body>
</html>