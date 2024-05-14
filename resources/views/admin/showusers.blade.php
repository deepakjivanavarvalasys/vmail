 
         <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Users') }}
                </h2>
            </x-slot>


                                        <div class="container" style="margin-top:20px;">
                                            <div class="table-responsive">
                                                <table id="table-users" class="display table nowrap table-striped table-hover">
                                                    <thead>
                                                    <tr>
                                                    
                                                        <th>Name</th>
                                                        <th>Roles</th>
                                                        <th>Email</th>
                                                        <th>Contact</th>
                                                        <th>Status</th>
                                                        
                                                    
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                               
 
   

 
    <script src="{{ asset('plugins/data-tables/js/datatables.min.js') }}"></script>
    <script src="{{ asset('js/admin/showusers.js?='.time()) }}"></script>
    
</x-app-layout>






 