return [
    '~^$~' =>               [\App\Controllers\MainController::class, 'main'],
    '~^data/add~' =>        [\App\Controllers\MainController::class, 'addData'],
    '~^data/(\d+)/edit$~' =>   [\App\Controllers\MainController::class, 'editData'],
    '~^data/(\d+)$~' =>     [\App\Controllers\MainController::class, 'viewData'],
    '~^data/(\d+)/delete$~' => [\App\Controllers\MainController::class, 'deleteData'],
];