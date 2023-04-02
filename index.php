<?php
    session_start();
    include("conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/boostrap.css">
    <link rel="stylesheet" href="stylesind.css">
    <link rel="icon" href="images/ispaj.png">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Iniciar Sessão ISPAJ</title>
</head>
<body>
        <div class="box-load">
            <section id = "processo">
                <div class="ola">
                    <div class="pre"></div>
                    <div class="container-fluid">
                        <p class="text-center">Loading...</span></P>
                    </div>
                </div>
            </section>
        </div>
        <section id="login">
            <div class="container">
                <div class="card-md-1">
                <div class="row g-2">
                    <div class="col-md-4">
                        <img src="images/ispaj.png">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="lo">
                                <h1><sapn class="text-warning">Log</sapn><sapn class="text-warning">in</sapn></h1>
                            </div>
                            <form action="login.php" method="POST">
                                <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"><i class="fa fa-user-circle text-warning" aria-hidden="true"></i>&nbsp Aluno</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" id="inputEmail3" name="aluno" required>
                                </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label"><i class="fa fa-info-circle text-warning" aria-hidden="true"></i>&nbsp Bilhete</label>
                                    <div class="col-sm-7">
                                        <input type="password" class="form-control" name="bi" id="bi" required >
                                    </div>

                                    <div class="row mb-3">
                                        <div class="po col-sm-7">
                                        <button type="submit" class="btn btn-warning text-light" name="btn2"><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbspAcessar</button>
                                        </div>
                                    </div>                                   
                                </div>
                            </form>
                            <script>
                                function mostrar(){
                                    var tipo = document.getElementById("bi");
                                    if(tipo.type == "password"){
                                        tipo.type = "text";
                                    }
                                    else{
                                        tipo.type = "password";
                                    }
                                }
                            </script>
                            <?php
                                    if(isset($_SESSION['msg'])){
                            ?>
                                    <div class="modal" tabindex="-1" id="myModal">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <img src="images/er.png" width="40" height="40" alt="" class="d-inline-block align-text-top"><h5 class="modal-title"><span class="text-danger">Erro</span></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body bg-danger text-light">
                                                <p>Erro ao acessar, não tens o acesso permitido para logar no sistema aluno intruso!</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger text-light" data-bs-dismiss="modal">Voltar</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        $(document) .ready(function (){
                                                $('#myModal').modal('show');
                                            
                                        });
                                    </script>
                            <?php
                            }
                                unset($_SESSION['msg']);
                            ?>
                    </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <script>
            function gerar(){
                document.getElementById('pegar').innerHTML = document.getElementById('bi').value;
        }
    </script>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="gold" fill-opacity="1" d="M0,160L48,165.3C96,171,192,181,288,197.3C384,213,480,235,576,234.7C672,235,768,213,864,218.7C960,224,1056,256,1152,245.3C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    <script>
        $(window).on("load",function(){
            $(".box-load").fadeOut(3000);
        })
    </script>
</body>
</html>