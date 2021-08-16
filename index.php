<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">-->
  <link rel="stylesheet" href="css/style.css">
  <title>Marvel APP</title>
</head>

<body>
  <nav class="nav-bar bg-nav-bar">
    <a href="/" class="navbar-brand">Marvel APP</a>
  </nav>

  <div class="busca-heroi">
    <div class="container">    
        <h1>Busca de Personagens</h1>
        <h3>Nome do Personagem</h3>         
        <form action='js/app.js' method='post'>
          <input type='text' class="search" name='pesquisa' placeholder='Busque o Herói' >
          <button type='submit' class="btn-hero">
            <img src="img/search.png">
            </button>
          <div>
            
          </div>
          
        </form>  
    </div>
  </div>

  <div class="lista-heroi">
    <div class="container">
      <div class="apresentacao">
        <p>Personagem</p>
        <p>Séries</p>
        <p>Eventos</p>
      </div>
      <div class="row" id="marvel-row">
      </div>
    </div>
  </div>

  <div class="container ">
    <div id="pagination"></div>
</div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="js/app.js"></script>
  <script src="js/pagination.js"></script>
</body>

</html>
