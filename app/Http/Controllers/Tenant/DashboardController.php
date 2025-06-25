<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // La magie opère ici : la fonction `tenant()` nous donne
        // l'objet du tenant actuellement identifié.
        $tenantName = tenant('name'); // On récupère le nom du tenant

        // On passe le nom à la vue
        return view('home', ['tenantName' => $tenantName]);
    }
}