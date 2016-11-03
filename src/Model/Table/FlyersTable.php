<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Flyers Model
 *
 * @method \App\Model\Entity\Flyer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Flyer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Flyer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Flyer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Flyer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Flyer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Flyer findOrCreate($search, callable $callback = null)
 */
class FlyersTable extends Table
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

        $this->table('flyers');
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
            ->allowEmpty('material');

        $validator
            ->allowEmpty('acabamento');

        $validator
            ->integer('quantidade')
            ->allowEmpty('quantidade');

        $validator
            ->allowEmpty('dobra');

        $validator
            ->decimal('custo')
            ->allowEmpty('custo');

        $validator
            ->decimal('preco')
            ->allowEmpty('preco');

        $validator
            ->allowEmpty('cores');

        $validator
            ->allowEmpty('img_produto');

        $validator
            ->allowEmpty('publicado');

        return $validator;
    }
}
