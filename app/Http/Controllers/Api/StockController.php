<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stock;

/**
 *
 */
class StockController extends Controller
{
    public function index(Request $request)
    {
        $date = $request->query('dateFrom', now()->toDateString());

        $query = Stock::whereDate('date', $date);

        $limit = min((int) $request->query('limit', 500), 500);
        $page = (int) $request->query('page', 1);

        return response()->json($query->paginate($limit, ['*'], 'page', $page));
    }
}
