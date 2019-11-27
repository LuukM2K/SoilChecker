<?php
    if($_POST["email"] && $_POST["password"]) {
        if($_POST["email"] === "admin@gmail.com" && $_POST["password"] === "test") {
            header("location: admin/checkers.html");
        } else if($_POST["email"] === "user1@gmail.com" && $_POST["password"] === "test") {
            header("location: public/dashboard.html");
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Testpagina</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <style>
            body {
                background-color: beige;
            }

            .top-bar {
                background-color: #3f6ecd;
                height: 70px;
                width: 100%;
            }

            .logo {
                height: 100%;
            }

            .login-bg {
                min-height: calc(100vh - 100px);
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .login-screen {
                width: 550px;
                height: 400px;
            }

            .login-top {
                margin-bottom: -10px;
                height: 50px;
                background-color: #3f6ecd;
                border-radius: 10px;
                position: relative;
            }

            .login-content {
                width: 98%;
                padding-top: 20px;
                margin: auto;
                display: block;
                background: green;
                border-radius: 10px;
            }

            table {
                width: 70%;
                margin: auto;
                height: 120px;
            }

            .btn-new {
                background-color: #4d73bf;
                color: #fff;
            }

            .btn-new:hover {
                background-color: #3f6ecd;
                color: #fff;
                text-decoration: underline;
            }
        </style>
    </head>
    <body>

    <div class="container-fluid">
        <div class="row">
            <div class="top-bar">
                <img class="logo" src="../assets/images/logo-white.png" />
            </div>
        </div>
        <div class="row h-100">
            <div class="login-bg">
                <div class="login-screen">
                    <div class="login-top">
                        <h2 class="text-white text-center pt-1 pb-1">Inloggen</h2>
                    </div>
                    <div class="login-content text-center pb-3">
                        <form method="post">
                            <table>
                                <tbody>
                                    <tr class="pt-2 pb-2">
                                        <!-- <div class="form-group mb-0 pt-1 pb-2"> -->
                                        <td><label class="text-white" for="email">Gebruikersnaam: </label></td>
                                        <td><input type="text" name="email" placeholder="bijv. user@email.com" class="form-control" /></td>
                                        <!-- </div> -->
                                    </tr>
                                    <tr class="pt-2">
                                        <!-- <div class="form-group mb-0 pt-2 pb-1"> -->
                                        <td><label class="text-white" for="email">Wachtwoord: </label></td>
                                        <td><input type="password" name="password" placeholder="password" class="form-control" /></td>
                                        <!-- </div> -->
                                    </tr>
                                    <tr class="pb-2">
                                        <td class="text-right" colspan="2"><a class="text-white pr-2" href="">Wachtwoord vergeten?</a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="btn btn-new col-md-10 text-center mt-2 mb-1 pt-2 pb-2">Inloggen</button>
                        </form>
                        <button class="btn btn-new col-md-10 text-center mt-1 mb-2 pt-2 pb-2">Registreren</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>