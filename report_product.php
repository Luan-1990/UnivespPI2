?>
<!DOCTYPE html>
<?php

include("head.php")
?>
<title>Relatório de produtos e serviços</title>
<body style="background-color: #686a6d; font-size: 120%;"> <!-- Apliquei o fundo e aumentei a fonte em 20% -->

<?php
include("header.php");
include("navbar.php");
?>

<div class="ps-3">
    <h1> <span class="";>Cadastro de ordens de serviço</span></h1>
</div>
<br>
<h2> <span class="badge text-bg-secondary">Pesquisar por:</span></h2>

<fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" id="fieldsetProduct">
<form action="#" method="post" class="form-control">
<p><span>Produto</span></p>
    <div class="row mt-2">
            <div class="col-md-2">
                      <label for="serviceValue" class="form-label">Descrição do Produto</label>
                      <input type="text" class="form-control" id="razaoSocialClient" name="searchRazaoSocialClient">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
 <div class="col-md-6">
                      <label for="serviceValue" class="form-label">Fabricante</label>
                      <input type="text" class="form-control" id="manufacturer" name="searchManufacturer">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
                  </div>

                  </div>
    <div class="col-md-6">
                      <label for="serviceDate" class="form-label">Código do fabricante</label>
                      <input type="text" class="form-control" id="manufacturerCode" name="searchManufacturerCode">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
                  </div>
               </div>
</section>
<br>
<br>
<section>
<p><span>Serviço</span></p>
    <div class="col-md-6">
                      <label for="serviceValue" class="form-label">Descrição do serviço</label>
                      <input type="text" class="form-control" id="serviceName" name="searchServiceName">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
 </form>
</fieldset>
 <?php
            include "button-group.php";
            ?>


<script>
    function limparCampos() {
        document.getElementById("razaoSocialClient").value = '';
        document.getElementById("manufacturer").value = '';
        document.getElementById("manufacturerCode").value = '';
	document.getElementById("serviceName").value = '';
    }
</script>
<?php
include("footer.php")
?>
</body>
</html>