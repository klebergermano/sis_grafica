<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="title_nav heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Editar Talão'), ['action' => 'edit', $talao->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Talão'), ['action' => 'delete', $talao->id], ['confirm' => __('Tem certeza que deseja deletar #{0}?', $talao->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Talões'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Adicionar Talão'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bg_tables taloes view large-9 medium-8 columns content">
    <table class="tables vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($talao->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img Produto') ?></th>
            <td><?= h($talao->img_produto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vias') ?></th>
            <td><?= h($talao->vias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tamanho') ?></th>
            <td><?= h($talao->tamanho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acabamento') ?></th>
            <td><?= h($talao->acabamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Material') ?></th>
            <td><?= h($talao->material) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cores') ?></th>
            <td><?= h($talao->cores) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gramatura') ?></th>
            <td><?= h($talao->gramatura) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade') ?></th>
            <td><?= h($talao->quantidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Publicado') ?></th>
            <td><?= h($talao->publicado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($talao->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Folhas') ?></th>
            <td><?= $this->Number->format($talao->folhas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Custo') ?></th>
            <td><?= $this->Money->format($talao->custo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preço') ?></th>
            <td><?= $this->Money->format($talao->preco) ?></td>
        </tr>
    </table>
</div>
