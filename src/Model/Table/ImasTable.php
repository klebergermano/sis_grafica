<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Imas Model
 *
 * @method \App\Model\Entity\Ima get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ima newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ima[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ima|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ima patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ima[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ima findOrCreate($search, callable $callback = null)
 */
class ImasTable extends Table
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

        $this->table('imas');
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
            ->allowEmpty('material');

        $validator
            ->allowEmpty('acabamento');

        $validator
            ->allowEmpty('gramatura');

        $validator
            ->integer('quantidade')
            ->allowEmpty('quantidade');

        $validator
            ->allowEmpty('tamanho');

        $validator
            ->decimal('custo')
            ->allowEmpty('custo');

        $validator
            ->decimal('preco')
            ->allowEmpty('preco');

        $validator
            ->allowEmpty('corte');

        $validator
            ->allowEmpty('img_produto');

        $validator
            ->allowEmpty('publicado');

        $validator
            ->allowEmpty('ordem_produto');

        return $validator;
    }
}
