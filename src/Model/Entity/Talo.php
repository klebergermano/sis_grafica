<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Talo Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $img_produto
 * @property string $vias
 * @property string $tamanho
 * @property string $acabamento
 * @property string $material
 * @property int $folhas
 * @property string $cores
 * @property string $gramatura
 * @property string $quantidade
 * @property float $custo
 * @property float $preco
 * @property string $publicado
 */
class Talo extends Entity
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
