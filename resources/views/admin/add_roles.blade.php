

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="add_roles">
                        @csrf
                    <input type="text" name="role_name" placeholder="Enter Role Name">
                    @error('role_name')
                    <div class="alert-warning">Enter Role Name</div>
                    @enderror
                    <select name="role_status">
                    <option value='1'>Active</option>
                    <option value='0'>Inactive</option>
                    
                    </select>
                  

                    <input class="btn btn-primary" type="submit" name="submit">
                    
                    
                    
                    
                    
                    </form>
                    
                    
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

