<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="title_nav "><?= __('Menu Cartões') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $carto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $carto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Cartoes'), ['action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Adicionar Cartão'), ['action' => 'add']) ?></li>

    </ul>
</nav>
<div class='paginas'>
<div class="bg_forms cartoes form large-9 medium-8 columns content">
    
    <?= $this->Form->create($carto, ["type"=>"file"]) ?>
    
    <fieldset>
        <legend><?= __('Editar Cartão') ?></legend>
        
           
        <div class='bg_img_form'>
            
            <?= $this->Html->image("produtos/".$carto->img_produto, ['id'=>'img_form']);?>
                         
            <div id='bg_btn_file'><?= $this->Form->file('img_produto[]', [ 'label'=>'test', 'type'=>"file", 'id'=>'filename'])?>
            <label id='label_file'>selecionar imagem</label> 
            </div>
   
        </div>
                  <div class='bg_precos'>
            <?php 
            echo $this->Form->input('custo', ['label'=>'Custo R$', 'value'=>number_format($carto->custo, 2, ".", ","), 'step'=>1]);     
            echo $this->Form->input('preco', ['label'=>'Preço R$', 'value'=>number_format($carto->preco, 2, ".",","), 'step'=>1]);
            ?>
        </div>  
        
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('cores');
            echo $this->Form->input('gramatura');
            echo $this->Form->input('acabamento');
            echo $this->Form->input('corte');
            echo $this->Form->input('material');
            echo $this->Form->input('quantidade');

            echo $this->Form->input('publicado');
            echo $this->Form->input('tamanho');
            echo $this->Form->input('ordem_produto');
          

            
           


        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar Edições')) ?>
    <?= $this->Form->end() ?>
</div>
</div><!--paginas-->