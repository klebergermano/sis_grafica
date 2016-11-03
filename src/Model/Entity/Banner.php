<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Banner Entity
 *
 * @property int $id
 * @property string $categoria
 * @property string $nome
 * @property string $tamanho
 * @property string $material
 * @property string $gramatura
 * @property string $acabamento
 * @property float $custo
 * @property float $preco
 * @property string $img_produto
 * @property string $publicado
 * @property int $quantidade
 * @property string $ordem_produto
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Banner extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
