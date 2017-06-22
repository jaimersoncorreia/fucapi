<?php include("cabecalho.php");?>
<!-- Criação de abas -->
<ul class="nav nav-tabs" role="tablist">
    <li class="active">
        <a href="#tecnologia" role="tab" data-toggle="tab">
            FUCAPI Tecnologia
        </a>
    </li>
    <li>
        <a href="#educacao" role="tab" data-toggle="tab">
            FUCAPI Educação
        </a>
    </li>

</ul>

<!-- Conteúdo das abas -->
<div class="tab-content">
    <!-- FUCAPI Tecnologia -->

                <?php include("fucapi-tecnologia.php")?>


    <!-- FUCAPI Educação -->

                <?php include("fucapi-educacao.php")?>

</div>

<div class="container" style="margin-top: 30px;">
    <div class="row">
        <div class="col-md-6">
            <div class="thumbnail"><img src="img/nome-prof.png" class="img-responsive" alt=""></div>
        </div>
        <div class="col-md-6">
            <div class="thumbnail"><img src="img/moedinha.png" class="img-responsive" alt=""></div>
        </div>
    </div>
</div>

<?php include("rodape.php");?>


