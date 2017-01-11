<?php 
    $pageTitle = 'Alerts';
    $heroTitle = 'Components';
    $pageDescription = 'Diversos componentes reutilizáveis para você utilizar no desenvolvimento de intefaces administrativas.';
    require 'header.php';
?>

<h2 class="page-title"><?= $pageTitle ?></h2>
<p>Provê informações contextuais de feedback para o usuário para ações comuns dos usuários.</p>

<h2>Examples</h2>
<!-- <p class="alert default" role="alert"><b>Olá!</b> Este é um exemplo básico de um alerta padrão.</p> -->
<p class="alert success" role="alert"><b>Parabéns!</b> Seu cadastro foi realizado com sucesso.</p>
<p class="alert info" role="alert"><b>Watch out!</b> Este alerta precisa da sua atenção, mas não é importante.</p>
<p class="alert warning" role="alert"><b>Aviso!</b> Seu plano irá expirar em breve.</p>
<p class="alert danger" role="alert"><b>Atenção!</b> Verifique os campos preenchidos, são obrigatórios.</p>


<? require 'footer.php' ?>