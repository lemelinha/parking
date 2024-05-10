<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body id="login">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 offset-sm-4">
                <div class="card">
                    <div class="card-header text-center bg-white">
                        <img src="/assets/images/logo.png" class="img-fluid" alt='logo' style="width: 50%">
                    </div>
                    <div class="card-body">
                        <form action="/login/auth" method="post" class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                            <br>
                            <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required>
                            <br>
                            <input type="submit" value="Entrar" class="btn btn-primary btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
