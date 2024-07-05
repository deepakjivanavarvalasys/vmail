<x-app-layout>

    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Users</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="table-responsive">
                                <table id="table-users" class="table table-striped table-borderless mt-4" role="grid" aria-describedby="user-list-page-info">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Roles</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <x-slot name="header">
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
    </div> --}}

    <script src="{{ asset('plugins/data-tables/js/datatables.min.js') }}"></script>
    <script src="{{ asset('js/manager/showusers.js?='.time()) }}"></script>
    
</x-app-layout>






 