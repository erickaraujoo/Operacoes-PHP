<?php 

    require_once('../arquivos/function/function.php');

    if(isset($_POST['btnResetar'])){
        header('Location: media.php');
    }

    $media = 0;

    if(isset($_POST['btnCalcular'])){
        
        $nota1 = $_POST['txtNota1'];
        $nota2 = $_POST['txtNota2'];
        $nota3 = $_POST['txtNota3'];
        $nota4 = $_POST['txtNota4'];

        if($nota1 != "" && $nota2 != "" && $nota3 != "" && $nota4 != ""){
            
            if(is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3) && is_numeric($nota4)){
                
                $media = calcularMedia($nota1, $nota2, $nota3, $nota4);
                
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
                   
                    <div class="container_media">
                       
                        <header class="titulo_media">
                            <h2>Cálculo de Médias</h2>
                        </header>
                        
                        <div class="form_media">
                            <form  name="frmFormularo_media" action="media.php" method="post">
                                <div class="sectionInput_media">
                                    Nota 1: <input type="text" name="txtNota1" maxlength="3" size="20" value="<?= isset ($nota1) ? $nota1 : "" ?>" class="inputMedia" placeholder="Digite uma nota">
                                </div>

                                <div class="sectionInput_media">
                                    Nota 2: <input type="text" name="txtNota2" maxlength="3" size="20" value="<?= isset ($nota2) ? $nota2 : "" ?>" class="inputMedia" placeholder="Digite uma nota">
                                </div>

                                <div class="sectionInput_media">
                                    Nota 3: <input type="text" name="txtNota3" maxlength="3" size="20" value="<?= isset ($nota3) ? $nota3 : "" ?>" class="inputMedia" placeholder="Digite uma nota">
                                </div>

                                <div class="sectionInput_media">
                                    Nota 4: <input type="text" name="txtNota4" maxlength="3" size="20" value="<?= isset ($nota4) ? $nota4 : "" ?>" class="inputMedia" placeholder="Digite uma nota">
                                </div>

                                <div class="sectionBtnMedia">
                                   
                                    <input type="submit" name="btnCalcular" value="Calcular" class="btnCalcular_media">
                                    
                                    <input type="submit" value="Resetar" class="btnReset_media" name="btnResetar">
                                </div>
                            </form>
                        </div>
                        
                        <div class="resultMedia">
                            <p>A média é:
                                <?php 
                                    if(isset($media)){
                                        echo($media);
                                    };
                                ?>
                            </p> 
                        </div>
                    </div>
                </div>
            </article>
        </div>
        
        <script src="../arquivos/js/main.js"></script>
    </body>
</html>