<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  /**
   * The attributes that aren't mass assignable.
   *
   * @var array
   */
  protected $guarded = ['id'];    

  public function scopeFilter($query, QueryFilter $filters) {
    return $filters->apply($query);
  }

  public function format() {

    return [
      'title' => $this->title,
      'price' => '$'.$this->price,
      'list_price' => '$'.$this->list_price,
      'rating' => $this->rating,
      'description' => $this->description
    ];

  }
  
}
