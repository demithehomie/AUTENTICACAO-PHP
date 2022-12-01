<?php session_start() 

//LOGIN DE UM ÚNICO USUÁRIO 

?>



<!DOCTYPE html>
<html>
<head>

    <title>Login Purinho</title>
</head>
<body>
    

<?php 

if(!isset($_SESSION['login'])){

    if(isset($_POST['acao'])){
        $login = 'luvadepedreiro';
        $senha = 'obrigadomeuDeus';

        $loginform = $_POST['login'];
        $senhaform = $_POST['senha'];

        if($login == $loginform && $senha == $senhaform) {
            //o login funcionará
            $_SESSION['login'] = $login;
            header('Location: index.php');

        } else {
            //tem algum erro
            echo 'Dados Inválidos';
        }

    }

    include('login.php');
    
}else {

    if(isset($_GET['logout'])){
        unset($_SESSION['login']);
        session_destroy();
        header('Location: index.php');
    }

    include('home.php');
}

?>


</body>
</html>