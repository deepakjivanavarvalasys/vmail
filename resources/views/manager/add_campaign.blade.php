 
         <x-app-layout>
            <div id="content-page" class="content-page">
                <div class="container-fluid">
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Add Campaign') }}
                </h2>
            </x-slot>

            

<div class="container" style="margin-top:20px;">
                                            
                                            
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form method="POST" action="{{ route('storeCampaign') }}" enctype="multipart/form-data">
                    @csrf

                    <!-- Name -->
                    <div class="row" style="margin :10px;">
                    <div class="col-md-12">
                        <x-input-label for="campaign_name" :value="__('Campaign Name')" />
                        <x-text-input id="name" class="form-control" type="text" name="campaign_name" :value="old('campaign_name')" required autofocus autocomplete="campaign_name" placeholder="Enter Campaign Name"/>
                        <x-input-error :messages="$errors->get('campaign_name')" class="mt-2" />
                    </div>

                <div id="asset" class="col-md-4 p-5" style="background: hsl(253.29deg 79.12% 84.92%); border:10px solid #fff; border-radius:20px;">
                    <h5>Add Asset Details</h5>
                    <hr>
                        <div class="col-md-12">
                        <input type="button" class="btn btn-primary mr-2" id="addasset" value="Add" />
                        <input type="button" class="btn btn-primary mr-2"   id="delasset" value="Delete" />
                        </div>
                        <hr>
                    <div class="col-md-12">
                        <x-input-label for="asset_name" :value="__('Asset Name')" />
                        <input type="text"  class="form-control" id="assettitle[]" name="assettitle[]" value=""  placeholder="Enter Asset Title"/>
                    </div><br>
                    <div class="col-md-12">   
                        <x-input-label for="asset_name" :value="__('Asset File')" />
                        <input type="file"  id="assetfile[]" name="assetfile[]" value="" />
                        
                    </div>
                    <hr>
                  </div>
                  
            <div id="poc" class="col-md-4 p-5" style="background: hsl(253.29deg 79.12% 84.92%); border:10px solid #fff; border-radius:20px;">
                    <h5>Add POC Details</h5>
                    <hr>
                    <div class="col-md-12">
                    <input type="button" class="btn btn-primary mr-2" id="addpoc" value="Add" />
                    <input type="button" class="btn btn-primary mr-2" id="delpoc" value="Delete" />
                    </div>
                    <hr>
                <div class="col-md-12">
                    <x-input-label for="poc_name" :value="__('POC Name')" />
                    <input type="text" class="form-control" id="poctitle[]" name="poctitle[]" value="" placeholder="Enter POC Name"/>
                </div><br>
                <div class="col-md-12">   
                    <x-input-label for="poc_name" :value="__('POC Link')" />
                    <input type="text"  class="form-control" id="poclink[]" name="poclink[]" value="" placeholder="Enter POC Link"/>
                    
                </div>
                <hr>
            </div>

            <div id="cn" class="col-md-4 p-5" style="background: hsl(253.29deg 79.12% 84.92%); border:10px solid #fff; border-radius:20px;">
                <h5>Add Client Newsletter</h5>
                <hr>
                <div class="col-md-12">
                <input type="button" class="btn btn-primary mr-2" id="addcn" value="Add" />
                <input type="button" class="btn btn-primary mr-2" id="delcn" value="Delete" />
                
                </div>
                <hr>
            <div class="col-md-12">
                <x-input-label for="cn_name" :value="__('CN')" />
                <input type="text"  class="form-control" id="cntitle[]" name="cntitle[]" value="" placeholder="Enter Client Newsletter" />
            </div><br>
            <div class="col-md-12">   
                <x-input-label for="cn_name" :value="__('CN Link')" />
                <input type="text"  class="form-control" id="cnlink[]" name="cnlink[]" value="" placeholder="Enter Client Newsletter Link"/>
                
            </div>
            <hr>
        </div>

                        <div class="col-md-12">
                            <button class="btn btn-primary mr-2">
                                {{ __('Add Campaign') }}
                            </button>
                        </div>  
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
                               
 
   

 
    <script src="{{ asset('plugins/data-tables/js/datatables.min.js') }}"></script>
    <script src="{{ asset('js/manager/add_campaign.js?='.time()) }}"></script>
    
</x-app-layout>






 