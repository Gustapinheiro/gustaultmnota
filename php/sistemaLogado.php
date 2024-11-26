<?php




session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit();
}

if (!isset($_SESSION['login'])){
    header("location: index.php");
}elseif( $_SESSION['login'] ==""){
    header("location: index.php");
}elseif (!isset($_SESSION['status'])){
    header("location: index.php");
}elseif( $_SESSION['status'] != 1){
    header("location: index.php");
}else{
    echo "Você sofreu um GOLPE!!";

}


?>

<button onClick="deslogar()">Deslogar</button>
<script>
    function deslogar(){
        window.location.href = "?logout=true";
    }

    </script>