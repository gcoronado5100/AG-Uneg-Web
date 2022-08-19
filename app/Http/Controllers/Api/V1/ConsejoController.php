<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Consejo;
use Illuminate\Http\Request;
use App\Http\Resources\V1\ConsejoResource;

class ConsejoController extends Controller
{
    public function index()
    {
        return ConsejoResource::collection(Consejo::all());
    }


    public function show(Consejo $consejo)
    {
        return new ConsejoResource($consejo);
    }


    public function destroy(Consejo $consejo)
    {
        if ($consejo->delete()) {
            return response()->json(['message' => 'Consejo eliminado correctamente'], 200);
        } else {
            return response()->json(['message' => 'Error al eliminar el consejo'], 500);
        }

    }
}
