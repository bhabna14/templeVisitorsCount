@extends('layouts.custom-app')

    @section('styles')

    @endsection

    @section('class')

	    <div class="bg-primary">

    @endsection

    @section('content')

            <div class="page-single">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-8 col-xs-10 card-sigin-main mx-auto my-auto py-45 justify-content-center">
                            <div class="card-sigin mt-5 mt-md-0">
                                <!-- Demo content-->
                                <div class="main-card-signin d-md-flex">
                                    <div class="wd-100p"><div class="d-flex mb-4"><a href="{{url('sign')}}"><img src="{{asset('assets/img/brand/favicon.png')}}" class="sign-favicon ht-40" alt="logo"></a></div>
                                        <div class="">
                                            <div class="main-signup-header">
                                                <h2>Welcome back!</h2>
                                                <h6 class="font-weight-semibold mb-4">Please sign in to continue.</h6>
                                                <div class="panel panel-primary">
                                                <div class=" tab-menu-heading mb-2 border-bottom-0">
                                                    
                                                </div>
                                                <div class="panel-body tabs-menu-body border-0 p-3">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab5">
                                                            <form action="{{url('dashboard')}}">
                                                                <div class="form-group">
                                                                    <label>Email</label> <input class="form-control" placeholder="Enter your email" type="text" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Password</label> <input class="form-control" placeholder="Enter your password" type="password" required>
                                                                </div>
                                                                <button  class="btn btn-primary btn-block">Sign In </button>
                                                               
                                                               
                                                                </form>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>

                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    @endsection

    @section('scripts')

		<!-- generate-otp js -->
		<script src="{{asset('assets/js/generate-otp.js')}}"></script>

    @endsection
