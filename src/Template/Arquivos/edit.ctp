<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="title_nav heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $arquivo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $arquivo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Arquivos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<script>


 

</script>

<div class="bg_forms arquivos form large-9 medium-8 columns content">
    <?= $this->Form->create($arquivo,['type'=>'file']) ?>
    <fieldset>
        <legend><?= __('Edit Arquivo') ?></legend>
        
                <div class='bg_img_form'><?= $this->Html->image("uploads/".$arquivo->filename, ['id'=>'img_form']);?>
                    
                    <?= $this->Form->file('filename[]', ['id'=>'filename'])?>
                
                </div>

        <?php
            echo $this->Form->input('description');
            
            //echo "<br/><br/><br/><br/><br/>";
                 
           // echo $this->Form->input('filename');
            
        ?>
        
        
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<!--
 <form id="form1">
   <input type='file' id="imgInp" />
   <img id="blah" src="#" alt="your image" />
</form>
-->