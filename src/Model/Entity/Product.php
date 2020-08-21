<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $category
 * @property int|null $user_id
 * @property string|null $title
 * @property string|null $content
 * @property string|null $description
 * @property int|null $total
 * @property string|null $cost
 * @property \Cake\I18n\FrozenTime|null $updated_at
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\ProductImage[] $product_images
 */
class Product extends Entity
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
        'name' => true,
        'category' => true,
        'user_id' => true,
        'title' => true,
        'content' => true,
        'description' => true,
        'total' => true,
        'cost' => true,
        'updated_at' => true,
        'user' => true,
        'product_images' => true,
    ];
}
