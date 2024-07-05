<?php

namespace App\Http\Controllers\manager;
use App\Models\User;
use App\Models\campaign;
use App\Models\Campaign_poc;
use App\Models\Asset;
use App\Models\Client_newsletter_detail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    
    public function showusers()
    {
        return view('manager.showusers');
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


public function add_campaign()
{
    
    return view('manager.add_campaign');
}



public function store_campaign(Request $request)
{

//  return dd($request->all());

    $add_campaigns=$request->validate([
        'campaign_name'=> 'required|string',
    ]);

    
    $add_campaignsAssets=$request->validate([
        'assettitle.*'=> 'required|string',    
    
        'assetfile.*'=> 'required|file'
    ]);
    
    
    $add_campaignsPocs=$request->validate([
        'poctitle.*'=> 'required|string',    
    
        'poclink.*'=> 'required|string'
    ]);

    $add_campaignsCN=$request->validate([
        'cntitle.*'=> 'required|string',    
    
        'cnlink.*'=> 'required|string'
    ]);


    $campaign_count=campaign::get()->COUNT();
    $add_campaigns= campaign::create([
        'campaign_number'=>'VBS_00'.$campaign_count+1,
        'campaign_name'=>$add_campaigns['campaign_name'],
        'client_name'=>'',
        'campaign_status'=>'ACTIVE',
        'campaign_status_message'=>''
    
     ]);

     
     for($i=0; $i<count($add_campaignsAssets['assettitle']); $i++)
     {        
        
         $arrayassetname=$add_campaignsAssets['assettitle'][$i];

         $arrayassetfile=$add_campaignsAssets['assetfile'][$i];
           
            $allowedfileExtension=['html'];
             
        
            $filename = $arrayassetfile->getClientOriginalName();
             $extension = $arrayassetfile->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);

            if($check)
            {
          
           
            $arrayassetfile->store('public');
            $add_campaignsasset= asset::create([
                'asset_name'=>$arrayassetname,
                'asset_white_paper'=>$filename,
               
             ]);
            }
            
            echo "Upload Successfully";
            
          
     
     }
         

    for($i=0; $i<count($add_campaignsPocs['poctitle']); $i++)
    {        
        $arraypoctitle=$add_campaignsPocs['poctitle'][$i];
        $arraypoclink=$add_campaignsPocs['poclink'][$i];
         $add_campaignpoc= campaign_poc::create([
            'campaign_id'=> $campaign_count+1,
            'poc_title'=>$arraypoctitle,
            'poc_link'=>$arraypoclink,
           
         ]);
    
    }

    for($i=0; $i<count($add_campaignsCN['cntitle']); $i++)
    {        
        $arraycntitle=$add_campaignsCN['cntitle'][$i];
        $arraycnlink=$add_campaignsCN['cnlink'][$i];
         $add_campaigncn= client_newsletter_detail::create([
            'campaign_id'=> $campaign_count+1,
            'cn_title'=>$arraycntitle,
            'cn_link'=>$arraycnlink,
           
         ]);
    
    }
    return view('manager.add_campaign');
}


public function show_campaign(Request $request)
{

    echo $request->status;

    
    return view('manager.show_campaign');
}


public function getcampaign(Request $request)
{
    $search_data = $request->get('search');
    $searchValue = $search_data['value'];
    $order = $request->get('order');
    $draw = $request->get('draw');
    $limit = $request->get("length"); // Rows display per page
    $offset = $request->get("start");

    $query = Campaign::query();
    
  
    $totalRecords = $query->count();

    //Search Data
    if(isset($searchValue) && $searchValue != "") {
        $query->where(function ($query) use($searchValue) {
            $query->where("campaign_name", "like", "%$searchValue%");
           
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
        case '1': $query->orderBy('campaign_name', $orderDirection); break;
       
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