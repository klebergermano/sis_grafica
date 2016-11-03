<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $categoriaProduto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $categoriaProduto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Categoria Produtos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="categoriaProdutos form large-9 medium-8 columns content">
    <?= $this->Form->create($categoriaProduto) ?>
    <fieldset>
        <legend><?= __('Edit Categoria Produto') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
