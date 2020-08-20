<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
  <title>Agenda SMSUB</title>
  <!-- css botton up to the top-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">



  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- CSS selectpicker -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

  <!-- teste de posicionamento de imagem com CSS -->
  <link rel="stylesheet" type="text/css" href="source/style.css">

  <style type="text/css">



  </style>
</head>

<body>
 <!--botão topo -->
 <a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>



 <!-- APRENDER A ALINHAR A IMAGEM SEM PRECISAR ADICIONAR UMA LINHA -->

 <img src="logo_smsp.jpg" height="200px" alt="HTML5 Icon" id="imglogo">


 <h1 id="topo">Agenda Eletrônica</h1>


 <div class="mt-3" id="select">
  <table class="">
    <thead>

      <tr>
        <th>Orgao
        </th>
        <th>Setor
        </th>
        <th>
          Nome
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>
            <select class="selectpicker" id="selectSetor" data-live-search=true>    

            </select>
          </td>
          <td>
            <select class="selectpicker" id="teste" data-live-search=true>    
            </td>
            <td colspan="2"> 
              <div class="input-group mb-0">
                <input type="text" id="nome" class="form-control" placeholder="Digite o nome aqui. " disabled>
              </div>

            </td>

          </tr>

          <!-- TABELA COM OS RAMAIS DE TODO MUNDO-->

          <table class="table" id="tableContatos">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Setor</th>
                <th scope="col">Nome</th>
                <th scope="col">Ramal</th>
              </tr>

            </thead>
            <tbody>


            </tbody>
          </table>


        </tbody>
      </table>
    </div>

    <!-- texto de apresentação -->

    <p id="about" style="font-family:arial-black">
      <small class="text-muted">
        Desenvolvido por Julio N. Sales - Setor ATSI
      </small>
    </p>


    <!--  modal para efetuar a solicitacao de alteracao de ramais--> 
    <div id="update">
      <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Atualizar Ramal</button> 
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Solicite aqui a Alteracao Desejada</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Email:</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Oque deseja alterar:</label>
                <textarea class="form-control" id="message-text"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-success">Enviar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- botao para efetuar o login e visualizar o crud -->
    <div id="login">
      <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Login</button>
    </div>
  </body>

  </html>


  <!-- Scripts CDN para buscar jquery bootsrap e popper -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>



  <!-- JS  do select picker -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>



  <script src="source/script.js"> </script>