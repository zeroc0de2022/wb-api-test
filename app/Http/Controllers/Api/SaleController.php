<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sale;

class SaleController extends Controller
{
    public function index(Request $request)
    {
        $query = Sale::query();

        if ($request->has('dateFrom')) {
            $query->whereDate('date', '>=', $request->query('dateFrom'));
        }

        if ($request->has('dateTo')) {
            $query->whereDate('date', '<=', $request->query('dateTo'));
        }

        $limit = min((int) $request->query('limit', 500), 500);
        $page = (int) $request->query('page', 1);

        return response()->json($query->paginate($limit, ['*'], 'page', $page));
    }
}

