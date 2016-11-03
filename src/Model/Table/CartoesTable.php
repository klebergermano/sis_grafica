<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cartoes Model
 *
 * @method \App\Model\Entity\Carto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Carto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Carto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Carto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Carto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Carto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Carto findOrCreate($search, callable $callback = null)
 */
class CartoesTable extends Table
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

        $this->table('cartoes');
        $this->displayField('id');
        $this->primaryKey('id');
        
        $this->addBehavior('Timestamp');
     

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
            ->allowEmpty('categoria');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->allowEmpty('cores');

        $validator
            ->allowEmpty('gramatura');

        $validator
            ->allowEmpty('acabamento');

        $validator
            ->allowEmpty('corte');

        $validator
            ->integer('quantidade')
            ->allowEmpty('quantidade');

        $validator
            ->allowEmpty('material');

        $validator
            ->decimal('custo')
            ->allowEmpty('custo');

        $validator
            ->decimal('preco')
            ->allowEmpty('preco');

        $validator
            ->allowEmpty('img_produto');

        $validator
            ->allowEmpty('publicado');

        $validator
            ->allowEmpty('tamanho');

        $validator
            ->allowEmpty('ordem_produto');

        return $validator;
    }
}
