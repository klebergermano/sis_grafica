<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cartazes Model
 *
 * @method \App\Model\Entity\Cartaze get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cartaze newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cartaze[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cartaze|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cartaze patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cartaze[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cartaze findOrCreate($search, callable $callback = null)
 */
class CartazesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('cartazes');
        $this->displayField('id');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('nome');

        $validator
            ->allowEmpty('tamanho');

        $validator
            ->allowEmpty('gramatura');

        $validator
            ->allowEmpty('acabamento');

        $validator
            ->integer('quantidade')
            ->allowEmpty('quantidade');

        $validator
            ->decimal('custo')
            ->allowEmpty('custo');

        $validator
            ->decimal('preco')
            ->allowEmpty('preco');

        $validator
            ->allowEmpty('cores');

        $validator
            ->allowEmpty('material');

        $validator
            ->allowEmpty('img_produto');

        $validator
            ->allowEmpty('publicado');

        return $validator;
    }
}
