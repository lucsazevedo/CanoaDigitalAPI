<?php

namespace App\Http\Controllers\Api;

use App\Models\Veiculo;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisablePagination;
class VeiculosController extends Controller
{
    use DisableAuthorization;
    use DisablePagination;
    protected $model = Veiculo::class;
}
