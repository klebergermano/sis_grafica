<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="title_nav heading"><?= __('Menu Folhinhas') ?></li>
        <li><?= $this->Html->link(__('Editar Folhinhas de Parede'), ['action' => 'edit', $folhinhasParede->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Folhinhas de Parede'), ['action' => 'delete', $folhinhasParede->id], ['confirm' => __('Tem certeza que deseja deletar #{0}?', $folhinhasParede->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Folhinhas de Parede'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Adicionar Folhinhas de Parede'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class='paginas'>
<div class="bg_tables folhinhasParede view large-9 medium-8 columns content">
    <table class="tables vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($folhinhasParede->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Material') ?></th>
            <td><?= h($folhinhasParede->material) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acabamento') ?></th>
            <td><?= h($folhinhasParede->acabamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tamanho') ?></th>
            <td><?= h($folhinhasParede->tamanho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gramatura') ?></th>
            <td><?= h($folhinhasParede->gramatura) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cores') ?></th>
            <td><?= h($folhinhasParede->cores) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img Produto') ?></th>
            <td><?= h($folhinhasParede->img_produto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Publicado') ?></th>
            <td><?= h($folhinhasParede->publicado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($folhinhasParede->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade') ?></th>
            <td><?= $this->Number->format($folhinhasParede->quantidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Custo') ?></th>
            <td class='td_custo'><?= $this->Money->format($folhinhasParede->custo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco') ?></th>
            <td class='td_preco'><?= $this->Money->format($folhinhasParede->preco) ?></td>
        </tr>
    </table>
</div>
</div><!--páginas-->