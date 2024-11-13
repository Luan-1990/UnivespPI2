?>
<!DOCTYPE html>
<?php

include("head.php")
?>
<title>Relatório de ordem de serviço</title>
<body style="background-color: #686a6d; font-size: 120%;"> <!-- Apliquei o fundo e aumentei a fonte em 20% -->

<?php
include("header.php");
include("navbar.php");
?>

<h1> <span class="badge text-bg-secondary">Relatório de ordem de serviço</span></h1>
<br>
<h2> <span class="badge text-bg-secondary">Pesquisar por:</span></h2>


<fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" id="fieldsetProduct">
    <div class="col-md-6">
        <label for="serviceDate" class="form-label">Número Ordem de Serviço</label>
        <input type="number" class="form-control" id="orderNumber" name="searchOrderNumber">
    </div>
    
    <div class="col-md-6 align-items-center gy-4">
        <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
    </div>
    <div class="col-md-6">
                      <label for="serviceValue" class="form-label">Data</label>
                      <input type="date" class="form-control" id="serviceDate" name="searchDate">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
                  </div>

    <div class="col-md-6">
                      <label for="serviceDate" class="form-label">CPF Cliente</label>
                      <input type="number" class="form-control" id="serviceClientCPF" name="searchClientCPF">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
                  </div>

    <div class="col-md-6">
                      <label for="product" class="form-label">Produto</label>
                      <input type="text" class="form-control" id="serviceProduct" name="searchProduct">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
                  </div>
<?php
                include "button-group.php";
                ?>
</fieldset> 
<script>
    function limparCampos() {
        document.getElementById("serviceDate").value = '';
        document.getElementById("serviceClientCPF").value = '';
        document.getElementById("serviceProduct").value = '';
        document.getElementById("orderNumber").value = '';
    }
</script>
<?php
include("footer.php")
?>
</body>
</html>
