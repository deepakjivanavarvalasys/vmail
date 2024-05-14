<?php

namespace App\Http\Controllers\admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Roles;


class AdminController extends Controller
{
    public function addroles()
    {
        return view('admin.add_roles');
    }
    

    public function submitroles(Request $request)
    {
        $add_roles=$request->validate([
            'role_name'=> 'required|string',
            'role_status'=> 'required|integer'
        ]);

        $insert_roles= Roles::create([
            'role_name'=>$add_roles['role_name'],
            'status'=>$add_roles['role_status'] 
         ]);
        return dd($insert_roles);


    }

    public function showusers()
    {
        return view('admin.showusers');
    }

    public function getusers(Request $request)
    {     
        
        
         $search_data = $request->get('search');
        $searchValue = $search_data['value'];
        $order = $request->get('order');
        $draw = $request->get('draw');
        $limit = $request->get("length"); // Rows display per page
        $offset = $request->get("start");

        $query = User::query();
        
      
        $totalRecords = $query->count();

        //Search Data
        if(isset($searchValue) && $searchValue != "") {
            $query->where(function ($query) use($searchValue) {
                $query->where("name", "like", "%$searchValue%");
               
            });
        }
        //Filters
        if(!empty($filters)) {

        }


        //Order By
        $orderColumn = null;
        if ($request->has('order')){
            $order = $request->get('order');
            $orderColumn = $order[0]['column'];
            $orderDirection = $order[0]['dir'];
        }

        switch ($orderColumn) {
            case '0': $query->orderBy('created_at', $orderDirection); break;
            case '1': $query->orderBy('name', $orderDirection); break;
           
        }

        $totalFilterRecords = $query->count();
        if($limit > 0) {
            $query->offset($offset);
            $query->limit($limit);
        }

        $result = $query->get();

        //dd($result->toArray());
        
        $ajaxData = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalFilterRecords,
            "aaData" => $result
        );
        
        return response()->json($ajaxData);
}
}
