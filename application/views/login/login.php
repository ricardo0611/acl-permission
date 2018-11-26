<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body>
    <?= ($mensagem ?? $mensagem) ?>
    <form action="<?= base_url('auth/login') ?>" method="post">
        <input type="email" name="email" placeholder="email@domain.com">
        <input type="password" name="senha" placeholder="sua senha">
        <button type="submit">Logar</button>
    </form>
</body>
</html>