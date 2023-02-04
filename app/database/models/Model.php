<?php

namespace app\database\models;

use PDOException;
use app\database\Filters;

abstract class Model
{
    private string $fields = '*';
    private string $filters = '';

    public function setFields($fields)
    {
        $this->fields = $fields;
    }

    public function setFilters(Filters $filters)
    {
        $this->filters = $filters->dump();
    }

    public function fetchAll()
    {
        try {
            $sql = "SELECT {$this->fields} FROM {$this->table} {$this->filters}";

            dd($sql);
        } catch (PDOException $e) {
            dd($e->getMessage());
        }
    }
}
