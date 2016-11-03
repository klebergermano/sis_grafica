<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cartaze'), ['action' => 'edit', $cartaze->id_cartaz]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cartaze'), ['action' => 'delete', $cartaze->id_cartaz], ['confirm' => __('Are you sure you want to delete # {0}?', $cartaze->id_cartaz)]) ?> </li>
        <li><?= $this->Html->link(__('List Cartazes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cartaze'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cartazes view large-9 medium-8 columns content">
    <h3><?= h($cartaze->id_cartaz) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($cartaze->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tamanho') ?></th>
            <td><?= h($cartaze->tamanho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gramatura') ?></th>
            <td><?= h($cartaze->gramatura) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acabamento') ?></th>
            <td><?= h($cartaze->acabamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cores') ?></th>
            <td><?= h($cartaze->cores) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Material') ?></th>
            <td><?= h($cartaze->material) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img Produto') ?></th>
            <td><?= h($cartaze->img_produto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Publicado') ?></th>
            <td><?= h($cartaze->publicado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cartaze->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade') ?></th>
            <td><?= $this->Number->format($cartaze->quantidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Custo') ?></th>
            <td><?= $this->Number->format($cartaze->custo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco') ?></th>
            <td><?= $this->Number->format($cartaze->preco) ?></td>
        </tr>
    </table>
</div>
