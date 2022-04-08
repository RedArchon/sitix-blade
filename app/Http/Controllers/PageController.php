<?php

namespace App\Http\Controllers;

use App\Models\Reportable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Yajra\DataTables\DataTables;

class PageController extends Controller
{
    public function index()
    {
        return view('page-2');
    }
    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $data = Reportable::latest()->get();
            $data = Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);

            return $data;
        }
    }

    public function page3()
    {
        return view('page-3');
    }
}
