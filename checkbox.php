<?php
    $title ="Tareas Recurrentes | ";

    include "head.php";
    include "sidebar.php";   
?>

    <div class="right_col" role="main"><!-- page content -->
        <div class="">
            <div class="page-title">
                <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Tareas Recurrentes</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        
                        <head>
    <meta charset="UTF-8">
    <title>Tareas recurrentes</title>
</head>
<body>
    <form method="POST" action="action\checkbox.php" >
        <input type="checkbox" name="check[]" value="Checklist diarios"> Checklist Balanceadores y dashboard<br>
        <input type="checkbox" name="check[]" value="saldos y registros mahindra"> Saldos y registros mahindra<br>
        <input type="checkbox" name="check[]" value="Espacios cloud"> Espacios Servidores<br>
        <input type="checkbox" name="check[]" value="validacion Nulas"> Verificacion de nulas<br>
        <input type="checkbox" name="check[]" value="Saldo Tigo"> Envio saldos tigo<br>
        <input type="checkbox" name="check[]" value="Saldo Claro"> Envio saldos claro<br>
        <input type="checkbox" name="check[]" value="Archivo BBVA"> Archivo BBVA<br>
        <input type="checkbox" name="check[]" value="Cargue De Comisiones"> Cargue de comisiones<br>
        <input type="hidden" name="usuario" value="<?php echo $_SESSION['user_id'];?>">
        <select name="option">
            <option> Finalizado</option>
            <option> Pendiente</option>
        </select>
        <input type="submit" value="Enviar Registro">

    </form>
</body>

<?php include "footer.php" ?>

