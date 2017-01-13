<?php 
    $pageTitle = 'Forms';
    $heroTitle = 'Components';
    $pageDescription = 'Diversos componentes reutilizáveis para você utilizar no desenvolvimento de intefaces administrativas.';
    require 'header.php';
?>

<h2 class="page-title"><?= $pageTitle ?></h2>
<p></p>

<form>
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" class="field" placeholder="Digite seu nome completo">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" class="field" placeholder="Seu endereço de e-mail">
    </div>
    <div class="form-group">
        <label for="password">Senha</label>
        <input type="text" name="password" id="password" class="field" placeholder="Entre 8-12 caracteres">
    </div>
    <div class="form-group">
        <label for="select-example">Exemplo de select</label>
        <select id="select-example" class="field">
            <option value="">-- Selecione</option>
            <option value="">Valor 1</option>
            <option value="">Valor 2</option>
        </select>
    </div>
    <div class="form-group">
        <label for="textarea-example">Exemplo textarea</label>
        <textarea id="textarea-example" class="field" rows="4"></textarea>
    </div>
    <legend>Radio Buttons</legend>
    <div class="form-group check">
        <label>
            <input type="radio" name="radioExample1" value="1"> A primeira opção é esta
        </label>
        <label>
            <input type="radio" name="radioExample1" value="2"> Está e a segunda opção, quando selecionada desmarca a primeira
        </label>
        <label>
            <input type="radio" name="radioExample1" value="disabled" disabled> Esta opção está desativada
        </label>
    </div>
    <div class="form-group check">
        <label>
            <input type="checkbox" name="checkboxExample1" value="On"> Li e aceitos os termos mencionados
        </label>
    </div>
</form>



<? require 'footer.php' ?>