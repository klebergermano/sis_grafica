<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="title_nav heading"><?= __('Menu Categoria de Produtos') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $categoriaProduto->id],
                ['confirm' => __('Tem certeza que deseja deletar #{0}?', $categoriaProduto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Categorias de Produtos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bg_forms categoriaProdutos form large-9 medium-8 columns content">
    <?= $this->Form->create($categoriaProduto) ?>
    <fieldset>
        <legend><?= __('Editar Categoria de Produtos') ?></legend>
        <?php
            echo $this->Form->input('name', ["label"=>"Nome"]);
            echo $this->Form->input('description', ["label"=>"Descrição"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
