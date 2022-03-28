<?php

namespace DataTablePhp\Models;

class DataSource
{

    private $conn;

    public function __construct(\PDO $conn)
    {
        $this->conn = $conn;
    }

    public function getResults($query)
    {
        $var = [];
        $stmt = $this->conn->query($query);
        $results = $stmt->fetchAll();
        foreach($results as $index => $value){
            $var[] = $value[$index];
            $var[] = $value[$index];
        }
        return $var;

    }


}