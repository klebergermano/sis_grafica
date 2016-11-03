<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="title_nav heading"><?= __('Menu Banner') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $banner->id],
                ['confirm' => __('Tem certeza que deseja deletar #{0}?', $banner->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Banners'), ['action' => 'index']) ?></li>
        
    </ul>
</nav>
<div class='paginas'>
<div class="bg_forms banners form large-9 medium-8 columns content">
    <?php 

    
    ?>
    <?= $this->Form->create($banner, ['type'=>'file']) ?>
    <fieldset>
        <legend><?= __('Editar Banner') ?></legend>
        
                <div class='bg_img_form'>
            
            <?= $this->Html->image("produtos/".$banner->img_produto, ['id'=>'img_form']);?>
                         
            <div id='bg_btn_file'><?= $this->Form->file('img_produto[]', [ 'label'=>'test', 'type'=>"file", 'id'=>'filename','required'=>'none'])?>
            <label id='label_file'>selecionar imagem</label> 
            </div>
                
        </div>
        <div class='bg_precos'>
            <?php 
            echo $this->Form->input('custo', ['label'=>'Custo R$', 'value'=>number_format($banner->custo, 2, ".", ","), 'step'=>1]);     
            echo $this->Form->input('preco', ['label'=>'Preço R$', 'value'=>number_format($banner->preco, 2, ".",","), 'step'=>1]);
            ?>
        </div>
        <?php
            
            echo $this->Form->input('nome');
            echo $this->Form->input('tamanho');
            echo $this->Form->input('material');
            echo $this->Form->input('gramatura');
            echo $this->Form->input('acabamento');
            
                
               $number = number_format($banner->custo, 2, "." , "," );
             
               
     
            echo $this->Form->input('publicado');
            echo $this->Form->input('quantidade');
            echo $this->Form->input('ordem_produto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
</div><!--paginas-->