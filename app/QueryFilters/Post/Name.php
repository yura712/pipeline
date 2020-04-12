<?php

namespace App\QueryFilters\Post;

use App\QueryFilters\Filter;

class Name extends Filter
{
    protected function applyFilter($builder)
    {
        return $builder->whereHas('user', function ($query) {
            $query->where($this->filterName(), 'like', request($this->filterName()).'%');
        });
    }
}