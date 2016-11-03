<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
                  <?= $this->element("nav_basica_lateral");?>

    <ul class="side-nav">
        <li class="title_nav heading"><?= __('Menu Flyers') ?></li>
        <li><?= $this->Html->link(__('Adicionar Flyer'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class='paginas'>
<div class="bg_tables flyers index large-9 medium-8 columns content">
    <h3 class='title_page'><?= __('Flyers') ?></h3>
    <table class='tables' cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('imagem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tamanho') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gramatura') ?></th>
                <th scope="col"><?= $this->Paginator->sort('material') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acabamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dobra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('custo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('preço') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cores') ?></th>
                <th scope="col"><?= $this->Paginator->sort('publicado') ?></th>
                <th scope="col" class="actions"><?= __('') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($flyers as $flyer): ?>
            <tr>
                
                <td><?= $this->Html->image('produtos/'.$flyer->img_produto, ['class'=>'preview_img_produtos']) ?></td>

                <td><?= $this->Number->format($flyer->id) ?></td>
                <td><?= h($flyer->nome) ?></td>
                <td><?= h($flyer->tamanho) ?></td>
                <td><?= h($flyer->gramatura) ?></td>
                <td><?= h($flyer->material) ?></td>
                <td><?= h($flyer->acabamento) ?></td>
                <td><?= $this->Number->format($flyer->quantidade) ?></td>
                <td><?= h($flyer->dobra) ?></td>
                <td class='td_custo'><?= $this->Money->format($flyer->custo) ?></td>
                <td class='td_preco'><?= $this->Money->format($flyer->preco) ?></td>
                <td><?= h($flyer->cores) ?></td>
                <td><?= h($flyer->publicado) ?></td>
                <td class="actions">
                                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $flyer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flyer->id)]) ?>

                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $flyer->id]) ?>
                                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $flyer->id]) ?>

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
        <p><?= $this->Paginator->counter("Página {{page}} de {{pages}}") ?></p>
    </div>
</div>
</div><!--páginas-->