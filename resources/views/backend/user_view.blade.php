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
									<h5>Profile of {{$user->name}}</h5>
                                    <p>User Id : {{$user->id}}</p>
								</div>
								<div class="row">
                                    <div class="col-md-6">
                                        <img src="{{asset($user->profilePhoto)}}" class="img-thumbnail" alt="" width="108px" height="144px">
                                        <p>Name : {{$user->name}}</p>
                                        <p>Email : {{$user->email}}</p>
                                        <p>phone : {{$user->phone}}</p>
                                    </div>
                                    <div class="col-md-6">
                                        
                                        <p>Nick Name : {{$user->nickName}}</p>
                                        <p>Address : {{$user->address}}</p>
                                        <p>Gender : {{$user->gender}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="panel panel-default">
                                            <div class="panel-header">
                                                <h3>Profession</h3>
                                            </div>
                                        </div>
                                        <p>Profession : {{$user->occupation}}</p>
                                        <p>designation : {{$user->position}}</p>
                                        <p>From : {{$user->occupation_start}}</p>
                                        
                                    </div>
                                    <div class="col-md-4">
                                    <div class="panel panel-default">
                                            <div class="panel-header">
                                                <h3>School</h3>
                                            </div>
                                        </div>
                                                <p>School : {{$user->school}}</p>
                                                <p>From  : {{$user->school_start}}</p>
                                                <p>To : {{$user->school_end}}</p>
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <div class="panel panel-default">
                                            <div class="panel-header">
                                                <h3>College</h3>
                                            </div>
                                        </div>
                                        <p>College : {{$user->college}}</p>
                                        <p>From  : {{$user->school_start}}</p>
                                        <p>To : {{$user->school_end}}</p>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                    <div class="panel panel-default">
                                            <div class="panel-header">
                                                <h3>University</h3>
                                            </div>
                                        </div>
                                        <p>University : {{$user->university}}</p>
                                        <p>From  : {{$user->university_start}}</p>
                                        <p>To : {{$user->university_end}}</p>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="panel panel-default">
                                            <div class="panel-header">
                                                <h3>Religion and Relationship </h3>
                                            </div>
                                        </div>
                                        <p>Religion : {{$user->religion}}</p>
                                        <p>Relationship  : {{$user->relationship_status}}</p>
                                        <p>Date Of Birth : {{$user->DOB}}</p>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="panel panel-default">
                                            <div class="panel-header">
                                                <h3>Language Profficency  </h3>
                                            </div>
                                        </div>
                                            <p>{{$user->language_one}}</p>
                                            <p>{{$user->language_two}}</p>
                                            <p>{{$user->language_three}}</p>
                                    </div>
                                </div>
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