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
    require_once 'usuarioDAO.php';
    ?>

    <div class="container">
        <div class="row justify-content-center bg-light">
            <form action="usuarioDAO.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label>Usuário</label>
                    <input type="text" value="<?php echo $usuario; ?>" name="usuario" id="usuario" class="form-control" placeholder="Digite o usuario aqui!">
                </div>

                <div class="form-group">
                    <label>senha</label> <input type="password" value="<?php echo $senha; ?>" name="senha" id="senha" class="form-control" placeholder="Digite sua senha aqui!">
                </div>

                <div class="form-group">
                    <?php if ($id != 0) : ?>
                        <button type="submit" class="btn btn-info" name="atualizar">Atualizar</button>
                    <?php else : ?>
                        <button type="submit" class="btn btn-primary" name="salvar">Salvar</button>
                    <?php endif ?>
                </div>
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
                            <a href="usuario.php?editar=<?php echo $row['id']; ?>" class="btn btn-info"> Editar</a>
                            <a href="usuarioDAO.php?excluir=<?php echo $row['id']; ?>" class="btn btn-danger"> Excluir</a>

                        </td>
                    </tr>
                <?php endwhile; ?>

            </table>
        </div>



    </div>

</body>

</html>