<?php $tituloPagina = "Lista de Egressos"?>
<?php include("header.php"); ?>
<!-- Faça o CSS em um arquivo separado da pagina e importe aqui, antes de fechar o /head, exemplo abaixo -->
<link rel="stylesheet" type="text/css" href="css/lista-egressos.css"> -->
</head>
<?php include("navbars.php"); ?>

<h1>Egressos de Graduação: </h1>
<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Nome</th>
      <th class="th-sm">E-mail</th>
      <th class="th-sm">Telefone</th>
      <th class="th-sm">Idade</th>
      <th class="th-sm">Ano de Conclusão</tr>
  </thead>
  <tbody>
    <tr>
      <td>Joaquim da Silva</td>
      <td>joaquim@email.com</td>
      <td>(41)94320-3452</td>
      <td>38</td>
      <td>21/11/2010</td>
    </tr>
    <tr>
      <td>João Nabuco</td>
      <td>joaom@email.com</td>
      <td>(41)95320-5451</td>
      <td>48</td>
      <td>25/04/2011</td>
    </tr>
    <tr>
      <td>Natalia Alves</td>
      <td>alves.na@email.com</td>
      <td>(41)97326-2483</td>
      <td>38</td>
      <td>03/12/1995</td>
    </tr>
    <tr>
      <td>Joaquim da Silva</td>
      <td>joaquim@email.comt</td>
      <td>(41)94320-3452</td>
      <td>40</td>
      <td>01/12/2008</td>
    </tr>
    <tr>
      <td>Jorge dos Santos</td>
      <td>joaquim@email.comt</td>
      <td>(41)94320-3452</td>
      <td>29</td>
      <td>25/06/2012</td>
    </tr>
    <tr>
      <td>Jorge dos Santos</td>
      <td>joaquim@email.comt</td>
      <td>(41)94320-3452</td>
      <td>29</td>
      <td>25/06/2012</td>
    </tr>
    <tr>
      <td>Rafael Alves</td>
      <td>r.alves@email.comt</td>
      <td>(41)98432-1232</td>
      <td>32</td>
      <td>25/06/2012</td>
    </tr>
    <tr>
      <td>Aline Almeida</td>
      <td>aline@email.comt</td>
      <td>(41)88320-1234</td>
      <td>33</td>
      <td>18/06/2010</td>
    </tr>
</tbody>
</table>
<?php include("footer.php"); ?>