


        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Cadastro de Produto </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Editar</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="#">Excluir</a></li>
                </ol>
              </nav>
            </div>
            <div class="row">
          
              <form method="POST" action="/index.php/produto/salvarnovo" enctype="multipart/form-data">

              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Informações do Produto</h4>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Nome</label>
                        <input type="text" class="form-control" name="nome" placeholder="nome" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Valor</label>
                        <input type="double" class="form-control" name="valor" placeholder="valor" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Perecivel</label>
                        <select class="form-control" name="perecivel" required>
                          <option value="1">Sim</option>
                          <option value="0">Não</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Tipo Produto</label>
                        <select name="tipo" class="form-select" required>
                                    <option value="">Selecione o tipo do produto</option><br>
                                    <?php echo $opcoes; ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Link Imagem</label>
                        <input type="text" name="imagem" class="form-control" required>
            
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
