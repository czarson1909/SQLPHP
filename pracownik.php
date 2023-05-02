<html>
<head>
<title>PRACOWNIK</title>
</head>
<body>
<style>
body {
	background: linear-gradient(0deg, #ee7752, #e73c7e, #cccc00, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
    width: 100vw;
    height: 100vh;
    margin: 0;
    padding: 0;
    text-decoration: none;
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
#napisek{
    font-family: "Comic Sans MS";
    border: 2px solid black;
    padding: 3px;
    position:absolute;
    left: 94%;
}
#ramka1{
    text-decoration: none;
    font-family: "Comic Sans MS";
    padding: 50px;
    top: calc(50% - 165px);
    left: 10%;
    position:absolute;
border: 2px solid black;
background: linear-gradient(#23a6d5, #23d5ab);
}
#ramka2{
    text-decoration: none;
    font-family: "Comic Sans MS";
    padding: 50px;
    top: calc(50% - 165px);
    left: 40%;
    position:absolute;
border: 2px solid black;
background: linear-gradient(#23a6d5, #23d5ab);
}
#ramka3{
    text-decoration: none;
    font-family: "Comic Sans MS";
    padding: 50px;
    top: calc(50% - 165px);
    left: 70%;
    position:absolute;
border: 2px solid black;
background: linear-gradient(#23a6d5, #23d5ab);
}
#lista{
    font-family: "Comic Sans MS";
    padding: 20px;
    border: 2px solid black;
    position: absolute;
    left: calc(47% - 20px);
    background: linear-gradient(#66ccff, #cccc00);
}
#lista2{
    font-family: "Comic Sans MS";
    top: 80%;
    padding: 20px;
    border: 2px solid black;
    position: absolute;
    left: calc(48% - 20px);
    background: linear-gradient(#66ccff, #cccc00);
}
#lista3{
    font-family: "Comic Sans MS";
    top: 120px;
    padding: 20px;
    border: 2px solid black;
    position: absolute;
    left: calc(46% - 20px);
    background: linear-gradient(#66ccff, #cccc00);
    
}
#ramka1:hover{
    border: 2px solid white;
}
#ramka2:hover{
    border: 2px solid white;
}
#ramka3:hover{
    border: 2px solid white;
}
#lista2:hover{
    border: 2px solid white;
}
#lista:hover{
    border: 2px solid white;
}
#lista3:hover{
    border: 2px solid white;
}
a {
    text-decoration: none;
    color: black;
    font-family: "Comic Sans MS";
}

    </style>

</table>
<?php
    if(isset($_GET['w']))
    {
        switch($_GET['w'])
        {
            case 1:
               {
       session_start();
         $db = mysqli_connect('localhost', 'root', '', 'samochodowy_kat');
         $marka = $_POST['marka'];
        $model = $_POST['model'];
            
     if(($marka != NULL)&&($model != NULL)){
     // if(($marka = $_POST['marka'])&&($model = $_POST['model'])){
      //$query = "SELECT modele(marka, model) VALUES('$marka', '$model');";
    $query = "SELECT marka, model FROM modele WHERE marka='$marka' AND model='$model';";
     $array = mysqli_query($db, $query);
     //echo    '<script>window.location = "pracownik.php";</script>';
     if(mysqli_num_rows($array) != 0){

     while ($row = mysqli_fetch_array  ($array))
         echo    '<script>
     alert("Pojazd dostępny!");
     window.location = "pracownik.php";
         </script>';
                        }else{
          echo    '<script>
          alert("Brak auta na stanie!");
      window.location = "pracownik.php";
           </script>';
                        }
                    }
                    break;
                }
            case 2:
                {
      session_start();
          $db = mysqli_connect('localhost', 'root', '', 'samochodowy_kat');
      $imie= $_POST['imie'];
       $nazwisko = $_POST['nazwisko'];

 if(($imie != NULL)||($nazwisko != NULL)){
      $query = "INSERT INTO klienci(imie, nazwisko) VALUES('$imie', '$nazwisko');";
 $array = mysqli_query($db, $query);
          echo    '<script>window.location = "pracownik.php";</script>';
              }
        else{
     session_destroy();
       echo    '<script>
      alert("Błąd!");
           window.location = "pracownik.php";
      </script>';
        }break;}
            case 3:
                {
      session_start();
          $db = mysqli_connect('localhost', 'root', '', 'samochodowy_kat');
      $imie= $_POST['imie'];
       $nazwisko = $_POST['nazwisko'];

 if(($imie != NULL)||($nazwisko != NULL)){
      $query = "DELETE FROM klienci WHERE klienci.imie = '$imie' OR klienci.nazwisko = '$nazwisko';";
 $array = mysqli_query($db, $query);
          echo    '<script>window.location = "pracownik.php";</script>';
              }
        else{
     session_destroy();
       echo    '<script>
      alert("Błąd!");
           window.location = "pracownik.php";
      </script>';
        }}
        default:
       '<script>
      alert("Błąd!");
          window.location = "pracownik.php";
            </script>';;
                break;
            }
            
                return;
        }
    ?>
<div id="napisek">PRACOWNIK</div>
</div>
<div id="lista2"><a href="main.php?w=2">Wyloguj</a></div>
</div>
    <div id="ramka1">
<p>Wyszukaj auto</p>
<form action="pracownik.php?w=1" method="post"> 
            <label for="marka">Marka: </label>
            <input type="text" value="" name="marka" maxlength="25"> <br> 
            <label for="model">Model: </label>
            <input type="text" value="" name="model" maxlength="25"> <br>
            <br>
            <input type="submit" value="Sprawdź dostępność">
            <br>
            </form>
    </div>
</div></div></div></div><br>
<div id="ramka2">
<p>Nowy klient</p>
<form action="pracownik.php?w=2" method="post"> 
            <label for="imie">Imię: </label>
            <input type="text" value="" name="imie" maxlength="25"> <br> 
            <label for="nazwisko">Nazwisko: </label>
            <input type="text" value="" name="nazwisko" maxlength="25"> <br>
            <br>
            <input type="submit" value="Dodaj klienta">
            <br>
            </form>
</div></div></div></div></div>
<div id="ramka3">
<p>Usuń klienta</p>
<form action="pracownik.php?w=3" method="post"> 
            <label for="imie">Imię: </label>
            <input type="text" value="" name="imie" maxlength="25"> <br> 
            <label for="nazwisko">Nazwisko: </label>
            <input type="text" value="" name="nazwisko" maxlength="25"> <br>
            <br>
            <input type="submit" value="Dodaj klienta">
            <br>
            </form>
</div>
    <div id="lista">    
<a href="http://127.0.0.1/phpmyadmin/index.php?route=/sql&server=1&db=samochodowy_kat&table=modele&pos=0" target="_blank">LISTA AUT</a></div>
<div id="lista3"> 
<a href="http://127.0.0.1/phpmyadmin/index.php?route=/sql&server=1&db=samochodowy_kat&table=klienci&pos=0" target="_blank">LISTA KLIENTÓW</a></div>
</div>
</body>
</html>
