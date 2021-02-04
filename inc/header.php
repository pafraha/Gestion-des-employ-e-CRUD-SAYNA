<?php if (!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gestion des employées</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="http://<?= $_SERVER[HTTP_HOST] ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="http://<?= $_SERVER[HTTP_HOST] ?>/css/font-awesome.min.css">
    <script src="http://<?= $_SERVER[HTTP_HOST] ?>/js/jquery-3.5.1.min.js"></script>
    <script src="http://<?= $_SERVER[HTTP_HOST] ?>/js/popper.min.js"></script>
    <script src="http://<?= $_SERVER[HTTP_HOST] ?>/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="http://<?php echo $_SERVER[HTTP_HOST].'/css/styles.css'; ?>">
    <script>
        $(document).ready(function(){
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function(){
                if(this.checked){
                    checkbox.each(function(){
                        this.checked = true;
                    });
                } else{
                    checkbox.each(function(){
                        this.checked = false;
                    });
                }
            });
            checkbox.click(function(){
                if(!this.checked){
                    $("#selectAll").prop("checked", false);
                }
            });
        });
    </script>
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Gestion des employées</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="material-icons" title="Accueil">home</i></a>
            </li>
        </ul>
    </div>
</nav>
