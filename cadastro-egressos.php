<?php $tituloPagina = "Cadastro de Egressos"?>
<?php include("header.php"); ?>
<!-- Faça o CSS em um arquivo separado da pagina e importe aqui, antes de fechar o /head, exemplo abaixo -->
<!-- <link rel="stylesheet" type="text/css" href="css/css-dessa-pagina.css"> -->
</head>
<?php include("navbars.php"); ?>
<p><small>Caro ex-aluno de Pedagogia, é muito importante para a UFPR, depois de uma estreita convivência diária, acompanhar suas conquistas e te apoiar neste novo momento profissional.</small></p>
<form class="text-left" style="font-size: 0.8em">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputNome">Primeiro Nome</label>
      <input type="text" class="form-control" id="inputNome" placeholder="Nome">
    </div>
    <div class="form-group col-md-6">
      <label for="inputSobrenome">Sobrenome</label>
      <input type="text" class="form-control" id="inputSobrenome" placeholder="Sobrenome">
    </div>    
    <div class="form-group col-md-2">
      <label for="inputSexo">Sexo</label>
      <select id="inputSexo" class="form-control">
        <option>M</option>
        <option>F</option>
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputCPF">CPF</label>
      <input type="text" class="form-control" id="inputCPF" placeholder="CPF">
    </div>
    <div class="form-group col-md-3">
      <label for="inputRG">RG</label>
      <input type="text" class="form-control" id="inputRG" placeholder="RG">
    </div>
    <div class="form-group col-md-6">
      <label for="inputData">Data de Nascimento</label>
      <input type="text" class="form-control" id="inputData" placeholder="Data de Nascimento">
    </div>      	
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEndereco">Endereço</label>
      <input type="text" class="form-control" id="inputEndereco" placeholder="Endereço">
    </div>
    <div class="form-group col-md-3">
      <label for="inputRG">Cidade</label>
      <input type="text" class="form-control" id="inputCidade" placeholder="Cidade">
    </div>
    <div class="form-group col-md-3">
      <label for="inputEstado">Estado</label>
      <select id="inputEstado" class="form-control">
        <option selected="selected">Selecione</option>
        <option>Paraná</option>
        <option>São Paulo</option>
        <option>Rio de Janeiro</option>
        <option>Minas Gerais</option>
        <option>Acre</option>
      </select>
    </div>  	
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputAnoConclusao">Ano de Conclusão</label>
      <select id="inputAnoConclusao" class="form-control">
        <option>2019</option>
        <option>2018</option>
        <option>2017</option>
        <option>2016</option>
        <option>2015</option>
      </select>
  	</div>
    <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    <div class="form-group col-md-3">
      <label for="inputTelefone">Telefone</label>
      <input type="text" class="form-control" id="inputTelefone" placeholder="Telefone">
    </div>  	
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputOcupacao">Descreva sua ocupação atual</label>
	  <textarea class="form-control" id="inputOcupacao" rows="3"></textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="inputPergunta">O que o curso agregou na sua vida profissional?</label>
	  <textarea class="form-control" id="inputPergunta" rows="3"></textarea>
    </div>      	
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Desejo receber novidades sobre o curso de Pedagogia da UFPR
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-success btn-md"><strong>Enviar</strong></button>
</form>
<script>
  $(document).ready(function(){
    $('#inputData').mask('00/00/0000');
});
</script>
<?php include("footer.php"); ?>
