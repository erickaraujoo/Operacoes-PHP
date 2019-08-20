<?php 

    require_once('../arquivos/function/function.php');

    if(isset($_POST['btnCalcular_parImpar'])){
        
        $contador = 0;
        
        if(isset($_POST['select_numInicial']) && isset($_POST['select_numFinal'])){
            
            $selectInicio = $_POST['select_numInicial'];
            $selectFinal = $_POST['select_numFinal'];

            $selectInicialPar = $_POST['select_numInicial'];
            $selectFinalPar = $_POST['select_numFinal'];

            $selectInicialImpar = $_POST['select_numInicial'];
            $selectFinalImpar = $_POST['select_numFinal'];
            
            
            if($selectInicio < $selectFinal){
                function resultPar(){
                    
                    global $selectInicialPar;
                    global $selectFinalPar;
                    
                    return calcularValorPar($selectInicialPar, $selectFinalPar);
                }
                function resultImpar(){
                    
                    global $selectInicialImpar;
                    global $selectFinalImpar;
                    
                    return calcularValorImpar($selectInicialImpar, $selectFinalImpar);
                }
            } else {
                echo(ERR_INICIAL_MAIOR);
            }
 
        } else{
            echo(ERR_VAZIO);
        };

        if(isset($_POST['btnResetar'])){
            header('Location: impar_par.php');
        };
    };
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Atividade - PHP</title>
        <link rel="stylesheet" href="../arquivos/css/style.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    </head>
    <body>
        <div class="container">
           
            <div class="sectionMenu">
                <img src="../arquivos/images/menu.png" class="imgMenu" alt="menu">
            </div>
            
            <div class="sectionMenu_md">
                <img src="../arquivos/images/menu.png" class="imgMenu_md" alt="menu">
            </div>
            
            <!-- Corpo do Menu -->
            <div class="containerMenu">
                <div class="menu">
                    <h2>MENU</h2>
                    
                    <!-- Navegadores da página -->
                    <a href="media.php">
                        <div class="navMenu">
                            <img src="../arquivos/images/media.png" class="icon" alt="icone média">
                            Média
                        </div>
                    </a>
                    
                    <div class="navExpand navMenu">
                        <img src="../arquivos/images/calculadora.png" class="icon" alt="icone calculadora">
                        Calculadora
                        <img src="../arquivos/images/seta.png" class="arrowIcon" alt="^">
                    </div>
                    
                    <!-- Submenu da Calculadora -->
                    <div class="submenu">
                       <a href="../paginas/calculadora_function.php">
                            <div class="navSubmenu">
                                <img src="../arquivos/images/function.png" class="icon" alt="icone Function">
                                Function
                            </div>
                        </a>
                        <a href="../paginas/calculadora_if.php">
                           <div class="navSubmenu">
                                <img src="../arquivos/images/if.png" class="icon" alt="icone if">
                                If
                            </div>
                        </a>
                        <a href="../paginas/calculadora_switch.php">
                           <div class="navSubmenu">
                                <img src="../arquivos/images/switch.png" class="icon" alt="icone switch">
                                Switch
                            </div>
                        </a>
                    </div>
                    
                    <a href="tabuada.php">
                        <div class="navMenu">
                            <img src="../arquivos/images/tabuada.png" class="icon" alt="icone tabuada">
                            Tabuada
                        </div>
                    </a>
                    <a href="impar_par.php">
                       <div class="navMenu">
                            <img src="../arquivos/images/impar_par.png" class="icon" alt="icone impar / par">
                            Impar / Par
                        </div>
                    </a>
                    <a href="../index.html">
                       <div class="navHome navMenu">
                            <img src="../arquivos/images/home.png" class="icon" alt="icone inicio">
                            Início
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="containerMenu_md">
                <div class="ulMenu_md">
                    <a href="media.php">
                       <div class="liMenu_md">
                            Média
                        </div>
                    </a>
                    <div class="liExpand_md liMenu_md">
                        Calculadora
                        <img src="../arquivos/images/seta.png" class="arrowIcon" alt="icone calculadora">
                    </div>
                    
                    <div class="ulSubmenu_md">
                        <a href="../paginas/calculadora_function.php">
                            <div class="liSubmenu_md">
                                Function
                            </div>
                        </a>
                        <a href="../paginas/calculadora_if.php">
                           <div class="liSubmenu_md">
                                If
                            </div>
                        </a>
                        <a href="../paginas/calculadora_switch.php">
                            <div class="liSubmenu_md">
                                Switch
                            </div>
                        </a>
                    </div>
                    
                    <a href="tabuada.php">
                        <div class="liMenu_md">
                            Tabuada
                        </div>
                    </a>
                    <a href="impar_par.php">
                        <div class="liMenu_md">
                            Impar / Par
                        </div>
                    </a>
                    <a href="../inicio.php">
                        <div class="liMenu_md">
                            Página Inicial
                        </div>
                    </a>
                </div>
            </div>

            <article class="containerOperacao">

                <!-- Cabeçalho -->
                <header class="headerOperacao">
                    <h1>Operações lógicas - PHP</h1>
                </header>

                <!-- Corpo das operacoes -->
                <div class="sectionOperacao">
                   
                    <!-- Div que segura o conteudo-->
                    <div class="container_parImpar">
                       
                        <header class="titulo_parImpar">
                            <h2>Par ou Impar</h2>
                        </header>
                       
                        <!-- Div para o formulário -->
                        <div class="form_parImpar">
                            <form action="impar_par.php" method="post" name="frmFormulario_parImpar">
                                <div class="form_numInicial">
                                    <p class="p_form">Nº Inicial: </p>
                                    <select class="select_form" name="select_numInicial">
                                        <option disabled selected>Selecione um número</option>
                                        <?php 
                                            for($i = 0; $i <= 500; $i++){
                                                
                                                // $selected = (isset($_POST['select_numInicial']) && $_POST['select_numInicial'] == $contInicialPar) ? 'selected' : '';
                                                echo("<option>$i</option>");
                                            };
                                        ?>
                                    </select>
                                </div>
                                <div class="form_numFinal">
                                    <p class="p_form">Nº Final: </p>
                                    <select class="select_form" name="select_numFinal">
                                        <option disabled selected>Selecione um número</option>
                                        <?php 
                                            for($i = 100; $i <= 1000; $i++){
                                                echo("<option>$i</option>");
                                            };
                                        ?>
                                    </select>
                                </div>
                                <div class="btnForm_parImpar">
                                    <input type="submit" class="btnCalcular_parImpar" name="btnCalcular_parImpar" value="Calcular">
                                    <input type="submit" class="btnReset_parImpar" name="btnResetar" value="Resetar">
                                </div>
                            </form>
                        </div>
                        
                        <!-- Div para os resultados -->
                        <div class="container_result_parImpar">
                            
                            <div class="result_par">
                                <section class="titulo_resultPar">
                                    <h2>Pares</h2>
                                </section>
                                <div class="par">
                                    <?php 
                                        if(isset($_POST['btnCalcular_parImpar'])){
                                            if(isset($_POST['select_numInicial']) && isset($_POST['select_numFinal'])){
                                                if($selectInicio < $selectFinal){
                                                    resultPar();
                                                } else {
                                                    
                                                };
                                            };
                                        };
                                    ?>
                                </div>
                                <div class="qtd_parImpar">
                                    Quantidade de Pares:
                                    <?php 
                                        if(isset($_POST['btnCalcular_parImpar'])){
                                            if(isset($_POST['select_numInicial']) && isset($_POST['select_numFinal'])){
                                                contadorPar($selectInicialPar, $selectFinalPar, $contador);
                                            } else {
                                                echo("0");
                                            };
                                        } else{
                                            echo("0");
                                        }
                                    ?>
                                </div>
                            </div>
                            
                            <div class="result_impar">
                                <section class="titulo_resultImpar">
                                    <h2>Impares</h2>
                                </section>
                                <div class="impar">
                                    <?php 
                                        if(isset($_POST['btnCalcular_parImpar'])){
                                            if(isset($_POST['select_numInicial']) && isset($_POST['select_numFinal'])){
                                                if($selectInicio < $selectFinal){
                                                    resultImpar();
                                                } 
                                            };
                                        };
                                    ?>
                                </div>
                                <div class="qtd_parImpar">
                                    Quantidade de Impares:
                                    
                                    <?php 
                                        if(isset($_POST['btnCalcular_parImpar'])){
                                            if(isset($_POST['select_numInicial']) && isset($_POST['select_numFinal'])){
                                                contadorImpar($selectInicialImpar, $selectFinalImpar, $contador);
                                            } else {
                                                echo("0");
                                            }
                                        } else {
                                            echo("0");
                                        };
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <script src="../arquivos/js/main.js"></script>
    </body>
</html>