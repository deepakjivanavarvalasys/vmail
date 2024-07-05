<x-app-layout>
    <div id="content-page" class="content-page">
        <div class="container-fluid">
           <div class="row">
              <div class="col-lg-12">
                 <div class="iq-card">
                    <div class="iq-card-body p-0">
                       <div class="iq-edit-list">
                          <ul class="iq-edit-profile d-flex nav nav-pills">
                             <li class="col-md-4 p-0">
                                <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                   Personal Information
                                </a>
                             </li>
                             <li class="col-md-4 p-0">
                                <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                   Change Password
                                </a>
                             </li>
                             <li class="col-md-4 p-0">
                                <a class="nav-link" data-toggle="pill" href="#emailandsms">
                                   Delete Account
                                </a>
                             </li>
                          </ul>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-12">
                 <div class="iq-edit-list-data">
                    <div class="tab-content">
                       <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                           <div class="iq-card">
                             <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                   <h4 class="card-title">Personal Information</h4>
                                   @if (session('status') === 'profile-updated')
                                        <p
                                            x-data="{ show: true }"
                                            x-show="show"
                                            x-transition
                                            x-init="setTimeout(() => show = false, 2000)"
                                            class="text-sm text-gray-600 dark:text-gray-400"
                                        >{{ __('Saved.') }}</p>
                                    @endif
                                </div>
                             </div>
                             <div class="iq-card-body">
                                <form method="post" action="{{ route('profile.update') }}"> 
                                    @csrf
                                    @method('patch')
                                   <div class=" row align-items-center">
                                      <div class="form-group col-sm-6">
                                         <label for="name">Full Name:</label>
                                         <input type="text" class="form-control" name="name" id="name" value="{{old('name', $user->name)}}" required autofocus autocomplete="name">

                                         <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                      </div>

                                      <div class="form-group col-sm-6">
                                         <label for="email">Email:</label>
                                         <input type="email" name="email" value="{{ old('email', $user->email) }}" required autocomplete="username" class="form-control" id="email">

                                         <x-input-error class="mt-2" :messages="$errors->get('email')" />

                                            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                                <div>
                                                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                                        {{ __('Your email address is unverified.') }}

                                                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                                            {{ __('Click here to re-send the verification email.') }}
                                                        </button>
                                                    </p>

                                                    @if (session('status') === 'verification-link-sent')
                                                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                                            {{ __('A new verification link has been sent to your email address.') }}
                                                        </p>
                                                    @endif
                                                </div>
                                            @endif
                                      </div>    
                                   </div>
                                   <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                   <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                </form>
                             </div>
                          </div>
                       </div>
                       <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                           <div class="iq-card">
                             <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                   <h4 class="card-title">Change Password</h4>
                                   @if (session('status') === 'password-updated')
                                        <p
                                            x-data="{ show: true }"
                                            x-show="show"
                                            x-transition
                                            x-init="setTimeout(() => show = false, 2000)"
                                            class="text-sm text-gray-600 dark:text-gray-400"
                                        >{{ __('Saved.') }}</p>
                                    @endif
                                </div>
                             </div>
                             <div class="iq-card-body">
                                <form method="post" action="{{ route('password.update') }}">
                                    @csrf
                                    @method('put')

                                   <div class="form-group">
                                      <label for="update_password_current_password">Current Password:</label>
                                      <a href="javascripe:void();" class="float-right">Forgot Password</a>
                                         <input name="current_password" type="password" class="form-control" id="update_password_current_password" autocomplete="current-password">
                                         <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                      </div>
                                   <div class="form-group">
                                      <label for="update_password_password">New Password:</label>
                                      <input id="update_password_password" name="password" type="password" autocomplete="new-password" class="form-control" id="update_password_password">
                                      <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                   </div>
                                   <div class="form-group">
                                      <label for="update_password_password_confirmation">Confirm Password:</label>
                                         <input id="update_password_password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" class="form-control" id="update_password_password_confirmation">
                                         <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                   </div>
                                   <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                   <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                </form>
                             </div>
                          </div>
                       </div>
                       <div class="tab-pane fade" id="emailandsms" role="tabpanel">
                           <div class="iq-card">
                             <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                   <h4 class="card-title">Delete Account</h4>
                                   <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                       {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                                    </p>
                                </div>
                             </div>
                             <div class="iq-card-body">
                                 <x-danger-button 
                                    x-data=""
                                    x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('Delete Account') }}</x-danger-button>
                              
                                 <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                                       <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                                          @csrf
                                          @method('delete')
                              
                                          <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                             {{ __('Are you sure you want to delete your account?') }}
                                          </h2>
                              
                                          <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                             {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                                          </p>
                              
                                          <div class="mt-6">
                                             <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />
                              
                                             <x-text-input
                                                   id="password"
                                                   name="password"
                                                   type="password"
                                                   class="mt-1 block w-3/4"
                                                   placeholder="{{ __('Password') }}"
                                             />
                              
                                             <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                                          </div>
                              
                                          <div class="mt-6 flex justify-end">
                                             <x-secondary-button x-on:click="$dispatch('close')">
                                                   {{ __('Cancel') }}
                                             </x-secondary-button>
                              
                                             <x-danger-button class="ms-3">
                                                   {{ __('Delete Account') }}
                                             </x-danger-button>
                                          </div>
                                       </form>
                                 </x-modal>
                             </div>
                          </div>
                       </div>
                       {{-- <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                           <div class="iq-card">
                             <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                   <h4 class="card-title">Manage Contact</h4>
                                </div>
                             </div>
                             <div class="iq-card-body">
                                <form>
                                   <div class="form-group">
                                      <label for="cno">Contact Number:</label>
                                      <input type="text" class="form-control" id="cno" value="001 2536 123 458">
                                   </div>
                                   <div class="form-group">
                                      <label for="email">Email:</label>
                                      <input type="text" class="form-control" id="email" value="nikjone@demo.com">
                                   </div>
                                   <div class="form-group">
                                      <label for="url">Url:</label>
                                      <input type="text" class="form-control" id="url" value="https://getbootstrap.com/">
                                   </div>
                                   <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                   <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                </form>
                             </div>
                          </div>
                       </div> --}}
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>

    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>
