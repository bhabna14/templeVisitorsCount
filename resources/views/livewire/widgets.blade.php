@extends('layouts.app')

@section('styles')
@endsection

@section('content')
<div class="full-bg1">
	<div class="container">
		<div class="row">
			<div class="col-md-4 text-center">
				<p class="mb-0 fs-14 text-muted" style="margin-right: 38px;"><span id="enter-up" class="text-success">109883</span> </p><div class="live-indicator6">
					<span class="dot"></span>
					<span>Live</span>
				</div>
				<h6 style="    margin-top: 12px;">People Entered Temple</h6 >
			</div>
			<div class="col-md-4 text-center">
				<p class="mb-0 fs-14 text-muted" style="margin-right: 38px;"><span id="exit-up" class="text-success">66094</span> </p><div class="live-indicator6">
					<span class="dot"></span>
					<span>Live</span>
				</div>
				<h6 style="margin-top: 12px;">People Exited Temple</h6 >
			</div>

			<div class="col-md-4 text-center">
				<p class="mb-0 fs-14 text-muted" style="margin-right: 38px;"><span id="inside-up" class="text-success">36984</span> </p><div class="live-indicator6">
					<span class="dot"></span>
					<span>Live</span>
				</div>
				<h6 style="    margin-top: 12px;">People Inside Temple</h6 >
			</div>

		</div>
	</div>
</div>
<div class="full-bg1">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-xs-12">
				<div class="card">
					<div class="card-header pb-1">
						<h3 class="card-title mb-2">Total People Inside In Temple</h3>
					</div>
					<div class="card-body p-0">
						<div class="browser-stats">
							<div class="d-flex align-items-center item  border-bottom my-2">
								<div class="d-flex">
									<img src="{{asset('assets/img/visitor/nilachakra.png')}}" alt="img" class="ht-30 wd-30 me-2">
									<div class="">
										<h6 class="main-dwara-heading" >MAIN DWARA</h6>
										{{-- <span class="text-muted tx-12">Google, Inc.</span> --}}
									</div>
								</div>
								<div class="ms-auto my-auto">
									<div class="d-flex">
										<span class="me-4 mt-1 font-weight-semibold tx-16" id="main-up">10897</span><div class="live-indicator7">
											<span class="dot"></span>
											<span>Live</span>
										</div>
										{{-- <span class="text-success fs-13 my-auto"><i class="fe fe-trending-up text-success me-2 ms-1 my-auto"></i>12.75%</span> --}}
									</div>
								</div>
							</div>
							<div class="d-flex align-items-center item  border-bottom my-2">
								<div class="d-flex">
									<img src="{{asset('assets/img/visitor/nilachakra.png')}}" alt="img" class="ht-30 wd-30 me-2">
									<div class="">
										<h6 class="main-dwara-heading">BEHARAN DWARA										</h6>
										{{-- <span class="text-muted tx-12">Microsoft Corporation, Inc.</span> --}}
									</div>
								</div>
								<div class="ms-auto my-auto">
									<div class="d-flex">
										<span class="me-4 mt-1 font-weight-semibold tx-16" id="beharan-up">9764</span><div class="live-indicator7">
											<span class="dot"></span>
											<span>Live</span>
										</div>
										{{-- <span class="text-success"><i class="fe fe-trending-down text-danger me-2 ms-1 my-auto"></i>24.37%</span> --}}
									</div>
								</div>
							</div>
							<div class="d-flex align-items-center item  border-bottom my-2">
								<div class="d-flex">
									<img src="{{asset('assets/img/visitor/nilachakra.png')}}" alt="img" class="ht-30 wd-30 me-2">
									<div class="">
										<h6 class="main-dwara-heading">ANANDA BAZAR</h6>
									</div>
								</div>
								<div class="ms-auto my-auto">
									<div class="d-flex">
										<span class="me-4 mt-1 font-weight-semibold tx-16" id="anada-up">6234</span><div class="live-indicator7">
											<span class="dot"></span>
											<span>Live</span>
										</div>
										{{-- <span class="text-success"><i class="fe fe-trending-up text-success me-2 ms-1 my-auto"></i>15,63%</span> --}}
									</div>
								</div>
							</div>
							<div class="d-flex align-items-center item  border-bottom my-2">
								<div class="d-flex">
									<img src="{{asset('assets/img/visitor/nilachakra.png')}}" alt="img" class="ht-30 wd-30 me-2">
									<div class="">
										<h6 class="main-dwara-heading">LAXMI TEMPLE </h6>
										{{-- <span class="text-muted tx-12">Apple Corporation, Inc.</span> --}}
									</div>
								</div>
								<div class="ms-auto my-auto">
									<div class="d-flex">
										<span class="me-4 mt-1 font-weight-semibold tx-16" id="laxmi-up">5657</span><div class="live-indicator7">
											<span class="dot"></span>
											<span>Live</span>
										</div>
										{{-- <span class="text-danger"><i class="fe fe-trending-up text-success me-2 ms-1 my-auto"></i>12.54%</span> --}}
									</div>
								</div>
							</div>
							<div class="d-flex align-items-center item my-2">
								<div class="d-flex">
									<img src="{{asset('assets/img/visitor/nilachakra.png')}}" alt="img" class="ht-30 wd-30 me-2">
									<div class="">
										<h6 class="main-dwara-heading">BIMALA TEMPLE</h6>
										{{-- <span class="text-muted tx-12">Opera, Inc.</span> --}}
									</div>
								</div>
								<div class="ms-auto my-auto">
									<div class="d-flex">
										<span class="me-4 mt-1 font-weight-semibold tx-16" id="bimala-up">4968</span><div class="live-indicator7">
											<span class="dot"></span>
											<span>Live</span>
										</div>
										{{-- <span class="text-danger"><i class="fe fe-trending-down text-danger me-2 ms-1 my-auto"></i>15.12%</span> --}}
									</div>
								</div>
							</div>
							<div class="d-flex align-items-center item my-2">
								<div class="d-flex">
									<img src="{{asset('assets/img/visitor/nilachakra.png')}}" alt="img" class="ht-30 wd-30 me-2">
									<div class="">
										<h6 class="main-dwara-heading">JAGAMOHAN</h6>
										{{-- <span class="text-muted tx-12">Opera, Inc.</span> --}}
									</div>
								</div>
								<div class="ms-auto my-auto">
									<div class="d-flex">
										<span class="me-4 mt-1 font-weight-semibold tx-16" id="jagamohan-up">8563</span><div class="live-indicator7">
											<span class="dot"></span>
											<span>Live</span>
										</div>
										{{-- <span class="text-danger"><i class="fe fe-trending-down text-danger me-2 ms-1 my-auto"></i>15.12%</span> --}}
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
    <!-- row -->
    <div class="full-bg">
        <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
            <div>
                <h3 class="card-title">DWARA</h3>
				<div class="live-indicator">
					<span class="dot"></span>
					<span>Live</span>
				</div>
            </div>
			<div class="arrow-details">
				Note:
				<i class="fas fa-arrow-circle-up mx-2 text-success"></i>In
				<i class="fas fa-arrow-circle-down mx-2 text-danger"></i>Out
			</div>
			
        </div>
		
		<div class="row row-sm mt-4">
			<!-- Card 1 -->
			<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
				<div class="card sales-card circle-image1">
					<div class="row">
						<div class="col-7">
							<div class="inner-card">
								<div class="">
									<h6 class="mb-2 tx-12">SINGHA DWARA</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="">
										<p class="mb-0 fs-14 text-muted"><i class="fas fa-arrow-circle-up mx-2 text-success"></i> <span id="singha-up" class="text-success">6378</span> </p>
										<p class="mb-0 fs-14 text-muted"><i class="fas fa-arrow-circle-down mx-2 text-danger"></i> <span id="singha-down" class="text-success">3986</span> </p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-5">
							<img style="width: 100%; height: 100%" src="assets/img/visitor/image1.png">
						</div>
					</div>
				</div>
			</div>
	
			<!-- Card 2 -->
			<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
				<div class="card sales-card circle-image1">
					<div class="row">
						<div class="col-7">
							<div class="inner-card">
								<div class="">
									<h6 class="mb-2 tx-12">VYAGHRA DWARA</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="">
										<p class="mb-0 fs-14 text-muted"><i class="fas fa-arrow-circle-up mx-2 text-success"></i> <span id="vyaghra-up" class="text-success">3948</span> </p>
										<p class="mb-0 fs-14 text-muted"><i class="fas fa-arrow-circle-down mx-2 text-danger"></i> <span id="vyaghra-down" class="text-success">1938</span> </p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-5">
							<img style="width: 100%; height: 100%" src="assets/img/visitor/image2.png">
						</div>
					</div>
				</div>
			</div>
	
			<!-- Card 3 -->
			<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
				<div class="card sales-card circle-image1">
					<div class="row">
						<div class="col-7">
							<div class="inner-card">
								<div class="">
									<h6 class="mb-2 tx-12">HASTI DWARA</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="">
										<p class="mb-0 fs-14 text-muted"><i class="fas fa-arrow-circle-up mx-2 text-success"></i> <span id="hasti-up" class="text-success">5993</span> </p>
										<p class="mb-0 fs-14 text-muted"><i class="fas fa-arrow-circle-down mx-2 text-danger"></i> <span id="hasti-down" class="text-success">2976</span> </p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-5">
							<img style="width: 100%; height: 100%" src="assets/img/visitor/image3.png">
						</div>
					</div>
				</div>
			</div>
	
			<!-- Card 4 -->
			<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
				<div class="card sales-card circle-image1">
					<div class="row">
						<div class="col-7">
							<div class="inner-card">
								<div class="">
									<h6 class="mb-2 tx-12">ASHWA DWARA</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="">
										<p class="mb-0 fs-14 text-muted"><i class="fas fa-arrow-circle-up mx-2 text-success"></i> <span id="ashwa-up" class="text-success">3498</span> </p>
										<p class="mb-0 fs-14 text-muted"><i class="fas fa-arrow-circle-down mx-2 text-danger"></i> <span id="ashwa-down" class="text-success">2176</span> </p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-5">
							<img style="width: 100%; height: 100%" src="assets/img/visitor/image4.jpg">
						</div>
					</div>
				</div>
			</div>
		</div>

		
		<div class="row row-sm mt-4">
				<div class="col-md-4 text-center">
					<p class="mb-0 fs-14 text-muted" style="margin-right: 38px;"><span id="enter1-up" class="text-success">14897</span> </p><div class="live-indicator6">
						<span class="dot"></span>
						<span>Live</span>
					</div>
					<h6 style="    margin-top: 12px;">People Entered Temple</h6 >
				</div>
				<div class="col-md-4 text-center">
					<p class="mb-0 fs-14 text-muted" style="margin-right: 38px;"><span id="exit1-up" class="text-success">4245</span> </p><div class="live-indicator6">
						<span class="dot"></span>
						<span>Live</span>
					</div>
					<h6 style="    margin-top: 12px;">People Exited Temple</h6 >
				</div>
	
				<div class="col-md-4 text-center">
					<p class="mb-0 fs-14 text-muted" style="margin-right: 38px;"><span id="inside1-up" class="text-success">10897</span> </p><div class="live-indicator6">
						<span class="dot"></span>
						<span>Live</span>
					</div>
					<h6 style="    margin-top: 12px;">People Inside Temple</h6 >
				</div>
	
			
		</div>
    </div>
    <div class="full-bg">
        <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
           
			<div>
                <h3 class="card-title">BEHARAN DWARA</h3>
				<div class="live-indicator1">
					<span class="dot"></span>
					<span>Live</span>
				</div>
            </div>
			<div class="arrow-details">
				Note:
				<i class="fas fa-arrow-circle-up mx-2 text-success"></i>In
				<i class="fas fa-arrow-circle-down mx-2 text-danger"></i>Out
			</div>
        </div>
		<div class="row row-sm mt-4">
			<!-- Card 1 -->
			<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
				<div class="card sales-card circle-image1">
					<div class="row">
						<div class="col-9">
							<div class="ps-4 pt-4 pe-3 pb-4 pt-0">
								<div class="">
									<h6 class="mb-2 tx-12">DAKHINA BEHARAN DWARA</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="">
										<p class="mb-0 fs-14 text-muted">
											<i class="fas fa-arrow-circle-up mx-2 text-success"></i> 
											<span class="text-success" id="dakhina-up">6348</span>
										</p>
										<p class="mb-0 fs-14 text-muted">
											<i class="fas fa-arrow-circle-down mx-2 text-danger"></i> 
											<span class="text-success" id="dakhina-down">3455</span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="circle-icon widget bg-primary-gradient text-center align-self-center shadow-primary overflow-hidden box-shadow-primary">
								<img src="assets/img/visitor/nilachakra.png">
							</div>
						</div>
					</div>
				</div>
			</div>
	
			<!-- Card 2 -->
			<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
				<div class="card sales-card circle-image2">
					<div class="row">
						<div class="col-9">
							<div class="ps-4 pt-4 pe-3 pb-4 pt-0">
								<div class="">
									<h6 class="mb-2 tx-12">UTTAR BEHARAN DWARA</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="">
										<p class="mb-0 fs-14 text-muted">
											<i class="fas fa-arrow-circle-up mx-2 text-success"></i> 
											<span class="text-success" id="uttar-up">3456</span>
										</p>
										<p class="mb-0 fs-14 text-muted">
											<i class="fas fa-arrow-circle-down mx-2 text-danger"></i> 
											<span class="text-success" id="uttar-down">2345</span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="circle-icon widget bg-info-gradient text-center align-self-center shadow-secondary overflow-hidden box-shadow-info">
								<img src="assets/img/visitor/nilachakra.png">
							</div>
						</div>
					</div>
				</div>
			</div>
	
			<!-- Card 3 -->
			<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
				<div class="card sales-card circle-image3">
					<div class="row">
						<div class="col-9">
							<div class="ps-4 pt-4 pe-3 pb-4 pt-0">
								<div class="">
									<h6 class="mb-2 tx-12">PURBA BEHARAN DWARA</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="">
										<p class="mb-0 fs-14 text-muted">
											<i class="fas fa-arrow-circle-up mx-2 text-success"></i> 
											<span class="text-success" id="purba-up">6889</span>
										</p>
										<p class="mb-0 fs-14 text-muted">
											<i class="fas fa-arrow-circle-down mx-2 text-danger"></i> 
											<span class="text-success" id="purba-down">3267</span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="circle-icon widget bg-success-gradient text-center align-self-center shadow-success overflow-hidden box-shadow-success">
								<img src="assets/img/visitor/nilachakra.png">
							</div>
						</div>
					</div>
				</div>
			</div>
	
			<!-- Card 4 -->
			<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
				<div class="card sales-card circle-image4">
					<div class="row">
						<div class="col-10">
							<div class="ps-4 pt-4 pe-3 pb-4 pt-0">
								<div class="">
									<h6 class="mb-2 tx-12">PASCHIMA BEHARAN DWARA</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="">
										<p class="mb-0 fs-14 text-muted">
											<i class="fas fa-arrow-circle-up mx-2 text-success"></i> 
											<span class="text-success" id="paschima-up">4688</span>
										</p>
										<p class="mb-0 fs-14 text-muted">
											<i class="fas fa-arrow-circle-down mx-2 text-danger"></i> 
											<span class="text-success" id="paschima-down">2544</span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-2">
							<div class="circle-icon widget bg-warning-gradient text-center align-self-center warning-success overflow-hidden box-shadow-warning">
								<img src="assets/img/visitor/nilachakra.png">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row row-sm mt-4">
			<div class="col-md-4 text-center">
				<p class="mb-0 fs-14 text-muted" style="margin-right: 38px;"><span id="enter2-up" class="text-success">11793</span> </p><div class="live-indicator6">
					<span class="dot"></span>
					<span>Live</span>
				</div>
				<h6 style="    margin-top: 12px;">People Entered Temple</h6 >
			</div>
			<div class="col-md-4 text-center">
				<p class="mb-0 fs-14 text-muted" style="margin-right: 38px;"><span id="exit2-up" class="text-success">2849</span> </p><div class="live-indicator6">
					<span class="dot"></span>
					<span>Live</span>
				</div>
				<h6 style="    margin-top: 12px;">People Exited Temple</h6 >
			</div>

			<div class="col-md-4 text-center">
				<p class="mb-0 fs-14 text-muted" style="margin-right: 38px;"><span id="inside2-up" class="text-success">9764</span> </p><div class="live-indicator6">
					<span class="dot"></span>
					<span>Live</span>
				</div>
				<h6 style="    margin-top: 12px;">People Inside Temple</h6 >
			</div>

		
		</div>
    </div>
    <div class="full-bg">
        <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
		

			<div>
                <h3 class="card-title">ANANDA BAZAR</h3>
				<div class="live-indicator2">
					<span class="dot"></span>
					<span>Live</span>
				</div>
            </div>
			<div class="arrow-details">
				Note:
				<i class="fas fa-arrow-circle-up mx-2 text-success"></i>In
				<i class="fas fa-arrow-circle-down mx-2 text-danger"></i>Out
			</div>
		</div>
		<div class="row row-sm mt-4">
			<div class="col-lg-6 col-xl-3 col-md-6 col-12">
				<div class="card bg-primary-gradient text-white">
					<div class="card-body">
						<div class="row">
							<div class="col-4">
								<div class="icon1 mt-2 text-center">
									<i class="fe fe-users tx-40"></i>
								</div>
							</div>
							<div class="col-8">
								<div class="mt-0 text-center">
									<span class="text-white">CAM 1</span>
									<div class="pb-0 mt-0">
										<div class="">
											<p class="mb-0 fs-14 text-muted text-white">
												<i class="fas fa-arrow-circle-up mx-2 text-success"></i>
												<span id="cam1-up" class="text-white">2355</span>
											</p>
											<p class="mb-0 fs-14 text-muted text-white">
												<i class="fas fa-arrow-circle-down mx-2 text-danger"></i>
												<span id="cam1-down" class="text-white">1232</span>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
			<div class="col-lg-6 col-xl-3 col-md-6 col-12">
				<div class="card bg-danger-gradient text-white">
					<div class="card-body">
						<div class="row">
							<div class="col-4">
								<div class="icon1 mt-2 text-center">
									<i class="fe fe-users tx-40"></i>
								</div>
							</div>
							<div class="col-8">
								<div class="mt-0 text-center">
									<span class="text-white">CAM 2</span>
									<div class="pb-0 mt-0">
										<div class="">
											<p class="mb-0 fs-14 text-muted text-white">
												<i class="fas fa-arrow-circle-up mx-2 text-success"></i>
												<span id="cam2-up" class="text-white">3656</span>
											</p>
											<p class="mb-0 fs-14 text-muted text-white">
												<i class="fas fa-arrow-circle-down mx-2 text-danger"></i>
												<span id="cam2-down" class="text-white">2475</span>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
			<div class="col-lg-6 col-xl-3 col-md-6 col-12">
				<div class="card bg-success-gradient text-white">
					<div class="card-body">
						<div class="row">
							<div class="col-4">
								<div class="icon1 mt-2 text-center">
									<i class="fe fe-users tx-40"></i>
								</div>
							</div>
							<div class="col-8">
								<div class="mt-0 text-center">
									<span class="text-white">CAM 3</span>
									<div class="pb-0 mt-0">
										<div class="">
											<p class="mb-0 fs-14 text-muted text-white">
												<i class="fas fa-arrow-circle-up mx-2 text-success"></i>
												<span id="cam3-up" class="text-white">2895</span>
											</p>
											<p class="mb-0 fs-14 text-muted text-white">
												<i class="fas fa-arrow-circle-down mx-2 text-danger"></i>
												<span id="cam3-down" class="text-white">1989</span>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
			<div class="col-lg-6 col-xl-3 col-md-6 col-12">
				<div class="card bg-danger-gradient text-white">
					<div class="card-body">
						<div class="row">
							<div class="col-4">
								<div class="icon1 mt-2 text-center">
									<i class="fe fe-users tx-40"></i>
								</div>
							</div>
							<div class="col-8">
								<div class="mt-0 text-center">
									<span class="text-white">CAM 4</span>
									<div class="pb-0 mt-0">
										<div class="">
											<p class="mb-0 fs-14 text-muted text-white">
												<i class="fas fa-arrow-circle-up mx-2 text-success"></i>
												<span id="cam4-up" class="text-white">4686</span>
											</p>
											<p class="mb-0 fs-14 text-muted text-white">
												<i class="fas fa-arrow-circle-down mx-2 text-danger"></i>
												<span id="cam4-down" class="text-white">2568</span>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
			<div class="col-lg-6 col-xl-3 col-md-6 col-12">
				<div class="card bg-warning-gradient text-white">
					<div class="card-body">
						<div class="row">
							<div class="col-4">
								<div class="icon1 mt-2 text-center">
									<i class="fe fe-users tx-40"></i>
								</div>
							</div>
							<div class="col-8">
								<div class="mt-0 text-center">
									<span class="text-white">CAM 5</span>
									<div class="pb-0 mt-0">
										<div class="">
											<p class="mb-0 fs-14 text-muted text-white">
												<i class="fas fa-arrow-circle-up mx-2 text-success"></i>
												<span id="cam5-up" class="text-white">2076</span>
											</p>
											<p class="mb-0 fs-14 text-muted text-white">
												<i class="fas fa-arrow-circle-down mx-2 text-danger"></i>
												<span id="cam5-down" class="text-white">1023</span>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row row-sm mt-4">
			<div class="col-md-4 text-center">
				<p class="mb-0 fs-14 text-muted" style="margin-right: 38px;"><span id="enter3-up" class="text-success">9958</span> </p><div class="live-indicator6">
					<span class="dot"></span>
					<span>Live</span>
				</div>
				<h6 style="    margin-top: 12px;">People Entered Temple</h6 >
			</div>
			<div class="col-md-4 text-center">
				<p class="mb-0 fs-14 text-muted" style="margin-right: 38px;"><span id="exit3-up" class="text-success">3242</span> </p><div class="live-indicator6">
					<span class="dot"></span>
					<span>Live</span>
				</div>
				<h6 style="    margin-top: 12px;">People Exited Temple</h6 >
			</div>

			<div class="col-md-4 text-center">
				<p class="mb-0 fs-14 text-muted" style="margin-right: 38px;"><span id="inside3-up" class="text-success">6234</span> </p><div class="live-indicator6">
					<span class="dot"></span>
					<span>Live</span>
				</div>
				<h6 style="    margin-top: 12px;">People Inside Temple</h6 >
			</div>

		
	</div>
    </div>


	<!--Laxmi Temple and Bimla Temple-->
	<div class="full-bg">
       <div class="row">
		   <div class="col-md-6">
			<div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
				
				<div>
					<h3 class="card-title">LAXMI TEMPLE DWARA</h3>
					<div class="live-indicator3">
						<span class="dot"></span>
						<span>Live</span>
					</div>
				</div>
				<div class="arrow-details">
					Note:
					<i class="fas fa-arrow-circle-up mx-2 text-success"></i>In
					<i class="fas fa-arrow-circle-down mx-2 text-danger"></i>Out
				</div>
			</div>
			<div class="row row-sm mt-4">
				<!-- Card 1 -->
				<div class="col-xl-12 col-lg-6 col-md-6 col-xm-12">
					<div class="card sales-card circle-image1">
						<div class="row">
							<div class="col-9">
								<div class="ps-4 pt-4 pe-3 pb-4 pt-0">
									<div class="">
										<h6 class="mb-2 tx-12">LAXMI TEMPLE DWARA</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="">
											<p class="mb-0 fs-14 text-muted">
												<i class="fas fa-arrow-circle-up mx-2 text-success"></i> 
												<span class="text-success"  id="laxmi-up">8667</span>
											</p>
											<p class="mb-0 fs-14 text-muted">
												<i class="fas fa-arrow-circle-down mx-2 text-danger"></i> 
												<span class="text-success"  id="laxmi-down">3687</span>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-3">
								<div class="circle-icon1 widget  text-center align-self-center shadow-primary overflow-hidden box-shadow-primary">
									<img src="assets/img/laxmi-removebg-preview.png">
								</div>
							</div>
						</div>
					</div>
				</div>
		
			
			</div>
		   </div>
		   <div class="col-md-6">
			<div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
				<div>
					<h3 class="card-title">BIMALA TEMPLE DWARA</h3>
					<div class="live-indicator4">
						<span class="dot"></span>
						<span>Live</span>
					</div>
				</div>
				<div class="arrow-details">
					Note:
					<i class="fas fa-arrow-circle-up mx-2 text-success"></i>In
					<i class="fas fa-arrow-circle-down mx-2 text-danger"></i>Out
				</div>
			</div>
			<div class="row row-sm mt-4">
				<!-- Card 1 -->
				<div class="col-xl-12 col-lg-6 col-md-6 col-xm-12">
					<div class="card sales-card circle-image1">
						<div class="row">
							<div class="col-9">
								<div class="ps-4 pt-4 pe-3 pb-4 pt-0">
									<div class="">
										<h6 class="mb-2 tx-12">BIMALA TEMPLE DWARA</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="">
											<p class="mb-0 fs-14 text-muted">
												<i class="fas fa-arrow-circle-up mx-2 text-success"></i> 
												<span class="text-success" id="bimala-up">9087</span>
											</p>
											<p class="mb-0 fs-14 text-muted">
												<i class="fas fa-arrow-circle-down mx-2 text-danger"></i> 
												<span class="text-success" id="bimala-down">5674</span>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-3">
								<div class="circle-icon1 widget  text-center align-self-center shadow-primary overflow-hidden box-shadow-primary">
									<img src="assets/img/BIMALA-removebg-preview.png" style="width: 91%; height: 90%;">
								</div>
							</div>
						</div>
					</div>
				</div>
		
			
			</div>
		   </div>
	   </div>
    </div>

	<!---Jagamohan Dwara-->
	<div class="full-bg">
        <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
           
			<div>
				<h3 class="card-title">JAGAMOHAN</h3>
				<div class="live-indicator5">
					<span class="dot"></span>
					<span>Live</span>
				</div>
			</div>
			<div class="arrow-details">
				Note:
				<i class="fas fa-arrow-circle-up mx-2 text-success"></i>In
				<i class="fas fa-arrow-circle-down mx-2 text-danger"></i>Out
			</div>
        </div>
		<div class="row row-sm mt-4" >
			<!-- Card 1 -->
			<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
				<div class="card sales-card circle-image1">
					<div class="row">
						<div class="col-9">
							<div class="ps-4 pt-4 pe-3 pb-4 pt-0">
								<div class="">
									<h6 class="mb-2 tx-12">CAM 1</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="">
										<p class="mb-0 fs-14 text-muted">
											<i class="fas fa-arrow-circle-up mx-2 text-success"></i> 
											<span class="text-success" id="cam11-up">4676</span>
										</p>
										<p class="mb-0 fs-14 text-muted">
											<i class="fas fa-arrow-circle-down mx-2 text-danger"></i> 
											<span class="text-success" id="cam11-down">2656</span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="circle-icon widget bg-primary-gradient text-center align-self-center shadow-primary overflow-hidden box-shadow-primary">
								<img src="assets/img/visitor/nilachakra.png">
							</div>
						</div>
					</div>
				</div>
			</div>
	
			<!-- Card 2 -->
			<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
				<div class="card sales-card circle-image2">
					<div class="row">
						<div class="col-9">
							<div class="ps-4 pt-4 pe-3 pb-4 pt-0">
								<div class="">
									<h6 class="mb-2 tx-12">CAM 2</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="">
										<p class="mb-0 fs-14 text-muted">
											<i class="fas fa-arrow-circle-up mx-2 text-success"></i> 
											<span class="text-success" id="cam22-up">3656</span>
										</p>
										<p class="mb-0 fs-14 text-muted">
											<i class="fas fa-arrow-circle-down mx-2 text-danger"></i> 
											<span class="text-success" id="cam22-down">2575</span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="circle-icon widget bg-info-gradient text-center align-self-center shadow-secondary overflow-hidden box-shadow-info">
								<img src="assets/img/visitor/nilachakra.png">
							</div>
						</div>
					</div>
				</div>
			</div>
	
			<!-- Card 3 -->
			<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
				<div class="card sales-card circle-image3">
					<div class="row">
						<div class="col-9">
							<div class="ps-4 pt-4 pe-3 pb-4 pt-0">
								<div class="">
									<h6 class="mb-2 tx-12">CAM 3</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="">
										<p class="mb-0 fs-14 text-muted">
											<i class="fas fa-arrow-circle-up mx-2 text-success"></i> 
											<span class="text-success" id="cam33-up">4673</span>
										</p>
										<p class="mb-0 fs-14 text-muted">
											<i class="fas fa-arrow-circle-down mx-2 text-danger"></i> 
											<span class="text-success" id="cam33-down">2655</span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="circle-icon widget bg-success-gradient text-center align-self-center shadow-success overflow-hidden box-shadow-success">
								<img src="assets/img/visitor/nilachakra.png">
							</div>
						</div>
					</div>
				</div>
			</div>
	
			<!-- Card 4 -->
			<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
				<div class="card sales-card circle-image4">
					<div class="row">
						<div class="col-10">
							<div class="ps-4 pt-4 pe-3 pb-4 pt-0">
								<div class="">
									<h6 class="mb-2 tx-12">CAM 4</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="">
										<p class="mb-0 fs-14 text-muted">
											<i class="fas fa-arrow-circle-up mx-2 text-success"></i> 
											<span class="text-success" id="cam44-up">2654</span>
										</p>
										<p class="mb-0 fs-14 text-muted">
											<i class="fas fa-arrow-circle-down mx-2 text-danger"></i> 
											<span class="text-success" id="cam44-down">1658</span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-2">
							<div class="circle-icon widget bg-warning-gradient text-center align-self-center warning-success overflow-hidden box-shadow-warning">
								<img src="assets/img/visitor/nilachakra.png">
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Card 4 -->
			<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
				<div class="card sales-card circle-image4">
					<div class="row">
						<div class="col-10">
							<div class="ps-4 pt-4 pe-3 pb-4 pt-0">
								<div class="">
									<h6 class="mb-2 tx-12">CAM 5</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="">
										<p class="mb-0 fs-14 text-muted">
											<i class="fas fa-arrow-circle-up mx-2 text-success"></i> 
											<span class="text-success" id="cam55-up">2343</span>
										</p>
										<p class="mb-0 fs-14 text-muted">
											<i class="fas fa-arrow-circle-down mx-2 text-danger"></i> 
											<span class="text-success" id="cam55-down">1322</span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-2">
							<div class="circle-icon widget bg-warning-gradient text-center align-self-center warning-success overflow-hidden box-shadow-warning">
								<img src="assets/img/visitor/nilachakra.png">
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- Card 4 -->
			<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
				<div class="card sales-card circle-image4">
					<div class="row">
						<div class="col-10">
							<div class="ps-4 pt-4 pe-3 pb-4 pt-0">
								<div class="">
									<h6 class="mb-2 tx-12">CAM 6</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="">
										<p class="mb-0 fs-14 text-muted">
											<i class="fas fa-arrow-circle-up mx-2 text-success"></i> 
											<span class="text-success" id="cam66-up">2665</span>
										</p>
										<p class="mb-0 fs-14 text-muted">
											<i class="fas fa-arrow-circle-down mx-2 text-danger"></i> 
											<span class="text-success" id="cam66-down">1565</span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-2">
							<div class="circle-icon widget bg-warning-gradient text-center align-self-center warning-success overflow-hidden box-shadow-warning">
								<img src="assets/img/visitor/nilachakra.png">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row row-sm mt-4">
			<div class="col-md-4 text-center">
				<p class="mb-0 fs-14 text-muted" style="margin-right: 38px;"><span id="enter4-up" class="text-success">20898</span> </p><div class="live-indicator6">
					<span class="dot"></span>
					<span>Live</span>
				</div>
				<h6 style="    margin-top: 12px;">People Entered Temple</h6 >
			</div>
			<div class="col-md-4 text-center">
				<p class="mb-0 fs-14 text-muted" style="margin-right: 38px;"><span id="exit4-up" class="text-success">12654</span> </p><div class="live-indicator6">
					<span class="dot"></span>
					<span>Live</span>
				</div>
				<h6 style="    margin-top: 12px;">People Exited Temple</h6 >
			</div>

			<div class="col-md-4 text-center">
				<p class="mb-0 fs-14 text-muted" style="margin-right: 38px;"><span id="inside4-up" class="text-success">8563</span> </p><div class="live-indicator6">
					<span class="dot"></span>
					<span>Live</span>
				</div>
				<h6 style="    margin-top: 12px;">People Inside Temple</h6 >
			</div>

		
	</div>
    </div>


    <!-- row closed -->
<div class="full-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card custom-card overflow-hidden">
					<div class="card-header border-bottom-0">
						<div>
							<h3 class="card-title mb-2 ">PEOPLE INSIDE TEMPLE</h3> <span class="d-block tx-12 mb-0 text-muted"></span>
						</div>
					</div>
					<div class="card-body">
						<div id="statistics2">
	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
    <!-- row -->
    {{-- <div class="row row-sm">
						<div class="col-xl-3 col-md-6 col-lg-6 col-sm-6">
							<div class="card">
								<div class="card-body">
									<div class="plan-card text-center">
										<i class="fas fa-share-alt text-primary plan-icon"></i>
										<h6 class="text-drak text-uppercase mt-2">Total Shares</h6>
										<h2 class="mb-2">678</h2>
										<span class="badge badge-success"> +89% </span>
										<span class="text-muted">From previous month</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-lg-6 col-sm-6">
							<div class="card">
								<div class="card-body">
									<div class="plan-card text-center">
										<i class="fas fa-comments plan-icon text-primary"></i>
										<h6 class="text-drak text-uppercase mt-2">Total Comments</h6>
										<h2 class="mb-2">493</h2>
										<span class="badge badge-danger"> +76% </span>
										<span class="text-muted">From previous month</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-lg-6 col-sm-6">
							<div class="card">
								<div class="card-body">
									<div class="plan-card text-center">
										<i class="fas fa-thumbs-up plan-icon text-primary"></i>
										<h6 class="text-drak text-uppercase mt-2">Total Likes</h6>
										<h2 class="mb-2">3,287</h2>
										<span class="badge badge-success"> +18% </span>
										<span class="text-muted">From previous month</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-lg-6 col-sm-6">
							<div class="card">
								<div class="card-body">
									<div class="plan-card text-center">
										<i class="fas fa-eye plan-icon text-primary"></i>
										<h6 class="text-drak text-uppercase mt-2">Total Views</h6>
										<h2 class="mb-2">279</h2>
										<span class="badge badge-danger"> +5% </span>
										<span class="text-muted">From previous month</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-sm-6 col-lg-6 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col">
											<div class="">App Views</div>
											<div class="h3 mt-2 mb-2"><b>19.89K</b><span class="text-success tx-13 ms-2">(+25%)</span></div>
										</div>
										<div class="col-auto align-self-center ">
											<div class="feature mt-0 mb-0">
												<i class="fe fe-eye project bg-primary-transparent text-primary "></i>
											</div>
										</div>
									</div>
									<div class="">
										<p class="mb-1">Overview of Last month</p>
										<div class="progress progress-sm h-1 mb-1">
											<div class="progress-bar bg-primary wd-80 " role="progressbar"></div>
										</div>
										<small class="mb-0 text-muted">Monthly<span class="float-end text-muted">60%</span></small>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-6 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col">
											<div class="">New Users</div>
											<div class="h3 mt-2 mb-2"><b>692</b><span class="text-success tx-13 ms-2">(+15%)</span></div>
										</div>
										<div class="col-auto align-self-center ">
											<div class="feature mt-0 mb-0">
												<i class="fe fe-users project bg-pink-transparent text-pink "></i>
											</div>
										</div>
									</div>
									<div class="">
										<p class="mb-1">Overview of Last month</p>
										<div class="progress progress-sm h-1 mb-1">
											<div class="progress-bar bg-secondary wd-50 " role="progressbar"></div>
										</div>
										<small class="mb-0 text-muted">Monthly<span class="float-end text-muted">50%</span></small>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-6 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col">
											<div class="">Churned Users</div>
											<div class="h3 mt-2 mb-2"><b>286</b><span class="text-success tx-13 ms-2">(+08%)</span></div>
										</div>
										<div class="col-auto align-self-center ">
											<div class="feature mt-0 mb-0">
												<i class="ti-pulse project bg-warning-transparent text-warning "></i>
											</div>
										</div>
									</div>
									<div class="">
										<p class="mb-1">Overview of Last month</p>
										<div class="progress progress-sm h-1 mb-1">
											<div class="progress-bar bg-danger wd-30 " role="progressbar"></div>
										</div>
										<small class="mb-0 text-muted">Monthly<span class="float-end text-muted">30%</span></small>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-6 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col">
											<div class="">Total Revenue</div>
											<div class="h3 mt-2 mb-2"><b>$2.98M</b><span class="text-success tx-13 ms-2">(+35%)</span></div>
										</div>
										<div class="col-auto align-self-center ">
											<div class="feature mt-0 mb-0">
												<i class="ti-bar-chart-alt project bg-success-transparent text-success "></i>
											</div>
										</div>
									</div>
									<div class="">
										<p class="mb-1">Overview of Last month</p>
										<div class="progress progress-sm h-1 mb-1">
											<div class="progress-bar bg-success wd-25 " role="progressbar"></div>
										</div>
										<small class="mb-0 text-muted">Monthly<span class="float-end text-muted">25%</span></small>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<div class="row row-sm">
						<div class="col-lg-6 col-xl-3 col-md-6 col-12">
							<div class="card bg-primary-gradient text-white ">
								<div class="card-body">
									<div class="row">
										<div class="col-6">
											<div class="icon1 mt-2 text-center">
												<i class="fe fe-users tx-40"></i>
											</div>
										</div>
										<div class="col-6">
											<div class="mt-0 text-center">
												<span class="text-white">Members</span>
												<h2 class="text-white mb-0">600</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-3 col-md-6 col-12">
							<div class="card bg-danger-gradient text-white">
								<div class="card-body">
									<div class="row">
										<div class="col-6">
											<div class="icon1 mt-2 text-center">
												<i class="fe fe-shopping-cart tx-40"></i>
											</div>
										</div>
										<div class="col-6">
											<div class="mt-0 text-center">
												<span class="text-white">Sales</span>
												<h2 class="text-white mb-0">854</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-3 col-md-6 col-12">
							<div class="card bg-success-gradient text-white">
								<div class="card-body">
									<div class="row">
										<div class="col-6">
											<div class="icon1 mt-2 text-center">
												<i class="fe fe-bar-chart-2 tx-40"></i>
											</div>
										</div>
										<div class="col-6">
											<div class="mt-0 text-center">
												<span class="text-white">Profits</span>
												<h2 class="text-white mb-0">98K</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-3 col-md-6 col-12">
							<div class="card bg-warning-gradient text-white">
								<div class="card-body">
									<div class="row">
										<div class="col-6">
											<div class="icon1 mt-2 text-center">
												<i class="fe fe-pie-chart tx-40"></i>
											</div>
										</div>
										<div class="col-6">
											<div class="mt-0 text-center">
												<span class="text-white">Taxes</span>
												<h2 class="text-white mb-0">876</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12 col-lg-6 col-xl-3">
							<div class="card card-img-holder">
								<div class="card-body list-icons">
									<div class="clearfix">
										<div class="float-end  mt-2">
											<span class="text-primary ">
												<i class="si si-basket-loaded tx-30"></i>
											</span>
										</div>
										<div class="float-start text-end">
											<p class="card-text text-muted mb-1">Services</p>
											<h3>$124</h3>
										</div>
									</div>
									<div class="card-footer p-0">
										<p class="text-muted mb-0 pt-4"><i class="si si-arrow-down-circle text-warning me-1-20  me-2" aria-hidden="true"></i>Daily Orders</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-lg-6 col-xl-3">
							<div class="card card-img-holder">
								<div class="card-body list-icons">
									<div class="clearfix">
										<div class="float-end  mt-2">
											<span class="text-primary ">
												<i class="si si-credit-card tx-30"></i>
											</span>
										</div>
										<div class="float-start">
											<p class="card-text text-muted mb-1">Sources</p>
											<h3>$124</h3>
										</div>
									</div>
									<div class="card-footer p-0">
										<p class="text-muted mb-0 pt-4"><i class="si si-arrow-up-circle text-success me-2"></i>Less Sales</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-lg-6 col-xl-3">
							<div class="card card-img-holder">
								<div class="card-body list-icons">
									<div class="clearfix">
										<div class="float-end  mt-2">
											<span class="text-primary">
												<i class="si si-chart tx-30"></i>
											</span>
										</div>
										<div class="float-start">
											<p class="card-text text-muted mb-1">Income</p>
											<h3>21%</h3>
										</div>
									</div>
									<div class="card-footer p-0">
										<p class="text-muted mb-0 pt-4"><i class="si si-exclamation text-info me-2"></i>From Last Month</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-lg-6 col-xl-3">
							<div class="card card-img-holder">
								<div class="card-body list-icons">
									<div class="clearfix">
										<div class="float-end  mt-2">
											<span class="text-primary">
												<i class="si si-social-facebook tx-30"></i>
											</span>
										</div>
										<div class="float-start">
											<p class="card-text text-muted mb-1">Followers</p>
											<h3>24K</h3>
										</div>
									</div>
									<div class="card-footer p-0">
										<p class="text-muted mb-0 pt-4"><i class="si si-check me-1 text-primary me-2"></i> Recent History</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-xl-4 col-lg-12">
							<div class="card user-wideget user-wideget-widget widget-user">
								<div class="widget-user-header br-te-5  br-ts-5  bg-primary">
									<h3 class="widget-user-username">Alexander Pierce</h3>
									<h5 class="widget-user-desc">Founder &amp; CEO</h5>
								</div>
								<div class="widget-user-image">
									<img src="{{asset('assets/img/faces/17.jpg')}}" class="brround" alt="User Avatar">
								</div>
								<div class="user-wideget-footer">
									<div class="row">
										<div class="col-sm-4 border-end">
											<div class="description-block">
												<h5 class="description-header">3,200</h5>
												<span class="description-text">SALES</span>
											</div>
										</div>
										<div class="col-sm-4 border-end">
											<div class="description-block">
												<h5 class="description-header">13,000</h5>
												<span class="description-text">FOLLOWERS</span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="description-block">
												<h5 class="description-header">35</h5>
												<span class="description-text">PRODUCTS</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-xl-4 col-lg-12">
							<div class="card user-wideget user-wideget-widget widget-user">
								<div class="widget-user-header  br-te-5  br-ts-5 bg-danger">
									<h3 class="widget-user-username">Alexander Pierce</h3>
									<h5 class="widget-user-desc">Founder &amp; CEO</h5>
								</div>
								<div class="widget-user-image">
									<img src="{{asset('assets/img/faces/12.jpg')}}" class="brround" alt="User Avatar">
								</div>
								<div class="user-wideget-footer">
									<div class="row">
										<div class="col-sm-4 border-end">
											<div class="description-block">
												<h5 class="description-header">3,200</h5>
												<span class="description-text">SALES</span>
											</div>
										</div>
										<div class="col-sm-4 border-end">
											<div class="description-block">
												<h5 class="description-header">13,000</h5>
												<span class="description-text">FOLLOWERS</span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="description-block">
												<h5 class="description-header">35</h5>
												<span class="description-text">PRODUCTS</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-xl-4 col-lg-12">
							<div class="card user-wideget user-wideget-widget widget-user">
								<div class="widget-user-header  br-te-5  br-ts-5 bg-success">
									<h3 class="widget-user-username">Alexander Pierce</h3>
									<h5 class="widget-user-desc">Founder &amp; CEO</h5>
								</div>
								<div class="widget-user-image">
									<img src="{{asset('assets/img/faces/5.jpg')}}" class="brround" alt="User Avatar">
								</div>
								<div class="user-wideget-footer">
									<div class="row">
										<div class="col-sm-4 border-end">
											<div class="description-block">
												<h5 class="description-header">3,200</h5>
												<span class="description-text">SALES</span>
											</div>
										</div>
										<div class="col-sm-4 border-end">
											<div class="description-block">
												<h5 class="description-header">13,000</h5>
												<span class="description-text">FOLLOWERS</span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="description-block">
												<h5 class="description-header">35</h5>
												<span class="description-text">PRODUCTS</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row row-cards row-deck">
						<div class="col-sm-12 col-lg-6">
							<div class="card">
								<div class="card-header pb-0">
									<div class="card-title pb-0  mb-2">Sales</div>
									<p class="tx-12 tx-gray-500 mb-3">On the other hand, we denounce with right indignation and dislike imagesralized <a href="">Learn more</a></p>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col text-center">
											<label class="tx-12">Today</label>
											<p class="font-weight-bold tx-20">3,256</p>
										</div><!-- col -->
										<div class="col border-start text-center">
											<label class="tx-12">This Week</label>
											<p class="font-weight-bold tx-20">25,321</p>
										</div><!-- col -->
										<div class="col border-start text-center">
											<label class="tx-12">This Month</label>
											<p class="font-weight-bold tx-20">53,625</p>
										</div><!-- col -->
									</div><!-- row -->
									<div class="progress ht-20 mt-4">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary ht-20 w-50">50%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-lg-6">
							<div class="card">
								<div class="card-header pb-0">
									<div class="card-title pb-0 mb-2">Profit</div>
									<p class="tx-12 tx-gray-500 mb-3">On the other hand, we denounce with right indignation and dislike imagesralized <a href="">Learn more</a></p>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col text-center">
											<label class="tx-12">Today</label>
											<p class="font-weight-bold tx-20">236 $</p>
										</div><!-- col -->
										<div class="col border-start text-center ">
											<label class="tx-12">This Week</label>
											<p class="font-weight-bold tx-20">1,365 $</p>
										</div><!-- col -->
										<div class="col border-start text-center">
											<label class="tx-12">This Month</label>
											<p class="font-weight-bold tx-20">36,254 $</p>
										</div><!-- col -->
									</div><!-- row -->
									<div class="progress mt-4 ht-20">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning wd-60p ht-20">36%</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- row -->
					<div class="row row-sm">
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
							<div class="card">
								<div class="card-body iconfont text-start">
									<div class=" justify-content-between">
										<h4 class="card-title mb-3">Real time users</h4>
									</div>
									<div class=" mb-0">
										<div class="">
											<h4 class="mb-1 font-weight-bold">154<span class="text-success tx-13 ms-2">(+0.98%)</span></h4>
											<p class="mb-2 tx-12 text-muted">Overview of Last month</p>
										</div>
										<div class="card-chart bg-primary-transparent brround ms-auto mt-0">
											<i class="typcn typcn-group-outline text-primary tx-24"></i>
										</div>
									</div>

									<div class="progress progress-sm mt-2">
										<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar bg-primary wd-70p" role="progressbar"></div>
									</div>
									<small class="mb-0  text-muted">Monthly<span class="float-end text-muted">70%</span></small>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
							<div class="card">
								<div class="card-body iconfont text-start">
									<div class=" justify-content-between">
										<h4 class="card-title mb-3">Total visits</h4>
									</div>
									<div class=" mb-0">
										<div class="">
											<h4 class="mb-1 font-weight-bold">5274<span class="text-danger tx-13 ms-2">(-12.45%)</span></h4>
											<p class="mb-2 tx-12 text-muted">Overview of Last month</p>
										</div>
										<div class="card-chart bg-pink-transparent brround ms-auto mt-0">
											<i class="typcn typcn-chart-line-outline text-pink tx-24"></i>
										</div>
									</div>

									<div class="progress progress-sm mt-2">
										<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar bg-pink wd-50p" role="progressbar"></div>
									</div>
									<small class="mb-0  text-muted">Monthly<span class="float-end text-muted">50%</span></small>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
							<div class="card">
								<div class="card-body iconfont text-start">
									<div class=" justify-content-between">
										<h4 class="card-title mb-3">Bounce Rate</h4>
									</div>
									<div class=" mb-0">
										<div class="">
											<h4 class="mb-1   font-weight-bold">76.3%<span class="text-success tx-13 ms-2">(+13.52%)</span></h4>
											<p class="mb-2 tx-12 text-muted">Overview of Last month</p>
										</div>
										<div class="card-chart bg-teal-transparent brround ms-auto mt-0">
											<i class="typcn typcn-chart-bar-outline text-teal tx-20"></i>
										</div>
									</div>

									<div class="progress progress-sm mt-2">
										<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar bg-teal wd-60p" role="progressbar"></div>
									</div>
									<small class="mb-0  text-muted">Monthly<span class="float-end text-muted">60%</span></small>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
							<div class="card">
								<div class="card-body iconfont text-start">
									<div class=" justify-content-between">
										<h4 class="card-title mb-3">Visits Duration</h4>
									</div>
									<div class=" mb-0">
										<div class="">
											<h4 class="mb-1 font-weight-bold">5m 24s<span class="text-success tx-13 ms-2">(+19.5%)</span></h4>
											<p class="mb-2 tx-12 text-muted">Overview of Last month</p>
										</div>
										<div class="card-chart bg-purple-transparent brround ms-auto mt-0">
											<i class="typcn typcn-time  text-purple tx-24"></i>
										</div>
									</div>

									<div class="progress progress-sm mt-2">
										<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar bg-purple wd-40p" role="progressbar"></div>
									</div>
									<small class="mb-0  text-muted">Monthly<span class="float-end text-muted">40%</span></small>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="card-order">
										<h6 class="mb-2">New users</h6>
										<h2 class="text-end "><i class="mdi mdi-account-multiple icon-size float-start text-primary text-primary-shadow"></i><span>3,672</span></h2>
										<p class="mb-0">Monthly users<span class="float-end">50%</span></p>
									</div>
								</div>
							</div>
						</div><!-- COL END -->
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card ">
								<div class="card-body">
									<div class="card-widget">
										<h6 class="mb-2">Total Tax</h6>
										<h2 class="text-end"><i class="mdi mdi-cube icon-size float-start text-success text-success-shadow"></i><span>$89,265</span></h2>
										<p class="mb-0">Monthly Income<span class="float-end">$7,893</span></p>
									</div>
								</div>
							</div>
						</div><!-- COL END -->
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="card-widget">
										<h6 class="mb-2">Total Profit</h6>
										<h2 class="text-end"><i class="icon-size mdi mdi-poll-box   float-start text-warning text-warning-shadow"></i><span>$23,987</span></h2>
										<p class="mb-0">Monthly Profit<span class="float-end">$4,678</span></p>
									</div>
								</div>
							</div>
						</div><!-- COL END -->
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card ">
								<div class="card-body">
									<div class="card-widget">
										<h6 class="mb-2">Total Sales</h6>
										<h2 class="text-end"><i class="fa fa-cart-plus icon-size float-start text-danger text-danger-shadow"></i><span>46,486</span></h2>
										<p class="mb-0">Monthly Sales<span class="float-end">3,756</span></p>
									</div>
								</div>
							</div>
						</div><!-- COL END -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
							<div class="card text-center">
								<div class="card-body ">
									<div class="feature widget-2 text-center mt-0 mb-3">
										<i class="ti-bar-chart project bg-primary-transparent mx-auto text-primary "></i>
									</div>
									<h6 class="mb-1 text-muted">Total Revenue</h6>
									<h3 class="font-weight-semibold">$125.465</h3>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
							<div class="card text-center">
								<div class="card-body ">
									<div class="feature widget-2 text-center mt-0 mb-3">
										<i class="ti-pie-chart project bg-pink-transparent mx-auto text-pink "></i>
									</div>
									<h6 class="mb-1 text-muted">Marketing Spend</h6>
									<h3 class="font-weight-semibold">$75.045</h3>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
							<div class="card text-center">
								<div class="card-body">
									<div class="feature widget-2 text-center mt-0 mb-3">
										<i class="ti-pulse  project bg-teal-transparent mx-auto text-teal "></i>
									</div>
									<h6 class="mb-1 text-muted">Total Profit</h6>
									<h3 class="font-weight-semibold">$46.352</h3>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
							<div class="card text-center">
								<div class="card-body ">
									<div class="feature widget-2 text-center mt-0 mb-3">
										<i class="ti-stats-up project bg-success-transparent mx-auto text-success "></i>
									</div>
									<h6 class="mb-1 text-muted">Total Investiment</h6>
									<h3 class="font-weight-semibold">62%</h3>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<div class="row">
						<!-- col -->
						<div class="col-lg-4 col-md-4">
							<div class="card bg-primary-gradient">
								<div class="card-body">
									<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
										<!-- Carousel items -->
										<div class="carousel-inner">
											<div class="carousel-item active flex-column">
												<i class="si si-social-facebook tx-30 text-white mb-2"></i>
												<p class="text-white mt-2">12th June</p>
												<h3 class="text-white font-light">Now Get <span class="font-bold me-2">20% Off</span>on buy</h3>
												<div class="text-white m-t-20">
													<i>- Trevor	Hart</i>
												</div>
											</div>
											<div class="carousel-item flex-column">
												<i class="si si-social-google tx-30 text-white mb-2"></i>
												<p class="text-white mt-2">24th July</p>
												<h3 class="text-white font-light">Now Get <span class="font-bold me-2">60% Off</span> on buy</h3>
												<div class="text-white m-t-20">
													<i>- Joseph	Vaughan</i>
												</div>
											</div>
											<div class="carousel-item flex-column">
											   <i class="si si-social-twitter tx-30 text-white mb-2"></i>
												<p class="text-white mt-2">9th Aug</p>
												<h3 class="text-white font-light">Now Get <span class="font-bold me-2">90% Off</span> on buy</h3>
												<div class="text-white m-t-20">
													<i>- Alan	Hemmings</i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- col -->
						<div class="col-lg-4 col-md-4">
							<div class="card bg-danger-gradient">
								<div class="card-body">
									<div id="myCarousel0" class="carousel slide" data-bs-ride="carousel">
										<!-- Carousel items -->
										<div class="carousel-inner">
											<div class="carousel-item active flex-column">
												<i class="si si-social-facebook tx-30 text-white mb-2"></i>
												<p class="text-white mt-2">11th June</p>
												<h3 class="text-white font-light">Now Get <span class="font-bold me-2">30% Off</span>on buy</h3>
												<div class="text-white m-t-20">
													<i>- Alan Hemmings</i>
												</div>
											</div>
											<div class="carousel-item flex-column">
											   <i class="si si-social-google tx-30 text-white mb-2"></i>
												<p class="text-white mt-2">21st July</p>
												<h3 class="text-white font-light">Now Get <span class="font-bold me-2">70% Off</span> on buy</h3>
												<div class="text-white m-t-20">
													<i>- Eric Lee</i>
												</div>
											</div>
											<div class="carousel-item flex-column">
											   <i class="si si-social-twitter tx-30 text-white mb-2"></i>
												<p class="text-white mt-2">12th Aug</p>
												<h3 class="text-white font-light">Now Get <span class="font-bold me-2">80% Off</span> on buy</h3>
												<div class="text-white m-t-20">
													<i>- Eric Lee</i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- col -->
						<div class="col-lg-4 col-md-4">
							<div class="card bg-purple-gradient">
								<div class="card-body">
									<div id="myCarousel1" class="carousel slide" data-bs-ride="carousel">
										<!-- Carousel items -->
										<div class="carousel-inner">
											<div class="carousel-item active flex-column">
												<i class="si si-social-facebook tx-30 text-white mb-2"></i>
												<p class="text-white mt-2">25th June</p>
												<h3 class="text-white font-light">Now Get <span class="font-bold me-2">30% Off</span>on buy</h3>
												<div class="text-white m-t-20">
													<i>- Eric Lee</i>
												</div>
											</div>
											<div class="carousel-item flex-column">
												<i class="si si-social-google tx-30 text-white mb-2"></i>
												<p class="text-white mt-2">6th July</p>
												<h3 class="text-white font-light">Now Get <span class="font-bold">70% Off</span> on buy</h3>
												<div class="text-white m-t-20">
													<i>- Eric Lee</i>
												</div>
											</div>
											<div class="carousel-item flex-column">
												<i class="si si-social-twitter tx-30 text-white mb-2"></i>
												<p class="text-white mt-2">7th Aug</p>
												<h3 class="text-white font-light">Now Get <span class="font-bold">80% Off</span> on buy</h3>
												<div class="text-white m-t-20">
													<i>- Eric Lee</i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end row -->
					<!-- row opened -->
					<div class="row row-sm">
						<div class="col-xl-4 col-lg-12 col-xl-4">
							<div class="card">
								<div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
									<div>
										<h3 class="card-title">Timeline</h3>
									</div>
								</div>
								<div class="card-body">
									<div class="latest-timeline">
										<ul class="timeline mb-0">
										   <li>
												<div class="featured_icon danger">
													<i class="fas fa-circle"></i>
												</div>
											</li>
											<li class="mt-0 pb-3">
												<div><small class="fs-13 text-muted float-end">23 Sep, 2021</small></div>
												<a target="_blank" href="javascript:void(0);" class="font-weight-bold text-dark fs-16">Anita Letterback</a>
												<p class="text-muted mt-0">Lorem ipsum dolor tempor incididunt ut labore et dolore magna aliqua. </p>
											</li>
											  <li>
												<div class="featured_icon success">
													<i class="fas fa-circle"></i>
												</div>
											</li>
											<li  class="mt-0 pb-3">
												<div><small class="fs-13 text-muted float-end">16 Aug, 2021</small></div>
												<a target="_blank" href="javascript:void(0);" class="font-weight-bold text-dark fs-16">Paddy O'Furniture</a>
												<p class="text-muted mt-0">Lorem ipsum dolor tempor incididunt ut labore et dolore magna aliqua. </p>
											</li>
											  <li>
												<div class="featured_icon primary">
													<i class="fas fa-circle"></i>
												</div>
											  </li>
											<li class="mt-0 pb-3">
												<div><small class="fs-13 text-muted float-end">23 Feb, 2021</small></div>
												<a target="_blank" href="javascript:void(0);" class="font-weight-bold text-dark fs-16">Olive Yew</a>
												<p class="text-muted mt-0">Lorem ipsum dolor tempor incididunt ut labore et dolore magna aliqua. </p>
											</li>
											  <li>
												<div class="featured_icon warning">
													<i class="fas fa-circle"></i>
												</div>
											  </li>
											<li class="mt-0 pb-3">
												<div><small class="fs-13 text-muted float-end">21 june, 2021</small></div>
												<a target="_blank" href="javascript:void(0);" class="font-weight-bold text-dark fs-16">Maureen Biologist.</a>
												<p class="text-muted mt-0">Lorem ipsum dolor tempor incididunt ut labore et dolore magna aliqua. </p>
											</li>
											  <li>
												<div class="featured_icon teal">
													<i class="fas fa-circle"></i>
												</div>
											  </li>
											<li class="mt-0 pb-3">
												<div><small class="fs-13 text-muted float-end">04 Aug, 2021</small></div>
												<a target="_blank" href="javascript:void(0);" class="font-weight-bold text-dark fs-16">Peg Legge</a>
												<p class="text-muted mt-0">Lorem ipsum dolor tempor incididunt ut labore et dolore magna aliqua. </p>
											</li>
											  <li>
												<div class="featured_icon info">
													<i class="fas fa-circle"></i>
												</div>
											  </li>
											<li class="mt-0">
												<div><small class="fs-13 text-muted float-end">24 sep, 2021</small></div>
												<a target="_blank" href="javascript:void(0);" class="font-weight-bold text-dark fs-16">Ivana B. Withew</a>
												<p class="text-muted mt-0">Lorem ipsum dolor tempor incididunt ut labore et dolore magna aliqua. </p>
											</li>
									</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-xl-4">
							<div class="card">
								<div class="card-body">
									<div class=" justify-content-between">
										<h4 class="card-title">Active Projects</h4>
									</div>
									<p class="card-description mb-1">What're people doing right now</p>
									<div class="list  align-items-center border-bottom py-3">
										<div class="avatar brround d-block cover-image" data-image-src="{{asset('assets/img/faces/5.jpg')}}">
											<span class="avatar-status bg-green"></span>
										</div>
										<div class="wrapper w-100 ms-3">
											<p class="mb-0">
											<b>Lilly </b>posted in Website</p>
											<div class="d-sm-flex justify-content-between align-items-center">
												<div class=" align-items-center">
													<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
													<p class="mb-0">Awesome websites!</p>
												</div>
												<small class="text-muted ms-auto">2 hours ago</small>
											</div>
										</div>
									</div>
									<div class="list  align-items-center border-bottom py-3">
										<div class="avatar brround d-block cover-image" data-image-src="{{asset('assets/img/faces/1.jpg')}}">
											<span class="avatar-status bg-green"></span>
										</div>
										<div class="wrapper w-100 ms-3">
											<p class="mb-0">
											<b>Thomos</b>posted in Material</p>
											<div class="d-sm-flex justify-content-between align-items-center">
												<div class=" align-items-center">
													<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
													<p class="mb-0">Awesome websites!</p>
												</div>
												<small class="text-muted ms-auto">3 hours ago</small>
											</div>
										</div>
									</div>
									<div class="list  align-items-center border-bottom py-3">
										<div class="avatar brround d-block cover-image" data-image-src="{{asset('assets/img/faces/14.jpg')}}">
											<span class="avatar-status bg-green"></span>
										</div>
										<div class="wrapper w-100 ms-3">
											<p class="mb-0">
											<b>Marry cott </b>posted in photo</p>
											<div class="d-sm-flex justify-content-between align-items-center">
												<div class=" align-items-center">
													<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
													<p class="mb-0">That's Great!</p>
												</div>
												<small class="text-muted ms-auto">1 hours ago</small>
											</div>
										</div>
									</div>
									<div class="list  align-items-center pt-3">
										<div class="avatar brround d-block cover-image" data-image-src="{{asset('assets/img/faces/4.jpg')}}">
											<span class="avatar-status bg-green"></span>
										</div>
										<div class="wrapper w-100 ms-3">
											<p class="mb-0">
											<b>John </b>posted in Status</p>
											<div class="d-sm-flex justify-content-between align-items-center">
												<div class=" align-items-center">
													<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
													<p class="mb-0">Awesome websites!</p>
												</div>
												<small class="text-muted ms-auto">1 hours ago</small>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-12">
								<div class="card">
									<div class="card-body">
										<div class="">
											<div class="">
												<h6>All Visitors</h6>
												<h1 class="mt-2 mb-3 display-6 font-weight-semibold text-dark tx-30">31,648</h1>
												<div class="progress progress-style progress-sm">
													<div class="progress-bar bg-primary-gradient wd-90p" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
												</div>
											</div>
											<div class="feature-1 ms-auto">
												<div class="feature">
												<span class="text-start">
												<i class="icon icon-user  text-success me-2"></i><b>32,730</b> Male</span>
									            <p class="mt-4"><i class="icon icon-user-female  text-danger me-2"></i><b> 42,948 </b> Femlae</p>
												</div>
											</div>
										</div>
									</div>
							    </div>
								<div class="card">
									<div class="card-body">
										<div class="">
											<div class="">
												<h6>New Visitors</h6>
												<h1 class="mt-2 mb-3 display-6 font-weight-semibold text-dark tx-30">64,858</h1>
												<div class="progress progress-style progress-sm">
													<div class="progress-bar bg-danger-gradient wd-75p" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
												</div>
											</div>
											<div class="feature-1 ms-auto">
												<div class="feature">
												<span class="text-start"><i class="icon icon-user  text-success me-2"></i><b>20,818 </b> Male</span>
									            <p class="mt-4"><i class="icon icon-user-female  text-danger me-2"></i><b> 17,350</b> Femlae</p>
												</div>
											</div>
										</div>
									</div>
							    </div>
								<div class="card">
									<div class="card-body">
										<div class="">
											<div class="">
												<h6>Returning Visitors</h6>
												<h1 class="mt-2 mb-3 display-6 font-weight-semibold text-dark tx-30">80,115</h1>
												<div class="progress progress-style progress-sm">
												    <div class="progress-bar bg-warning-gradient wd-85" role="progressbar"  aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
											     </div>
											</div>
											<div class="feature-1 ms-auto">
												<div class="feature">
												<span class="text-start"><i class="icon icon-user  text-success me-2"></i><b> 29,350</b> Male</span>
									            <p class="mt-4"><i class="icon icon-user-female  text-danger me-2"></i><b> 10,718</b> Femlae</p>
												</div>
											</div>
										</div>
									</div>
								</div>
						</div>
					</div>
					<!-- row close -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
							<div class="card">
								<div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
									<div class=" justify-content-between">
										<h4 class="card-title mg-b-10">Overall Rating</h4>
									</div>
									<p class="tx-12 tx-gray-500 mb-0">Opinion of a customer on the product in the form of ratings 5-star rating. <a href="">Learn more</a></p>
								</div><!-- card-header -->
								<div class="card-body pd-y-7">
									<div class=" align-items-baseline">
										<h1 class="tx-30 mg-b-5 mg-r-5">4.8</h1>
										<p class="tx-11  mg-b-0"><span class="tx-medium tx-success">1.6% <i class="icon ion-md-arrow-up"></i></span></p>
									</div>
									<h6 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 tx-color-02 mg-b-15">Overall product rating by the customers.</h6>
									<table class="table table-borderless mt-3  border-0 rating-table">
										<tbody>
											<tr>
												<td class="text-gray"><small class="me-1">1</small></td>
												<td class="text-gray"><span><i class="ion ion-md-star tx-18 text-warning"></i></span></td>
												<td class="w-100">
													<div class="progress mt-2 ht-5">
														<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" class="progress-bar wd-20p bg-danger" role="progressbar"></div>
													</div>
												</td>
												<td class=""><small class="text-gray">7</small></td>
											</tr>
											<tr>
												<td class="text-gray"><small class="me-1">2</small></td>
												<td class="text-gray"><span><i class="ion ion-md-star tx-18 text-warning"></i></span></td>
												<td class="w-100">
													<div class="progress mt-2 ht-5">
														<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" class="progress-bar wd-30p bg-primary" role="progressbar"></div>
													</div>
												</td>
												<td class=""><small class="text-gray">27</small></td>
											</tr>
											<tr>
												<td class="text-gray"><small class="me-1">3</small></td>
												<td class="text-gray"><span><i class="ion ion-md-star tx-18 text-warning"></i></span></td>
												<td class="w-100">
													<div class="progress mt-2 ht-5">
														<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" class="progress-bar wd-60p bg-warning" role="progressbar"></div>
													</div>
												</td>
												<td class=""><small class="text-gray">64</small></td>
											</tr>
											<tr>
												<td class="text-gray"><small class="me-1">4</small></td>
												<td class="text-gray"><span><i class="ion ion-md-star tx-18 text-warning"></i></span></td>
												<td class="w-100">
													<div class="progress mt-2 ht-5">
														<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" class="progress-bar wd-70p bg-teal" role="progressbar"></div>
													</div>
												</td>
												<td class=""><small class="text-gray">93</small></td>
											</tr>
											<tr>
												<td class="text-gray"><small class="me-1">5</small></td>
												<td class="text-gray"><span><i class="ion ion-md-star tx-18 text-warning"></i></span></td>
												<td class="w-100">
													<div class="progress mt-2 ht-5">
														<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" class="progress-bar wd-80p bg-success" role="progressbar"></div>
													</div>
												</td>
												<td class=""><small class="text-gray">82</small></td>
											</tr>
										</tbody>
									</table>
									<div class="wrapper  justify-content-center image-group pb-3">
										<img src="{{asset('assets/img/faces/1.jpg')}}" alt="profile" class="img-xs rounded-circle">
										<img src="{{asset('assets/img/faces/2.jpg')}}" alt="profile" class="img-xs rounded-circle">
										<img src="{{asset('assets/img/faces/13.jpg')}}" alt="profile" class="img-xs rounded-circle">
										<img src="{{asset('assets/img/faces/14.jpg')}}" alt="profile" class="img-xs rounded-circle">
										<img src="{{asset('assets/img/faces/5.jpg')}}" alt="profile" class="img-xs rounded-circle">
										<img src="{{asset('assets/img/faces/16.jpg')}}" alt="profile" class="img-xs rounded-circle">
									</div>
								</div><!-- card-body -->
							</div>
						</div>
						<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
							<div class="card order-list">
								<div class="card-body">
									<div class=" justify-content-between">
										<h4 class="card-title mg-b-10">Order Activity</h4>
									</div>
									<p class="tx-12 tx-gray-500 mb-3">Order Activity is ecommerce platforms to track the orders placed on their stores <a href="javascript:void(0);">Learn more</a></p>
									<ul class="list list-noborders pb-0 mb-0">
										<li class="list-item">
											<img class="img-sm rounded-circle bg-warning  align-items-center justify-content-center text-white" src="{{asset('assets/img/faces/3.jpg')}}" alt="Profile Image">
											<div class=" ms-3">
												<h6 class="mb-1 font-weight-medium">Lottie Arnold</h6>
												<p class="mb-0 text-muted tx-13">#PRD-10250</p>
											</div>
											<div class="ms-auto ">
												<img class="img-sm me-1" src="{{asset('assets/img/ecommerce/03.jpg')}}" alt="thumb images">
												<img class="img-sm" src="{{asset('assets/img/ecommerce/08.jpg')}}" alt="thumb images">
											</div>
										</li>
										<li class="list-item">
											<img class="img-sm rounded-circle bg-warning  align-items-center justify-content-center text-white" src="{{asset('assets/img/faces/9.jpg')}}" alt="Profile Image">
											<div class=" ms-3">
												<h6 class="mb-1 font-weight-medium">Alan Macedo</h6>
												<p class="mb-0 tx-13 text-muted">#PRD-10251</p>
											</div>
											<div class="ms-auto ">
												<img class="img-sm me-1" src="{{asset('assets/img/ecommerce/04.jpg')}}" alt="thumb images">
												<img class="img-sm" src="{{asset('assets/img/ecommerce/05.jpg')}}" alt="thumb images">
											</div>
										</li>
										<li class="list-item">
											<img class="img-sm rounded-circle bg-warning  align-items-center justify-content-center text-white" src="{{asset('assets/img/faces/5.jpg')}}" alt="Profile Image">
											<div class=" ms-3">
												<h6 class="mb-1 font-weight-medium">Bruce Tran</h6>
												<p class="mb-0 text-muted tx-13">#PRD-10252</p>
											</div>
											<div class="ms-auto ">
												<img class="img-sm me-1" src="{{asset('assets/img/ecommerce/06.jpg')}}" alt="thumb images">
												<img class="img-sm" src="{{asset('assets/img/ecommerce/07.jpg')}}" alt="thumb images">
											</div>
										</li>
										<li class="list-item">
											<img class="img-sm rounded-circle bg-warning  align-items-center justify-content-center text-white" src="{{asset('assets/img/faces/12.jpg')}}" alt="Profile Image">
											<div class=" ms-3">
												<h6 class="mb-1 font-weight-medium">Mina Harper</h6>
												<p class="mb-0 text-muted tx-13">#PRD-10253</p>
											</div>
											<div class="ms-auto ">
												<img class="img-sm me-1" src="{{asset('assets/img/ecommerce/08.jpg')}}" alt="thumb images">
												<img class="img-sm" src="{{asset('assets/img/ecommerce/09.jpg')}}" alt="thumb images">
											</div>
										</li>
								</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-4 col-md-12 col-sm-12">
							<div class="card overflow-hidden latest-tasks">
								<div class="">
									<div class=" justify-content-between ps-4 pt-4 pe-4">
										<h4 class="card-title mg-b-10">Latest Task</h4>
									</div>
									<div class="">
										<ul class="nav nav-tabs nav-tabs-line nav-tabs-line-brand nav-tabs-bold" role="tablist">
											<li class="nav-item">
												<a class="nav-link active show" data-bs-toggle="tab" href="#tasktab-1" role="tab" aria-selected="false">
													Today
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-bs-toggle="tab" href="#tasktab-2" role="tab" aria-selected="false">
													Week
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-bs-toggle="tab" href="#tasktab-3" role="tab" aria-selected="true">
													Month
												</a>
											</li>
									</ul>
									</div>
								</div>
								<div class="card-body pt-3">
									<div class="tab-content">
										<div class="tab-pane fade active show" id="tasktab-1" role="tabpanel">
											<div class="">
												<div class="tasks">
													<div class=" task-line primary">
														<a href="javascript:void(0);" class="span">
															XML Import & Export
														</a>
														<div class="time">
															12:00 PM
														</div>
													</div>
													<label class="checkbox">
														<span class="check-box">
															<span class="ckbox"><input checked type="checkbox"><span></span></span>
														</span>
													</label>
												</div>
												<div class="tasks">
													<div class="task-line pink">
														<a href="javascript:void(0);" class="span">
															Database Optimization
														</a>
														<div class="time">
															02:13 PM
														</div>
													</div>
													<label class="checkbox">
														<span class="check-box">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
													</label>
												</div>
												<div class="tasks">
													<div class="task-line success">
														<a href="javascript:void(0);" class="span">
															Create Wireframes
														</a>
														<div class="time">
															06:20 PM
														</div>
													</div>
													<label class="checkbox">
														<span class="check-box">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
													</label>
												</div>
												<div class="tasks">
													<div class="task-line warning">
														<a href="javascript:void(0);" class="span">
															Develop MVP
														</a>
														<div class="time">
															10: 00 PM
														</div>
													</div>
													<label class="checkbox">
														<span class="check-box">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
													</label>
												</div>
												<div class="tasks mb-0">
													<div class="task-line teal">
														<a href="javascript:void(0);" class="span">
															Design Evommerce
														</a>
														<div class="time">
															10: 00 PM
														</div>
													</div>
													<label class="checkbox">
														<span class="check-box">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
													</label>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="tasktab-2" role="tabpanel">
											<div class="">
												<div class="tasks">
													<div class=" task-line teal">
														<a href="javascript:void(0);" class="span">
															Management meeting
														</a>
														<div class="time">
															06:30 AM
														</div>
													</div>
													<label class="checkbox">
														<span class="check-box">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
													</label>
												</div>
												<div class="tasks">
													<div class="task-line danger">
														<a href="javascript:void(0);" class="span">
															Connect API to pages
														</a>
														<div class="time">
															08:00 AM
														</div>
													</div>
													<label class="checkbox">
														<span class="check-box">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
													</label>
												</div>
												<div class="tasks">
													<div class="task-line purple">
														<a href="javascript:void(0);" class="span">
															Icon change in Redesign App
														</a>
														<div class="time">
															11:20 AM
														</div>
													</div>
													<label class="checkbox">
														<span class="check-box">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
													</label>
												</div>
												<div class="tasks">
													<div class="task-line warning">
														<a href="javascript:void(0);" class="span">
															Test new features in tablets
														</a>
														<div class="time">
															02: 00 PM
														</div>
													</div>
													<label class="checkbox">
														<span class="check-box">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
													</label>
												</div>
												<div class="tasks">
													<div class="task-line success">
														<a href="javascript:void(0);" class="span">
															Design Logo
														</a>
														<div class="time">
															04: 00 PM
														</div>
													</div>
													<label class="checkbox">
														<span class="check-box">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
													</label>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="tasktab-3" role="tabpanel">
											<div class="">
												<div class="tasks">
													<div class=" task-line info">
														<a href="javascript:void(0);" class="span">
															Design a Landing Page
														</a>
														<div class="time">
															06:12 AM
														</div>
													</div>
													<label class="checkbox">
														<span class="check-box">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
													</label>
												</div>
												<div class="tasks">
													<div class="task-line danger">
														<a href="javascript:void(0);" class="span">
															Food Delivery Mobile Application
														</a>
														<div class="time">
															3:00 PM
														</div>
													</div>
													<label class="checkbox">
														<span class="check-box">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
													</label>
												</div>
												<div class="tasks">
													<div class="task-line warning">
														<a href="javascript:void(0);" class="span">
															Export Database values
														</a>
														<div class="time">
															03:20 PM
														</div>
													</div>
													<label class="checkbox">
														<span class="check-box">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
													</label>
												</div>
												<div class="tasks">
													<div class="task-line pink">
														<a href="javascript:void(0);" class="span">
															Write Simple Python Script
														</a>
														<div class="time">
															04: 00 PM
														</div>
													</div>
													<label class="checkbox">
														<span class="check-box">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
													</label>
												</div>
												<div class="tasks">
													<div class="task-line success">
														<a href="javascript:void(0);" class="span">
															Write Simple Anugalr Program
														</a>
														<div class="time">
															05: 00 PM
														</div>
													</div>
													<label class="checkbox">
														<span class="check-box">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-12 col-lg-6 col-xl-4 col-sm-12">
							<div class="card">
								<div class="card-header pb-0">
									<div class=" justify-content-between">
										<h4 class="card-title">Latest Ratings and Reviews</h4>
									</div>
								</div>
								<p class="tx-12 tx-gray-500 mb-0 ps-3 pe-3">A review is an evaluation of a publication, service, or company .<a href="">Learn more</a></p>
								<div class="rating-scroll ps ps--active-y">
									<div class="ps-3 pe-3 py-3 border-bottom">
										<div class="media mt-0">
											<div class=" me-3">
												<a href="javascript:void(0);">
													<img class="media-object avatar brround w-7 h-7" alt="64x64" src="{{asset('assets/img/faces/5.jpg')}}">
												</a>
											</div>
											<div class="media-body">
												<div class="">
													<h6 class="mt-0 mb-0 font-weight-semibold ">Joanne Scott</h6>
													<span class="tx-12 ms-auto">
														<i class="ion ion-md-star text-warning"></i>
														<i class="ion ion-md-star text-warning"></i>
														<i class="ion ion-md-star text-warning"></i>
														<i class="ion ion-md-star text-warning"></i>
														<i class="ion ion-md-star-half text-warning"></i>
													</span>
												</div>
												<div class="">
													<p class="tx-12 text-muted mb-0">long established fact..</p>
													<small class="ms-auto text-end">5 reviews</small>
												</div>

											</div>
										</div>
									</div>
									<div class="ps-3 pe-3 py-3 border-bottom">
										<div class="media mt-0">
											<div class=" me-3">
												<a href="javascript:void(0);">
													<img class="media-object avatar brround w-7 h-7" alt="64x64" src="{{asset('assets/img/faces/9.jpg')}}">
												</a>
											</div>
											<div class="media-body">
												<div class="">
													<h6 class="mt-0 mb-0 font-weight-semibold ">Cristobal Sharp</h6>
													<span class="tx-12 ms-auto">
														<i class="ion ion-md-star text-warning"></i>
														<i class="ion ion-md-star text-warning"></i>
														<i class="ion ion-md-star text-warning"></i>
														<i class="ion ion-md-star-half text-warning"></i>
														<i class="ion ion-md-star-outline text-warning"></i>
													</span>
												</div>
												<div class="">
													<p class="tx-12 text-muted mb-0">The point of using Lorem..</p>
													<small class="ms-auto text-end">5 reviews</small>
												</div>
											</div>
										</div>
									</div>
									<div class="ps-3 pe-3 py-3 border-bottom">
										<div class="media mt-0">
											<div class=" me-3">
												<a href="javascript:void(0);">
													<img class="media-object avatar brround w-7 h-7" alt="64x64" src="{{asset('assets/img/faces/4.jpg')}}">
												</a>
											</div>
											<div class="media-body">
												<div class="">
													<h6 class="mt-0 mb-0 font-weight-semibold ">Velma Wellons </h6>
													<span class="tx-12 ms-auto">
														<i class="ion ion-md-star text-warning"></i>
														<i class="ion ion-md-star text-warning"></i>
														<i class="ion ion-md-star text-warning"></i>
														<i class="ion ion-md-star text-warning"></i>
														<i class="ion ion-md-star-half text-warning"></i>
													</span>
												</div>
												<div class="">
													<p class="tx-12 text-muted mb-0">Various versions have..</p>
													<small class="ms-auto text-end">5 reviews</small>
												</div>

											</div>
										</div>
									</div>
									<div class="ps-3 pe-3 py-3 border-bottom">
										<div class="media mt-0">
											<div class=" me-3">
												<a href="javascript:void(0);">
													<img class="media-object avatar brround w-7 h-7" alt="64x64" src="{{asset('assets/img/faces/7.jpg')}}">
												</a>
											</div>
											<div class="media-body">
												<div class="">
													<h6 class="mt-0 mb-0 font-weight-semibold ">Cathie Madonna </h6>
													<span class="tx-12 ms-auto">
														<i class="ion ion-md-star text-warning"></i>
														<i class="ion ion-md-star text-warning"></i>
														<i class="ion ion-md-star text-warning"></i>
														<i class="ion ion-md-star-half text-warning"></i>
														<i class="ion ion-md-star-outline text-warning"></i>
													</span>
												</div>
												<div class="">
													<p class="tx-12 text-muted mb-0">long established fact..</p>
													<small class="ms-auto text-end">5 reviews</small>
												</div>

											</div>
										</div>
									</div>
									<div class="ps-3 pe-3 py-3 border-bottom">
										<div class="media mt-0">
											<div class=" me-3">
												<a href="javascript:void(0);">
													<img class="media-object avatar brround w-7 h-7" alt="64x64" src="{{asset('assets/img/faces/12.jpg')}}">
												</a>
											</div>
											<div class="media-body">
												<div class="">
													<h6 class="mt-0 mb-0 font-weight-semibold ">Aurelio Dahmer </h6>
													<span class="tx-12 ms-auto">
														<i class="ion ion-md-star text-warning"></i>
														<i class="ion ion-md-star text-warning"></i>
														<i class="ion ion-md-star text-warning"></i>
														<i class="ion ion-md-star text-warning"></i>
														<i class="ion ion-md-star-half text-warning"></i>
													</span>
												</div>
												<div class="">
													<p class="tx-12 text-muted mb-0">Ut enim ad minim veniam..</p>
													<small class="ms-auto text-end">5 reviews</small>
												</div>

											</div>
										</div>
									</div>
									<div class="ps-3 pe-3 py-3 border-bottom">
										<div class="media mt-0">
											<div class=" me-3">
												<a href="javascript:void(0);">
													<img class="media-object avatar brround w-7 h-7" alt="64x64" src="{{asset('assets/img/faces/13.jpg')}}">
												</a>
											</div>
											<div class="media-body">
												<div class="">
													<h6 class="mt-0 mb-1 font-weight-semibold ">Cyrus Macarthur </h6>
													<span class="tx-12 ms-auto">
														<i class="ion ion-md-star text-warning"></i>
														<i class="ion ion-md-star text-warning"></i>
														<i class="ion ion-md-star text-warning"></i>
														<i class="ion ion-md-star-half text-warning"></i>
														<i class="ion ion-md-star-outline text-warning"></i>
													</span>
												</div>
												<div class="">
													<p class="tx-12 text-muted mb-0">variations of passages..</p>
													<small class="ms-auto text-end">5 reviews</small>
												</div>

											</div>
										</div>
									</div>
									<div class="ps-3 pe-3 py-3 border-bottom">
										<div class="media mt-0">
											<div class=" me-3">
												<a href="javascript:void(0);">
													<img class="media-object avatar brround w-7 h-7" alt="64x64" src="{{asset('assets/img/faces/2.jpg')}}">
												</a>
											</div>
											<div class="media-body">
												<div class="">
													<h6 class="mt-0 mb-1 font-weight-semibold ">Bernardo Sykes </h6>
													<span class="tx-12 ms-auto">
														<i class="ion ion-md-star text-warning"></i>
														<i class="ion ion-md-star text-warning"></i>
														<i class="ion ion-md-star text-warning"></i>
														<i class="ion ion-md-star-half text-warning"></i>
														<i class="ion ion-md-star-outline text-warning"></i>
													</span>
												</div>
												<div class="">
													<p class="tx-12 text-muted mb-0">you are going to use..</p>
													<small class="ms-auto text-end">5 reviews</small>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 col-xl-4">
							<div class="card">
								<div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
									<div class=" justify-content-between">
										<h4 class="card-title mg-b-10">Sessions by Countries</h4>
									</div>
									<p class="tx-12 tx-gray-500 mb-0">session by country mean that the user is from the stated country or that the session is originating in the stated country. <a href="">Learn more</a></p>
								</div>
								<div class="card-body">
									<ul class="sales-session mb-0">
										<li>
											<div class=" justify-content-between">
												<h6>1. United States </h6>
												<p class="font-weight-semibold mb-2">$273.12 <span class="text-muted font-weight-normal">(2.17%)</span></p>
											</div>
											<div class="progress  ht-5">
												<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar wd-60p bg-primary" role="progressbar"></div>
											</div>
										</li>
										<li>
											<div class=" justify-content-between">
												<h6>2. United kingdom</h6>
												<p class="font-weight-semibold mb-2">$423.10 <span class="text-muted font-weight-normal">(12.43%)</span></p>
											</div>
											<div class="progress  ht-5">
												<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar wd-70p bg-info" role="progressbar"></div>
											</div>
										</li>
										<li>
										<div class=" justify-content-between">
											<h6>3. Australia</h6>
											<p class="font-weight-semibold mb-2">$547.18 <span class="text-muted font-weight-normal">(3.14%)</span></p>
										</div>
										<div class="progress  ht-5">
												<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar wd-60p bg-danger" role="progressbar"></div>
											</div>
										</li>
										<li>
											<div class=" justify-content-between">
												<h6>4. Canada</h6>
												<p class="font-weight-semibold mb-2">$728.32 <span class="text-muted font-weight-normal">(7.23%)</span></p>
											</div>
											<div class="progress  ht-5">
												<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar wd-50p bg-warning" role="progressbar"></div>
											</div>
										</li>
										<li>
											<div class=" justify-content-between">
												<h6>5. Russia</h6>
												<p class="font-weight-semibold mb-2">$843.19 <span class="text-muted font-weight-normal">(1.83%)</span></p>
											</div>
											<div class="progress mb-0 ht-5">
												<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar wd-40p bg-success" role="progressbar"></div>
											</div>
										</li>
										<li class="mb-0 pb-1">
											<div class=" justify-content-between">
												<h6>6. Japan</h6>
												<p class="font-weight-semibold mb-2">$562.19 <span class="text-muted font-weight-normal">(1.35%)</span></p>
											</div>
											<div class="progress mb-0 ht-5">
												<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar wd-60p bg-purple" role="progressbar"></div>
											</div>
										</li>
								</ul>
								</div>
							</div>
						</div>

						<div class="col-md-12 col-lg-6  col-xl-4 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class=" justify-content-between">
										<h4 class="card-title">Browser Usage</h4>
									</div>
									<p class="tx-12 tx-gray-500 mb-0">Tells you where your visitors originated from, such as search engines, social networks or website referrals. <a href="">Learn more</a></p>
								</div><!-- card-header -->
								<div class="card-body p-0">
									<div class="browser-stats">
										<div class=" align-items-center item  border-bottom">
											<div class="">
												<img src="{{asset('assets/img/svgicons/chrome.svg')}}" alt="img" class="ht-30 wd-30 me-2">
												<div class="">
													<h6 class="">Chrome</h6>
													<span class="sub-text">Mozilla Foundation, Inc.</span>
												</div>
											</div>
											<div class="ms-auto my-auto">
												<div class="">
													<span class="me-4 my-auto">35,502</span>
													<span class="text-success fs-15"><i class="fe fe-arrow-up"></i>12.75%</span>
												</div>
											</div>
										</div>
										<div class=" align-items-center item  border-bottom">
											<div class="">
												<img src="{{asset('assets/img/svgicons/opera.svg')}}" alt="img" class="ht-30 wd-30 me-2">
												<div class="">
													<h6 class="">Opera</h6>
													<span class="sub-text">Mozilla Foundation, Inc.</span>
												</div>
											</div>
											<div class="ms-auto my-auto">
												<div class="">
													<span class="me-4 my-auto">12,563</span>
													<span class="text-danger"><i class="fe fe-arrow-down"></i>15.12%</span>
												</div>
											</div>
										</div>
										<div class=" align-items-center item  border-bottom">
											<div class="">
												<img src="{{asset('assets/img/svgicons/edge.svg')}}" alt="img" class="ht-30 wd-30 me-2">
												<div class="">
													<h6 class="">Edge</h6>
													<span class="sub-text">Mozilla Foundation, Inc.</span>
												</div>
											</div>
											<div class="ms-auto my-auto">
												<div class="">
													<span class="me-4 mt-1">25,364</span>
													<span class="text-success"><i class="fe fe-arrow-up"></i>24.37%</span>
												</div>
											</div>
										</div>
										<div class=" align-items-center item  border-bottom">
											<div class="">
												<img src="{{asset('assets/img/svgicons/firefox.svg')}}" alt="img" class="ht-30 wd-30 me-2">
												<div class="">
													<h6 class="">Firefox</h6>
													<span class="sub-text">Mozilla Foundation, Inc.</span>
												</div>
											</div>
											<div class="ms-auto my-auto">
												<div class="">
													<span class="me-4 mt-1">14,635</span>
													<span class="text-success"><i class="fe fe-arrow-up"></i>15,63%</span>
												</div>
											</div>
										</div>
										<div class=" align-items-center item border-bottom">
											<div class="">
												<img src="{{asset('assets/img/svgicons/uc-browser')}}.svg" alt="img" class="ht-30 wd-30 me-2">
												<div class="">
													<h6 class="">Ucbrowser</h6>
													<span class="sub-text">Mozilla Foundation, Inc.</span>
												</div>
											</div>
											<div class="ms-auto my-auto">
												<div class="">
													<span class="me-4 mt-1">15,453</span>
													<span class="text-danger"><i class="fe fe-arrow-down"></i>23.70%</span>
												</div>
											</div>
										</div>
										<div class=" align-items-center item">
											<div class="">
												<img src="{{asset('assets/img/svgicons/safari.svg')}}" alt="img" class="ht-30 wd-30 me-2">
												<div class="">
													<h6 class="">Safari</h6>
													<span class="sub-text">Mozilla Foundation, Inc.</span>
												</div>
											</div>
											<div class="ms-auto my-auto">
												<div class="">
													<span class="me-4 mt-1">35,657</span>
													<span class="text-danger"><i class="fe fe-arrow-down"></i>12.54%</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- card -->
						</div>
					</div> --}}
    <!-- /row -->
@endsection

@section('scripts')
<script>
	// Function to update counters every second
	function updateCounters() {
		// Get current values from spans
		let singhaUp = parseInt(document.getElementById('singha-up').textContent);
		let singhaDown = parseInt(document.getElementById('singha-down').textContent);
		let vyaghraUp = parseInt(document.getElementById('vyaghra-up').textContent);
		let vyaghraDown = parseInt(document.getElementById('vyaghra-down').textContent);
		let hastiUp = parseInt(document.getElementById('hasti-up').textContent);
		let hastiDown = parseInt(document.getElementById('hasti-down').textContent);
		let ashwaUp = parseInt(document.getElementById('ashwa-up').textContent);
		let ashwaDown = parseInt(document.getElementById('ashwa-down').textContent);

		// Update counters
		document.getElementById('singha-up').textContent = singhaUp + Math.floor(Math.random() * 10) + 1;
		document.getElementById('singha-down').textContent = singhaDown + Math.floor(Math.random() * 10) + 1;
		document.getElementById('vyaghra-up').textContent = vyaghraUp + Math.floor(Math.random() * 10) + 1;
		document.getElementById('vyaghra-down').textContent = vyaghraDown + Math.floor(Math.random() * 10) + 1;
		document.getElementById('hasti-up').textContent = hastiUp + Math.floor(Math.random() * 10) + 1;
		document.getElementById('hasti-down').textContent = hastiDown + Math.floor(Math.random() * 10) + 1;
		document.getElementById('ashwa-up').textContent = ashwaUp + Math.floor(Math.random() * 10) + 1;
		document.getElementById('ashwa-down').textContent = ashwaDown + Math.floor(Math.random() * 10) + 1;
	}

	// Update counters every second
	setInterval(updateCounters, 1000);
</script>
<script>
	// Function to format numbers with commas
	function formatNumber(num) {
		return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	}

	// Function to update counters every second
	function updateCounters() {
		// Get current values from spans
		let dakhinaUp = parseInt(document.getElementById('dakhina-up').textContent.replace(/,/g, ''));
		let dakhinaDown = parseInt(document.getElementById('dakhina-down').textContent.replace(/,/g, ''));
		let uttarUp = parseInt(document.getElementById('uttar-up').textContent.replace(/,/g, ''));
		let uttarDown = parseInt(document.getElementById('uttar-down').textContent.replace(/,/g, ''));
		let purbaUp = parseInt(document.getElementById('purba-up').textContent.replace(/,/g, ''));
		let purbaDown = parseInt(document.getElementById('purba-down').textContent.replace(/,/g, ''));
		let paschimaUp = parseInt(document.getElementById('paschima-up').textContent.replace(/,/g, ''));
		let paschimaDown = parseInt(document.getElementById('paschima-down').textContent.replace(/,/g, ''));

		// Increment counts by random values between 1 and 10
		dakhinaUp += Math.floor(Math.random() * 10) + 1;
		dakhinaDown += Math.floor(Math.random() * 10) + 1;
		uttarUp += Math.floor(Math.random() * 10) + 1;
		uttarDown += Math.floor(Math.random() * 10) + 1;
		purbaUp += Math.floor(Math.random() * 10) + 1;
		purbaDown += Math.floor(Math.random() * 10) + 1;
		paschimaUp += Math.floor(Math.random() * 10) + 1;
		paschimaDown += Math.floor(Math.random() * 10) + 1;

		// Update spans with formatted numbers
		document.getElementById('dakhina-up').textContent = formatNumber(dakhinaUp);
		document.getElementById('dakhina-down').textContent = formatNumber(dakhinaDown);
		document.getElementById('uttar-up').textContent = formatNumber(uttarUp);
		document.getElementById('uttar-down').textContent = formatNumber(uttarDown);
		document.getElementById('purba-up').textContent = formatNumber(purbaUp);
		document.getElementById('purba-down').textContent = formatNumber(purbaDown);
		document.getElementById('paschima-up').textContent = formatNumber(paschimaUp);
		document.getElementById('paschima-down').textContent = formatNumber(paschimaDown);
	}

	// Update counters every second
	setInterval(updateCounters, 1000);
</script>
<script>
    // Function to format numbers with commas
    function formatNumber(num) {
        return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    // Function to update counters every second
    function updateCounters() {
        // Get current values from spans
        let cam1Up = parseInt(document.getElementById('cam1-up').textContent.replace(/,/g, ''));
        let cam1Down = parseInt(document.getElementById('cam1-down').textContent.replace(/,/g, ''));
        let cam2Up = parseInt(document.getElementById('cam2-up').textContent.replace(/,/g, ''));
        let cam2Down = parseInt(document.getElementById('cam2-down').textContent.replace(/,/g, ''));
        let cam3Up = parseInt(document.getElementById('cam3-up').textContent.replace(/,/g, ''));
        let cam3Down = parseInt(document.getElementById('cam3-down').textContent.replace(/,/g, ''));
        let cam4Up = parseInt(document.getElementById('cam4-up').textContent.replace(/,/g, ''));
        let cam4Down = parseInt(document.getElementById('cam4-down').textContent.replace(/,/g, ''));
        let cam5Up = parseInt(document.getElementById('cam5-up').textContent.replace(/,/g, ''));
        let cam5Down = parseInt(document.getElementById('cam5-down').textContent.replace(/,/g, ''));

        // Increment counts by random values between 1 and 10
        cam1Up += Math.floor(Math.random() * 10) + 1;
        cam1Down += Math.floor(Math.random() * 10) + 1;
        cam2Up += Math.floor(Math.random() * 10) + 1;
        cam2Down += Math.floor(Math.random() * 10) + 1;
        cam3Up += Math.floor(Math.random() * 10) + 1;
        cam3Down += Math.floor(Math.random() * 10) + 1;
        cam4Up += Math.floor(Math.random() * 10) + 1;
        cam4Down += Math.floor(Math.random() * 10) + 1;
        cam5Up += Math.floor(Math.random() * 10) + 1;
        cam5Down += Math.floor(Math.random() * 10) + 1;

        // Update spans with formatted numbers
        document.getElementById('cam1-up').textContent = formatNumber(cam1Up);
        document.getElementById('cam1-down').textContent = formatNumber(cam1Down);
        document.getElementById('cam2-up').textContent = formatNumber(cam2Up);
        document.getElementById('cam2-down').textContent = formatNumber(cam2Down);
        document.getElementById('cam3-up').textContent = formatNumber(cam3Up);
        document.getElementById('cam3-down').textContent = formatNumber(cam3Down);
        document.getElementById('cam4-up').textContent = formatNumber(cam4Up);
        document.getElementById('cam4-down').textContent = formatNumber(cam4Down);
        document.getElementById('cam5-up').textContent = formatNumber(cam5Up);
        document.getElementById('cam5-down').textContent = formatNumber(cam5Down);
    }

    // Update counters every second
    setInterval(updateCounters, 1000);
</script>

<script>
    // Function to format numbers with commas
    function formatNumber(num) {
        return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    // Function to update counters every second
    function updateCounters() {
        // Get current values from spans for LAXMI TEMPLE DWARA
        let laxmiUp = parseInt(document.getElementById('laxmi-up').textContent.replace(/,/g, ''));
        let laxmiDown = parseInt(document.getElementById('laxmi-down').textContent.replace(/,/g, ''));

        // Get current values from spans for BIMALA TEMPLE DWARA
        let bimalaUp = parseInt(document.getElementById('bimala-up').textContent.replace(/,/g, ''));
        let bimalaDown = parseInt(document.getElementById('bimala-down').textContent.replace(/,/g, ''));

        // Increment counts by random values between 1 and 10 for LAXMI TEMPLE DWARA
        laxmiUp += Math.floor(Math.random() * 10) + 1;
        laxmiDown += Math.floor(Math.random() * 10) + 1;

        // Increment counts by random values between 1 and 10 for BIMALA TEMPLE DWARA
        bimalaUp += Math.floor(Math.random() * 10) + 1;
        bimalaDown += Math.floor(Math.random() * 10) + 1;

        // Update spans with formatted numbers for LAXMI TEMPLE DWARA
        document.getElementById('laxmi-up').textContent = formatNumber(laxmiUp);
        document.getElementById('laxmi-down').textContent = formatNumber(laxmiDown);

        // Update spans with formatted numbers for BIMALA TEMPLE DWARA
        document.getElementById('bimala-up').textContent = formatNumber(bimalaUp);
        document.getElementById('bimala-down').textContent = formatNumber(bimalaDown);
    }

    // Update counters every second
    setInterval(updateCounters, 1000);
</script>


<!----jagamohan dwara -->

<script>
    // Function to format numbers with commas
    function formatNumber(num) {
        return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    // Function to update counters every second
    function updateCounters() {
        // Get current values from spans
        let cam11Up = parseInt(document.getElementById('cam11-up').textContent.replace(/,/g, ''));
        let cam11Down = parseInt(document.getElementById('cam11-down').textContent.replace(/,/g, ''));
        let cam22Up = parseInt(document.getElementById('cam22-up').textContent.replace(/,/g, ''));
        let cam22Down = parseInt(document.getElementById('cam22-down').textContent.replace(/,/g, ''));
        let cam33Up = parseInt(document.getElementById('cam33-up').textContent.replace(/,/g, ''));
        let cam33Down = parseInt(document.getElementById('cam33-down').textContent.replace(/,/g, ''));
        let cam44Up = parseInt(document.getElementById('cam44-up').textContent.replace(/,/g, ''));
        let cam44Down = parseInt(document.getElementById('cam44-down').textContent.replace(/,/g, ''));
        let cam55Up = parseInt(document.getElementById('cam55-up').textContent.replace(/,/g, ''));
        let cam55Down = parseInt(document.getElementById('cam55-down').textContent.replace(/,/g, ''));
		let cam66Up = parseInt(document.getElementById('cam66-up').textContent.replace(/,/g, ''));
        let cam66Down = parseInt(document.getElementById('cam66-down').textContent.replace(/,/g, ''));

        // Increment counts by random values between 1 and 10
        cam11Up += Math.floor(Math.random() * 10) + 1;
        cam11Down += Math.floor(Math.random() * 10) + 1;
        cam22Up += Math.floor(Math.random() * 10) + 1;
        cam22Down += Math.floor(Math.random() * 10) + 1;
        cam33Up += Math.floor(Math.random() * 10) + 1;
        cam33Down += Math.floor(Math.random() * 10) + 1;
        cam44Up += Math.floor(Math.random() * 10) + 1;
        cam44Down += Math.floor(Math.random() * 10) + 1;
        cam55Up += Math.floor(Math.random() * 10) + 1;
        cam55Down += Math.floor(Math.random() * 10) + 1;
		cam66Up += Math.floor(Math.random() * 10) + 1;
        cam66Down += Math.floor(Math.random() * 10) + 1;

        // Update spans with formatted numbers
        document.getElementById('cam11-up').textContent = formatNumber(cam11Up);
        document.getElementById('cam11-down').textContent = formatNumber(cam11Down);
        document.getElementById('cam22-up').textContent = formatNumber(cam22Up);
        document.getElementById('cam22-down').textContent = formatNumber(cam22Down);
        document.getElementById('cam33-up').textContent = formatNumber(cam33Up);
        document.getElementById('cam33-down').textContent = formatNumber(cam33Down);
        document.getElementById('cam44-up').textContent = formatNumber(cam44Up);
        document.getElementById('cam44-down').textContent = formatNumber(cam44Down);
        document.getElementById('cam55-up').textContent = formatNumber(cam55Up);
        document.getElementById('cam55-down').textContent = formatNumber(cam55Down);
		document.getElementById('cam66-up').textContent = formatNumber(cam66Up);
        document.getElementById('cam66-down').textContent = formatNumber(cam66Down);
    }

    // Update counters every second
    setInterval(updateCounters, 1000);
</script>

<script>
    // Function to format numbers with commas
    function formatNumber(num) {
        return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    // Function to update counters every second
    function updateCounters() {
        // Get current values from spans
        let dwara1Up = parseInt(document.getElementById('dwara1-up').textContent.replace(/,/g, ''));
        let dwara1Down = parseInt(document.getElementById('dwara1-down').textContent.replace(/,/g, ''));
        let dwara2Up = parseInt(document.getElementById('dwara2-up').textContent.replace(/,/g, ''));
        let dwara2Down = parseInt(document.getElementById('dwara2-down').textContent.replace(/,/g, ''));
        let dwara3Up = parseInt(document.getElementById('dwara3-up').textContent.replace(/,/g, ''));
        let dwara3Down = parseInt(document.getElementById('dwara3-down').textContent.replace(/,/g, ''));
        let dwara4Up = parseInt(document.getElementById('dwara4-up').textContent.replace(/,/g, ''));
        let dwara4Down = parseInt(document.getElementById('dwara4-down').textContent.replace(/,/g, ''));
        let dwara5Up = parseInt(document.getElementById('dwara5-up').textContent.replace(/,/g, ''));
        let dwara5Down = parseInt(document.getElementById('dwara5-down').textContent.replace(/,/g, ''));
		let dwara6Up = parseInt(document.getElementById('dwara6-up').textContent.replace(/,/g, ''));
        let dwara6Down = parseInt(document.getElementById('dwara6-down').textContent.replace(/,/g, ''));

        // Increment counts by random values between 1 and 10
        dwara1Up += Math.floor(Math.random() * 10) + 1;
        dwara1Down += Math.floor(Math.random() * 10) + 1;
        dwara2Up += Math.floor(Math.random() * 10) + 1;
        dwara2Down += Math.floor(Math.random() * 10) + 1;
        dwara3Up += Math.floor(Math.random() * 10) + 1;
        dwara3Down += Math.floor(Math.random() * 10) + 1;
        dwara4Up += Math.floor(Math.random() * 10) + 1;
        dwara4Down += Math.floor(Math.random() * 10) + 1;
        dwara5Up += Math.floor(Math.random() * 10) + 1;
        dwara5Down += Math.floor(Math.random() * 10) + 1;
		dwara6Up += Math.floor(Math.random() * 10) + 1;
        dwara6Down += Math.floor(Math.random() * 10) + 1;

        // Update spans with formatted numbers
        document.getElementById('dwara1-up').textContent = formatNumber(dwara1Up);
        document.getElementById('dwara1-down').textContent = formatNumber(dwara1Down);
        document.getElementById('dwara2-up').textContent = formatNumber(dwara2Up);
        document.getElementById('dwara2-down').textContent = formatNumber(dwara2Down);
        document.getElementById('dwara3-up').textContent = formatNumber(dwara3Up);
        document.getElementById('dwara3-down').textContent = formatNumber(dwara3Down);
        document.getElementById('dwara4-up').textContent = formatNumber(dwara4Up);
        document.getElementById('dwara4-down').textContent = formatNumber(dwara4Down);
        document.getElementById('dwara5-up').textContent = formatNumber(dwara5Up);
        document.getElementById('dwara5-down').textContent = formatNumber(dwara5Down);
		document.getElementById('dwara6-up').textContent = formatNumber(dwara6Up);
        document.getElementById('dwara6-down').textContent = formatNumber(dwara6Down);
    }

    // Update counters every second
    setInterval(updateCounters, 1000);
</script>


<script>
    // Function to format numbers with commas
    function formatNumber(num) {
        return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    // Function to update counters every second
    function updateCounters() {
        // Get current values from spans
        let enterUp = parseInt(document.getElementById('enter-up').textContent.replace(/,/g, ''));
       
        let exitUp = parseInt(document.getElementById('exit-up').textContent.replace(/,/g, ''));
       
        let insideUp = parseInt(document.getElementById('inside-up').textContent.replace(/,/g, ''));
      

        // Increment counts by random values between 1 and 10
        enterUp += Math.floor(Math.random() * 10) + 1;
       
        exitUp += Math.floor(Math.random() * 10) + 1;
       
        insideUp += Math.floor(Math.random() * 10) + 1;
       
      

        // Update spans with formatted numbers
        document.getElementById('enter-up').textContent = formatNumber(enterUp);
        
        document.getElementById('exit-up').textContent = formatNumber(exitUp);
       
        document.getElementById('inside-up').textContent = formatNumber(insideUp);
       
    }

    // Update counters every second
    setInterval(updateCounters, 1000);
</script>

<script>
    // Function to format numbers with commas
    function formatNumber(num) {
        return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    // Function to update counters every second
    function updateCounters() {
        // Get current values from spans
        let enter1Up = parseInt(document.getElementById('enter1-up').textContent.replace(/,/g, ''));
       
        let exit1Up = parseInt(document.getElementById('exit1-up').textContent.replace(/,/g, ''));
       
        let inside1Up = parseInt(document.getElementById('inside1-up').textContent.replace(/,/g, ''));
      

        // Increment counts by random values between 1 and 10
        enter1Up += Math.floor(Math.random() * 10) + 1;
       
        exit1Up += Math.floor(Math.random() * 10) + 1;
       
        inside1Up += Math.floor(Math.random() * 10) + 1;
       
      

        // Update spans with formatted numbers
        document.getElementById('enter1-up').textContent = formatNumber(enter1Up);
        
        document.getElementById('exit1-up').textContent = formatNumber(exit1Up);
       
        document.getElementById('inside1-up').textContent = formatNumber(inside1Up);
       
    }

    // Update counters every second
    setInterval(updateCounters, 1000);
</script>


<script>
    // Function to format numbers with commas
    function formatNumber(num) {
        return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    // Function to update counters every second
    function updateCounters() {
        // Get current values from spans
        let enter2Up = parseInt(document.getElementById('enter2-up').textContent.replace(/,/g, ''));
       
        let exit2Up = parseInt(document.getElementById('exit2-up').textContent.replace(/,/g, ''));
       
        let inside2Up = parseInt(document.getElementById('inside2-up').textContent.replace(/,/g, ''));
      

        // Increment counts by random values between 1 and 10
        enter2Up += Math.floor(Math.random() * 10) + 1;
       
        exit2Up += Math.floor(Math.random() * 10) + 1;
       
        inside2Up += Math.floor(Math.random() * 10) + 1;
       
      

        // Update spans with formatted numbers
        document.getElementById('enter2-up').textContent = formatNumber(enter2Up);
        
        document.getElementById('exit2-up').textContent = formatNumber(exit2Up);
       
        document.getElementById('inside2-up').textContent = formatNumber(inside2Up);
       
    }

    // Update counters every second
    setInterval(updateCounters, 1000);
</script>

<script>
    // Function to format numbers with commas
    function formatNumber(num) {
        return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    // Function to update counters every second
    function updateCounters() {
        // Get current values from spans
        let enter3Up = parseInt(document.getElementById('enter3-up').textContent.replace(/,/g, ''));
       
        let exit3Up = parseInt(document.getElementById('exit3-up').textContent.replace(/,/g, ''));
       
        let inside3Up = parseInt(document.getElementById('inside3-up').textContent.replace(/,/g, ''));
      

        // Increment counts by random values between 1 and 10
        enter3Up += Math.floor(Math.random() * 10) + 1;
       
        exit3Up += Math.floor(Math.random() * 10) + 1;
       
        inside3Up += Math.floor(Math.random() * 10) + 1;
       
      

        // Update spans with formatted numbers
        document.getElementById('enter3-up').textContent = formatNumber(enter3Up);
        
        document.getElementById('exit3-up').textContent = formatNumber(exit3Up);
       
        document.getElementById('inside3-up').textContent = formatNumber(inside3Up);
       
    }

    // Update counters every second
    setInterval(updateCounters, 1000);
</script>

<script>
    // Function to format numbers with commas
    function formatNumber(num) {
        return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    // Function to update counters every second
    function updateCounters() {
        // Get current values from spans
        let enter4Up = parseInt(document.getElementById('enter4-up').textContent.replace(/,/g, ''));
       
        let exit4Up = parseInt(document.getElementById('exit4-up').textContent.replace(/,/g, ''));
       
        let inside4Up = parseInt(document.getElementById('inside4-up').textContent.replace(/,/g, ''));
      

        // Increment counts by random values between 1 and 10
        enter4Up += Math.floor(Math.random() * 10) + 1;
       
        exit4Up += Math.floor(Math.random() * 10) + 1;
       
        inside4Up += Math.floor(Math.random() * 10) + 1;
       
      

        // Update spans with formatted numbers
        document.getElementById('enter4-up').textContent = formatNumber(enter4Up);
        
        document.getElementById('exit4-up').textContent = formatNumber(exit4Up);
       
        document.getElementById('inside4-up').textContent = formatNumber(inside4Up);
       
    }

    // Update counters every second
    setInterval(updateCounters, 1000);
</script>


<script>
    // Function to format numbers with commas
    function formatNumber(num) {
        return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    // Function to update counters every second
    function updateCounters() {
        // Get current values from spans
        let mainUp = parseInt(document.getElementById('main-up').textContent.replace(/,/g, ''));
       
        let beharanUp = parseInt(document.getElementById('beharan-up').textContent.replace(/,/g, ''));
       
        let anadaUp = parseInt(document.getElementById('anada-up').textContent.replace(/,/g, ''));

		let laxmiUp = parseInt(document.getElementById('laxmi-up').textContent.replace(/,/g, ''));
		let bimalaUp = parseInt(document.getElementById('bimala-up').textContent.replace(/,/g, ''));
		let jagamohanUp = parseInt(document.getElementById('jagamohan-up').textContent.replace(/,/g, ''));
      

        // Increment counts by random values between 1 and 10
        mainUp += Math.floor(Math.random() * 10) + 1;
       
        beharanUp += Math.floor(Math.random() * 10) + 1;
       
        anadaUp += Math.floor(Math.random() * 10) + 1;

		laxmiUp += Math.floor(Math.random() * 10) + 1;
       
        bimalaUp += Math.floor(Math.random() * 10) + 1;
       
       jagamohanUp += Math.floor(Math.random() * 10) + 1;
       
      

        // Update spans with formatted numbers
        document.getElementById('main-up').textContent = formatNumber(mainUp);
        
        document.getElementById('beharan-up').textContent = formatNumber(beharanUp);
       
        document.getElementById('anada-up').textContent = formatNumber(anadaUp);

		document.getElementById('laxmi-up').textContent = formatNumber(laxmiUp);
        
        document.getElementById('bimala-up').textContent = formatNumber(bimalaUp);
       
        document.getElementById('jagamohan-up').textContent = formatNumber(jagamohanUp);
       
    }

    // Update counters every second
    setInterval(updateCounters, 1000);
</script>


    <!--Internal Sparkline js -->
    <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Internal Piety js -->
    <script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>

    <!-- Internal Chart js -->
    <script src="{{ asset('assets/plugins/chartjs/Chart.bundle.min.js') }}"></script>

	
@endsection
