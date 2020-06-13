<?php
    error_reporting(~E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Toner Control</title>
</head>
<body>
    <form class="form-login" action="#" method="post">
        <div class="login-card card">
            <div class="card-header">
                <i class="icofont-print mr-2 mt-2"></i>
                <span class="font-weight-light">Toner</span>
                <span class="font-weight-light mx-2">Control</span>
            </div>
            <div class="card-body">
            <?php include(TEMPLATE_PATH. '/messages.php') ?>
                <div class="form-group">
                    <input type="text" id="username" name="username"
                        class="form-control <?= $errors['username'] ? 'is-invalid' : '' ?>"
                        value="<?= $_POST['username'] ?>" placeholder="Usuário">
                    <div class="invalid-feedback">
                        <?php echo $errors['username'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password"
                    class="form-control <?= $errors['password'] ? 'is-invalid' : '' ?>"
                    placeholder="Senha">
                    <div class="invalid-feedback">
                        <?php echo $errors['password'] ?>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-md btn-primary">Entrar</button>
            </div>
        </div>
    </form>
</body>
</html>