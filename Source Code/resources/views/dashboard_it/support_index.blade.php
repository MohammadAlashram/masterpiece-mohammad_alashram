@extends('dashboard_it/layouts/dashboard_app')
@section('css_admin')

@endsection

@section('dashboard_con')
<div class="row">
	<div class="col-lg-9">  
		<div class="row">
			<div class="col-lg-3">
				<div class="card">
					<div class="card-body">
						<h5 class="mt-0 mb-2 header-title">New Tickets</h5>
						<div class="media">
							<i data-feather="tag" class="align-self-center icon-lg icon-dual-warning"></i>                                     
							<div class="media-body align-self-center text-truncate ml-3">
								<h2 class="font-24 m-0 font-weight-semibold">
									198
									<span class="text-danger font-12 font-weight-semibold ml-2"><i class="mdi mdi-trending-down mr-1"></i>3.9%</span>
								</h2>
								<p class="text-muted mb-0 font-13">From Average Yesterday</p>                                                    
							</div><!--end media-body-->
						</div><!--end media-->
					</div><!--end card-body-->                                        
				</div><!--end card-->                                      
			</div><!-- end col-->
			<div class="col-lg-3">
				<div class="card">
					<div class="card-body">
						<h5 class="mt-0 mb-2 header-title">Open Tickets</h5>
						<div class="media">
							<i data-feather="book-open" class="align-self-center icon-lg icon-dual-pink"></i>                                     
							<div class="media-body align-self-center text-truncate ml-3">
								<h2 class="font-24 m-0 font-weight-semibold">
									124
									<span class="text-success font-12 font-weight-semibold ml-2"><i class="mdi mdi-trending-up mr-1"></i>10.1%</span>
								</h2> 
								<p class="text-muted mb-0 font-13">From Average Yesterday</p>
							</div><!--end media-body-->
						</div><!--end media-->
					</div><!--end card-body-->                                        
				</div><!--end card-->                                      
			</div><!-- end col-->
			<div class="col-lg-3">
				<div class="card">
					<div class="card-body">
						<h5 class="mt-0 mb-2 header-title">On Hold</h5>
						<div class="media">
							<i data-feather="coffee" class="align-self-center icon-lg icon-dual-success"></i>                                     
							<div class="media-body align-self-center text-truncate ml-3">
								<h2 class="font-24 m-0 font-weight-semibold">
									21
									<span class="text-danger font-12 font-weight-semibold ml-2"><i class="mdi mdi-trending-down mr-1"></i>2.6%</span>
								</h2> 
								<p class="text-muted mb-0 font-13">From Average Yesterday</p>
							</div><!--end media-body-->
						</div><!--end media-->
					</div><!--end card-body-->                                        
				</div><!--end card-->                                      
			</div><!-- end col-->
			<div class="col-lg-3">
				<div class="card">
					<div class="card-body">
						<h5 class="mt-0 mb-2 header-title">Unassigned</h5>
						<div class="media">
							<i data-feather="lock" class="align-self-center icon-lg icon-dual-purple"></i>                                     
							<div class="media-body align-self-center text-truncate ml-3">
								<h2 class="font-24 m-0 text-danger font-weight-semibold">
									73
									<span class="text-success font-12 font-weight-semibold ml-2"><i class="mdi mdi-trending-up mr-1"></i>5.5%</span>
								</h2> 
								<p class="text-muted mb-0 font-13">From Average Yesterday</p>
							</div><!--end media-body-->
						</div><!--end media-->
					</div><!--end card-body-->                                        
				</div><!--end card-->                                      
			</div><!-- end col-->                                                       
		</div><!--end row-->                                                      
		<div class="card">
			<div class="card-body">  
				<h4 class="header-title mt-0">Tickets Status</h4>                                                                    
				<div class="">
					<div id="Tickets_Status" class="apex-charts"></div>
				</div>  
			</div><!--end card-body-->                                
		</div><!--end card-->                            
	</div><!--end col-->
	<div class="col-lg-3">                            
		<div class="card">
			<div class="card-body">
				<h4 class="header-title mt-0">Customer Satisfaction</h4>
				<div class="happiness-score">
					<h2 class="mb-1">94.5%</h2>
					<p class="mb-0 text-uppercase">Happiness</p>
				</div> 
				<div id="ana_device" class="apex-charts my-3"></div>                                                                       
				<div class="table-responsive">
					<table class="table border-dashed mb-0">
						<thead class="thead-light">
						<tr>
							<th class="border-bottom-0">Performance Type</th>
							<th class="border-bottom-0 text-right">Score</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<th class="border-top-0 text-dark" scope="row"><i class="far fa-grin-stars text-success font-24 mr-2 align-middle"></i>Excellent</th>
							<td class="border-top-0 text-right">65%</td>
						</tr>
						<tr>
							<th class="text-dark" scope="row"><i class="far fa-smile text-primary font-24 mr-2 align-middle"></i>Very Good</th>
							<td class="text-right">20%</td>                                                 
						</tr>
						<tr>
							<th class="text-dark" scope="row"><i class="far fa-meh text-warning font-24 mr-2 align-middle"></i>Good</th>
							<td class="text-right">10%</td>
						</tr>
						<tr>
							<th class="text-dark" scope="row"><i class="far fa-frown text-pink font-24 mr-2 align-middle"></i>Fair</th>
							<td class="text-right">5%</td>
						</tr>
						
						</tbody>
					</table><!--end /table-->
				</div>
			</div><!--end card-body-->
		</div><!--end card-->                            
	</div><!--end col-->
</div><!--end row-->
<div class="row">                        
	<div class="col-lg-4">                            
		<div class="card">
			<div class="card-body">
				<div class="row">                                            
					<div class="col-7 align-self-center">
						<div class="timer-data">
							<div class="icon-info mt-1 mb-4">
								<i class="dripicons-phone bg-soft-dark"></i>
							</div>                                                
							<h3 class="mt-0 text-dark">0m:27s</h3> 
							<h4 class="mt-0 header-title text-truncate">Avg.Speed of answer</h4>
							<p class="text-muted mb-0 text-truncate">It is a long established fact that a reader.</p>
							
						</div>
					</div><!--end col-->
					<div class="col-5 align-self-center">
						<div class="apexchart-wrapper">
							<div id="dash_spark_1" class="chart-gutters"></div>
						</div>
					</div><!--end col-->
				</div><!--end row-->
			</div><!--end card-body-->                                                                                                  
		</div><!--end card-->
	</div><!--end col-->
	<div class="col-lg-4"> 
		<div class="card">
			<div class="card-body">
				<div class="row">                                            
					<div class="col-7 align-self-center">
						<div class="timer-data">
							<div class="icon-info mt-1 mb-4">
								<i class="dripicons-clock bg-soft-dark"></i>
							</div>                                                
							<h3 class="mt-0 text-dark">4m:30s</h3> 
							<h4 class="mt-0 header-title text-truncate">Time to Resolved Complaint</h4>
							<p class="text-muted mb-0 text-truncate">It is a long established fact that a reader.</p>
							
						</div>
					</div><!--end col-->
					<div class="col-5 align-self-center">
						<div class="apexchart-wrapper">
							<div id="dash_spark_2" class="chart-gutters"></div>
						</div>
					</div><!--end col-->
				</div><!--end row-->
			</div><!--end card-body-->                                                                                                  
		</div><!--end card-->
	</div><!--end col-->
	<div class="col-lg-4">
		<div class="card">
			<div class="card-body">
				<h4 class="header-title mt-0 mb-2">Support Status</h4>  
				<div class="d-flex justify-content-between">
					<div>
						<h2 class="font-weight-semibold">{{$allmsgs}}</h2>
						<h5>Tickets</h5>
					</div>
					<div>
						<ul class="list-unstyled url-list">
							<li>
								<i class="mdi mdi-circle-medium text-pink"></i>
								<span>Open Tickets</span>                                                                                                      
							</li>
							<li>
								<i class="mdi mdi-circle-medium text-primary"></i> 
								<span>Resolved Tickets</span>                                              
							</li>
							<li>
								<i class="mdi mdi-circle-medium text-success"></i>
								<span>Unresolved Tickets</span>                                                 
							</li>                                                
						</ul> 
					</div>
				</div>
				<div class="progress">                                                    
					<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: {{ $avgread }}%" aria-valuenow="{{ $avgread }}" aria-valuemin="0" aria-valuemax="100">{{ $avgread }}%</div>
					<div class="progress-bar bg-pink" role="progressbar" style="width: {{ $avgunread }}%" aria-valuenow="{{ $avgunread }}" aria-valuemin="0" aria-valuemax="100">{{ $avgunread }}%</div>
					<div class="progress-bar bg-success" role="progressbar" style="width: {{ $avgdone }}%" aria-valuenow="{{ $avgdone }}" aria-valuemin="0" aria-valuemax="100">{{ $avgdone }}%</div>
				</div>                              
			</div>
		</div>
	</div>                    
</div>
@endsection

@section('script_admin')
<script src="{{asset('dashboard_assets_new/assets/pages/jquery.helpdesk-dashboard.init.js')}}"></script>
@endsection
