<?php

namespace DataTablePhp\Models;

use Exception;

class DataTable
{
    private $column;
    private $row;
    private $dataSource;

    public function __construct(DataSource $ds)
    {
        $ds !== null ? $this->dataSource = $ds : false;
    }

    

}