<div class="row">
              <div class="col-lg-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">LISTA DE USUARIOS</h4>
                    <a 
        href="/index.php/login/registro"
        class="btn btn-primary"
    >
        Novo
    </a>
                  <table class="table table-striped" >
                      <thead>
                          <tr>
                              <th></th>
                              <th>Nome</th>
                              <th>Senha</th>
                              <th>Email</th>
                          </tr>
                      </thead>
                      <?php echo $tabela; ?>
                  </table>
          <!-- partial:../../partials/_footer.html -->