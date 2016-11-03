<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
                  <?= $this->element("nav_basica_lateral");?>

    <ul class="side-nav">
        <li class="title_nav heading"><?= __('Menu Folhinhas') ?></li>
        <li><?= $this->Html->link(__('Adicionar Folhinha'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class='paginas'>
<div class="bg_tables folhinhasParede index large-9 medium-8 columns content">
    <h3 class='title_page'><?= __('Folhinhas de Parede') ?></h3>
    <table class='tables' cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                 <th scope="col"><?= $this->Paginator->sort('imagem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('material') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acabamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tamanho') ?></th>
                <th scope="col"><?= $this->Paginator->sort('custo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('preço') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gramatura') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cores') ?></th>
               
                <th scope="col"><?= $this->Paginator->sort('publicado') ?></th>
                <th scope="col" class="actions"><?= __('') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($folhinhasParede as $folhinhasParede): ?>
            <tr>
                <td><?= $this->Html->image('produtos/'.$folhinhasParede->img_produto, ['class'=>'preview_img_produtos']) ?></td>
                <td><?= $this->Number->format($folhinhasParede->id) ?></td>
                <td><?= h($folhinhasParede->nome) ?></td>
                <td><?= h($folhinhasParede->material) ?></td>
                <td><?= $this->Number->format($folhinhasParede->quantidade) ?></td>
                <td><?= h($folhinhasParede->acabamento) ?></td>
                <td><?= h($folhinhasParede->tamanho) ?></td>
                <td class='td_custo'><?= $this->Money->format($folhinhasParede->custo) ?></td>
                <td class='td_preco'><?= $this->Money->format($folhinhasParede->preco) ?></td>
                <td><?= h($folhinhasParede->gramatura) ?></td>
                <td><?= h($folhinhasParede->cores) ?></td>
                <td><?= h($folhinhasParede->publicado) ?></td>
                <td class="actions">
                                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $folhinhasParede->id], ['confirm' => __('Tem certeza que deseja deletar #{0}?', $folhinhasParede->id)]) ?>

                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $folhinhasParede->id]) ?>
                                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $folhinhasParede->id]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próxima') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter("Páginas {{page}} de {{pages}}") ?></p>
    </div>
</div>
</div><!--páginas-->