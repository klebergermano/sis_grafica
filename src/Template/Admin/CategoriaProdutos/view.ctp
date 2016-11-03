<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="title_nav heading"><?= __('Menu Categoria de Produtos') ?></li>
        <li><?= $this->Html->link(__('Editar Categoria de Produto'), ['action' => 'edit', $categoriaProduto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Categoria de Produtos'), ['action' => 'delete', $categoriaProduto->id], ['confirm' => __('Tem certeza que deseja deletar #{0}?', $categoriaProduto->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Categoria de Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novar Categoria de Produto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bg_tables categoriaProdutos view large-9 medium-8 columns content">
    
    <table class="tables vertical-table">
           <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categoriaProduto->id) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($categoriaProduto->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descrição') ?></th>
            <td><?= h($categoriaProduto->description) ?></td>
        </tr>
     
        <tr>
            <th scope="row"><?= __('Criado em') ?></th>
            <td><?= h($categoriaProduto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Última modificação') ?></th>
            <td><?= h($categoriaProduto->modified) ?></td>
        </tr>
    </table>
</div>
