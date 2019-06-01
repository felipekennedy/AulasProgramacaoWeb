<!DOCTYPE html>
<html>

<head>
    <?php
    require_once '../../view/head.php';
    ?>
</head>

<body>
    <?php
    require_once '../../view/nav.php';
    ?>

    <div class="container">
        <div class="row justify-content-center bg-light">
            <form action="usuarioDAO.php" method="POST">
                <div class="form-group">
                    <label>Usuário</label>
                    <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Digite o usuario aqui!">
                </div>

                <div class="form-group">
                    <label>senha</label> <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua senha aqui!">
                </div>

                <button type="submit" class="btn btn-primary" name="salvar">Salvar</button>

            </form>
        </div>

        <?php
        require_once('../banco/conexao.php');

        $resultado = $conexao->query("SELECT * FROM usuario") or die(mysqli_error($conexao));
        ?>

        <div class="row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>usuario</th>
                        <th>Senha</th>
                        <th colspan="2">Ações</th>
                    </tr>
                </thead>

                <?php
                while ($row = $resultado->fetch_assoc()) : ?>
                    <tr>
                        <td>
                            <?php echo $row['id']; ?>
                        </td>

                        <td>
                            <?php echo $row['usuario']; ?>
                        </td>

                        <td>
                            <?php echo $row['senha']; ?>
                        </td>

                        <td>
                            <a href="#" class="btn btn-info"> Editar</a>
                            <a href="usuarioDAO.php?excluir=<?php echo $row['id']; ?>" class="btn btn-danger"> Excluir</a>

                        </td>
                    </tr>
                <?php endwhile; ?>

            </table>
        </div>



    </div>

</body>

</html>