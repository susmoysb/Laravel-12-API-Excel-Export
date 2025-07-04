<?php

namespace App\Http\Controllers\API;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Users retrieved successfully',
            'users'   => User::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }

    /**
     * Export users to Excel.
     */
    public function exportUsers()
    {
        // return Excel::download(new UsersExport, 'users.xlsx');

        // return Excel::store(new UsersExport, 'users.xlsx');

        // Using Eloquent Builder/Model
        // return User::query()->downloadExcel('users.xlsx', ExcelExcel::XLSX, true);
        return User::query()->storeExcel('users.xlsx');
    }
}
