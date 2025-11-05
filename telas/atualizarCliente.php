<?php
    namespace Projeto\telas;
    require_once("../DAO/Conexao.php");
    require_once("../DAO/Atualizar.php");
    use Projeto\DAO\Conexao;
    use Projeto\DAO\atualizar;

    $conexao = new Conexao();
    $atualizar = new Atualizar();
    $resultado = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Atualizar</title>
</head>
<body>
    <h1>Atualizar</h1>
    <form method="POST" class="form-control form-control-sm">
        <div class="mb-3">
            <label class="form-label">CPF: </label>
            <input type="text" classe="form-control" id="tCPF" name="tCPF">
        </div>
        <select name="campos" class="form-select" aria-label="default select example">
            <option selected>Escolha uma compo para atualizar</option>
            <option value="nome">nome</option>
            <option value="telefone"></option>
            <option value="logradouro"></option>
            <option value="numero"></option>
            <option value="complemento"></option>
            <option value="bairro"></option>
            <option value="cidade"></option>
            <option value="estado"></option>
            <option value="pais"></option>
            <option value="cep"></option>
        </select>
        <div class="mb-3">
            <label class="form=label">Novo Dado: </label>
            <imput type="text" class="form-control" id="novoDado" name="novoDado"/>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar
            <?php
            if(isset($_POST['tCPF']) != ""){
                $resultado = $atualizar->atualizarCliente($conexao, $_POST['campos'],$_POST['novoDado'],$_POST['tCPF']);
             }
            ?>
        </button>
    <form>
    <div class="mb-3">
        <?php
            echo $resultado
        ?>
        <button class="btn btn-primary">
        <a href="index.php" style="color:#fff;text-decoration:nome">Voltar</a>
    </button>
</body>
</html>