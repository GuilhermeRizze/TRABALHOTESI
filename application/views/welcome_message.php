<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bem vindo</title>

	<style type="text/css">


	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">

	<div id="body">
		<p>Selecione abaixo a opção que deseja</p>
		<div class="row quick-action-toolbar">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-header d-block d-md-flex">
                    <h5 class="mb-0">Ações Rápidas</h5>
                    <p class="ml-auto mb-0">Gerencimento de Funcionários<i class="icon-bulb"></i></p>
                  </div>
                  <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="Quick action buttons">
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                     <a href="index.php/login/registro"> <button type="button" class="btn px-0"> <i class="icon-user mr-2"></i> Adicionar Usuario</button></a>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <a href="/index.php/produto/formnovo"> <button type="button" class="btn px-0"><i class="icon-docs mr-2"></i> Adicionar Produto</button></a>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <a href="<?php echo base_url();?>index.php/produto"> <button type="button" class="btn px-0"><i class="icon-folder mr-2"></i> Visualizar Produtos</button></a>
                    </div>
                    <a href="pages\samples\ALTERAR"></a><div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <button type="button" class="btn px-0"><i class="icon-book-open mr-2"></i> Criar Relatório</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
		
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>