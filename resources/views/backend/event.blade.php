@extends('master.backend_master.dashboard')

@section('dashboard-body')
<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-content">
					<h4 class="main-title">Users Management</h4>
					<div class="row merged20 mb-4">
						<div class="col-lg-3 col-md-6">
							<div class="d-widget">
								<div class="event-stat">
									<i>
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg></i>
									<div class="event-figure">
										<h5>140</h5>
										<span>New Events</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 ">
							<div class="d-widget">
								<div class="event-stat">
									<i><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></i>
									<div class="event-figure">
										<h5>1200</h5>
										<span>Registered Users</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="d-widget">
								<div class="event-stat">
									<i>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg></i>
									<div class="event-figure">
										<h5>4021</h5>
										<span>Tickets Sold</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="d-widget">
								<div class="event-stat">
									<i>
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg></i>
									<div class="event-figure">
										<h5>$1400</h5>
										<span>Earnigns</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row merged20 mb-4">
						<div class="col-lg-12">
							<div class="d-widget">
								<div class="d-widget-title">
									<h5>All events</h5>
								</div>
								<table class="table table-default all-events table-striped table-responsive-lg">
									<thead>
										<tr>
											<th>ID#</th>
											<th>Client</th>
											<th>Event Name</th>
											<th>Venue</th>
											<th>Speakers</th>
											<th>Email</th>
											<th>Status</th>
											<th>Time</th>
											<th>Date</th>
											<th>Edit</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1001</td>
											<td class="user-pic"><figure><img src="images/resources/small-pic2.png" alt=""></figure> <span>Andrew</span></td>
											<td>Developers Meetup</td>
											<td>Antalia University</td>
											<td>
												<div class="image-bunch">
													<img src="images/resources/small-pic2.png" alt="">
													<img src="images/resources/small-pic1.png" alt="">
													<img src="images/resources/small-pic3.png" alt="">
													<span>9+</span>
												</div>
											</td>
											<td><a href="#" title="">sample@gmail.com</a></td>
											<td class="text-success">Paid</td>
											<td>10:PM</td>
											<td>Oct-12</td>
											<td>
												<div class="button soft-danger"><i class="icofont-trash"></i></div>
												<div class="button soft-primary"><i class="icofont-pen-alt-1"></i></div>
											</td>
										</tr>
										<tr>
											<td>1002</td>
											<td class="user-pic"><figure><img src="images/resources/small-pic1.png" alt=""></figure> <span>Maria K</span></td>
											<td>Doctors Meetup</td>
											<td>Punjab University</td>
											<td>
												<div class="image-bunch">
													<img src="images/resources/small-pic1.png" alt="">
													<img src="images/resources/small-pic2.png" alt="">
													<img src="images/resources/small-pic3.png" alt="">
													<span>3+</span>
												</div>
											</td>
											<td><a href="#" title="">sample@cmail.com</a></td>
											<td class="text-danger">Unpaid</td>
											<td>08:PM</td>
											<td>Oct-10</td>
											<td>
												<div class="button soft-danger"><i class="icofont-trash"></i></div>
												<div class="button soft-primary"><i class="icofont-pen-alt-1"></i></div>
											</td>
										</tr>
										<tr>
											<td>1003</td>
											<td class="user-pic"><figure><img src="images/resources/small-pic3.png" alt=""></figure> <span>Sandra</span></td>
											<td>Doctors Meetup</td>
											<td>King Advert University</td>
											<td>
												<div class="image-bunch">
													<img src="images/resources/small-pic2.png" alt="">
													<img src="images/resources/small-pic4.png" alt="">
													<img src="images/resources/small-pic5.png" alt="">
													<span>1+</span>
												</div>
											</td>
											<td><a href="#" title="">sample@cmail.com</a></td>
											<td class="text-primary">Pending</td>
											<td>07:PM</td>
											<td>Oct-10</td>
											<td>
												<div class="button soft-danger"><i class="icofont-trash"></i></div>
												<div class="button soft-primary"><i class="icofont-pen-alt-1"></i></div>
											</td>
										</tr>
										<tr>
											<td>1004</td>
											<td class="user-pic"><figure><img src="images/resources/small-pic4.png" alt=""></figure> <span>King Leo</span></td>
											<td>Cyber Monday</td>
											<td>Oxford University</td>
											<td>
												<div class="image-bunch">
													<img src="images/resources/small-pic3.png" alt="">
													<img src="images/resources/small-pic5.png" alt="">
													<img src="images/resources/small-pic4.png" alt="">
													<span>2+</span>
												</div>
											</td>
											<td><a href="#" title="">sample@cmail.com</a></td>
											<td class="text-success">Paid</td>
											<td>11:PM</td>
											<td>Oct-09</td>
											<td>
												<div class="button soft-danger"><i class="icofont-trash"></i></div>
												<div class="button soft-primary"><i class="icofont-pen-alt-1"></i></div>
											</td>
										</tr>
										<tr>
											<td>1005</td>
											<td class="user-pic"><figure><img src="images/resources/small-pic5.png" alt=""></figure> <span>Alblert</span></td>
											<td>Hollowen Day</td>
											<td>USA University</td>
											<td>
												<div class="image-bunch">
													<img src="images/resources/small-pic4.png" alt="">
													<img src="images/resources/small-pic5.png" alt="">
													<img src="images/resources/small-pic1.png" alt="">
													<span>8+</span>
												</div>
											</td>
											<td><a href="#" title="">sample@cmail.com</a></td>
											<td class="text-success">Paid</td>
											<td>12:PM</td>
											<td>Oct-08</td>
											<td>
												<div class="button soft-danger"><i class="icofont-trash"></i></div>
												<div class="button soft-primary"><i class="icofont-pen-alt-1"></i></div>
											</td>
										</tr>
									</tbody>
								</table>	
							</div>
						</div>
					</div>
					<div class="row merged20 mb-4">
						<div class="col-lg-6">
							<div class="d-widget">
								<div class="d-widget-title">
									<h5>Events Schedule</h5>
								</div>
								<ul class="upcoming-event">
									<li>
										<div class="event-date soft-red">
											<i>24 FEB</i>
											<span>2021</span>
										</div>
										<div class="event-deta">
											<h5>digital marketing summit</h5>
											<ul>
												<li><i class="icofont-user"></i> steve Josef</li>
												<li><i class="icofont-map-pins"></i> New York City</li>
												<li><i class="icofont-clock-time"></i> 9:00PM-12AM</li>
											</ul>
										</div>
									</li>
									<li>
										<div class="event-date soft-green">
											<i>10 MAR</i>
											<span>2021</span>
										</div>
										<div class="event-deta">
											<h5>digital marketing summit</h5>
											<ul>
												<li><i class="icofont-user"></i> steve Josef</li>
												<li><i class="icofont-map-pins"></i> New York City</li>
												<li><i class="icofont-clock-time"></i> 9:00PM-12AM</li>
											</ul>
										</div>
									</li>
									<li>
										<div class="event-date soft-blue">
											<i>20 OCT</i>
											<span>2021</span>
										</div>
										<div class="event-deta">
											<h5>digital marketing summit</h5>
											<ul>
												<li><i class="icofont-user"></i> steve Josef</li>
												<li><i class="icofont-map-pins"></i> New York City</li>
												<li><i class="icofont-clock-time"></i> 9:00PM-12AM</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="d-widget">
								<div class="d-widget-title">
									<h5>Web Traffic</h5>
									<select class="browser-default custom-select">
										<option value="3">last day</option>
										<option value="2">week</option>
										<option selected>Monthly</option>
										<option value="1">Yearly</option>
									</select>
								</div>
								<div class="web-traffic"> 
									<div class="chart-legend">
										<p>Today's visitors</p>
										<h5>98,300</h5>
									</div>
									<div id="hybrid_traffic"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row merged20 mb-4">
						<div class="col-lg-6">
							<div class="d-widget">
								<div class="d-widget-title">
									<h5>Notice Borad</h5>
								</div>
								<div class="d-Notices"> 
									<ul>
										<li>
											<p>March 21, 2021</p>
											<h6><a href="#" title="">Mr. William</a> <span>5 mint ago</span></h6>
											<p>
												invited to join the meeting in the conference room at 9.45 am
											</p>
											<div class="action-btns">
												<div class="button soft-danger" title="ignore"><i class="icofont-trash"></i></div>
												<div class="button soft-primary" title="save"><i class="icofont-star"></i></div>
											</div>	
										</li>
										<li>
											<p>Feb 15, 2021</p>
											<h6><a href="#" title="">Andrew </a> <span>35 mint ago</span></h6>
											<p>
												created a group 'Hencework' in the discussion forum
											</p>
											<div class="action-btns">
												<div class="button soft-danger" title="ignore"><i class="icofont-trash"></i></div>
												<div class="button soft-primary" title="save"><i class="icofont-star"></i></div>
											</div>
										</li>
										<li>
											<p>Jan 10, 2021</p>
											<h6><a href="#" title="">Franklyn J.</a> <span>40 mint ago</span></h6>
											<p>
												Prepare the conference schedule
											</p>
											<div class="action-btns">
												<div class="button soft-danger" title="ignore"><i class="icofont-trash"></i></div>
												<div class="button soft-primary" title="save"><i class="icofont-star"></i></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
								<div class="d-widget">
									<div class="d-widget-title">
										<h5>Logs</h5>
									</div>
									<ul class="recent-log">
										<li class="hole-circle red-circle"><span>New User Registration</span> <i>23:13</i></li>
										<li class="hole-circle blue-circle"><span>New 14 products added.</span> <i>22:10</i></li>
										<li class="hole-circle green-circle"><span>New sale: Napole.</span> <i>21:33</i></li>
										<li class="hole-circle yellow-circle"><span>New notifications</span> <i>20:40</i></li>
										<li class="hole-circle orange-circle"><span>New Comments</span> <i>19:20</i></li>
										<li class="hole-circle blue-circle"><span>New sale: souffle.</span> <i>18:00</i></li>
										<li class="hole-circle yellow-circle"><span>New notifications</span> <i>20:40</i></li>
										<li class="hole-circle red-circle"><span>New User Registration</span> <i>23:13</i></li>
									</ul>
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