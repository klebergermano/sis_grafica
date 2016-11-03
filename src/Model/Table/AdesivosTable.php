<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Adesivos Model
 *
 * @method \App\Model\Entity\Adesivo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Adesivo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Adesivo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Adesivo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Adesivo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Adesivo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Adesivo findOrCreate($search, callable $callback = null)
 */
class AdesivosTable extends Table
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

        $this->table('adesivos');
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
            ->allowEmpty('tamanho');

        $validator
            ->allowEmpty('corte');

        $validator
            ->allowEmpty('acabamento');

        $validator
            ->allowEmpty('gramatura');

        $validator
            ->allowEmpty('cores');

        $validator
            ->allowEmpty('material');

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
            ->allowEmpty('ordem_produto');

        $validator
            ->allowEmpty('publicar_produto');

        return $validator;
    }
}
