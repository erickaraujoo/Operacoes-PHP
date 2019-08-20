<?php 

    # Definindo o texto exibido ao conter erro 
    define(
        "ERR_VAZIO", 
        "<div class='error'>
            <span class='word_erro'>Erro:</span> Favor preencher todos os valores
        </div>");

    define(
        "ERR_NUM", 
        "<div class='error'>
            <span class='word_erro'>Erro:</span> Favor, insira apenas números
        </div>");

    define(
        "ERR_RADIO", 
        "<div class='error'>
            <span class='word_erro'>Erro:</span> Favor escolher uma operação
        </div>");


    define(
        "ERR_VIRGULA",
        "<div class='error'>
            <span class='word_erro'>Erro:</span> Favor, substituir a vírgula(,) para ponto(.)
        </div>");

    define(
        "ERR_DIV_ZERO", 
        "<div class='error'>
            <span class='word_erro'>Erro:</span> Impossível fazer divisão por zero (0)
        </div>");

    define(
        "ERR_MENOR_ZERO", 
        "<div class='error'>
            <span class='word_erro'>Erro:</span> Seu contador deve ser maior que 0
        </div>");

    define(
        "ERR_INICIAL_MAIOR", 
        "<div class='error'>
            <span class='word_erro'>Erro:</span> Favor, seu inicializador deve ser menor que o número final
        </div>");

    function calcularMedia($valor1, $valor2, $valor3, $valor4){
        
        $nota1 = $valor1;
        $nota2 = $valor2;
        $nota3 = $valor3;
        $nota4 = $valor4;
        
        // Realizando o calculo da media
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        $situacao = $media;
        
        return $media;
    }

    # Função que retorna dois numeros e sua operação
    function calcularResultFunction($num1, $num2, $opcao){
        
        $vradio = $opcao;
        $valor1 = $num1;
        $valor2 = $num2;
        
        switch($vradio){
            case "somar":
                $result = $valor1 + $valor2;
                break;

            case "subtrair":
                $result = $valor1 - $valor2;
                break;

            case "multiplicar":
                $result = $valor1 * $valor2;
                break;

            case "dividir":
                $valor2 != 0 ? $result = $valor1 / $valor2 : print(ERR_DIV_ZERO);
                break;

            default:
                echo("Nenhuma operação selecionada");

        };
        
        return $result;
    };

    # Função que retorna dois numeros e sua operação
    function calcularResultIf($num1, $num2, $opcao){
        
        $vradio = $opcao;
        $valor1 = $num1;
        $valor2 = $num2;
        
        # Condições dos valores do radio
        if($vradio == 'somar'){
            $result = $valor1 + $valor2;
        } else if ($vradio == 'subtrair'){
            $result = $valor1 - $valor2;
        } else if ($vradio == 'multiplicar'){
            $result = $valor1 * $valor2;
        } else if ($vradio == 'dividir'){

            # Tratamento de divisão por zero(0) 
            if($valor2 != 0){
                $result = $valor1 / $valor2;
            } else {
                echo(ERR_DIV_ZERO);
            }
        };
        
        return $result;
    };

    # Função que retorna dois numeros e sua operação
    function calcularResultSwitch($num1, $num2, $opcao){
        
        $vradio = $opcao;
        $valor1 = $num1;
        $valor2 = $num2;
        
        switch($vradio){
            case "somar":
                $result = $valor1 + $valor2;
                break;

            case "subtrair":
                $result = $valor1 - $valor2;
                break;

            case "multiplicar":
                $result = $valor1 * $valor2;
                break;

            case "dividir":
                $valor2 != 0 ? $result = $valor1 / $valor2 : print(ERR_DIV_ZERO);
                break;

            default:
                echo("Nenhuma operação selecionada");

        };
        
        return $result;
    };
    
    # Função que calcula a tabuada, com o contador e o limite que o usuario inserir
    function calculaTabuada($valorTabuada, $valorContador, $contador){

        $contador = $valorContador;
        $tabuada = $valorTabuada;
        $cont = $contador;

        $cont = 0;

        while($cont <= $contador){
            $result = $tabuada * $cont;
            $contFormat = number_format($cont, 0, '.','.');
            $tabuadaFormat = number_format($tabuada, 0, '.','.');
            $resultFormat = number_format($result, 0, '.','.');
            echo("
                <p class='lblResult_POST'> 
                    $tabuadaFormat x $contFormat = $resultFormat 
                </p>
            ");
            $cont++;
        };

        
        return $resultFormat;
    }

    function calcularValorImpar($valorInicial, $valorFinal){
        
        $contInicialImpar = $valorInicial;
        $contFinalImpar = $valorFinal;
        
        while($contInicialImpar <= $contFinalImpar){

            if($contInicialImpar % 2 == 1){
                echo("
                    <p class='lblParImpar_POST'> 
                        $contInicialImpar
                    </p>
                ");
            };

            $contInicialImpar++;
        };
        
        return $contInicialImpar;
    };

    function calcularValorPar($valorInicial, $valorFinal){
        
        $contInicialPar = $valorInicial;
        $contFinalPar = $valorFinal;
        
        while($contInicialPar <= $contFinalPar){

            if($contInicialPar % 2 == 0){
                
                echo("
                    <p class='lblParImpar_POST'> 
                        $contInicialPar 
                    </p>
                ");
                
            };

            $contInicialPar++;
        };
        
        return $contInicialPar;
    };

    function contadorPar($valorInicial, $valorFinal, $contador){
        
        $selectInicialPar = $valorInicial;
        $selectFinalPar = $valorFinal;
        
        while($selectInicialPar <= $selectFinalPar){
            if($selectInicialPar % 2 == 0 ){
                $contador++;
            };
            $selectInicialPar++;
        };
        echo($contador);
        
        return $contador;
    };

    function contadorImpar($valorInicial, $valorFinal, $contador){
        
        
        $selectInicialImpar = $valorInicial;
        $selectFinalImpar = $valorFinal;
        
        while($selectInicialImpar <= $selectFinalImpar){
            if($selectInicialImpar % 2 == 1 ){
                $contador++;
            };
            $selectInicialImpar++;
        };
        echo($contador);
        
        return $contador;
    };

?>
    
    