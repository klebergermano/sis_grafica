<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
                  <?= $this->element("nav_basica_lateral");?>

    <ul class="side-nav">
        <li class="title_nav heading"><?= __('Menu Banners') ?></li>
        <li><?= $this->Html->link(__('Novo Banner'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class='paginas' >
<div class="bg_tables banners index large-9 medium-8 columns content">
    <h3 class='title_page'><?= __('Banners') ?></h3>
    <table class='tables' cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('imagem') ?></th>

                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tamanho') ?></th>
                <th scope="col"><?= $this->Paginator->sort('material') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gramatura') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acabamento') ?></th> 
                <th scope="col"><?= $this->Paginator->sort('Qtd.') ?></th>
                 <th scope="col"><?= $this->Paginator->sort('custo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('preço') ?></th>
                <th scope="col"><?= $this->Paginator->sort('publicado') ?></th>

                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($banners as $banner): ?>
            <tr>
               <td><?= $this->Html->image('produtos/'.$banner->img_produto, ['class'=>'preview_img_produtos']) ?></td>


                <td><?= $this->Number->format($banner->id) ?></td>
                <td><?= h($banner->categoria) ?></td>
                <td><?= h($banner->nome) ?></td>
                <td><?= h($banner->tamanho) ?></td>
                <td><?= h($banner->material) ?></td>
                <td><?= h($banner->gramatura) ?></td>
                <td><?= h($banner->acabamento) ?></td>
  
                <td><?= $this->Number->format($banner->quantidade) ?></td>
                
                <td class='td_custo'><?= $this->Money->format($banner->custo) ?></td>
                <td class='td_preco'><?= $this->Money->format($banner->preco) ?></td>

                             <td><?= h($banner->publicado) ?></td>

                <td class="actions">
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $banner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banner->id)]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $banner->id]) ?>
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $banner->id]) ?>
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
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
</div><!--paginas-->