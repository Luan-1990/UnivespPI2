?>
<!DOCTYPE html>
<?php

include("head.php")
?>
<title>Relatório de fornecedores</title>
<body style="background-color: #686a6d; font-size: 120%;">


<?php
include("header.php");
include("navbar.php");
?>
<h1> <span class="ps-3";>Relatório de fornecedores</span></h1>
<br>
<h2> <span class="ps-3";>Pesquisar por:</span></h2>

<div>
<fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" id="fieldsetProduct">
<form action="#" class="gx-3 form-control">
   <div class="row mt-2">
<div class="col-md-2">
                      <label for="serviceValue" class="form-label">Nome Fantasia</label>
                      <input type="text" class="form-control" id="NomeFantasiaSupplier" name="searchNomeFantasiaSupplier">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
                  </div>

    <div class="col-md-6">
                      <label for="serviceValue" class="form-label">Razão Social</label>
                      <input type="text" class="form-control" id="razaoSocialSupplier" name="searchRazaoSocialSupplier">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
                  </div>
    <div class="col-md-6">
                      <label for="serviceDate" class="form-label">CNPJ</label>
                      <input type="number" class="form-control" id="CNPJsupplier" name="searchCNPJSupplier">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
                  </div>
               </div>
               <?php
                include "button-group.php";
                ?>
</section>
<?php
include("footer.php")
?>        </div>
      </div>
</form>
</fieldset>
<script>
    function limparCampos() {
        document.getElementById("NomeFantasiaSupplier").value = '';
        document.getElementById("razaoSocialSupplier").value = '';
        document.getElementById("CNPJsupplier").value = '';
    }
</script>

</body>
</html>


