<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Adesivo Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $img_produto
 * @property string $tamanho
 * @property string $corte
 * @property string $acabamento
 * @property string $gramatura
 * @property string $cores
 * @property string $material
 * @property int $quantidade
 * @property float $custo
 * @property float $preco
 * @property string $ordem_produto
 * @property string $publicar_produto
 */
class Adesivo extends Entity
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
