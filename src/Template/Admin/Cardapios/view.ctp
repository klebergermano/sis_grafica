<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cardapio'), ['action' => 'edit', $cardapio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cardapio'), ['action' => 'delete', $cardapio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cardapio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cardapios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cardapio'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cardapios view large-9 medium-8 columns content">
    <h3><?= h($cardapio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($cardapio->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Material') ?></th>
            <td><?= h($cardapio->material) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acabamento') ?></th>
            <td><?= h($cardapio->acabamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dobra') ?></th>
            <td><?= h($cardapio->dobra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tamanho') ?></th>
            <td><?= h($cardapio->tamanho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cores') ?></th>
            <td><?= h($cardapio->cores) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gramatura') ?></th>
            <td><?= h($cardapio->gramatura) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img Produto') ?></th>
            <td><?= h($cardapio->img_produto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Publicado') ?></th>
            <td><?= h($cardapio->publicado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cardapio->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade') ?></th>
            <td><?= $this->Number->format($cardapio->quantidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Custo') ?></th>
            <td><?= $this->Number->format($cardapio->custo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco') ?></th>
            <td><?= $this->Number->format($cardapio->preco) ?></td>
        </tr>
    </table>
</div>
