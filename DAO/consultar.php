<?php
    namespace Projeto\DAO;
    require_once('conexao.php');
    use projeto\DAO\conexao;

    class consultar{
        function consultarEndereco(conexao $conexao){
            try{
                $conn   = $conexao->conectar();
                $sql    = "select max(codigo) from endereco";
                $result = mysqli_query($conn, $sql);

                while($dado = mysqli_fetch_Array($result)){
                    return $dado['max(codigo)'];//retornar o último código de endereço cadastrado
                }
                
            }catch(Exception $erro){
                echo "<br><br> Algo deu errado! <br><br> $erro";
            }//fim do try...catch
        }//fim do método consultarEndereco

        function consultarCliente(Conexao $conexao, string $cpf){
            try{
                $conn   = $conexao->conectar();
                $sql    = "select * from cliente inner join endereco on
                        codigoEndereco = e.codigo and c.cpf = '$cpf'";

                $result = mysqli_query($conn, $sql);

                while($dados = myqli_fetch_Array($result)){
                    if($dados["cpf"] == $cpf){
                        echo "<br>CPF: ".$dados['CPF'].
                             "<br>Nome: ".$dados['nome'].
                             "<br>Telefone: ".$dados['telefone'].
                             "<br>Total de Compras: ".$dados['totalCompras'].
                             "<br>Logradouro: ".$dados['logradouro'].
                             "<br>Número: ".$dados['numero'].
                             "<br>Complemento: ".$dados['complemento'].
                             "<br>Bairro: ".$dados['bairro'].
                             "<br>Cidade: ".$dados['cidade'].
                             "<br>Estado: ".$dados['estado'].
                             "<br>Pais: ".$dados['pais'].
                             "<br>CEP: ".$dados['cep'];
                        return;//Encerrar o processo
                    }//fim do if
                }//fim do while
            }catch(Exception $erro){
                echo "Algo deu errado!<br><br> $erro";
            }//fim do catch
        }//fim do consultarCliente

    }//fim do consultar





?>