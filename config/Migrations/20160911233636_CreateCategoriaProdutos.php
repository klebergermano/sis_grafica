<?php
use Migrations\AbstractMigration;

class CreateCategoriaProdutos extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('categoria_produtos');
        $table->create();
    }
}
