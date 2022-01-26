<?php

namespace App\Http\Controllers\User;

use App\Consts\ReviewStatusConsts;
use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:users');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $review = new Review();
        $reviewedTasks = $review->getOwnReviews();
        return view('user.dashboard', compact('reviewedTasks'));
    }
}