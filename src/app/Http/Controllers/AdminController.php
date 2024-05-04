<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function search(Request $request)
{
    $query = $request->input('content');
    $gender = $request->input('gender');
    $inquiry_type = $request->input('inquiry_type');

    $users = User::query();

    if ($query) {
        $users->where('name', 'LIKE', "%$query%")
            ->orWhere('email', 'LIKE', "%$query%");
    }

    if ($gender) {
        $users->where('gender', $gender);
    }

    if ($inquiry_type) {
        $users->where('inquiry_type', $inquiry_type);
    }

    $results = $users->get();

    return view('admin.search_results', compact('results'));
    }


}
