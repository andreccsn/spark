<?php 
    $pageTitle = 'Buttons';
    $heroTitle = 'Components';
    $pageDescription = 'Diversos componentes reutilizáveis para você utilizar no desenvolvimento de intefaces administrativas.';
    require 'header.php';
?>

<h2 class="page-title"><?= $pageTitle ?></h2>
<p></p>

<h2>Examples</h2>
<div class="sample-box">
    <button type="button" class="button default">Default</button>
    <button type="button" class="button primary">Primary</button>
    <button type="button" class="button success">Success</button>
    <button type="button" class="button info">Info</button>
    <button type="button" class="button warning">Warning</button>
    <button type="button" class="button danger">Danger</button>
</div>
<div class="highlight">
<pre><code class="language-html">&lt;button type="button" class="button default"&gt;Danger&lt;/button&gt;
&lt;button type="button" class="button primary"&gt;Primary&lt;/button&gt;
&lt;button type="button" class="button success"&gt;Success&lt;/button&gt;
&lt;button type="button" class="button info"&gt;Info&lt;/button&gt;
&lt;button type="button" class="button warning"&gt;Warning&lt;/button&gt;
&lt;button type="button" class="button danger"&gt;Danger&lt;/button&gt;</code>
</pre>
</div>

<h2>Outlined</h2>
<button type="button" class="button outline default">Default</button>
<button type="button" class="button outline success">Default</button>
<button type="button" class="button outline info">Default</button>
<button type="button" class="button outline warning">Default</button>
<button type="button" class="button outline danger">Default</button>

<h2>Sizes</h2>
<button type="button" class="button default large">Large button</button>
<button type="button" class="button primary large">Large button</button>
<br />
<button type="button" class="button default">Default button</button>
<button type="button" class="button primary">Default button</button>
<br />
<button type="button" class="button default small">Small button</button>
<button type="button" class="button primary small">Small button</button>
<br />
<button type="button" class="button default tiny">Tiny button</button>
<button type="button" class="button primary tiny">Tiny button</button>

<p>Para criar botões como elementos de bloco, adicione a classe <code>block</code>.</p>

<button type="button" class="button primary large block">Block button</button>
<button type="button" class="button default large block">Block button</button>



<? require 'footer.php' ?>