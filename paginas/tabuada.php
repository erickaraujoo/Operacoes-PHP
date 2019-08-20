<?php

    require_once('../arquivos/function/function.php');

    if(isset($_POST['btnResetar'])){
        header('Location: tabuada.php');
    }

    if(isset($_POST['btnCalcular'])){
        
        $tabuada = $_POST['txtTabuada'];
        $contador = $_POST['txtContador']; 
        $cont = 0;
        
        if($tabuada != "" && $contador != ""){
            
            if(is_numeric($tabuada) && is_numeric($contador)){
            
                if($contador > 0){
                    function resultado (){

                        global $tabuada;
                        global $contador;
                        global $cont;

                        return calculaTabuada($tabuada, $contador, $cont);
                    };   
                } else {
                    echo(ERR_MENOR_ZERO);
                }

            } else {
                echo(ERR_NUM);
            };
            
        } else {
            echo(ERR_VAZIO);
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
                    <div class="container_tabuada">
                        
                        <header class="titulo_tabuada">
                            <h2>Tabuada</h2>
                        </header>
                        
                        <div class="tabuada">
                            <div class="container_formTabuada">
                                <div class="sectionTabuada">
                                    <form action="tabuada.php" name="frmFormulario_tabuada" method="post">
                                        <div class="formTabuada">
                                            <div class="txtInput_tabuada">
                                                
                                                <div class="sectionInput_tabuada">
                                                    <label class="lblTabuada">Tabuada: </label>
                                                </div>
                                                
                                                <div class="sectionInput_tabuada">
                                                    <label class="lblContador">Contador: </label>
                                                </div>
                                            </div>
                                            
                                            <div class="input_tabuada">
                                                
                                                <div class="sectionInput_tabuada">
                                                    <input type="text" name="txtTabuada" value="<?=isset($tabuada) ? $tabuada : "" ?>" class="inputTabuada" placeholder="Digite um valor" maxlength="10">
                                                </div>
                                                
                                                <div class="sectionInput_tabuada">
                                                    <input type="text" name="txtContador" value="<?=isset($contador) ? $contador : "" ?>" class="inputTabuada" placeholder="Digite um valor" maxlength="10">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="sectionBtn_tabuada">
                                            
                                            <input type="submit" name="btnCalcular" value="Calcular" class="btnCalcular_tabuada">
                                            
                                            <input type="submit" name="btnResetar" value="Resetar" class="btnReset_tabuada">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                            <div class="container_resultTabuada">
                                
                                <section class="titulo_resultTabuada">
                                    <h2>Resultado</h2>
                                </section>
                                
                                <div class="sectionResultTabuada">
                                    <?php 
                                        if(isset($_POST['btnCalcular'])){
                                            if(is_numeric($tabuada) && is_numeric($contador)){
                                                if($contador > 0){
                                                    $tabuadaFormat = number_format($tabuada,0,'.', '.');
                                                    echo("
                                                        <p class='p_result'>Tabuada do $tabuadaFormat</p>
                                                    ");
                                                    resultado();
                                                }
                                            }
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