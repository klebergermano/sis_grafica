<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="title_nav heading"><?= __('Menu Adesivos') ?></li>
        <li><?= $this->Html->link(__('Edit Adesivo'), ['action' => 'edit', $adesivo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Adesivo'), ['action' => 'delete', $adesivo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adesivo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Adesivos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Adesivo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bg_tables adesivos view large-9 medium-8 columns content">
    <table class='tables' class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($adesivo->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img Produto') ?></th>
            <td><?= h($adesivo->img_produto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tamanho') ?></th>
            <td><?= h($adesivo->tamanho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Corte') ?></th>
            <td><?= h($adesivo->corte) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acabamento') ?></th>
            <td><?= h($adesivo->acabamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gramatura') ?></th>
            <td><?= h($adesivo->gramatura) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cores') ?></th>
            <td><?= h($adesivo->cores) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Material') ?></th>
            <td><?= h($adesivo->material) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ordem Produto') ?></th>
            <td><?= h($adesivo->ordem_produto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Publicar Produto') ?></th>
            <td><?= h($adesivo->publicar_produto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($adesivo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade') ?></th>
            <td><?= $this->Number->format($adesivo->quantidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Custo') ?></th>
            <td><?= $this->Number->format($adesivo->custo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco') ?></th>
            <td><?= $this->Number->format($adesivo->preco) ?></td>
        </tr>
    </table>
</div>
