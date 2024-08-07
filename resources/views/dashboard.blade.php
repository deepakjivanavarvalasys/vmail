<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    
                </div>
            </div>
        </div>
    </div> --}}

    <div id="content-page" class="content-page">
        <div class="container-fluid">
           <div class="row">
              <div class="col-lg-4">
                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between">
                       <div class="iq-header-title">
                          <h4 class="card-title">Social Data</h4>
                       </div>
                       <div class="iq-card-header-toolbar d-flex align-items-center">
                          <div class="dropdown">
                             <span class="dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown">
                             <i class="ri-more-fill"></i>
                             </span>
                             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1" style="">
                                <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="iq-card-body">
                       <div class="m-auto d-block text-center pb-3">
                          <div class="iq-user mb-3">
                             <img class="avatar-70 rounded-circle" src="{{ asset('assets/images/user/03.jpg') }}" alt="">
                          </div>
                          <h5 class="mb-0 ">Nick Jash</h5>
                          <p class="text-primary">245 Likes</p>
                          <p>There are many variations of passages of Lorem Ipsum available by injected humour.</p>
                       </div>
                       <ul class="d-flex align-items-center list-inline p-0 m-0 text-center">
                          <li class="col-md-4">
                             <div class="iq-user mb-3">
                                <img class="avatar-70 rounded-circle" src="{{ asset('assets/images/user/04.jpg') }}" alt="">
                             </div>
                             <h5 class="mb-0 ">Terry Aki</h5>
                             <p class="text-primary mb-0">500 Likes</p>
                          </li>
                          <li class="col-md-4">
                             <div class="iq-user mb-3">
                                <img class="avatar-70 rounded-circle" src="{{ asset('assets/images/user/05.jpg') }}" alt="">
                             </div>
                             <h5 class="mb-0 ">Alex john</h5>
                             <p class="text-primary mb-0">302 Likes</p>
                          </li>
                          <li class="col-md-4">
                             <div class="iq-user mb-3">
                                <img class="avatar-70 rounded-circle" src="{{ asset('assets/images/user/07.jpg') }}" alt="">
                             </div>
                             <h5 class="mb-0 ">Rock lai</h5>
                             <p class="text-primary mb-0">60 Likes</p>
                          </li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-lg-8">
                 <div class="row">
                    <div class="col-lg-4">
                       <div class="iq-card iq-card-block iq-card-stretch">
                          <div class="iq-card-body">
                             <div class="d-flex align-items-center justify-content-between mb-2">
                                <div class="ml-2">
                                   <h5 class="mb-1">Total Visitors</h5>
                                   <span class="h4 text-dark mb-0 counter d-inline-block w-100">68,586</span>
                                </div>
                                <div class="icon iq-icon-box bg-primary rounded-circle m-0 dark-icon" data-wow-delay="0.2s">
                                   <i class="ri-user-fill"></i>
                                </div>
                             </div>
                          </div>
                          <div id="service-chart-01"></div>
                       </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="iq-card iq-card-block iq-card-stretch">
                          <div class="iq-card-body">
                             <div class="d-flex align-items-center justify-content-between mb-2">
                                <div class="ml-2">
                                   <h5 class="mb-1">Total Users</h5>
                                   <span class="h4 text-dark mb-0 counter d-inline-block w-100">48,625</span>
                                </div>
                                <div class="icon iq-icon-box bg-success rounded-circle m-0" data-wow-delay="0.2s">
                                   <i class="ri-user-fill"></i>
                                </div>
                             </div>
                          </div>
                          <div id="service-chart-02"></div>
                       </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="iq-card iq-card-block iq-card-stretch">
                          <div class="iq-card-body">
                             <div class="d-flex align-items-center justify-content-between mb-2">
                                <div class="ml-2">
                                   <h5 class="mb-1">Total Sales</h5>
                                   <span class="h4 text-dark mb-0 counter d-inline-block w-100">35,859</span>
                                </div>
                                <div class="icon iq-icon-box bg-danger rounded-circle m-0" data-wow-delay="0.2s">
                                   <i class="ri-user-fill"></i>
                                </div>
                             </div>
                          </div>
                          <div id="service-chart-03"></div>
                       </div>
                    </div>
                    <div class="col-lg-6">
                       <div class="iq-card iq-card-block iq-card-stretch">
                          <div class="iq-card-body">
                             <div id="service-chart-04"></div>
                          </div>
                       </div>
                    </div>
                    <div class="col-lg-6">
                       <div class="iq-card iq-card-block iq-card-stretch">
                          <div class="iq-card-body">
                             <div class="d-flex align-items-center">
                                <div class="icon iq-icon-box rounded dark-icon-light iq-bg-primary mr-3">
                                   <i class="ri-home-8-line"></i>
                                </div>
                                <div class="iq-details col-sm-9 p-0">
                                   <div class="d-flex align-items-center justify-content-between">
                                      <span class="title text-dark">House, bills</span>
                                      <div class="text-primary "><b><span>$</span> 230 </b></div>
                                   </div>
                                   <span class="">38 Transaction</span>
                                   <div class="iq-progress-bar-linear d-inline-block w-100">
                                      <div class="iq-progress-bar">
                                         <span class="bg-primary" data-percent="32"></span>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <hr class="mt-2 mb-2">
                             <div class="d-flex align-items-center">
                                <div class="icon iq-icon-box rounded iq-bg-success mr-3">
                                   <i class="ri-camera-lens-line"></i>
                                </div>
                                <div class="iq-details col-sm-9 p-0">
                                   <div class="d-flex align-items-center justify-content-between">
                                      <span class="title text-dark">Children</span>
                                      <div class="text-success"><b><span>$</span> 120 </b></div>
                                   </div>
                                   <span class="">9 Transaction</span>
                                   <div class="iq-progress-bar-linear d-inline-block w-100">
                                      <div class="iq-progress-bar">
                                         <span class="bg-success" data-percent="20"></span>
                                      </div>
                                   </div>
                                   <div class="d-flex align-items-center justify-content-between">
                                   </div>
                                </div>
                             </div>
                             <hr class="mt-2 mb-2">
                             <div class="d-flex align-items-center">
                                <div class="icon iq-icon-box rounded iq-bg-info mr-3">
                                   <i class="ri-bank-line"></i>
                                </div>
                                <div class="iq-details col-sm-9 p-0">
                                   <div class="d-flex align-items-center justify-content-between">
                                      <span class="title text-dark">Banking</span>
                                      <div class="text-info"><b><span>$</span> 110 </b></div>
                                   </div>
                                   <span class="">50 Transaction</span>
                                   <div class="iq-progress-bar-linear d-inline-block w-100">
                                      <div class="iq-progress-bar">
                                         <span class="bg-info" data-percent="60"></span>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-3">
                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between border-bottom">
                       <div class="iq-header-title">
                          <h4 class="card-title">Activity Details</h4>
                       </div>
                    </div>
                    <div class="iq-card-body">
                       <ul class="iq-timeline">
                          <li>
                             <div class="timeline-dots"></div>
                             <h6 class="float-left mb-1">Jan 15</h6>
                             <div class="d-inline-block w-100">
                                <p class="mb-0">New Event Created</p>
                             </div>
                          </li>
                          <li>
                             <div class="timeline-dots"></div>
                             <h6 class="float-left mb-1">Jan 22</h6>
                             <div class="d-inline-block w-100">
                                <p class="mb-0">New updates "Prepared"</p>
                             </div>
                          </li>
                          <li>
                             <div class="timeline-dots"></div>
                             <h6 class="float-left mb-1">Feb 09</h6>
                             <div class="d-inline-block w-100">
                                <p class="mb-0">2019 Reports</p>
                             </div>
                          </li>
                          <li>
                             <div class="timeline-dots"></div>
                             <h6 class="float-left mb-1">march 05</h6>
                             <div class="d-inline-block w-100">
                                <p class="mb-0">New Item</p>
                             </div>
                          </li>
                          <li>
                             <div class="timeline-dots"></div>
                             <h6 class="float-left mb-1">April 17</h6>
                             <div class="d-inline-block w-100">
                                <p class="mb-0">New Event</p>
                             </div>
                          </li>
                          <li>
                             <div class="timeline-dots"></div>
                             <h6 class="float-left mb-1">May 25</h6>
                             <div class="d-inline-block w-100">
                                <p class="mb-0">New Event</p>
                             </div>
                          </li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-lg-4">
                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between border-none">
                       <div class="iq-header-title">
                          <h5 class="card-title">Load time by country</h5>
                       </div>
                    </div>
                    <div class="iq-card-body">
                       <div id="world-map" style="height: 200px; position: relative;"></div>
                       <div class="table-responsive mt-3">
                          <table class="table mb-0 table-borderless">
                             <thead>
                                <tr>
                                   <th scope="col">Location</th>
                                   <th scope="col">Order No</th>
                                   <th scope="col">Review</th>
                                </tr>
                             </thead>
                             <tbody>
                                <tr>
                                   <td>Australia</td>
                                   <td>#1234</td>
                                   <td>3.5<i class="ri-star-fill text-warning pl-2"></i></td>
                                </tr>
                                <tr>
                                   <td>United States</td>
                                   <td>#5647</td>
                                   <td>4.5<i class="ri-star-fill text-warning pl-2"></i></td>
                                </tr>
                                <tr>
                                   <td>UK</td>
                                   <td>#8741</td>
                                   <td>5.5<i class="ri-star-fill text-warning pl-2"></i></td>
                                </tr>
                             </tbody>
                          </table>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-5">
                 <div class="iq-card iq-card-block iq-card-stretch mb-3">
                    <div class="iq-card-body p-3">
                       <div class="d-flex align-items-center">
                          <div class="user-img img-fluid">
                             <img src="{{ asset('assets/images/user/01.jpg') }}" alt="story-img" class="img-fluid rounded-circle avatar-40">
                          </div>
                          <div class="media-support-info ml-3">
                             <h6>Pete Sariya</h6>
                             <p class="mb-0 font-size-12">24 jan, 2020</p>
                          </div>
                          <div class="iq-card-header-toolbar">
                             <h6 class="text-dark">80.5%</h6>
                             <div class="badge badge-pill badge-primary dark-icon">157</div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="iq-card iq-card-block iq-card-stretch mb-3">
                    <div class="iq-card-body p-3">
                       <div class="d-flex align-items-center">
                          <div class="user-img img-fluid">
                             <img src="{{ asset('assets/images/user/02.jpg') }}" alt="story-img" class="img-fluid rounded-circle avatar-40">
                          </div>
                          <div class="media-support-info ml-3">
                             <h6>Anna Mull</h6>
                             <p class="mb-0 font-size-12">15 feb, 2020</p>
                          </div>
                          <div class="iq-card-header-toolbar">
                             <h6 class="text-dark">80.5%</h6>
                             <div class="badge badge-pill badge-success">280</div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="iq-card iq-card-block iq-card-stretch mb-3">
                    <div class="iq-card-body p-3">
                       <div class="d-flex align-items-center">
                          <div class="user-img img-fluid">
                             <img src="{{ asset('assets/images/user/03.jpg') }}" alt="story-img" class="img-fluid rounded-circle avatar-40">
                          </div>
                          <div class="media-support-info ml-3">
                             <h6>Alex john</h6>
                             <p class="mb-0 font-size-12">05 March, 2020</p>
                          </div>
                          <div class="iq-card-header-toolbar">
                             <h6 class="text-dark">80.5%</h6>
                             <div class="badge badge-pill badge-danger">200</div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="iq-card iq-card-block iq-card-stretch mb-3">
                    <div class="iq-card-body p-3">
                       <div class="d-flex align-items-center">
                          <div class="user-img img-fluid">
                             <img src="{{ asset('assets/images/user/04.jpg') }}" alt="story-img" class="img-fluid rounded-circle avatar-40">
                          </div>
                          <div class="media-support-info ml-3">
                             <h6>Cliff Hanger</h6>
                             <p class="mb-0 font-size-12">10 April, 2020</p>
                          </div>
                          <div class="iq-card-header-toolbar">
                             <h6 class="text-dark">80.5%</h6>
                             <div class="badge badge-pill badge-info">150</div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="iq-card iq-card-block iq-card-stretch">
                    <div class="iq-card-body p-3">
                       <div class="d-flex align-items-center">
                          <div class="user-img img-fluid">
                             <img src="{{ asset('assets/images/user/05.jpg') }}" alt="story-img" class="img-fluid rounded-circle avatar-40">
                          </div>
                          <div class="media-support-info ml-3">
                             <h6>Joe Shestak</h6>
                             <p class="mb-0 font-size-12">25 may, 2020</p>
                          </div>
                          <div class="iq-card-header-toolbar">
                             <h6 class="text-dark">80.5%</h6>
                             <div class="badge badge-pill badge-dark ">150</div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-12">
                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between">
                       <div class="iq-header-title">
                          <h4 class="card-title">Project Tests</h4>
                       </div>
                       <div class="iq-card-header-toolbar d-flex align-items-center">
                          <div class="dropdown">
                             <span class="dropdown-toggle dropdown-bg dark-icon-light iq-bg-primary" id="dropdownMenuButton2" data-toggle="dropdown" aria-expanded="false" role="button">
                             view All<i class="ri-arrow-down-s-line ml-1 text-primary"></i>
                             </span>
                             <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownMenuButton2" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(391px, 30px, 0px);">
                                <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="iq-card-body">
                       <div class="table-responsive">
                          <table class="table mb-0 mt-2 table-borderless table-test">
                             <tbody>
                                <tr>
                                   <td class="text-center">
                                      <img class="rounded-circle img-fluid avatar-40" src="{{ asset('assets/images/user/01.jpg') }}" alt="profile">
                                   </td>
                                   <td>
                                      <h6>Retail Int</h6>
                                      <p class="mb-0">Lorem Ipsum dummy</p>
                                   </td>
                                   <td>
                                      <p class="mb-0">2020/03/20</p>
                                      <span class="text-primary">Enter Project</span>
                                   </td>
                                   <td>
                                      <p class="mb-0">2020/03/29</p>
                                      <span class="text-primary">Last Modified</span>
                                   </td>
                                   <td>
                                      <p class="mb-2">150</p>
                                      <div class="iq-progress-bar">
                                         <span class="bg-primary" data-percent="70"></span>
                                      </div>
                                   </td>
                                   <td class="text-right">
                                      <div class="text-danger"><i class="ri-alert-fill"></i></div>
                                      <span class="text-danger">Test Inomplete</span>
                                   </td>
                                   <td>
                                      <div class="d-flex align-items-center justify-content-end">
                                         <a href="javascript:void();" class="avatar-45 text-center ml-3 rounded-circle iq-bg-success font-size-18"><i class="ri-pencil-fill font-size-16"></i></a>
                                         <a href="javascript:void();" class="avatar-45 rounded-circle text-center ml-3 iq-bg-danger font-size-18"><i class="ri-delete-bin-line font-size-16"></i></a>
                                      </div>
                                   </td>
                                </tr>
                                <tr>
                                   <td class="text-center">
                                      <img class="rounded-circle img-fluid avatar-40" src="{{ asset('assets/images/user/01.jpg') }}" alt="profile">
                                   </td>
                                   <td>
                                      <h6>Retail Int</h6>
                                      <p class="mb-0">Lorem Ipsum dummy</p>
                                   </td>
                                   <td>
                                      <p class="mb-0">2020/03/20</p>
                                      <span class="text-primary">Enter Project</span>
                                   </td>
                                   <td>
                                      <p class="mb-0">2020/03/29</p>
                                      <span class="text-primary">Last Modified</span>
                                   </td>
                                   <td>
                                      <p class="mb-2">130</p>
                                      <div class="iq-progress-bar">
                                         <span class="bg-primary" data-percent="70"></span>
                                      </div>
                                   </td>
                                   <td class="text-right">
                                      <div class="text-success">0/3</div>
                                      <p class="mb-0">Active Runs</p>
                                   </td>
                                   <td>
                                      <div class="d-flex align-items-center justify-content-end">
                                         <a href="javascript:void();" class="avatar-45 text-center ml-3 rounded-circle iq-bg-success font-size-18"><i class="ri-pencil-fill font-size-16"></i></a>
                                         <a href="javascript:void();" class="avatar-45 rounded-circle text-center ml-3 iq-bg-danger font-size-18"><i class="ri-delete-bin-line font-size-16"></i></a>
                                      </div>
                                   </td>
                                </tr>
                                <tr>
                                   <td class="text-center">
                                      <img class="rounded-circle img-fluid avatar-40" src="{{ asset('assets/images/user/01.jpg') }}" alt="profile">
                                   </td>
                                   <td>
                                      <h6>Retail Int</h6>
                                      <p class="mb-0">Lorem Ipsum dummy</p>
                                   </td>
                                   <td>
                                      <p class="mb-0">2020/03/20</p>
                                      <span class="text-primary">Enter Project</span>
                                   </td>
                                   <td>
                                      <p class="mb-0">2020/03/29</p>
                                      <span class="text-primary">Last Modified</span>
                                   </td>
                                   <td>
                                      <p class="mb-2">135</p>
                                      <div class="iq-progress-bar">
                                         <span class="bg-primary" data-percent="70"></span>
                                      </div>
                                   </td>
                                   <td class="text-right">
                                      <div class="text-danger"><i class="ri-alert-fill"></i></div>
                                      <span class="text-danger">Test Inomplete</span>
                                   </td>
                                   <td>
                                      <div class="d-flex align-items-center justify-content-end">
                                         <a href="javascript:void();" class="avatar-45 text-center ml-3 rounded-circle iq-bg-success font-size-18"><i class="ri-pencil-fill font-size-16"></i></a>
                                         <a href="javascript:void();" class="avatar-45 rounded-circle text-center ml-3 iq-bg-danger font-size-18"><i class="ri-delete-bin-line font-size-16"></i></a>
                                      </div>
                                   </td>
                                </tr>
                                <tr>
                                   <td class="text-center">
                                      <img class="rounded-circle img-fluid avatar-40" src="{{ asset('assets/images/user/01.jpg') }}" alt="profile">
                                   </td>
                                   <td>
                                      <h6>Retail Int</h6>
                                      <p class="mb-0">Lorem Ipsum dummy</p>
                                   </td>
                                   <td>
                                      <p class="mb-0">2020/03/20</p>
                                      <span class="text-primary">Enter Project</span>
                                   </td>
                                   <td>
                                      <p class="mb-0">2020/03/29</p>
                                      <span class="text-primary">Last Modified</span>
                                   </td>
                                   <td>
                                      <p class="mb-2">142</p>
                                      <div class="iq-progress-bar">
                                         <span class="bg-primary" data-percent="70"></span>
                                      </div>
                                   </td>
                                   <td class="text-right">
                                      <div class="text-success">0/3</div>
                                      <p class="mb-0">Active Runs</p>
                                   </td>
                                   <td>
                                      <div class="d-flex align-items-center justify-content-end">
                                         <a href="javascript:void();" class="avatar-45 text-center ml-3 rounded-circle iq-bg-success font-size-18"><i class="ri-pencil-fill font-size-16"></i></a>
                                         <a href="javascript:void();" class="avatar-45 rounded-circle text-center ml-3 iq-bg-danger font-size-18"><i class="ri-delete-bin-line font-size-16"></i></a>
                                      </div>
                                   </td>
                                </tr>
                                <tr>
                                   <td class="text-center">
                                      <img class="rounded-circle img-fluid avatar-40" src="{{ asset('assets/images/user/01.jpg') }}" alt="profile">
                                   </td>
                                   <td>
                                      <h6>Retail Int</h6>
                                      <p class="mb-0">Lorem Ipsum dummy</p>
                                   </td>
                                   <td>
                                      <p class="mb-0">2020/03/20</p>
                                      <span class="text-primary">Enter Project</span>
                                   </td>
                                   <td>
                                      <p class="mb-0">2020/03/29</p>
                                      <span class="text-primary">Last Modified</span>
                                   </td>
                                   <td>
                                      <p class="mb-2">160</p>
                                      <div class="iq-progress-bar">
                                         <span class="bg-primary" data-percent="80"></span>
                                      </div>
                                   </td>
                                   <td class="text-right">
                                      <div class="text-success">0/3</div>
                                      <p class="mb-0">Active Runs</p>
                                   </td>
                                   <td>
                                      <div class="d-flex align-items-center justify-content-end">
                                         <a href="javascript:void();" class="avatar-45 text-center ml-3 rounded-circle iq-bg-success font-size-18"><i class="ri-pencil-fill font-size-16"></i></a>
                                         <a href="javascript:void();" class="avatar-45 rounded-circle text-center ml-3 iq-bg-danger font-size-18"><i class="ri-delete-bin-line font-size-16"></i></a>
                                      </div>
                                   </td>
                                </tr>
                             </tbody>
                          </table>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
</x-app-layout>
