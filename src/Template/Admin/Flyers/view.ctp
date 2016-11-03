<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Flyer'), ['action' => 'edit', $flyer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Flyer'), ['action' => 'delete', $flyer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flyer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Flyers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flyer'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="flyers view large-9 medium-8 columns content">
    <h3><?= h($flyer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($flyer->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tamanho') ?></th>
            <td><?= h($flyer->tamanho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gramatura') ?></th>
            <td><?= h($flyer->gramatura) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Material') ?></th>
            <td><?= h($flyer->material) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acabamento') ?></th>
            <td><?= h($flyer->acabamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dobra') ?></th>
            <td><?= h($flyer->dobra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cores') ?></th>
            <td><?= h($flyer->cores) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img Produto') ?></th>
            <td><?= h($flyer->img_produto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Publicado') ?></th>
            <td><?= h($flyer->publicado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($flyer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade') ?></th>
            <td><?= $this->Number->format($flyer->quantidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Custo') ?></th>
            <td><?= $this->Number->format($flyer->custo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco') ?></th>
            <td><?= $this->Number->format($flyer->preco) ?></td>
        </tr>
    </table>
</div>
