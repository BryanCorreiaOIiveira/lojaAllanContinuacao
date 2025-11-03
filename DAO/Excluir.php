<?php
    namespace Projeto\DAO;
    require_once('conexao.php');
    use Projeto\DAO\Conexao;

    class Excluir{
        function excluirCliente(Conexao $conexao, string $cpf){
            try{
                $conn   = $conexao->conectar();
                $sql    = "delete from cliente where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);

                myqli_close($conn);
                if($result){
                    echo "Excluído com sucesso!";
                }else{
                    echo "Não excluído!";
                }
            }catch(Exception  $erro){
                echo "<br><br>Algo deu errado!<br><br> $erro";
            }
        }//fim do ExluirCliente
    }//fim da classe
?>