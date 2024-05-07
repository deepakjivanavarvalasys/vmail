 
         <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </x-slot>

         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

         <link rel="stylesheet" href="{{asset('css/table_custom.css')}}">
         <link rel="stylesheet" href="{{asset('plugins/data-tables/css/datatables.min.css')}}">

                                        <div class="card-block">
                                            <div class="table-responsive">
                                                <table id="table-users" class="display table nowrap table-striped table-hover">
                                                    <thead>
                                                    <tr>
                                                    
                                                        <th>Name</th>
                                                        <th>Roles</th>
                                                        <th>Email</th>
                                                        
                                                    
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                               
 
   

 
    <script src="{{ asset('plugins/data-tables/js/datatables.min.js') }}"></script>
    <script src="{{ asset('js/manager/showusers.js?='.time()) }}"></script>
    
</x-app-layout>






 