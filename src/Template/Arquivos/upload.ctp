<div class="ChImg">
<?php 
echo $this->Form->create(null, ['type' => 'file']);

echo $this->Form->file('filename[]', ['multiple']);
echo $this->Form->input('description');

echo $this->Form->button('Update Details', ['class' => 'btn btn-lg btn-success1 btn-block padding-t-b-15']);
echo $this->Form->end();       
?>
</div>

<?php



/*
echo $this->Form->create(null, ['type'=>'file']);

echo $this->Form->input('description');

echo $this->Form->file('filename[]', ['multiple']);

echo $this->Form->button('Submit', ['type'=>'submit']);
echo $this->Form->end();

*/