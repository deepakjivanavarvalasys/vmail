<x-app-layout>
    <div id="content-page" class="content-page">
        <div class="container-fluid">
           <div class="row">
              <div class="col-lg-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">New User Information</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="new-user-info">
                            <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="fname">Full Name:</label>
                                    <input type="text" class="form-control" name="name" value="{{old('name')}}" id="fname" placeholder="Full Name" required autofocus autocomplete="name">
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" class="form-control" value="{{old('email')}}" id="email" placeholder="Email" required autocomplete="email">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                <div class="form-group col-md-6">
                                    <label for="mobno">Contact:</label>
                                    <input type="tel" name="contact" value="{{ old('contact') }}" required autocomplete="contact" class="form-control" id="mobno" placeholder="Contact Number">
                                    <x-input-error :messages="$errors->get('contact')" class="mt-2" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="pass">Password:</label>
                                    <input type="password" name="password" required autocomplete="new-password" class="form-control" id="pass" placeholder="Password">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password_confirmation">Confirm Password:</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password ">
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Role:</label>
                                    <select class="form-control" name="roles" id="selectroles">
                                        <option>Select Role Type</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Manager</option>
                                        <option value="3">EME</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('roles')" class="mt-2" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Status:</label>
                                    <select class="form-control" id="status" name="status">
                                        <option>Select Status</option>
                                        <option value='1'>Active</option>
                                    <option value='0'>Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary">Add New User</button>
                            </form>
                        </div>
                    </div>
                </div>
              </div>
           </div>
        </div>
     </div>
</x-app-layout>