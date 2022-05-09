


        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Cadastro de Categoria </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Editar</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="#">Excluir</a></li>
                </ol>
              </nav>
            </div>
            <div class="row">
          
              <form method="POST" action="/index.php/tipo/salvarnovo" enctype="multipart/form-data">

              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Informações da Categoria</h4>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Nome</label>
                        <input type="text" class="form-control" name="nome" placeholder="nome" required>
                      </div>
              
                      <br><br>
                      <button type="submit" class="btn btn-primary mr-2">Enviar</button>
                      <button class="btn btn-light">Cancelar</button>
                    </form>
                  </div>
                </div>
              </div>
            </form>
         
        </div>
        </div>
        
  </body>
</html>
