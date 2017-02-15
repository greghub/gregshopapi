<?php

namespace App;

class ProductFilters extends QueryFilter
{
  public function featured() 
  {
    return $this->builder->where('is_featured', 'true');
  }  

  public function rating_from($rating) 
  {
    return $this->builder->where('rating', '>=', $rating);
  }  

  public function rating_to($rating) 
  {
    return $this->builder->where('rating', '<=', $rating);
  }   

  public function price_from($price) 
  {
    return $this->builder->where('price', '>=', $price);
  }  

  public function price_to($price) 
  {
    return $this->builder->where('price', '<=', $price);
  }  

  public function order_desc_by($order) 
  {
    return $this->builder->orderBy($order, 'desc');
  }  

  public function order_asc_by($order) 
  {
    return $this->builder->orderBy($order, 'asc');
  }  
}