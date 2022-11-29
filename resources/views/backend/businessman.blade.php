@extends('master.backend_master.dashboard')

@section('dashboard-body')


<div class="theme-layout">
	
	
</div>
<!-- responsive header -->

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-content">
					<h4 class="main-title"></h4>
					<div class="row merged20 mb-4">
						<div class="col-lg-8">
							
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12">
							
							
						</div>
					</div>
					

					
					<div class="row merged20 mb-4">
						<div class="col-lg-12">
							<div class="d-widget">
								<div class="d-widget-title">
									<h5>Businessman / Vendor</h5>
								</div>
								<table class="table-default manage-user table table-striped table-responsive-md">
									<thead>
										<tr>
											<th>User Name</th>
											<th>User Id</th>
											<th>Business Name</th>
											<th>Business Subtitle</th>
											<th>Vendor Photo</th>
											<th>Business Logo</th>
											<th>Vendor Email </th>
											<th>Vendor Phone </th>
											<th>Total Earn </th>
											<th>Total Comission </th>
											<th>Status</th>
											<th>Del/Edit</th>
										</tr>
									</thead>
									<tbody>
										@foreach($allBusinessPages as $business)
                                        <tr>
											<!-- <td>
												<figure><img alt="" src="images/resources/user.png"></figure>
												<h5>{{$business->name}}</h5>
											</td> -->
											<td class="productss">
                                                {{$business->userName}}
                                            </td>
											<td class="productss">
                                                {{$business->userId}}
                                            </td>
											<td class="productss">
                                                {{$business->BusinessName}}
                                            </td>
											<td class="productss">
                                                {{$business->BusinessSubtitle}}
                                            </td>
											<td>
												<img src="{{asset($business->userPhoto)}}" alt="No Profile Photo" width="40px" height="40px">
											</td>
											<td>
												<img src="{{asset($business->businessPhoto)}}" alt="No Profile Photo" width="40px" height="40px">
											</td>
                                            <td class="productss">
                                                {{$business->email}}
                                            </td>
                                            <td class="productss">
                                                {{$business->phone}}
                                            </td>
											<td class="productss">
                                                {{$business->total_price}}
                                            </td>
											<td class="productss">
                                                {{$business->total_comission}}
                                            </td>
                                            <td class="productss">
                                               
                                                     @if($business->status == 1)
                                                     <p>Active</p>
                                                     @else
                                                     <p>Deactive</p>
                                                     @endif                           
                                               
                                                
                                            </td>
											
											<!-- <td>
												<div class="switch-btn">
													<input type="checkbox" hidden="hidden" id="switch01">
													<label class="switch" for="switch01"></label>
												</div>
											</td> -->
											<td>
												<div class="actions-btn">
													@if($business->status == 0)
                                                    <span class="iconbox button soft-primary"><a href="{{url('active/vendor/'. $business->id)}}">Active</a></span>
													@else
                                                    <span class="iconbox button soft-primary"><a href="{{url('deactive/vendor/'. $business->id)}}">Deactive</a></span>
													@endif
                                                    
													<span class="iconbox button soft-danger"> <a href="{{url('view/vendor/'. $business->id)}}" onclick="return confirm('are you sure want to delete this item')">view</a></span>
                                                    <a href="{{url('view/trash/'. $business->id)}}" onclick="return confirm('are you sure want to delete this item')"><i class="icofont-trash"></i></a>                        
                                                </div>
											</td>
										</tr>
										@endforeach
                                        
                                       
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- main content -->
	
	<div class="popup-wraper">
		<div class="popup">
			<span class="popup-closed"><i class="icofont-close"></i></span>
			<div class="popup-meta">
				<div class="popup-head">
					<h5><i class="icofont-envelope"></i> Send Message</h5>
				</div>
				<div class="send-message">
					<form method="post" class="c-form">
						<input type="text" placeholder="Enter Name..">
						<input type="text" placeholder="Subject">
						<textarea placeholder="Write Message"></textarea>
						<div class="uploadimage">
							<i class="icofont-file-jpg"></i>
							<label class="fileContainer">
								<input type="file">Attach file
							</label>
						</div>
						<button type="submit" class="main-btn">Send</button>
					</form>
				</div>
			</div>
		</div>
	</div><!-- send message popup -->
	
	<div class="side-slide">
		<span class="popup-closed"><i class="icofont-close"></i></span>
		<div class="slide-meta">
			<ul class="nav nav-tabs slide-btns">
				 <li class="nav-item"><a class="active" href="#messages" data-toggle="tab">Messages</a></li>
				 <li class="nav-item"><a class="" href="#notifications" data-toggle="tab">Notifications</a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active fade show" id="messages" >
					<h4><i class="icofont-envelope"></i> messages</h4>
					<a href="#" class="send-mesg" title="New Message" data-toggle="tooltip"><i class="icofont-edit"></i></a>
					<ul class="new-messages">
						<li>
							<figure><img src="images/resources/user1.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Ibrahim Ahmed</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user2.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Fatima J.</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user3.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Fawad Ahmed</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user4.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Saim Turan</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user5.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
					</ul>
					<a href="#" title="" class="main-btn" data-ripple="">view all</a>
				</div>
				<div class="tab-pane fade" id="notifications" >
					<h4><i class="icofont-bell-alt"></i> notifications</h4>
					<ul class="notificationz">
						<li>
							<figure><img src="images/resources/user5.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">recommend your post</a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user4.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">share your post <strong>a good time today!</strong></a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user2.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">recommend your post</a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user1.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">share your post <strong>a good time today!</strong></a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user3.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">recommend your post</a>
							</div>
						</li>
					</ul>
					<a href="#" title="" class="main-btn" data-ripple="">view all</a>
				</div>
			</div>
		</div>
	</div><!-- side slide message & popup -->
</div>
	


@endsection