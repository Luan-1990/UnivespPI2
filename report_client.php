<!DOCTYPE html>
<?php

include("head.php")
?>
<title>Relatório de Clientes</title>



<?php
include("header.php");
include("navbar.php");
?>

<body style="background-color: #686a6d; font-size: 120%;">
<div class="ps-3">
    <h2> <span class="ps-3";>Relatório de clientes</span></h2>
    <br>
    
</div>

<section class="ps-3">

    <fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" id="fieldsetProduct" >
        <form action="#" method="post" class="gx-3 gy-1 form-control">
    <h1> <span class="">Pesquisar por:</span></h1>
    <p><span>Pessoa Jurídica</span></p>
        <div class="col-md-3">
            <label for="serviceValue" class="form-label">Razão Social</label>
            <input type="text" class="form-control" id="razaoSocialClient" name="searchRazaoSocialClient">
        </div>

        <div class="col-md-3 align-items-center gy-4">
            <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
        </div>
        <div class="col-md-3">
            <label for="serviceDate" class="form-label">CNPJ</label>
            <input type="text" class="form-control" id="CNPJClient" name="searchCNPJClient">
        </div>

        <div class="col-md-3 align-items-center gy-4">
            <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
        </div>

<br>

<p><span>Pessoa Física</span></p>
<div class="col-md-6">
                      <label for="serviceValue" class="form-label">Nome</label>
                      <input type="text" class="form-control" id="nameClient" name="searchNameClient">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
                  </div>
    <div class="col-md-6">
                      <label for="serviceDate" class="form-label">CPF</label>
                      <input type="text" class="form-control" id="CPFClient" name="searchCPFClient">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
                  </div>
               <?php
            include "button-group.php";
            ?>
            </form>
    </fieldset>
    </section>
<script>
    function limparCampos() {
        document.getElementById("razaoSocialClient").value = '';
        document.getElementById("CNPJClient").value = '';
        document.getElementById("nameClient").value = '';
        document.getElementById("CPFClient").value = '';
    }
</script>

</body>
</html>

