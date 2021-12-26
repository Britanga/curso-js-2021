<?php
    include ('../perfil/perfil.php');
?>
<?php
if ($tipo ==$estudiante) {
?>
   
    <link rel="stylesheet" href="../../../static/Css/Pantilla_menuEST.css">
    <link rel="stylesheet" href="../../../static/Css/solicitudparte.css">
    <link rel="stylesheet" href="../../../static/Css/recork.css">
    <link rel="stylesheet" href="../../../static/Css/reclamo.css">
<?php
} 

if ($tipo == $analista) {
    ?>
    <link rel="stylesheet" href="../../../static/Css/Pantilla_menuANL.css">
    <link rel="stylesheet" href="../../../static/Css/claseparte.css">
    <?php 
    }
if ($tipo == $gerente) {
    ?>
    <link rel="stylesheet" href="../../../static/Css/Pantilla_menuGER.css">
    <link rel="stylesheet" href="../../../static/Css/solicitudparte.css">
    <link rel="stylesheet" href="../../../static/Css/recork.css">
    <?php 
    }
?>