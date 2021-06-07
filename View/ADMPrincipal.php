<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Painel de Administração</title>

    <style>
        .w3-sidebar {
            width: 120px;
        }

        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif
        }
    </style>

</head>

<body class="w3-light-grey">


    <?php

    if (!isset($_SESSION)) {
        session_start();
    }
    ?>


    <div class="w3-padding-large" id="main">

        <header class="w3-container w3-padding-32 w3-center " id="home">
            <br>
            <h1 class="w3-text-cyan">
                ADMINISTRAÇÃO
            </h1>
            <h1 class="w3-text-cyan">
                SISTEMA DE CURRICULOS
            </h1>
        </header>

        <div class="w3-row w3-section w3-container w3-center">
            <div class="w3-half" style="">
                <form action="/Controller/Navegacao.php" method="post" class="w3-light-grey w3-text-blue w3-margin w3-right-align">
                    <input class="w3-input w3-border w3-round-large" name="nome_form" type="hidden" value="frmLoginADM" />
                  
                        <button name="btnListarCadastrados" class="w3-button w3-block w3-margin-top w3-blue w3-cell w3-round-large" style="width: 25%;">
                            <br>
                            <i class = "fa fa-address-book-o w3-large"></i><br>
                            <p class="w3-xlarge">Usuários<br>
                            Cadastrados</p>
                        </button>
                </form>
            </div>

            <div class="w3-half w3-center" style="">
                <form action="/Controller/Navegacao.php" method="post" class="w3-light-grey w3-text-blue w3-margin w3-left-align">
                    <input class="w3-input w3-border w3-round-large" name="nome_form" type="hidden" value="frmLoginADM2" />
                  
                        <button name="btnListarADM" class="w3-button w3-block w3-margin-top w3-blue w3-cell w3-round-large" style="width: 25%;">
                            <br>
                            <i class = "fa fa-address-book-o w3-large"></i><br>
                            <p class="w3-xlarge">Administradores<br>
                            Cadastrados</p>
                        </button>
                </form>
            </div>
        </div>

    </div>


</body>

</html>
