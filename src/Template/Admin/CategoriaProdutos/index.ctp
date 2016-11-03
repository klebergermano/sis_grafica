<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="title_nav heading"><?= __('Menu Categoria de Produtos') ?></li>
        <li><?= $this->Html->link(__('Nova Categoria de Produto'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bg_tables categoriaProdutos index large-9 medium-8 columns content">
    <h3 class='title_page'><?= __('Categoria de Produtos') ?></h3>
    <table class='tables' cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descrição') ?></th>
                <th scope="col"><?= $this->Paginator->sort('criado em') ?></th>
                <th scope="col"><?= $this->Paginator->sort('última modificação') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categoriaProdutos as $categoriaProduto): ?>
            <tr>
                <td><?= $this->Number->format($categoriaProduto->id) ?></td>
                <td><?= h($categoriaProduto->name) ?></td>
                <td><?= h($categoriaProduto->description) ?></td>
                <td><?= h($categoriaProduto->created) ?></td>
                <td><?= h($categoriaProduto->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $categoriaProduto->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $categoriaProduto->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $categoriaProduto->id], ['confirm' => __('Tem certeza que deseja deletar #{0}?', $categoriaProduto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
