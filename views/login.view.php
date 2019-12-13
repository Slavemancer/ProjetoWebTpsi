<!DOCTYPE html>
<html>
<?php include("../controllers/login.constroller.php"); ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <link rel="stylesheet" href="assets/css/login-page.css">
</head>

<body>
    <div class=" container-fluid ">
        <div class="row no-gutter ">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image "></div>
            <div class="col-md-8 col-lg-6 ">
                <div class="login d-flex align-items-center py-5 ">
                    <div class="container ">
                        <div class="row ">
                            <div class="col-md-9 col-lg-8 mx-auto ">
                                <h3 class="login-heading mb-4 ">Welcome back!</h3>
                                <form id="login-form" method="POST" action="login.php">
                                    <div class="form-label-group ">
                                        <input name="email" type="email " id="inputEmail " class="form-control " placeholder="Email address " required autofocus>
                                        <label for="inputEmail ">Email</label>
                                    </div>

                                    <div class="form-label-group ">
                                        <input name="password" type="password" id="inputPassword " class="form-control " placeholder="Password " required>
                                        <label for="inputPassword ">Password</label>
                                    </div>

                                    <div class="custom-control custom-checkbox mb-3 ">
                                        <input name="remember" type="checkbox " class="custom-control-input " id="customCheck1 ">
                                        <label class="custom-control-label " for="customCheck1 ">Lembrar
                                            password</label>
                                    </div>
                                    <button name="entrar" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2 " type="submit ">Entrar</button>
                                    <div class="text-center ">
                                        <a class="small " href="# ">Esqueces-te a Palavra-Passe ?</a></div>
                                    <div class="text-center ">
                                        <a class="small " id="open-register" href="# ">Registar-se ?</a></div>
                                </form>
                                <form id="register-form">
                                    <div class="form-label-group ">
                                        <input name="username" type="text " id="inputUsername " class="form-control " placeholder="Nome de Utilizador  " required autofocus>
                                        <label for="inputUsername ">Nome de Utilizador</label>
                                    </div>
                                    <div class="form-label-group ">
                                        <input name="email" type="email " id="inputEmail " class="form-control " placeholder="Email address " required autofocus>
                                        <label for="inputEmail ">Email</label>
                                    </div>

                                    <div class="form-label-group ">
                                        <input name="password" type="password " id="inputPassword " class="form-control " placeholder="Password " required>
                                        <label for="inputPassword ">Password</label>
                                    </div>
                                    <button name="registar" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2 " type="submit ">Registar</button>
                                    <div class="text-center ">
                                        <a class="small " id="open-login" href="# ">Entrar ?</a></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js "></script>
    <script src="assets/js/login.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>