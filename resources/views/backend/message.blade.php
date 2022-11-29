@extends('master.backend_master.dashboard')

@section('dashboard-body')

<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-content">
					<h4 class="main-title">Messages</h4>
					<div class="row">
						<div class="col-lg-8">
							<div class="message-box">
								<div class="message-header">
									<div class="useravatar active">
										<img src="{{asset('backend/images/resources/friend-avatar.jpg"')}} alt="">
										<span>Oliver</span>
										<div class="status away"></div>
									</div>
									<div class="useravatar">
										<img src="{{asset('backend/images/resources/friend-avatar2.jpg')}}" alt="">
										<span>Sarah</span>
										<div class="status online"></div>
									</div>
									<div class="useravatar">
										<img src="{{asset('backend/images/resources/friend-avatar3.jpg')}}" alt="">
										<span>Andrew</span>
										<div class="status offline"></div>
									</div>
									<div class="useravatar">
										<img src="{{asset('backend/images/resources/friend-avatar4.jpg')}}" alt="">
										<span>Mikaly</span>
										<div class="status online"></div>
									</div>
									<div class="useravatar">
										<img src="{{asset('backend/images/resources/friend-avatar5.jpg')}}" alt="">
										<span>Bumsy</span>
										<div class="status away"></div>
									</div>
									<div class="useravatar">
										<img src="{{asset('backend/images/resources/friend-avatar.jpg')}}" alt="">
										<span>Harry</span>
										<div class="status offline"></div>
									</div>
									<div class="useravatar">
										<img src="{{asset('backend/images/resources/friend-avatar2.jpg')}}" alt="">
										<span>Laila</span>
										<div class="status offline"></div>
									</div>
									<div class="useravatar">
										<img src="{{asset('backend/images/resources/friend-avatar3.jpg')}}" alt="">
										<span>Noah</span>
										<div class="status offline"></div>
									</div>
									<div class="useravatar">
										<img src="{{asset('backend/images/resources/friend-avatar4.jpg')}}" alt="">
										<span>Maria</span>
										<div class="status offline"></div>
									</div>
									<div class="useravatar">
										<img src="{{asset('backend/images/resources/friend-avatar5.jpg')}}" alt="">
										<span>Ellie</span>
										<div class="status offline"></div>
									</div>
								</div>
								<div class="message-content">
									<div class="chat-header">
										<div class="status online"></div>
										<h6>last seen on today at 12:39</h6>
										<div class="corss">
											<span class="report"><i class="icofont-flag"></i></span>
											<span class="options"><i class="icofont-brand-flikr"></i></span>
										</div>
									</div>
									<div class="chat-content">
										<div class="date">Wednesday 25, March</div>
										<ul class="chatting-area">
											<li class="you">
												<figure><img src="{{asset('backend/images/resources/userlist-2.jpg')}}" alt=""></figure>
												<p>what's liz short for? :)</p>
											</li>
											<li class="me">
												<figure><img src="{{asset('backend/images/resources/userlist-1.jpg')}}" alt=""></figure>
												<p>Elizabeth lol</p>
											</li>
											<li class="me">
												<figure><img src="{{asset('backend/images/resources/userlist-1.jpg')}}" alt=""></figure>
												<p>wanna know whats my second guess was?</p>
											</li>
											<li class="you">
												<figure><img src="{{asset('backend/images/resources/userlist-2.jpg')}}" alt=""></figure>
												<p>yes</p>
											</li>
											<li class="me">
												<figure><img src="{{asset('backend/images/resources/userlist-1.jpg')}}" alt=""></figure>
												<p>Disney's the lizard king</p>
											</li>
											<li class="me">
												<figure><img src="{{asset('backend/images/resources/userlist-1.jpg')}}" alt=""></figure>
												<p>i know him 5 years ago</p>
											</li>
											<li class="you">
												<figure><img src="{{asset('backend/images/resources/userlist-2.jpg')}}" alt=""></figure>
												<p>coooooooooool dude ;)</p>
											</li>
										</ul>
										<div class="message-text-container">
											<div class="more-attachments">
												<i class="icofont-plus"></i>
											</div>
											<div class="attach-options">
												<a href="#" title=""><i class="icofont-camera"></i> Open Camera</a>
												<a href="#" title=""><i class="icofont-video-cam"></i> Photo & video Library</a>
												<a href="#" title=""><i class="icofont-paper-clip"></i> Attach Document</a>
												<a href="#" title=""><i class="icofont-location-pin"></i> Share Location</a>
												<a href="#" title=""><i class="icofont-contact-add"></i> Share Contact</a>
											</div>
											<form method="post">
												<span class="emojie"><img src="images/smiles/happy.png" alt=""></span>
												<textarea rows="1" placeholder="say someting..."></textarea>
												<button title="send"><i class="icofont-paper-plane"></i></button>
												<div class="smiles-bunch">
													<i><img src="{{asset('backend/images/smiles/angry-1.png')}}" alt=""></i>
													<i><img src="{{asset('backend/images/smiles/angry.png')}}" alt=""></i>
													<i><img src="{{asset('backend/images/smiles/bored-1.png')}}" alt=""></i>
													<i><img src="{{asset('backend/images/smiles/bored-2.png')}}" alt=""></i>
													<i><img src="{{asset('backend/images/smiles/bored.png')}}" alt=""></i>
													<i><img src="{{asset('backend/images/smiles/confused-1.png')}}" alt=""></i>
													<i><img src="{{asset('backend/images/smiles/confused.png')}}" alt=""></i>
													<i><img src="{{asset('backend/images/smiles/crying-1.png')}}" alt=""></i>
													<i><img src="{{asset('backend/images/smiles/crying.png')}}" alt=""></i>
													<i><img src="{{asset('backend/images/smiles/tongue-out.png')}}" alt=""></i>
													<i><img src="{{asset('backend/images/smiles/wink.png')}}" alt=""></i>
													<i><img src="{{asset('backend/images/smiles/suspicious.png')}}" alt=""></i>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="profile-short">
								<div class="chating-head">
									<div class="s-left">
										<h5>Sarah Martin</h5>
										<p>United States</p>
									</div>
									<div class="s-right">
										<span title="Call Video">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg></span>
										<span title="Call Audio">
											
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
										</span>
									</div>
								</div>
								<div class="short-intro">
									<figure><img src="images/resources/album1.jpg" alt=""></figure>
									<ul>
										<li>
											<span>Display Name</span>
											<p>Harry</p>
										</li>
										<li>
											<span>Local time</span>
											<p>3:40AM</p>
										</li>
										<li>
											<span>Email Address</span>
											<p>Sample@gmail.com</p>
										</li>
										<li>
											<span>Phone Number</span>
											<p>+1 223 509309</p>
										</li>
										<li>
											<span>Skype Id</span>
											<p>Sarah22</p>
										</li>
									</ul>
									<a class="button primary circle" href="#" title="">view Profile</a>
									<a class="button primary circle danger" href="#" title="">Block Chat</a>
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
							<figure><img src="{{asset('backend/images/resources/user1.jpg')}}" alt=""></figure>
							<div class="mesg-info">
								<span>Ibrahim Ahmed</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
						<li>
							<figure><img src="{{asset('backend/images/resources/user2.jpg')}}" alt=""></figure>
							<div class="mesg-info">
								<span>Fatima J.</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
						<li>
							<figure><img src="{{asset('backend/images/resources/user3.jpg')}}" alt=""></figure>
							<div class="mesg-info">
								<span>Fawad Ahmed</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
						<li>
							<figure><img src="{{asset('backend/images/resources/user4.jpg')}}" alt=""></figure>
							<div class="mesg-info">
								<span>Saim Turan</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
						<li>
							<figure><img src="{{asset('backend/images/resources/user5.jpg')}}" alt=""></figure>
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
							<figure><img src="{{asset('backend/images/resources/user5.jpg')}}" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">recommend your post</a>
							</div>
						</li>
						<li>
							<figure><img src="{{asset('backend/images/resources/user4.jpg')}}" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">share your post <strong>a good time today!</strong></a>
							</div>
						</li>
						<li>
							<figure><img src="{{asset('backend/images/resources/user2.jpg')}}" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">recommend your post</a>
							</div>
						</li>
						<li>
							<figure><img src="{{asset('backend/images/resources/user1.jpg')}}" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">share your post <strong>a good time today!</strong></a>
							</div>
						</li>
						<li>
							<figure><img src="{{asset('backend/images/resources/user3.jpg')}}" alt=""></figure>
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