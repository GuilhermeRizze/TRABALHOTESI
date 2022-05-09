<div class="row">
              <div class="col-lg-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">LISTA DE TIPOS DOS PRODUTOS</h4>
                    <a 
        href="/index.php/tipo/formnovo"
        class="btn btn-primary"
    >
        Novo
    </a>
                  <table class="table table-striped" >
                      <thead>
                          <tr>
                              <th></th>
                              <th>Id</th>
                              <th>Nome</th>
                          </tr>
                      </thead>
                      <?php echo $tabela; ?>
                  </table>
          <!-- partial:../../partials/_footer.html -->