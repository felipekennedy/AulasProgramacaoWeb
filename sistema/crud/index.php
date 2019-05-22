<!DOCTYPE html>
<html>

<head>
    <?php
    require_once 'view/head.php';
    ?>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center bg-light">
            <form action="" method="POST">
                <div class="form-group">
                    <label>Usuário</label>
                    <input type="text" name="usuario" id="usuario" class="form-control">
                </div>

                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary" name="autenticar">Entrar</button>
                <a href="/sistema/index.html" class="btn btn-info">voltar</a>
            </form>
        </div>
    </div>


</body>

</html>