<?php 

namespace App\QueryFilters\Post;

use App\QueryFilters\Filter;

class Title extends Filter
{
    protected function applyFilter($builder) {
        return $builder->where($this->filterName(), 'like', '%'.request($this->filterName()).'%');
    }
}