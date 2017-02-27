<?php

namespace Modules\Users\Filters;


class TableFilters extends QueryFilter
{


    public function popular($order = 'desc')
    {
        $this->builder->orderBy('views', $order);
    }

    public function difficulty($level)
    {
        $this->builder->where('difficulty', $level);
    }

    public function latest()
    {
        $this->builder->orderBy('created_at', 'asc');
    }


    public function limit($limit)
    {
        session(['country_table_record_limit' => $limit]);
    }

}