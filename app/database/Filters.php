<?php

namespace app\database;

class Filters
{
    private array $filters = [];

    public function where(string $field, string $operator, mixed $value, string $logic = '')
    {
        $formatter = '';
        if (is_array($value)) {
            $formatter = "('".implode("','", $value)."')";
        } else if (is_string($value)) {
            $formatter = "'{$value}'";
        } else if (is_bool($value)) {
            $formatter = $value ? 1 : 0;
        } else {
            $formatter = $value;
        }

        $value = strip_tags($formatter);
        
        $this->filters['where'][] = "{$field} {$operator} {$value} {$logic}";
    }

    public function limit(int $limit)
    {
        $this->filters['limit'] = " limit {$limit}";
    }

    public function orderBy(string $field, string $order = 'asc')
    {
        $this->filters['order'] = " order by {$field} {$order}";
    }

    public function dump()
    {
        $filter = !empty($this->filters['where']) ? ' where '.implode(' ', $this->filters['where']) : '';
        $filter = !empty($this->filters['order']) ?? '';
        $filter = !empty($this->filters['limit']) ?? '';
        return $filter;
    }
}
