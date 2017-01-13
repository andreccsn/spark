<?php 
    $pageTitle = 'Badges';
    $heroTitle = 'Components';
    $pageDescription = 'Diversos componentes reutilizáveis para você utilizar no desenvolvimento de intefaces administrativas.';
    require 'header.php';
?>

<h2 class="page-title"><?= $pageTitle ?></h2>
<p></p>

<h2>Basic</h2>
<div class="sample-box">
    <span class="badge">Default</span>
    <span class="badge primary">Primary</span>
    <span class="badge success">Success</span>
    <span class="badge warning">Warning</span>
    <span class="badge info">Info</span>
    <span class="badge danger">Danger</span>
</div>

<h2>Rounded</h2>
<p>Utilize a classe <code>.rounded</code> para aplicar uma borda mais arredondada.</p>
<div class="sample-box">
    <span class="badge rounded">Default</span>
    <span class="badge primary rounded">Primary</span>
    <span class="badge success rounded">Success</span>
    <span class="badge warning rounded">Warning</span>
    <span class="badge info rounded">Info</span>
    <span class="badge danger rounded">Danger</span>
</div>

<h2>Outlined</h2>
<div class="sample-box">
    <span class="badge outline">Default</span>
    <span class="badge primary outline">Primary</span>
    <span class="badge success outline">Success</span>
    <span class="badge warning outline">Warning</span>
    <span class="badge info outline">Info</span>
    <span class="badge danger outline">Danger</span>
</div>


<? require 'footer.php' ?>