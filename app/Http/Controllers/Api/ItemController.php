<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Http\Resources\ItemResource;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index() {
        $items = Item::latest()->paginate(20);
        return new ItemResource(true, 'List Data Item', $items);
    }
}
