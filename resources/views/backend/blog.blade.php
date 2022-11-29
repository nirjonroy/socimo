@extends('master.backend_master.dashboard')

@section('dashboard-body')
<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-content">
					<div class="title-content">
						<h4 class="main-title">Blog Posts</h4>
						<form method="post" class="search-box">
							<input type="text" placeholder="search">
							<button type="submit"><i class="icofont-search"></i></button>
						</form>
					</div>	
					<div class="row merged-10">
						<div class="col-lg-8 col-md-12 col-sm-12">
							<div class="blog-item"> 
								<img alt="" src="images/resources/blog-large.jpg">
								<div class="more-opt">
									<span><i class="icofont-dotted-down"></i></span>
									<ul>
										<li><a href="#" title=""><i class="icofont-pen-alt-1"></i> Edit</a></li>
										<li><a href="#" title=""><i class="icofont-ban"></i> Block</a></li>
										<li><a href="#" title=""><i class="icofont-trash"></i> Delete</a></li>
									</ul>
								</div>
								<div class="blog-item-meta">
									<h4><a href="#" title="">New Movie Review & Spoilers</a></h4>
									<p>At sem sed arcu elementum aliquam. Curabitur non ligula</p>
									<ul>
										<li><i class="icofont-eye-alt"></i> <span>43K</span></li>
										<li><i class="icofont-comment"></i> <span>393</span></li>
										<li><i class="icofont-like"></i> <span>50k</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="row merged-10">
								<div class="col-lg-12 col-md-6">
									<div class="mb-3 blog-item"> 
										<img alt="" src="images/resources/blog-grid.jpg">
										<div class="more-opt">
											<span><i class="icofont-dotted-down"></i></span>
											<ul>
												<li><a href="#" title=""><i class="icofont-pen-alt-1"></i> Edit</a></li>
												<li><a href="#" title=""><i class="icofont-ban"></i> Block</a></li>
												<li><a href="#" title=""><i class="icofont-trash"></i> Delete</a></li>
											</ul>
										</div>
										<div class="blog-item-meta">
											<h4><a href="#" title="">New Movie Review & Spoilers</a></h4>
											<p>At sem sed arcu elementum aliquam. Curabitur non ligula</p>
											<ul>
												<li><i class="icofont-eye-alt"></i> <span>67K</span></li>
												<li><i class="icofont-comment"></i> <span>33</span></li>
												<li><i class="icofont-like"></i> <span>32k</span></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-6">
									<div class="blog-item"> 
										<img alt="" src="images/resources/blog-grid2.jpg">
										<div class="more-opt">
											<span><i class="icofont-dotted-down"></i></span>
											<ul>
												<li><a href="#" title=""><i class="icofont-pen-alt-1"></i> Edit</a></li>
												<li><a href="#" title=""><i class="icofont-ban"></i> Block</a></li>
												<li><a href="#" title=""><i class="icofont-trash"></i> Delete</a></li>
											</ul>
										</div>
										<div class="blog-item-meta">
											<h4><a href="#" title="">New Movie Review & Spoilers</a></h4>
											<p>At sem sed arcu elementum aliquam. Curabitur non ligula</p>
											<ul>
												<li><i class="icofont-eye-alt"></i> <span>20K</span></li>
												<li><i class="icofont-comment"></i> <span>653</span></li>
												<li><i class="icofont-like"></i> <span>34k</span></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="mt-4 blog-item"> 
								<img alt="" src="images/resources/blog-grid3.jpg">
								<div class="more-opt">
									<span><i class="icofont-dotted-down"></i></span>
									<ul>
										<li><a href="#" title=""><i class="icofont-pen-alt-1"></i> Edit</a></li>
										<li><a href="#" title=""><i class="icofont-ban"></i> Block</a></li>
										<li><a href="#" title=""><i class="icofont-trash"></i> Delete</a></li>
									</ul>
								</div>
								<div class="blog-item-meta">
									<h4><a href="#" title="">New Movie Review & Spoilers</a></h4>
									<p>At sem sed arcu elementum aliquam. Curabitur non ligula</p>
									<ul>
										<li><i class="icofont-eye-alt"></i> <span>23K</span></li>
										<li><i class="icofont-comment"></i> <span>234</span></li>
										<li><i class="icofont-like"></i> <span>49k</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="mt-4 blog-item"> 
								<img alt="" src="images/resources/blog-grid4.jpg">
								<div class="more-opt">
									<span><i class="icofont-dotted-down"></i></span>
									<ul>
										<li><a href="#" title=""><i class="icofont-pen-alt-1"></i> Edit</a></li>
										<li><a href="#" title=""><i class="icofont-ban"></i> Block</a></li>
										<li><a href="#" title=""><i class="icofont-trash"></i> Delete</a></li>
									</ul>
								</div>
								<div class="blog-item-meta">
									<h4><a href="#" title="">New Movie Review & Spoilers</a></h4>
									<p>At sem sed arcu elementum aliquam. Curabitur non ligula</p>
									<ul>
										<li><i class="icofont-eye-alt"></i> <span>32K</span></li>
										<li><i class="icofont-comment"></i> <span>12</span></li>
										<li><i class="icofont-like"></i> <span>10k</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="mt-4 blog-item"> 
								<img alt="" src="images/resources/blog-grid5.jpg">
								<div class="more-opt">
									<span><i class="icofont-dotted-down"></i></span>
									<ul>
										<li><a href="#" title=""><i class="icofont-pen-alt-1"></i> Edit</a></li>
										<li><a href="#" title=""><i class="icofont-ban"></i> Block</a></li>
										<li><a href="#" title=""><i class="icofont-trash"></i> Delete</a></li>
									</ul>
								</div>
								<div class="blog-item-meta">
									<h4><a href="#" title="">New Movie Review & Spoilers</a></h4>
									<p>At sem sed arcu elementum aliquam. Curabitur non ligula</p>
									<ul>
										<li><i class="icofont-eye-alt"></i> <span>60K</span></li>
										<li><i class="icofont-comment"></i> <span>987</span></li>
										<li><i class="icofont-like"></i> <span>12k</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="mt-4 blog-item"> 
								<img alt="" src="images/resources/blog-grid6.jpg">
								<div class="more-opt">
									<span><i class="icofont-dotted-down"></i></span>
									<ul>
										<li><a href="#" title=""><i class="icofont-pen-alt-1"></i> Edit</a></li>
										<li><a href="#" title=""><i class="icofont-ban"></i> Block</a></li>
										<li><a href="#" title=""><i class="icofont-trash"></i> Delete</a></li>
									</ul>
								</div>
								<div class="blog-item-meta">
									<h4><a href="#" title="">New Movie Review & Spoilers</a></h4>
									<p>At sem sed arcu elementum aliquam. Curabitur non ligula</p>
									<ul>
										<li><i class="icofont-eye-alt"></i> <span>23K</span></li>
										<li><i class="icofont-comment"></i> <span>103</span></li>
										<li><i class="icofont-like"></i> <span>98k</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="mt-4 blog-item"> 
								<img alt="" src="images/resources/blog-grid7.jpg">
								<div class="more-opt">
									<span><i class="icofont-dotted-down"></i></span>
									<ul>
										<li><a href="#" title=""><i class="icofont-pen-alt-1"></i> Edit</a></li>
										<li><a href="#" title=""><i class="icofont-ban"></i> Block</a></li>
										<li><a href="#" title=""><i class="icofont-trash"></i> Delete</a></li>
									</ul>
								</div>
								<div class="blog-item-meta">
									<h4><a href="#" title="">New Movie Review & Spoilers</a></h4>
									<p>At sem sed arcu elementum aliquam. Curabitur non ligula</p>
									<ul>
										<li><i class="icofont-eye-alt"></i> <span>30K</span></li>
										<li><i class="icofont-comment"></i> <span>390</span></li>
										<li><i class="icofont-like"></i> <span>23k</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="mt-4 blog-item"> 
								<img alt="" src="images/resources/blog-grid8.jpg">
								<div class="more-opt">
									<span><i class="icofont-dotted-down"></i></span>
									<ul>
										<li><a href="#" title=""><i class="icofont-pen-alt-1"></i> Edit</a></li>
										<li><a href="#" title=""><i class="icofont-ban"></i> Block</a></li>
										<li><a href="#" title=""><i class="icofont-trash"></i> Delete</a></li>
									</ul>
								</div>
								<div class="blog-item-meta">
									<h4><a href="#" title="">New Movie Review & Spoilers</a></h4>
									<p>At sem sed arcu elementum aliquam. Curabitur non ligula</p>
									<ul>
										<li><i class="icofont-eye-alt"></i> <span>20K</span></li>
										<li><i class="icofont-comment"></i> <span>33</span></li>
										<li><i class="icofont-like"></i> <span>5k</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-12 mt-5">
							<div class="sp sp-bars"></div>
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