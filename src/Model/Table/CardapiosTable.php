<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cardapios Model
 *
 * @method \App\Model\Entity\Cardapio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cardapio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cardapio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cardapio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cardapio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cardapio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cardapio findOrCreate($search, callable $callback = null)
 */
class CardapiosTable extends Table
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

        $this->table('cardapios');
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
            ->integer('quantidade')
            ->allowEmpty('quantidade');

        $validator
            ->allowEmpty('acabamento');

        $validator
            ->allowEmpty('dobra');

        $validator
            ->allowEmpty('tamanho');

        $validator
            ->decimal('custo')
            ->allowEmpty('custo');

        $validator
            ->decimal('preco')
            ->allowEmpty('preco');

        $validator
            ->allowEmpty('cores');

        $validator
            ->allowEmpty('gramatura');

        $validator
            ->allowEmpty('img_produto');

        $validator
            ->allowEmpty('publicado');

        return $validator;
    }
}
