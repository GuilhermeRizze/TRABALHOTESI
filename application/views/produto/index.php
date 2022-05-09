
        
            <div class="row">
              <div class="col-lg-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">LISTA DE PRODUTOS</h4>
                    <a 
        href="/index.php/produto/formnovo"
        class="btn btn-primary"
    >
        Novo
    </a>
                  <table class="table table-striped" >
                      <thead>
                          <tr>
                              <th></th>
                              <th>Nome</th>
                              <th>Perecivel</th>
                              <th>Tipo</th>
                              <th>Valor</th>
                          </tr>
                      </thead>
                      <?php echo $tabela; ?>
                  </table>
          <!-- partial:../../partials/_footer.html -->
         