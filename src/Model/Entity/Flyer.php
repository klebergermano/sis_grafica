<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Flyer Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $tamanho
 * @property string $gramatura
 * @property string $material
 * @property string $acabamento
 * @property int $quantidade
 * @property string $dobra
 * @property float $custo
 * @property float $preco
 * @property string $cores
 * @property string $img_produto
 * @property string $publido
 */
class Flyer extends Entity
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
