<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MaterialController extends Controller
{
    public function download($id)
{
    $material = Material::findOrFail($id);
    return Storage::download($material->file_path);
}
}
