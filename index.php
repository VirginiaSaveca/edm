<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
        background-image: url(assets/images/transferir.png);
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container" >
        <div class="card "style="width: 445px; ">
            <div class="card-header text-center"><a href="index.html"><img class="logo-img" src="assets/images/logo_45A_0.png" alt="logo" style="width: 250px;"></a><br><br><span class="splash-description">Por favor digite seus dados de Autenticacao.</span></div>
            <div class="card-body">
                <form action="home.php">
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" type="text" placeholder="Digite seu Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" type="password" placeholder="Digite sua senha">
                    </div>
                    
                    <button type="submit" class="btn btn btn-lg btn-block rounded " style="background-color: #F4811F; color:#fff">Entrar</button>
                </form>
            </div>


            <div class="card-footer bg-white p-0  ">
                
                <br>    
                <div id="footer" style="text-align: center;"> Desenvovido por Márcia Saveca </div> <br>
          
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>