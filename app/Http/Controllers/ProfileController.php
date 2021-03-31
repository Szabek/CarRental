<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use App\Services\PaymentService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\Promise\all;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $profile = auth()->user()->profile;
        return view('profiles.show', compact('profile'));
    }


    public function create()
    {
        return view('profiles.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'address' => 'required',
            'wallet' => 'nullable|',

        ]);

        auth()->user()->profile()->create($data);

        redirect(route('profile'));

    }

    public function edit(User $user)
    {

        return view('profiles.edit',compact('user'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'address' => 'required',
        ]);

        auth()->user()->profile()->update($data);

        return redirect(route('profile'));
    }

}
