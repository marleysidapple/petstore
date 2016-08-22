<?php

namespace App\Http\Controllers;

use Alaouy\Youtube\Facades\Youtube;
use App\Http\Requests;
use App\Repositories\SettingRepository;
use App\Services\ProductService;
use App\Services\StateService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(StateService $stateService, UserService $userService)
    {
        $this->stateService = $stateService;
        $this->userService = $userService;
        $this->middleware('auth', ['except' => 'index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductService $productService, SettingRepository $settingRepository)
    {
        if(!Auth::check()) {
            $products = $productService->allWithoutPagination();
            $playlistVideos = Youtube::getPlaylistItemsByPlaylistId($settingRepository->getYoutubePlaylist());
            return view('welcome', compact('products', 'playlistVideos'));
        }

        $states = $this->stateService->allWithoutPagination();
        $user = $this->userService->get(Auth::user()->username);
        
        if(1 == Auth::user()->role_id) {
            return view('admin.home', compact('user'));
        }
        
        return view('home', compact('user', 'states'));
    }
}
