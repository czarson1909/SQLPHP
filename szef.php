<html>
<head>
<title>ADMIN</title>
</head>
<body>
<style>
body {
	background: linear-gradient(0deg, #0000ff, #6e6f72, #23a6d5, #23d5ab);
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
    left: 96%;
}
#ramka1{
    text-decoration: none;
    font-family: "Comic Sans MS";
    padding: 50px;
    top: calc(25% - 165px);
    left: 10%;
    position:absolute;
border: 2px solid black;
background: linear-gradient(#ff6666, #23d5ab);
}
#ramka2{
    text-decoration: none;
    font-family: "Comic Sans MS";
    padding: 50px;
    top: calc(65% - 165px);
    left: 10%;
    position:absolute;
border: 2px solid black;
background: linear-gradient(#ff6666, #23d5ab);
}
#ramka3{
    text-decoration: none;
    font-family: "Comic Sans MS";
    padding: 50px;
    top: calc(25% - 165px);
    left: 40%;
    position:absolute;
border: 2px solid black;
background: linear-gradient(#ff6666, #23d5ab);
}
#ramka4{
    text-decoration: none;
    font-family: "Comic Sans MS";
    padding: 50px;
    top: calc(65% - 165px);
    left: 40%;
    position:absolute;
border: 2px solid black;
background: linear-gradient(#ff6666, #23d5ab);
}
#ramka5{
    text-decoration: none;
    font-family: "Comic Sans MS";
    padding: 50px;
    top: calc(25% - 165px);
    left: 70%;
    position:absolute;
border: 2px solid black;
background: linear-gradient(#ff6666, #23d5ab);
}
#ramka6{
    text-decoration: none;
    font-family: "Comic Sans MS";
    padding: 50px;
    top: calc(65% - 165px);
    left: 70%;
    position:absolute;
border: 2px solid black;
background: linear-gradient(#ff6666, #23d5ab);
}
#lista{
    top: 90%;
    font-family: "Comic Sans MS";
    padding: 20px;
    border: 2px solid black;
    position: absolute;
    left: calc(48% - 20px);
    background: linear-gradient(#66ccff, #cccc00);
}
#lista2{
    font-family: "Comic Sans MS";
    top: 90%;
    padding: 20px;
    border: 2px solid black;
    position: absolute;
    left: calc(95% - 20px);
    background: linear-gradient(#66ccff, #cccc00);
    
}
#lista3{
    font-family: "Comic Sans MS";
    top: 90%;
    padding: 20px;
    border: 2px solid black;
    position: absolute;
    left: calc(3% - 20px);
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
#ramka4:hover{
    border: 2px solid white;
}
#ramka5:hover{
    border: 2px solid white;
}
#ramka6:hover{
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
                $query = "INSERT INTO modele(marka, model) VALUES('$marka', '$model');";
                $array = mysqli_query($db, $query);
                echo    '<script>window.location = "szef.php";</script>';
                    }
                    else{
                session_destroy();
                echo    '<script>
                alert("Błąd!");
                window.location = "szef.php";
                        </script>';
                    }
                    break;
                }
    case 2:
     {
    session_start();
    $db = mysqli_connect('localhost', 'root', '', 'samochodowy_kat');
    $marka = $_POST['marka'];
    $model = $_POST['model'];

     if(($marka != NULL)||($model != NULL)){
    $query = "DELETE FROM modele WHERE modele.marka = '$marka' OR modele.model = '$model';";
    $array = mysqli_query($db, $query);
    echo    '<script>window.location = "szef.php";</script>';
    }
    else{
    session_destroy();
    echo    '<script>
    alert("Błąd!");
    window.location = "szef.php";
    </script>';
                }break;}
                                                // default:
                                              // '<script>
                                                      //  alert("Błąd!");
                                              //  window.location = "szef.php";
                                          //  </script>';;
                
                case 3:
                    {
    session_start();
    $db = mysqli_connect('localhost', 'root', '', 'samochodowy_kat');
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
                
    if(($login != NULL)&&($haslo != NULL)){
    $query = "INSERT INTO userzy(userzy.login, userzy.haslo) VALUES('$login', '$haslo');";
    $array = mysqli_query($db, $query);
    echo    '<script>window.location = "szef.php";</script>';
                        }
                        else{
    session_destroy();
    echo    '<script>
    alert("Błąd!");
    window.location = "szef.php";
                            </script>';
                            }break;}
                            case 4:
                                {
                session_start();
                $db = mysqli_connect('localhost', 'root', '', 'samochodowy_kat');
                $login = $_POST['login'];
                $haslo = $_POST['haslo'];
                            
                if(($login != NULL)&&($haslo != NULL)){
                $query = "DELETE FROM userzy WHERE userzy.login = '$login' OR userzy.haslo = '$haslo';";
                $array = mysqli_query($db, $query);
                echo    '<script>window.location = "szef.php";</script>';
                                    }
                                    else{
                session_destroy();
                echo    '<script>
                alert("Błąd!");
                window.location = "szef.php";
                                        </script>';
                                        }break;}
                                        case 5:
                                            {
                            session_start();
                            $db = mysqli_connect('localhost', 'root', '', 'samochodowy_kat');
                            $imie = $_POST['imie'];
                            $nazwisko = $_POST['nazwisko'];
                                        
                            if(($imie != NULL)&&($nazwisko != NULL)){
                            $query = "INSERT INTO klienci(imie, nazwisko) VALUES('$imie', '$nazwisko');";
                            $array = mysqli_query($db, $query);
                            echo    '<script>window.location = "szef.php";</script>';
                                                }
                                                else{
                            session_destroy();
                            echo    '<script>
                            alert("Błąd!");
                            window.location = "szef.php";
                                                    </script>';
                                                    }break;}
                                                    case 6:
                                                        {
                                        session_start();
                                        $db = mysqli_connect('localhost', 'root', '', 'samochodowy_kat');
                                        $imie = $_POST['imie'];
                                        $nazwisko = $_POST['nazwisko'];
                                                    
                                        if(($imie != NULL)&&($nazwisko != NULL)){
                                        $query = "DELETE FROM klienci WHERE klienci.imie = '$imie' OR klienci.nazwisko = '$nazwisko';";
                                        $array = mysqli_query($db, $query);
                                        echo    '<script>window.location = "szef.php";</script>';
                                                            }
                                                            else{
                                        session_destroy();
                                        echo    '<script>
                                        alert("Błąd!");
                                        window.location = "szef.php";
                                                                </script>';
                                                                }break;}
            default:
           '<script>
          alert("Błąd!");
          window.location = "szef.php";
          </script>';;
                    }
                return;
    }
    ?>
<div id="napisek">ADMIN</div>
</div>
<div id="lista2"><a href="main.php?w=2">Wyloguj</a></div>
</div>
    <div id="ramka1">
<p>Dodaj pojazd</p>
<form action="szef.php?w=1" method="post"> 
            <label for="marka">Marka: </label>
            <input type="text" value="" name="marka" maxlength="25"> <br> 
            <label for="model">Model: </label>
            <input type="text" value="" name="model" maxlength="25"> <br>
            <br>
            <input type="submit" value="Dodaj">
            <br>
            </form>
    </div>
</div></div></div></div><br>
<div id="ramka2">
<p>Usuń pojazd</p>
<form action="szef.php?w=2" method="post"> 
            <label for="marka">Marka: </label>
            <input type="text" value="" name="marka" maxlength="25"> <br> 
            <label for="model">Model: </label>
            <input type="text" value="" name="model" maxlength="25"> <br>
            <br>
            <input type="submit" value="Usuń">
            <br>
            </form>
</div>
<div id="ramka3">
<p>Dodaj użytkownika</p>
<form action="szef.php?w=3" method="post"> 
            <label for="login">Login: </label>
            <input type="text" value="" name="login" maxlength="25"> <br> 
            <label for="haslo">Hasło: </label>
            <input type="password" value="" name="haslo" maxlength="25"> <br>
            <br>
            <input type="submit" value="Dodaj">
            <br>
            </form>
</div>
<div id="ramka4">
<p>Usuń użytkownika</p>
<form action="szef.php?w=4" method="post"> 
            <label for="login">Login: </label>
            <input type="text" value="" name="login" maxlength="25"> <br> 
            <label for="haslo">Hasło: </label>
            <input type="password" value="" name="haslo" maxlength="25"> <br>
            <br>
            <input type="submit" value="Usuń">
            <br>
            </form>
</div>
<div id="ramka5">
<p>Nowy klient</p>
<form action="szef.php?w=5" method="post"> 
            <label for="imie">Imię: </label>
            <input type="text" value="" name="imie" maxlength="25"> <br> 
            <label for="nazwisko">Nazwisko: </label>
            <input type="text" value="" name="nazwisko" maxlength="25"> <br>
            <br>
            <input type="submit" value="Dodaj klienta">
            <br>
            </form>
</div>
<div id="ramka6">
<p>Usuń klienta</p>
<form action="szef.php?w=6" method="post"> 
            <label for="imie">Imię: </label>
            <input type="text" value="" name="imie" maxlength="25"> <br> 
            <label for="nazwisko">Nazwisko: </label>
            <input type="text" value="" name="nazwisko" maxlength="25"> <br>
            <br>
            <input type="submit" value="Usuń klienta">
            <br>
            </form>
</div>
    <div id="lista">    
<a href="http://127.0.0.1/phpmyadmin/index.php?route=/sql&server=1&db=samochodowy_kat&table=modele&pos=0" target="_blank">LISTA AUT</a> </div>
<div id="lista3"> 
<a href="http://127.0.0.1/phpmyadmin/index.php?route=/sql&server=1&db=samochodowy_kat&table=klienci&pos=0" target="_blank">LISTA KLIENTÓW</a></div>
</body>
</html>
