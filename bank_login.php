<!DOCTYPE html>
<html lang="pt_BR">
<head>
        <title>ISH Banking Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="styles/images/icons/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="styles/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="styles/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <link rel="stylesheet" type="text/css" href="styles/css/util.css">
        <link rel="stylesheet" type="text/css" href="styles/css/main.css">
</head>
<body>
        <div class="limiter">
                <div class="container-login100">
                        <div class="wrap-login100 p-t-50 p-b-90">
                                <form class="login100-form validate-form flex-sb flex-w" action="" method="POST">
                                        <span class="login100-form-title p-b-51">
                                                Login
                                        </span>
                                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Precisamos de um nome">
                                                <input class="input100" type="text" name="name" id="name" placeholder="Nome">
                                                <span class="focus-input100"></span>
                                        </div>
                                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Precisamos de um e-mail">
                                                <input class="input100" type="email" name="email" id="email" placeholder="E-mail">
                                                <span class="focus-input100"></span>
                                        </div>
                                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Precisamos de uma senha">
                                                <input class="input100" type="password" name="password" id="password" placeholder="Password">
                                                <span class="focus-input100"></span>
                                        </div>
					<?=$error_msg?>
                                        <div class="container-login100-form-btn m-t-17">
                                                <button class="login100-form-btn" name="submit" id="submit">
                                                        Login
                                                </button>

                                        </div>
                                </form>
                        </div>
                </div>
        </div>
        <div id="dropDownSelect1"></div>
        <script src="styles/js/main.js"></script>
</body>
</html>
