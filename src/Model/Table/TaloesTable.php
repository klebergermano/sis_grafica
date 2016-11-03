<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Taloes Model
 *
 * @method \App\Model\Entity\Talo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Talo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Talo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Talo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Talo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Talo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Talo findOrCreate($search, callable $callback = null)
 */
class TaloesTable extends Table
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

        $this->table('taloes');
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
            ->allowEmpty('img_produto');

        $validator
            ->allowEmpty('vias');

        $validator
            ->allowEmpty('tamanho');

        $validator
            ->allowEmpty('acabamento');

        $validator
            ->allowEmpty('material');

        $validator
            ->integer('folhas')
            ->allowEmpty('folhas');

        $validator
            ->allowEmpty('cores');

        $validator
            ->allowEmpty('gramatura');

        $validator
            ->allowEmpty('quantidade');

        $validator
            ->decimal('custo')
            ->allowEmpty('custo');

        $validator
            ->decimal('preco')
            ->allowEmpty('preco');

        $validator
            ->allowEmpty('publicado');

        return $validator;
    }
}
