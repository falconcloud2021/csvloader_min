<?php

namespace App\Models;

use App\Models\ActiveRecord;

class DataModel 
{
    /** @var string */
    protected $name;
    /** @var int */
    protected $age;
    /** @var string */
    protected $email;
    /** @var string */
    protected $phone;

    public function setName()
    {
        $this->name = $name->getId();
    }

    public function getData()
    {

    }

    public static function createFromArray(array $fields): DataModel
    {
        if (empty($fields['name'])) {
            throw new InvalidArgumentException('Не передано название статьи');
        }

        if (empty($fields['age'])) {
            throw new InvalidArgumentException('Не передан текст статьи');
        }

        $data = new Article();

        $data->setName($fields['name']);
        $data->setText($fields['text']);

        $data->save();

        return $data;
    }

    public function refreshData(array $fields)
    {

    }

    public function removeData()
    {

    }

}