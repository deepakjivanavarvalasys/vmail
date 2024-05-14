 
         <x-app-layout>
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
                <form method="POST" action="{{ route('storeCampaign') }}">
                    @csrf

                    <!-- Name -->
                    <div class="row">
                    <div class="col-md-12">
                        <x-input-label for="campaign_name" :value="__('Campaign Name')" />
                        <x-text-input id="name" class="block mt-1  " type="text" name="campaign_name" :value="old('campaign_name')" required autofocus autocomplete="campaign_name" />
                        <x-input-error :messages="$errors->get('campaign_name')" class="mt-2" />
                    </div>

                <div id="asset" class="col-md-4 p-5" style="background: lightgray; border:10px solid #fff;">
                    <h3>Add Asset Details</h3>
                        <div class="col-md-12">
                        <input type="button" id="addasset" value="Add" />
                        <input type="button" id="delasset" value="Del" />
                        </div>
                    <div class="col-md-6">
                        <x-input-label for="asset_name" :value="__('Asset Name')" />
                        <input class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1" type="text"  id="assettitle[]" name="assettitle[]" value="" />
                    </div>
                    <div class="col-md-6">   
                        <x-input-label for="asset_name" :value="__('Asset File')" />
                        <input type="file"  id="assetfile[]" name="assetfile[]" value="" />
                        
                    </div>
                  </div>
                  
            <div id="poc" class="col-md-4 p-5" style="background: lightgray; border:10px solid #fff;">
                    <h3>Add POC Details</h3>
                    <div class="col-md-12">
                    <input type="button" id="addpoc" value="Add" />
                    <input type="button" id="delpoc" value="Del" />
                    </div>
                <div class="col-md-6">
                    <x-input-label for="poc_name" :value="__('POC Name')" />
                    <input type="text"  id="poctitle[]" name="poctitle[]" value="" />
                </div>
                <div class="col-md-6">   
                    <x-input-label for="poc_name" :value="__('POC Link')" />
                    <input type="text"  id="poclink[]" name="poclink[]" value="" />
                    
                </div>
            </div>

            <div id="cn" class="col-md-4 p-5" style="background: lightgray; border:10px solid #fff;">
                <h3>Add Client Newsletter</h3>
                <div class="col-md-12">
                <input type="button" id="addcn" value="Add" />
                <input type="button" id="delcn" value="Del" />
                </div>
            <div class="col-md-6">
                <x-input-label for="cn_name" :value="__('Client Newsletter')" />
                <input type="text"  id="cntitle[]" name="cntitle[]" value="" />
            </div>
            <div class="col-md-6">   
                <x-input-label for="cn_name" :value="__('Client Newsletter Link')" />
                <input type="text"  id="cnlink[]" name="cnlink[]" value="" />
                
            </div>
        </div>

                        <div class="col-md-12">
                            <x-primary-button class="ms-4">
                                {{ __('Add Campaign') }}
                            </x-primary-button>
                        </div>  
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
                               
 
   

 
    <script src="{{ asset('plugins/data-tables/js/datatables.min.js') }}"></script>
    <script src="{{ asset('js/manager/add_campaign.js?='.time()) }}"></script>
    
</x-app-layout>






 