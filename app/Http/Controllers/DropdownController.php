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
<<<<<<< HEAD
        $users = User::get_users();
        $avto = User::on_parking();
=======
        $users = User::all();
        $avto = avto::where('status','=',1)->get();

>>>>>>> 01df6951b265b392c8c6c60d6087920a5f3999b8
        return view('parking', compact('users') , compact('avto'));
    }

    public function data(Request $request)
    {

<<<<<<< HEAD
=======
        /*$users= User::join('avtos', 'users.id','=','avtos.user_id')->get();*/

>>>>>>> 01df6951b265b392c8c6c60d6087920a5f3999b8
        if ($request->has('cat_id')) {
            if ($request->has('cat_id')) {
                $parentId = $request->get('cat_id');
                $data = DB::table('avtos')->where('user_id', $parentId)->where('status','=',0)->get();
<<<<<<< HEAD
=======
                /*$data =compact('data');*/
                /*return ['success'=>true,'data'=>$data , compact('data')];*/
>>>>>>> 01df6951b265b392c8c6c60d6087920a5f3999b8
                return $data;
            }

        }
    }

    public function avto(Request $request)
    {
<<<<<<< HEAD
        $users = User::get_users();
        User::status_on($request);
        $avto = User::on_parking();
        return view('parking', compact('users') , compact('avto'));
=======


        $users = User::all();
        /*dd($request->subcategory_id);*/
        $avto = avto::where('id','=',$request->subcategory_id)->update(['status' => 1]);
        $avto = avto::where('status','=', '1')->get();

        /*dd($avto);*/


        return view('parking', compact('users') , compact('avto'));

>>>>>>> 01df6951b265b392c8c6c60d6087920a5f3999b8
    }

    public function avto_out(avto $avt)
    {
<<<<<<< HEAD
        $users = User::get_users();
        User::status_off($avt);
        $avto = User::on_parking();
=======


        $users = User::all();
        /*dd($request->subcategory_id);*/
        $avto = avto::where('id','=',$avt->id)->update(['status' => 0]);
        $avto = avto::where('status','=', '1')->get();

        /*dd($avto);*/


>>>>>>> 01df6951b265b392c8c6c60d6087920a5f3999b8
        return view('parking', compact('users') , compact('avto'));

    }

}

