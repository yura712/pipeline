<?php

namespace App\QueryFilters\Post;

use App\QueryFilters\Filter;

class Published extends Filter
{
    protected function applyFilter($builder)
    {
        return $builder->where($this->filterName(), request($this->filterName()));
    }
}