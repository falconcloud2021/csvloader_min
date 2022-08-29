<?php

namespace App\Controllers;

use App\Models\DataModel;

class MainController 
{
    public function main()
    {
        $this->view->renderHtml('main.php');
    }

    public function addData()
    {
        if (!empty($_POST)) {
            $data->createFromArray($_POST);
        }

        // header('Location: /main/', true, 302);
    }

    public function editData()
    {
        if (!empty($_POST)) {
            $data->updateFromArray($_POST);
        }
    }

    public function viewData()
    {
        $dataView = DataModel::getAll();
        $this->view->renderHtml('data.php', [
            'data' => $data;
        ]);
    }

    public function DeleteData()
    {
        $dataCSV = DataModel::getAll();
        $dataCSV->delete();
    }
}