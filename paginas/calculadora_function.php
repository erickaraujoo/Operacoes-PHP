<?php 
    
    require_once('../arquivos/function/function.php');

    if(isset($_POST['btnResetar'])){
        header('Location: calculadora_function.php');
    }

    # Inicializadores
    $result = 0;
    $vradio = '';

    # Evento para botão "Calcular"
    if(isset($_POST['btnCalcular'])){
        
        # Cotedando dados
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        
        # Validação para os campos de textos, caso estiverem vazias
        if($valor1 != "" && $valor2 != ""){
            
            # Validação para os campos de textos, caso não forem apenas números
            if(is_numeric($valor1) && is_numeric($valor2)){
                
                # Validação dos input Radio, caso não for selecionado 
                if(isset($_POST['radioGroup_calc'])){
                        
                    # Coletando o valor do radio, acrescentando o lowercase para deixar sempre em minúsculo
                    $vradio = strtolower($_POST['radioGroup_calc']);
                    
                    # Criamos uma função para realizar os calculos, essa função retorna o resultado da operação escolhida
                    $result = calcularResultFunction($valor1, $valor2, $vradio);
                    
                } else {
                    
                    # Impressão no HTML
                    echo(ERR_RADIO);
                };
                
            } else {
                
                # Tratamento para entrada somente do (.) ao invés da (,)
                if(strstr($valor1, ",") != "" || strstr($valor2, ",") != ""){
                    echo(ERR_VIRGULA);
                } else {
                    # Impressão no HTML
                    echo(ERR_NUM);
                };
            };
            
        } else {
            
            # Impressão no HTML
            echo(ERR_VAZIO );
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
                   
                    <div class="container_calc">

                        <header class="titulo_calc">
                            <h2>Calculadora Simples</h2>
                        </header>

                        <div class="container_form">
                           
                            <form name="frmCalculadora_calc" method="post" action="calculadora_function.php">
                               
                                <div class="containerInput_calc">
                                   
                                    <div class="sectionInput_calc">
                                        Valor 1: <input type="text" placeholder="Digite um valor" name="valor1" value="<?=isset($valor1)?$valor1:""?>" class="inputCalc">
                                    </div>
                                    
                                    <div class="sectionInput_calc">
                                        Valor 2: <input type="text" placeholder="Digite um valor" name="valor2" value="<?=isset($valor2)?$valor2:"" ?>" class="inputCalc">
                                    </div>
                                </div>
                                
                                <div class="container_valores">
                                   
                                    <div class="valores_calc">
                                       
                                        <div class="sectionRadioCalc">
                                            <input type="radio" name="radioGroup_calc" value="somar" <?= $vradio == 'somar' ? 'checked="true"' : '' ?>> Somar
                                        </div>
                                        
                                        <div class="sectionRadioCalc">
                                            <input type="radio"  name="radioGroup_calc" value="subtrair" <?= $vradio == 'subtrair' ? 'checked="true"' : '' ?>> Subtrair
                                        </div>
                                        
                                        <div class="sectionRadioCalc">
                                            <input type="radio" name="radioGroup_calc"  value="multiplicar" <?= $vradio == 'multiplicar' ? 'checked="true"' : '' ?>> Multiplicar
                                        </div>
                                        
                                        <div class="sectionRadioCalc">
                                            <input type="radio" name="radioGroup_calc"  value="dividir" <?= $vradio == 'dividir' ? 'checked="true"' : '' ?>> Dividir
                                        </div>
                                        
                                        <div class="sectionBtnCalc">

                                            <input type="submit" name="btnCalcular" value="Calcular" class="btnCalcular_calc">

                                            <input type="submit" value="Resetar" class="btnReset_calc" name="btnResetar">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="resultCalc">
                                    <?= $result ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        
        <script src="../arquivos/js/main.js"></script>
    </body>
</html>