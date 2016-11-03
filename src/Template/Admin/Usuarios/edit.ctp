<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="title_nav"><?= __('Menu Usuários') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $usuario->id],
                ['confirm' => __('Tem certeza que deseja deletar esse usuário #{0}?', $usuario->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Usuários'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bg_forms usuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Editar Usuários') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('password', ["label"=>"Senha"]);
            echo $this->Form->input('privilegios', ["label"=>"Privilégios"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
