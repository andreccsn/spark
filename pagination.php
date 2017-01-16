<?php 
    $pageTitle = 'Pagination';
    $heroTitle = 'Components';
    $pageDescription = 'Diversos componentes reutilizáveis para você utilizar no desenvolvimento de intefaces administrativas.';
    require 'header.php';
?>

<h2 class="page-title"><?= $pageTitle ?></h2>
<p></p>

<h2>Examples</h2>
<div class="sample-box">
    <nav class="pagination-nav" role="navigation">
        <ul class="pagination">
            <li class="page-item">
                <a href="" class="page-link">Previous</a>
            </li>
            <li class="page-item">
                <a href="" class="page-link">1</a>
            </li>
            <li class="page-item">
                <a href="" class="page-link">2</a>
            </li>
            <li class="page-item">
                <a href="" class="page-link">3</a>
            </li>
            <li class="page-item">
                <a href="" class="page-link">4</a>
            </li>
            <li class="page-item">
                <a href="" class="page-link">Next</a>
            </li>
        </ul>
    </nav>
</div>

<h2>Active state</h2>
<p>Para customizar a aparência da paginação, utilize classes como <code>current</code> para indicar a página atual, e <code>disabled</code> para marcar um link inativo.</p>
<div class="sample-box">
    <nav class="pagination-nav" role="navigation">
        <ul class="pagination">
            <li class="page-item disabled">
                <a href="" class="page-link">&laquo;</a>
            </li>
            <li class="page-item">
                <a href="" class="page-link">&lsaquo;</a>
            </li>
            <li class="page-item">
                <a href="" class="page-link">1</a>
            </li>
            <li class="page-item current">
                <a href="" class="page-link">2</a>
            </li>
            <li class="page-item">
                <a href="" class="page-link">3</a>
            </li>
            <li class="page-item">
                <a href="" class="page-link">4</a>
            </li>
            <li class="page-item">
                <a href="" class="page-link">&rsaquo;</a>
            </li>
            <li class="page-item">
                <a href="" class="page-link">&raquo;</a>
            </li>
        </ul>
    </nav>
</div>

<h2>Positioning</h2>
<p>Para centralizar um componente de paginação, utilize a classe <code>center</code>.</p>
<div class="sample-box">
    <nav class="pagination-nav center" role="navigation">
        <ul class="pagination">
            <li class="page-item disabled">
                <a href="" class="page-link">Previous</a>
            </li>
            <li class="page-item">
                <a href="" class="page-link">1</a>
            </li>
            <li class="page-item current">
                <a href="" class="page-link">2</a>
            </li>
            <li class="page-item">
                <a href="" class="page-link">3</a>
            </li>
            <li class="page-item">
                <a href="" class="page-link">Next</a>
            </li>
        </ul>
    </nav>
</div>
<p>Para alinhar a paginação à direita, utilize a classe <code>right</code>.</p>
<div class="sample-box">
    <nav class="pagination-nav right" role="navigation">
        <ul class="pagination">
            <li class="page-item disabled">
                <a href="" class="page-link">Previous</a>
            </li>
            <li class="page-item">
                <a href="" class="page-link">1</a>
            </li>
            <li class="page-item current">
                <a href="" class="page-link">2</a>
            </li>
            <li class="page-item">
                <a href="" class="page-link">3</a>
            </li>
            <li class="page-item">
                <a href="" class="page-link">Next</a>
            </li>
        </ul>
    </nav>
</div>


<? require 'footer.php' ?>