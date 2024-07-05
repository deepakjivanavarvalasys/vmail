

<x-app-layout>
    <div id="content-page" class="content-page">
        <div class="container-fluid">
           <div class="row">
              <div class="col-lg-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Add New Role</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="new-user-info">
                            <form method="POST" action="{{ route('store_roles') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="rname">Role Name:</label>
                                    <input type="text" class="form-control" name="role_name" value="{{old('name')}}" id="rname" placeholder="Enter Role Name" required autofocus autocomplete="role_name">
                                    @error('role_name')
                                        <div class="alert-warning">Enter Role Name</div>
                                    @enderror
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label>Role Status:</label>
                                    <select class="form-control" id="role_status" name="role_status">
                                        <option>Select Role Status</option>
                                        <option value='1'>Active</option>
                                    <option value='0'>Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary">Add New Role</button>
                            </form>
                        </div>
                    </div>
                </div>
              </div>
           </div>
        </div>
     </div>
</x-app-layout>

