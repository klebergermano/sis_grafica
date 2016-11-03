<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="title_nav heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Carto'), ['action' => 'edit', $carto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Carto'), ['action' => 'delete', $carto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cartoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Carto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class='paginas'>
<div class="bg_tables cartoes view large-9 medium-8 columns content">
    <h3><?= h($carto->id) ?></h3>
    <table class="tables vertical-table">
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= h($carto->categoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($carto->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cores') ?></th>
            <td><?= h($carto->cores) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gramatura') ?></th>
            <td><?= h($carto->gramatura) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acabamento') ?></th>
            <td><?= h($carto->acabamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Corte') ?></th>
            <td><?= h($carto->corte) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Material') ?></th>
            <td><?= h($carto->material) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img Produto') ?></th>
            <td><?= h($carto->img_produto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Publicado') ?></th>
            <td><?= h($carto->publicado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tamanho') ?></th>
            <td><?= h($carto->tamanho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ordem Produto') ?></th>
            <td><?= h($carto->ordem_produto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($carto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade') ?></th>
            <td><?= $this->Number->format($carto->quantidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Custo') ?></th>
            <td><?= $this->Number->format($carto->custo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco') ?></th>
            <td><?= $this->Number->format($carto->preco) ?></td>
        </tr>
           <tr>
            <th scope="row"><?= __('Criado em:') ?></th>
            <td><?= $carto->created->format("d/m/Y H:m:s") ?></td>
        </tr>
           <tr>
            <th scope="row"><?= __('Última modificação') ?></th>
            <td><?= $carto->modified->format("d/m/Y H:m:s") ?></td>
        </tr>
    </table>
</div>
</div><!--paginas-->