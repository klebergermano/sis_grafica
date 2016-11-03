<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="title_nav"><?= __('Menu Usuários') ?></li>
        <li><?= $this->Html->link(__('Listar Usuários'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bg_forms usuarios add_users">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Adicionar Usuário') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('password', ["label"=>"Senha"]);
            echo $this->Form->input('privilegios', ["label"=>"Privilégios"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Cadastrar')) ?>
    <?= $this->Form->end() ?>
</div>
