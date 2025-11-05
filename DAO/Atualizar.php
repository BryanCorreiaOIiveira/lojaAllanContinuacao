<?php
     namespace Projeito\DAO;
     require_once("../DAO/conexao.php");
     require_once("../DAO/consultar.php");
     use Projeto\DAO\conexao;
     use Projeto\DAO\consultar;

     class Atualizar{
        function AtualizarCliente(Conexao $conexao,
                                   string $campo,
                                   string $novoDado,
                                   string $cpf
        )
        {
            try{
                $conn = $conexao->conectar();
                $sql  = "update from cliente set $campo = '$novoDado' where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);
                myqli_close($conn);

                if($resutl){
                    return "Atualizado com sucesso!";
                }//fim do if
            }catch(Exception $erro){
                echo "Algo deu errando! $erro";
            }
        }//fim do Atualizarcliente
     }//fim da classe