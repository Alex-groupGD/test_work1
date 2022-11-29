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
        $users = User::all();
        $avto = avto::where('status','=',1)->get();

        return view('parking', compact('users') , compact('avto'));
    }

    public function data(Request $request)
    {

        /*$users= User::join('avtos', 'users.id','=','avtos.user_id')->get();*/

        if ($request->has('cat_id')) {
            if ($request->has('cat_id')) {
                $parentId = $request->get('cat_id');
                $data = DB::table('avtos')->where('user_id', $parentId)->where('status','=',0)->get();
                /*$data =compact('data');*/
                /*return ['success'=>true,'data'=>$data , compact('data')];*/
                return $data;
            }

        }
    }

    public function avto(Request $request)
    {


        $users = User::all();
        /*dd($request->subcategory_id);*/
        $avto = avto::where('id','=',$request->subcategory_id)->update(['status' => 1]);
        $avto = avto::where('status','=', '1')->get();

        /*dd($avto);*/


        return view('parking', compact('users') , compact('avto'));

    }

    public function avto_out(avto $avt)
    {


        $users = User::all();
        /*dd($request->subcategory_id);*/
        $avto = avto::where('id','=',$avt->id)->update(['status' => 0]);
        $avto = avto::where('status','=', '1')->get();

        /*dd($avto);*/


        return view('parking', compact('users') , compact('avto'));

    }

}

