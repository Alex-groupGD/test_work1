<?php
namespace App\Models;



namespace App\Http\Controllers;




use App\Models\User;
use App\Models\avto;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DropdownController extends Controller
{


    public function index()
    {
        $users = User::get_users();
        $avto = User::on_parking();
        return view('parking', compact('users') , compact('avto'));
    }

    public function data(Request $request)
    {

        if ($request->has('cat_id')) {
            if ($request->has('cat_id')) {
                $parentId = $request->get('cat_id');
                $data = DB::table('avtos')->where('user_id', $parentId)->where('status','=',0)->get();
                return $data;
            }

        }
    }

    public function avto(Request $request)
    {
        $users = User::get_users();
        User::status_on($request);
        $avto = User::on_parking();
        return view('parking', compact('users') , compact('avto'));
    }

    public function avto_out(avto $avt)
    {
        $users = User::get_users();
        User::status_off($avt);
        $avto = User::on_parking();
        return view('parking', compact('users') , compact('avto'));

    }

}

