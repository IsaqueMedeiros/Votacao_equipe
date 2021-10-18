<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Enquete</title>
    <style type="text/css">
      body{
        width:  680px;
        margin-top: 30px;
        margin-right: auto;
        margin-left: auto;
      }
    </style>
  </head>
  <body>
    <!-- Card Formulário-->
    <div class="card">
      <div class="card-header">
        Vote na melhor equipe da F1
      </div>
      <div class="card-body">
        <!-- formulario -->
        <form id="formVota">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="opt" id="opt1" value="Mercedes" >
            <label class="form-check-label" for="opt">
             Mercedes
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="opt" id="opt2" value="Redbull">
            <label class="form-check-label" for="opt2">
              Red Bull
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="opt" id="opt3" value="Ferrari" >
            <label class="form-check-label" for="opt3">
              Ferrari
            </label>
          </div>
          <hr />
          <button type="button" id="btnEnvia" class="btn btn-success btn-lg">Votar</button>
        </form>
      </div>
    </div>
  

    <hr />
    <div class="card">
      <div class="card-header"><h5 class="card-title">Resultados</h5></div>
      <div class="card-body">

        <h5>Mercedes</h5>
        <div class="progress mb-3">
          <div class="progress-bar" id="mercedes_bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
          </div>
        </div>

        <h5>Red Bull</h5>
        <div class="progress mb-3">
          <div class="progress-bar" id="redbull_bar" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100">
            
          </div>
        </div>

        <h5>Ferrari</h5>
        <div class="progress mb-3">
          <div class="progress-bar" id="ferrari_bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
            
          </div>
        </div>

      </div>
    </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/actions.js"></script>
  </body>
</html>