<?php
    session_start();

    if((!isset($_POST['login'])) || (!isset($_POST['haslo'])))

    {
        header('location: odpowiedzi.php');
        exit();
    }


    require_once "connect.php";

    try{
        $conn = new mysqli($host, $db_user, $db_password, $db_name);

        if ($conn->connect_errno!=0)
        {
            throw Exception(mysqli_connect_errno());
        }
        else{
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];

        $login = htmlentities($login, ENT_QUOTES, "UTF-8");

        if($rezultat = @$conn->query( sprintf("SELECT * FROM uzytkownicy WHERE user='%s'", mysqli_real_escape_string($conn,$login))))
        {
            $ilu_user = $rezultat->num_rows;
            if($ilu_userow>0)
            {
                $wiersz=$rezultat->fetch_assoc();

                if(password_verify($haslo, $wiersz['pass']))
                {

                    $_SESSION['zalogowany'] = true;
                    $_SESSION['user'] = $wiersz['user'];
                    $_SESSION['id'] = $wiersz['id'];
                    unset($_session['blad']);
                    $rezultat->close();
                    header('location: odpowiedzi.php');

                }
                else
                {
                    $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
					header('Location: index.php');
                }
            }
            else{
                $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: index.php');
            }
        }
        else
		{
			
		throw new Exception($polaczenie->error);
		
		$polaczenie->close();		
		}

        }
    }
    catch(Exception $e)
	{
		echo 'Niestety nastąpił błąd serwera. Zapraszamy w innym dniu';
		echo 'informacja deweloperska'.$e;
	}

?>