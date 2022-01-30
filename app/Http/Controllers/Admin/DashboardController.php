<?php

namespace App\Http\Controllers\Admin;

use App\Consts\ReviewStatusConsts;
use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admins');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviewedTasks = Review::where('status', ReviewStatusConsts::REVIEWING)->paginate(15);
        return view('admin.dashboard', compact('reviewedTasks'));
    }
}