<?php

class Region
{
    public $id = null;
    public $name = null;
    public $slug = null;

    public function insert()
    {
        $query = "
            INSERT INTO `regions`
                (`name`, `slug`)
                VALUES (?, ?)
        ";

        DB::insert($query, [$this->name, $this->slug]);
        $this->id = DB::lastInsertId();
    }

    public function delete()
    {
//        @TODO
    }
}
