<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Usuários Cadastrados</title>

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
    include_once '../Model/Usuario.php';
    include_once '../Controller/FormacaoAcadController.php';
    include_once '../Controller/ExperienciaProfissionalController.php';
    include_once '../Controller/OutrasFormacoesController.php';
    include_once '../Controller/UsuarioController.php';

    if (!isset($_SESSION)) {
        session_start();
    }

    ?>




    <div class="w3-padding-large" id="main">

        <header class="w3-container w3-padding-32 w3-center " id="home">
            <h1 class="w3-text-white w3-panel w3-cyan w3-round-large">
                Dados do Usuário
            </h1>
        </header>


        <div class="w3-padding-16">
            <div class="w3-padding-16 w3-content w3-text-grey w3-container">
                <h2 class="w3-text-cyan w3-center">Dados Pessoais</h2>
                
                    <h3 class="w3-margin">Nome: <?php echo unserialize($_SESSION['Usuario'])->getNome(); ?></h3>
                    <h3 class="w3-margin">CPF: <?php echo unserialize($_SESSION['Usuario'])->getCPF(); ?></h3>
                    <h3 class="w3-margin">Data de Nascimento: <?php echo unserialize($_SESSION['Usuario'])->getDataNascimento(); ?></h3>
                    <h3 class="w3-margin">E-mail: <?php echo unserialize($_SESSION['Usuario'])->getEmail(); ?></h3>
                    
            </div>
        </div>


        <div class="w3-padding-16">
            <div class="w3-padding-16 w3-content w3-text-grey w3-container w3-center">
                <h2 class="w3-text-cyan">Formação Acadêmica</h2>
                <div class="w3-container">
                    <table class="w3-table-all w3-centered">
                        <thead>
                            <tr class="w3-center w3-blue">

                                <th>Início</th>
                                <th>Fim</th>
                                <th>Descrição</th>
                            </tr>
                        </thead>

                        <?php
                        $fCon = new FormacaoAcadController();
                        $results = $fCon->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                        if ($results != null)
                            while ($row = $results->fetch_object()) {
                                echo '<tr>';
                                echo '<td style="width: 15%;">' . $row->inicio . '</td>';
                                echo '<td style="width: 15%;">' . $row->fim . '</td>';
                                echo '<td style="width: 70%;">' . $row->descricao . '</td>';
                                echo '</tr>';
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>


        <div class="w3-padding-16">
            <div class="w3-padding-16 w3-content w3-text-grey w3-container w3-center">
                <h2 class="w3-text-cyan">Experiências Profissionais</h2>
                <div class="w3-container">
                    <table class="w3-table-all w3-centered">
                        <thead>
                            <tr class="w3-center w3-blue">
                                <th>Início</th>
                                <th>Fim</th>
                                <th>Empresa</th>
                                <th>Descrição</th>
                            </tr>

                        </thead>

                        <?php
                        $ePro = new ExperienciaProfissionalController();
                        $results = $ePro->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                        if ($results != null)

                            while ($row = $results->fetch_object()) {
                                echo '<tr>';
                                echo '<td style="width: 15%;">' . $row->inicio . '</td>';
                                echo '<td style="width: 15%;">' . $row->fim . '</td>';
                                echo '<td style="width: 15%;">' . $row->empresa . '</td>';
                                echo '<td style="width: 55%;">' . $row->descricao . '</td>';
                                echo '</tr>';
                            }
                        ?>

                    </table>
                </div>
            </div>
        </div>


        <div class="w3-padding-16">
            <div class="w3-padding-16 w3-content w3-text-grey w3-container w3-center">
                <h2 class="w3-text-cyan">Outras Formações</h2>
                <div class="w3-container">
                    <table class="w3-table-all w3-centered">
                        <thead>
                            <tr class="w3-center w3-blue">

                                <th>Início</th>
                                <th>Fim</th>
                                <th>Descrição</th>
                            </tr>
                        </thead>

                        <?php
                        $fCon = new OutrasFormacoesController();
                        $results = $fCon->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                        if ($results != null)
                            while ($row = $results->fetch_object()) {
                                echo '<tr>';
                                echo '<td style="width: 15%;">' . $row->inicio . '</td>';
                                echo '<td style="width: 15%;">' . $row->fim . '</td>';
                                echo '<td style="width: 70%;">' . $row->descricao . '</td>';
                                echo '</tr>';
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>


        <div class="w3-padding-64">
            <div class="w3-padding-16 w3-content w3-text-grey w3-container w3-center">
               
                <form action="/Controller/Navegacao.php" method="post" class= "w3-row w3-light-grey w3-text-blue w3-margin" style="width:30%;">
                    <div class="w3-row w3-center">
                        <div>
                            <button name="btnVoltar" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 90%;">
                                <i class="w3-large fa fa-angle-double-left"></i> Voltar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        
    </div>

</body>

</html>
