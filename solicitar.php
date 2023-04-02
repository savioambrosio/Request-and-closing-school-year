<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/boostrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/ispaj.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Solicitar Documentos ISPAJ</title>
</head>
<body>
    <section id="navegar">
          <div class="nave">
                <nav class="navbar navbar-expand-lg navbar-dark">
                  <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                      <img src="images/ispaj.png" alt="" width="75" height="70" class="d-inline-block align-text-top">
                    </a>
                
                    <a class="navbar-brand" href="#">ISPAJ <span class="text-dark">ALUNO : <?php echo $_SESSION['aluno'];?></span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ms-auto mb-6 mb-lg-0">

                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle text-light" href="#" role="button" color ="red" data-bs-toggle="dropdown" fill="#fbbe07" aria-expanded="false">
                           <img src="images/CONFIG.png"  alt="" width="40" height="40" class="d-inline-block align-text-top">
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fa fa-info-circle" aria-hidden="true"></i> Sobre</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-times-circle" aria-hidden="true"></i> Sair</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>
            </div>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-sm" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark" id="exampleModalLabel">ISPAJ <span class="text-warning" id="exampleModalLabel"> SAIR</span></h5>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Deseja sair do Sistema ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                      <a class="btn btn-warning text-light" href="<c:url value=" /logout "/>Sim</a>
                    </div>
                  </div>
                </div>
            </div>
<!-- Modal --> 
                <div class="modal fade" id="info" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="ed">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <img src="images/mul.png"  alt="" width="110" height="50" class="d-inline-block align-text-top">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <div class="ca">
                                  <div class="card" style="width: 16rem;">
                                    <img src="images/ko.png" width="90" height="150" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <p class="card-title"><span class="text-warning">IBAN: </span>AO06 0051 0000 6675 5871 1513 4 </p>                                 
                                      <button href="#" class="btn btn-dark text-light" onclick="myFunctione()" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modamensa"><i class="fa fa-clipboard" aria-hidden="true" ></i> Copiar IBAN BFA!</button>
                                    </div>
                                </div>
                              </div>
                            </div>
                              <div class="carousel-item">
                                <div class="ca3">
                                  <div class="card" style="width: 16rem;">
                                    <img src="images/pol.png" width="90" height="150" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <p class="card-title"><span class="text-primary">IBAN: </span>AO06 0051 0000 6675 5871 1513 4 </p>                                  
                                      <button href="#" class="btn btn-dark text-light" onclick="myFunctione()" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modamensa"><i class="fa fa-clipboard" aria-hidden="true" ></i> Copiar IBAN BAI!</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <div class="ca2">
                                  <div class="card" style="width: 16rem;">
                                    <img src="images/bin.png" width="90" height="150" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <p class="card-title" style><span class="text-danger">IBAN: </span>AO06 0051 0000 6675 5871 1513 4 </p>                                 
                                      <button href="#" class="btn btn-dark text-light" onclick="myFunctione()" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modamensa"><i class="fa fa-clipboard" aria-hidden="true" ></i> Copiar IBAN BIC!</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <script>
                                    function myFunctione() {
                                        navigator.clipboard.writeText("AO06 0051 0000 6675 5871 1513 4");

                                        // Alert the copied text
                                        alert("Copied the text: " + copyText.text);
                                      }
                            </script>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <?php
                            if(isset($_SESSION['msgh'])){
                            ?>
                                <div class="modal" tabindex="-1" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <img src="images/image.png" width="40" height="40" alt="" class="d-inline-block align-text-top"><h5 class="modal-title"> aviso <span class="text-warning"> ISPAJ</span></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p> Por favor digite correctamente os seus dados!</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-warning text-light" data-bs-dismiss="modal">OK</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    $(document) .ready(function (){
                                        $('#info').modal('show');
                                    });
                                </script>
                            <?php
                            }
                            unset($_SESSION['msgh']);
                ?>
            <div class="modal fade" id="modamensa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-sm" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark" id="exampleModalLabel"><span class="text-warning" id="exampleModalLabel"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Confirmação</span></h5>
                    </div>
                    <div class="modal-body">
                      <P align="justify">IBAN copiado com sucesso, faz o pagamento, em seguida clica sobre o botao a baixo!</P>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary text-light" data-bs-dismiss="modal" onclick="gerar()"><i class="fa fa-server" aria-hidden="true"></i> Solicitar</button>
                        <button type="button" class="btn btn-warning text-light" data-bs-dismiss="modal" onclick="solid()"><i class="fa fa-times-circle" aria-hidden="true"></i> Trancar</button>
                    </div>
                  </div>
                </div>
            </div>   
            <div class="modal fade" id="mod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-sm" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark" id="exampleModalLabel"><span class="text-warning" id="exampleModalLabel"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Atenção</span></h5>
                    </div>
                    <div class="modal-body">
                      <P align="justify">Para continuar com o processo, tens que preencher todos o os campos de acordo ao seu pedido!
                      </P>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning text-light" data-bs-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i> Fechar</button>
                    </div>
                  </div>
                </div>
            </div>
            <script>
                  function gerar(){
                    if($('#nome').val() == "" ){
                      $(document) .ready(function (){
                        $('#mod').modal('show');
                      });                     
                    }              
                    else{
                      $(document) .ready(function (){
                        $('#staticBackdrop').modal('show');
                      }); 
                      document.getElementById('pegar').innerHTML = document.getElementById('nome').value;  
                      document.getElementById('pegar2').innerHTML = document.getElementById('telefone').value;        
                      document.getElementById('pegar3').innerHTML = document.getElementById('m').value;
                      document.getElementById('pegar4').innerHTML = document.getElementById('inpu').value;
                      document.getElementById('pegar5').innerHTML = document.getElementById('turn').value;
                    }                   
                  }
            </script>

            <script>
                  function solid(){
                    if($('#nome2').val() == ""){
                      $(document) .ready(function (){
                        $('#mod').modal('show');
                      });                     
                    }              
                    else{
                      $(document) .ready(function (){
                        $('#staticBackdrop2').modal('show');
                      }); 
                      document.getElementById('pegar6').innerHTML = document.getElementById('nome2').value;          
                      document.getElementById('pegar7').innerHTML = document.getElementById('matriculas').value;
                      document.getElementById('pegar8').innerHTML = document.getElementById('telefones').value;
                      document.getElementById('pegar9').innerHTML = document.getElementById('cursos').value;
                      document.getElementById('pegar10').innerHTML = document.getElementById('turno').value; 
                    }                   
                  }
            </script>

            <div class="modal fade" id="staticBackdrop2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-dark" id="exampleModalLabel"> ISPAJ <span class="text-warning" > Informação</span></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class ="forma5">
                        <form class="col g-3 row g-3">
                          <div class="ola">
                              <div class="container-fluid row mt-1 ms-auto justify-content-center">
                                <img src="images/ud.png" class="card-img-top" alt="..." >
                              <!-- Grid column -->
                              </div>
                          </div>
                          <div class="col-md-9 container-fluid">
                            <label for="exampleFormControlInput1" class="form-label text-secondary">Nome:&nbsp</label><span id="pegar6"></span>
                          </div>
                          <div class="col-md-9 container-fluid">
                          <label for="exampleFormControlInput1" class="form-label text-secondary">Matricula: &nbsp</label><span id="pegar7"></span>
                          </div>
                          <div class="col-md-9 container-fluid">
                          <label for="exampleFormControlInput1" class="form-label text-secondary">Telefone:&nbsp</label><span id="pegar8"></span>
                          </div>
                          <div class="col-md-9 container-fluid">
                          <label for="exampleFormControlInput1" class="form-label text-secondary">Curso:&nbsp</label><span id="pegar9"></span>
                          </div>
                          <div class="col-md-9 container-fluid">
                          <label for="exampleFormControlInput1" class="form-label text-secondary">Turno:&nbsp</label><span id="pegar10"></span>
                          </div>
                          <div class="col-md-9 container-fluid">
                            <label for="formFile" class="form-label text-secondary" >Comprovativo Pagamento</label>
                            <input type="file" class="form-control" aria-label="file example" required>
                          </div>
                          <div class="modal-footer">
                          <div class="form-group">
                          <button type="button" class="btn btn-warning text-light" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i class="fa fa-paper-plane" aria-hidden="true"></i> Confirmar</button>
                          </div>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-dark" id="exampleModalLabel"> ISPAJ <span class="text-warning" > Informação</span></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class ="forma5">
                        <form class="col g-3 row g-3">
                          <div class="ola">
                              <div class="container-fluid row mt-1 ms-auto justify-content-center">
                                <img src="images/fot.png" class="card-img-top" alt="..." >
                              <!-- Grid column -->
                              </div>
                          </div>
                          <div class="col-md-9 container-fluid">
                            <label for="exampleFormControlInput1" class="form-label text-secondary">Nome:&nbsp</label><span id="pegar"></span>
                          </div>
                          <div class="col-md-9 container-fluid">
                          <label for="exampleFormControlInput1" class="form-label text-secondary">Matricula: &nbsp</label><span id="pegar3"></span>
                          </div>
                          <div class="col-md-9 container-fluid">
                          <label for="exampleFormControlInput1" class="form-label text-secondary">Telefone:&nbsp</label><span id="pegar2"></span>
                          </div>
                          <div class="col-md-9 container-fluid">
                          <label for="exampleFormControlInput1" class="form-label text-secondary">Assunto:&nbsp</label><span id="pegar4"></span>
                          </div>
                          <div class="col-md-9 container-fluid">
                          <label for="exampleFormControlInput1" class="form-label text-secondary">Turno:&nbsp</label><span id="pegar5"></span>
                          </div>
                          <div class="col-md-9 container-fluid">
                            <label for="formFile" class="form-label text-secondary">Comprovativo Pagamento</label>
                            <input class="form-control" type="file" id="formFile" placeholder="doc" required>
                          </div>
                          <div class="modal-footer">
                          <div class="form-group">
                          <button type="button" class="btn btn-warning text-light" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i class="fa fa-paper-plane" aria-hidden="true"></i> Confirmar</button>
                          </div>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-dark" id="exampleModalLabel"> ISPAJ <span class="text-warning" > Informação</span></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="ola">
                            <div class="container-fluid row mt-1 ms-auto justify-content-center">
                              <img src="images/ispaj.png" class="card-img-top" alt="..." >
                            <!-- Grid column -->
                            </div>
                        </div>
                        <div class="ola2">
                            <p align="justify">O seu pedido será enviado pelo terminal do whatssap da instituição, por favor confirma e certifique a tua opção clicando no botão a baixo, em seguida receberas uma confirmação da instituição pelo seu celular!</p>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                      <button type="button" class="btn btn-dark text-light" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button>
                      <button type="button" class="btn btn-warning text-light" onclick="gotowhatsap23()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg> Solicitar documento
                      </button>
                      <button type="button" class="btn btn-primary text-light" onclick="gotowhatsapp23()">                  
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg> Trancar o ano
                      </button>
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-dark" id="exampleModalLabel"> ISPAJ <span class="text-warning" > Informação</span></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="ola">
                            <div class="container-fluid row mt-1 ms-auto justify-content-center">
                              <img src="images/ispaj.png" class="card-img-top" alt="..." >
                            <!-- Grid column -->
                            </div>
                        </div>
                        <div class="ola2">
                            <p align="justify">Este Sitema foi desenvolvido para facilitar os alunos a fazer pedidos de documentos online, o sistema tem varios objectivos como trancar o ano lectivo e fazer pedido de documentos. Com este software os alunos já não vão precisar de se locomover da casa para universidade.</p>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                       <h7><i class="fa fa-briefcase" aria-hidden="true"></i>  ASAATtech - Copyright ©2023</h7>
                    </div>
                  </div>
                </div>
            </div>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fa fa-tasks" aria-hidden="true"></i> Solicitar Documento</button>
                  <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fa fa-times-circle" aria-hidden="true"></i> Trancar ano</button>
                </div>
            </nav>
 
            <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="forma1">
                      <div class="card1">
                        <div class="card bg-transparent">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <form class="row g-3" action="soli.php" method="post">
                                  <div class="col-md-3">
                                      <label for="inputEmail4" class="form-label">Assunto</label>
                                      <select id="inpu" class="form-select">
                                          <option selected>Certificado médio</option>
                                          <option>Declaração com notas</option>
                                          <option>Declaração sem notas</option>
                                      </select>
                                  </div>
                                  <div class="col-md-3">
                                  <label for="inputEmail4" class="form-label">Nome</label>
                                    <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $_SESSION['nome'];?>" placeholder="Ex: Savio Ambrosio" required>
                                  </div>
                                  <div class="col-md-3">
                                      <label for="inputEmail4" class="form-label">Filho(a) de</label>
                                      <input type="text" class="form-control" name="filho" id="filho" placeholder="Ex: Dinis Ambrosio" value="<?php echo $_SESSION['filho'];?>" required>
                                  </div>
                                  <div class="col-md-3">
                                      <label for="inputEmail4" class="form-label">e de</label>
                                      <input type="text" class="form-control" name="de" id="de" placeholder="Ex: Engracia Mehata" value="<?php echo $_SESSION['de'];?>" required>
                                  </div>
                                  <div class="col-md-1">
                                  <label for="inputPassword4" class="form-label">Idade</label>
                                  <input type="text" class="form-control" name="idade" id="idade" maxlength="2" placeholder="Ex: 18" value="<?php echo $_SESSION['idade'];?>" required>
                                  </div>
                                  <div class="col-md-2">
                                  <label for="inputdate" class="form-label">Data de Nascimento</label>
                                    <input type="date" class="form-control" name="date" id="datas" value="<?php echo $_SESSION['date'];?>" required>
                                  </div>
                                  <div class="col-md-2">
                                      <label for="inputAddress" class="form-label">Estado Civil</label>
                                      <select id="inputState" name="estado "class="form-select" value="<?php echo $_SESSION['estado'];?>" required>
                                          <option selected>Solteiro</option>
                                          <option>Casado</option>
                                          <option>Viúvo</option>
                                          <option>Namorando</option>
                                      </select>
                                  </div>
                                  <div class="col-md-2">
                                      <label for="inputAddress" class="form-label">Bilhete</label>
                                      <input type="text" class="form-control" name="bilhete" id="bilhete" placeholder="Ex: 00633921LA049" value="<?php echo $_SESSION['bilhete'];?>" required>
                                  </div>
                                  <div class="col-md-2">
                                      <label for="inputAddress" class="form-label">Natural de </label>
                                      <select id="inputStates" name="natural" class="form-select" value="<?php echo $_SESSION['natural'];?>" required>
                                          <option selected>Luanda</option>
                                          <option>Benguela</option>
                                          <option>Cabinda</option>
                                          <option>Huambo</option>
                                          <option>Huige</option>
                                          <option>Lunda Norte</option>
                                          <option>Lunda Sul</option>
                                          <option>Bié</option>
                                          <option>Kwanza Sul</option>
                                          <option>Kwanza Norte</option>
                                          <option>Lobito</option>
                                          <option>Cunene</option>
                                          <option>Cuando Cubango</option>
                                      </select>
                                  </div>
                                  <div class="col-md-3">
                                      <label for="inputAddress" class="form-label">Residente em</label>
                                      <input type="text" class="form-control" name="residencia" id="residencia" placeholder="Ex: Projecto nova vida" value="<?php echo $_SESSION['residencia'];?>" required>
                                  </div>
                                  <div class="col-md-3">
                                  <label for="inputAddress2" class="form-label">Telemovel</label>
                                    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="+244" maxlength = "9"value="<?php echo $_SESSION['telefone'];?>" required>
                                  </div>
                                  <div class="col-md-3">
                                      <label for="inputAddress2" class="form-label">Matricula</label>
                                      <input type="number" class="form-control" name = "m" id="m" placeholder="Ex: 54586" value="<?php echo $_SESSION['m'];?>" required>
                                  </div>
                                  <div class="col-md-6">
                                      <label for="inputAddress2" class="form-label">Email</label>
                                      <input type="email" class="form-control" name = "email" id="email" placeholder="Ex: savioambrosio@gmail.com" value="<?php echo $_SESSION['email'];?>" required>
                                  </div>
                                  <div class="col-md-4">
                                  <label for="inputCity" class="form-label">Curso</label>
                                  <select id="curso" name="curso" class="form-select" value="<?php echo $_SESSION['curso'];?>" required>
                                      <option selected>Engenharia Infórmatica</option>
                                      <option>Engenharia Civil</option>
                                      <option>Odontologia</option>
                                      <option>Analises Clinicas</option>
                                      <option>Gestão</option>
                                      <option>Cardiopunominia</option>
                                  </select>
                                  </div>
                                  <div class="col-md-2">
                                  <label for="inputState" class="form-label">Turno</label>
                                  <select id="turn" name="turno" class="form-select" value="<?php echo $_SESSION['turno'];?>" required>
                                      <option selected>Manhã</option>
                                      <option>Tarde</option>
                                      <option>Noite</option>
                                  </select>
                                  </div>
                                  <div class="col-md-1">
                                      <label for="inputState" class="form-label">Turma</label>
                                      <select id="turma" name="turma" class="form-select" value="<?php echo $_SESSION['turma'];?>" required>
                                          <option selected>A</option>
                                          <option>B</option>
                                          <option>C</option>
                                          <option>D</option>
                                      </select>
                                      </div>

                                  <div class="col-12">
                                    <button type="submit" class="btn btn-warning text-white" name="btn"><i class="fa fa-paper-plane" aria-hidden="true"></i> Confirmar</button>
                                  </div>
                              </form>
                              </div>
                              <div class="card-footer text-center">
                                <p><i class="fa fa-briefcase" aria-hidden="true"></i> ASSATtech - Copyright ©2023, todos os direitos reservados</p>
                              </div>
                          </div>
                        </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                          <div class="forma1">
                            <div class="card1">
                              <div class="card bg-transparent">
                                <div class="card-header">
                                </div>
                                <div class="card-body">
                                  <form class="row g-3" action="soli.php" method="post">
                                        <div class="col-md-4">
                                            <label for="inputEmail4" class="form-label">Motivo</label>
                                            <select id="inp" name="inp" class="form-select">
                                                <option selected>Condições Financeiras</option>
                                                <option>Inconpatibilidade de horario com Trabalho</option>
                                                <option>Estágio ou Bolsa</option>
                                                <option>outros</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail4" class="form-label">Nome</label>
                                            <input type="text" class="form-control" name="nome2" id="nome2" placeholder="Ex: Savio Ambrosio" value="<?php echo $_SESSION['nome2'];?>" required>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="inputAddress" class="form-label">Ano Inicial</label>
                                            <input type="number" class="form-control" name="ano" id="ano" placeholder="Ex: 2020" value="<?php echo $_SESSION['ano'];?>" required>
                                        </div>
                                        <div class="col-md-3">
                                        <label for="inputAddress2" class="form-label">Telemovel</label>
                                            <input type="text" maxlength="9" class="form-control" name="telefones" id="telefones" placeholder="+244" value="<?php echo $_SESSION['telefones'];?>" required>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputAddress2" class="form-label">Email</label>
                                            <input type="email" class="form-control" name = "emails" id="emails" placeholder="Ex: savioambrosio2018@gmail.com" value="<?php echo $_SESSION['emails'];?>" required>
                                        </div>
                                        <div class="col-md-4">
                                        <label for="inputCity" class="form-label">Curso</label>
                                        <select id="cursos" name="cursos "class="form-select" value="<?php echo $_SESSION['cursos'];?>" required>
                                            <option selected>Engenharia Infórmatica</option>
                                            <option>Engenharia Civil</option>
                                            <option>Odontologia</option>
                                            <option>Analises Clinicas</option>
                                            <option>Gestão</option>
                                            <option>Cardiopunominia</option>
                                        </select>
                                        </div>
                                        <div class="col-md-2">
                                        <label for="inputState" class="form-label">Turno</label>
                                        <select id="turno" name="turno" class="form-select" value="<?php echo $_SESSION['turno'];?>" required>
                                            <option selected>Manhã</option>
                                            <option>Tarde</option>
                                            <option>Noite</option>
                                        </select>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="inputState" class="form-label">Turma</label>
                                            <select id="turma" name="turma" class="form-select" value="<?php echo $_SESSION['turma'];?>" required>
                                                <option selected>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                                <option>D</option>
                                            </select>
                                            </div>
                                        <div class="col-md-2">
                                        <label for="inputZip" class="form-label">Matricula</label>
                                            <input type="text" class="form-control" id="matriculas" name="matriculas" placeholder="Ex: 54586" value="<?php echo $_SESSION['matriculas'];?>" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="exampleFormControlTextarea1" class="form-label">Justificativa (opcional)</label>
                                            <textarea class="form-control" id="justif" name="justif" placeholder="escrever justificativa.."rows="3" value="<?php echo $_SESSION['justif'];?>" required></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-warning text-white" name="btn2"><i class="fa fa-paper-plane" aria-hidden="true"></i> Confirmar</button>
                                        </div>
                                  </form>
                                </div>
                                <div class="card-footer text-center">
                                  <p><i class="fa fa-briefcase" aria-hidden="true"></i>  ASSATtech - Copyright ©2023, todos os direitos reservados</p>
                                </div>
                              
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                  </div>
                  <script>
                    function gotowhatsapp12() {
                        var validationDefault00 = document.getElementById("inpu").value;
                        var validationDefault01 = document.getElementById("nome").value;
                        var validationDefault02 = document.getElementById("filho").value;
                        var validationDefault03 = document.getElementById("de").value;
                        var validationDefault04 = document.getElementById("idade").value;
                        var validationDefault05 = document.getElementById("date").value;
                        var validationDefault06 = document.getElementById("estado").value;
                        var validationDefault07 = document.getElementById("bilhete").value;
                        var validationDefault08 = document.getElementById("natural").value;
                        var validationDefault09 = document.getElementById("residencia").value;
                        var validationDefault010 = document.getElementById("email").value;
                        var validationDefault011 = document.getElementById("curso").value;
                        var validationDefault012 = document.getElementById("turn").value;
                        var validationDefault013 = document.getElementById("turma").value;
                        var validationDefault014 = document.getElementById("matricula").value;

                        var url = "https://api.whatsapp.com/send?phone=244945512220&text="
                            + "============================== " +"%0a"
                            + "========= ISPAJ ALUNO ======== " +"%0a"
                            + "============================== " +"%0a"
                            + "PEDIDO >>>> " + validationDefault00 + "%0a"
                            + "============================== " +"%0a"
                            + "Nome: " + validationDefault01 + "%0a"
                            + "Filho de: " + validationDefault02 + "%0a"
                            + "E de: " + validationDefault03 + "%0a"
                            + "Idade: " + validationDefault04 + "%0a"
                            + "Data: " + validationDefault05 + "%0a"
                            + "Estado Civil: " + validationDefault06 + "%0a"
                            + "Bilhete: " + validationDefault07 + "%0a"
                            + "Natural de: " + validationDefault08 + "%0a"
                            + "Telefone: " + validationDefault09 + "%0a"
                            + "Email: " + validationDefault010 + "%0a"
                            + "Curso: " + validationDefault011 + "%0a"
                            + "Turno: " + validationDefault012 + "%0a"
                            + "Turma: " + validationDefault013 + "%0a"
                            + "Matricula: " + validationDefault014 + "%0a"
                        window.open(url, '_blank').focus();
                    }
                  </script>

                  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
                  <script>
                    function gotowhatsapp23() {
                        var validationDefault00 = document.getElementById("inp").value;
                        var validationDefault01 = document.getElementById("nome2").value;
                        var validationDefault02 = document.getElementById("ano").value;
                        var validationDefault03 = document.getElementById("telefones").value;
                        var validationDefault04 = document.getElementById("emails").value;
                        var validationDefault05 = document.getElementById("cursos").value;
                        var validationDefault06 = document.getElementById("turma").value;
                        var validationDefault07 = document.getElementById("turno").value;
                        var validationDefault08 = document.getElementById("matriculas").value;
                        var validationDefault09 = document.getElementById("justif").value;


                        var url = "https://api.whatsapp.com/send?phone=244945512220&text="
                            + "============================== " +"%0a"
                            + "========= ISPAJ ALUNO ======== " +"%0a"
                            + "============================== " +"%0a"
                            + "Motivo >>>> " + validationDefault00+ "%0a"
                            + "Nome: " + validationDefault01 + "%0a"
                            + "Ano Inicial: " + validationDefault02 + "%0a"
                            + "Telemovel: " + validationDefault03 + "%0a"
                            + "Email: " + validationDefault04 + "%0a"
                            + "Curso: " + validationDefault05 + "%0a"
                            + "Turma: " + validationDefault06 + "%0a"
                            + "Turno: " + validationDefault07 + "%0a"
                            + "Matricula: " + validationDefault08 + "%0a"
                            + "Justificativa: " + validationDefault09 + "%0a"
                            + "============================== " +"%0a";

                        window.open(url, '_blank').focus();
                    }
                  </script>
            </div>
    </section>
    <script>
        $(window).on("load",function(){
            $(".box-load").fadeOut(3000);
        })
    </script>
</body>
</html>