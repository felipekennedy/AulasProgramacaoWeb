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
                    <input type="text" name="usuario" id="usuario" class="form-control">
                </div>

                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary" name="salvar">Salvar</button>
                
            </form>
        </div>
    </div>

</body>

</html>