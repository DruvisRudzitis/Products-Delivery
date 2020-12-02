<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

/**
 * Class Product
 * @package App\Models
 *
 * @mixin Builder
 */

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'size', 'price', 'weight'];

    public function deliveries()
    {
        return $this->hasMany(Delivery::class, 'size', 'size');
    }

    public function getPrice(): string
    {
        return '$' . round($this->price / 100, 2);
    }
    public function getWeight(): string
    {
        return round($this->weight / 100, 2) . 'kg';
    }
    public function getSize(): string
    {
        return $this->size;
    }
}
