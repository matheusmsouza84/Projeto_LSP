<<<<<<< HEAD
<?php 
    session_start();
    $idprod = $_GET['idprod'];
    if( isset($_REQUEST['adicionar'])){
        if( isset($_SESSION['cart'][$idprod])){
            $_SESSION['cart'][$idprod] ++;
        }else{
            $_SESSION['cart'][$idprod] = 1;
        }
    }
    if( isset($_REQUEST['deletar'])){
        if( isset($_SESSION['cart'][$idprod])){
        unset( $_SESSION['cart'][$idprod] );
        }
    }
    header("Location: ../cart.php");
=======
<?php 
    session_start();

    $idprod = $_GET['idprod'];

    if( isset($_REQUEST['adicionar'])){
        if( isset($_SESSION['cart'][$idprod])){
            $_SESSION['cart'][$idprod] ++;
        }else{
            $_SESSION['cart'][$idprod] = 1;
        }
    }

    if( isset($_REQUEST['excluir'])){
        if( isset($_SESSION['cart'][$idprod])){
        unset( $_SESSION['cart'][$idprod] );
        }
    }

    header("Location: ../cart.php");
>>>>>>> 6197034bda7b78fe9f3002645f0cac1a0ecab411
?>