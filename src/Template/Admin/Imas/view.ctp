<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="title_nav heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Editar Imã'), ['action' => 'edit', $ima->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Imã'), ['action' => 'delete', $ima->id], ['confirm' => __('Tem certeza que deseja deletar #{0}?', $ima->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Imãs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Adicionar Imã'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bg_tables imas view large-9 medium-8 columns content">
    <h3><?= h($ima->id) ?></h3>
    <table class="tables vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($ima->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Material') ?></th>
            <td><?= h($ima->material) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acabamento') ?></th>
            <td><?= h($ima->acabamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gramatura') ?></th>
            <td><?= h($ima->gramatura) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tamanho') ?></th>
            <td><?= h($ima->tamanho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Corte') ?></th>
            <td><?= h($ima->corte) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img Produto') ?></th>
            <td><?= h($ima->img_produto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Publicado') ?></th>
            <td><?= h($ima->publicado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ordem Produto') ?></th>
            <td><?= h($ima->ordem_produto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ima->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade') ?></th>
            <td><?= $this->Number->format($ima->quantidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Custo') ?></th>
            <td><?= $this->Number->format($ima->custo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco') ?></th>
            <td><?= $this->Number->format($ima->preco) ?></td>
        </tr>
    </table>
</div>
