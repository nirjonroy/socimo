@extends('master.backend_master.dashboard')

@section('dashboard-body')
<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-content">
					<h4 class="main-title">User Profile <i class="icofont-pen-alt-1"></i></h4>
					<div class="row merged20 mb-4">
						<div class="col-lg-4">
							<div class="d-widget text-center">
								<div class="user-avatar-edit">
									<figure><img src="images/resources/user-mockupbg.jpg" alt=""></figure>
									<div class="fileupload">
										<span class="btn-text">edit</span>
										<input type="file" class="upload">
									</div>
								</div>
								<div class="user-dp-edit">
									<figure>
										<img src="images/resources/admin.jpg" alt="">
											<div class="fileupload">
											<span class="btn-text"><i class="icofont-camera"></i></span>
											<input type="file" class="upload">
										</div>
									</figure>
									<div class="users-name">
										<h5>Madalyn Rascon</h5>
										<span>Developer Geek</span>
									</div>
								</div>
								<ul class="folowerss">
									<li><span>Posts</span> <i>345</i></li>
									<li><span>Followers</span> <i>256</i></li>
									<li><span>Follow</span> <i>123</i></li>
								</ul>
								<a class="button primary circle" href="#" title=""><i class="icofont-pen-alt-1"></i> Edit</a>
								<a class="button primary circle	danger" href="#" title=""><i class="icofont-ban"></i> Block</a>
							</div>	
							<div class="d-widget mt-4">
								<div class="d-widget-title"><h5>Social Links</h5></div>
								<div class="social-links">
									<i class="icofont-facebook"></i>
									<input type="text" placeholder="Facebook Profile">
									<em>Add your Facebook username (e.g. johndoe).</em>
								</div>
								<div class="social-links">
									<i class="icofont-instagram"></i>
									<input type="text" placeholder="Facebook Profile">
									<em>Add your Facebook username (e.g. johndoe).</em>
								</div>
								<div class="social-links">
									<i class="icofont-twitter"></i>
									<input type="text" placeholder="Facebook Profile">
									<em>Add your Facebook username (e.g. johndoe).</em>
								</div>
								<div class="social-links">
									<i class="icofont-pinterest"></i>
									<input type="text" placeholder="Facebook Profile">
									<em>Add your Facebook username (e.g. johndoe).</em>
								</div>
							</div>
						</div>
						<div class="col-lg-8">
							<nav class="responsive-tab style1">
								<ul data-submenu-title="compounents"
								uk-switcher="connect: #picturez ;animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium" class="uk-grid" uk-sticky="offset:50;media : @m">
									<li><a href="#">Timeline</a></li>
									<li><a href="#">Photos</a></li>
									<li><a href="#">Videos</a></li>
									<li><a href="#">followers</a></li>
									<li><a href="#">Products</a></li>
									<li><a href="#">Earnings</a></li>
									<li><a href="#">Settings</a></li>
								</ul>
							</nav>
							<ul class="uk-switcher" id="picturez">
								 <li>
								 	<div class="streamline">
										<div class="dash-item">
											<a href="#">
												<div class="sl-avatar ">
													<img alt="avatar" src="images/resources/small-pic5.png" class="img-responsive img-circle">
												</div>
												<div class="sl-content">
													<p class="inline-block"><span class="txt-success">Clay Masse</span><span>invited to join the meeting in the conference room at 9.45 am</span></p>
													<span class="">3 Min</span>
												</div>
											</a>
											<div class="edition-btn">
												<span class="iconbox button soft-primary"><i class="icofont-pen-alt-1"></i></span>
												<span class="iconbox button soft-danger"><i class="icofont-trash"></i></span>
											</div>
										</div>

										<div class="dash-item">
											<a href="#">
												<div class="sl-avatar ">
													<img alt="avatar" src="images/resources/small-pic4.png" class="img-responsive img-circle">
												</div>
												<div class="sl-content">
													<p class="inline-block"><span class="txt-success">Evie Ono</span><span>added three new photos in the library</span></p>
													<div class="activity-thumbnail">
														<img alt="posted-image" src="images/resources/speak-11.jpg">
														<img alt="posted-image" src="images/resources/speak-12.jpg">
													</div>
													<span class="">8 Min</span>
												</div>
											</a>
											<div class="edition-btn">
												<span class="iconbox button soft-primary"><i class="icofont-pen-alt-1"></i></span>
												<span class="iconbox button soft-danger"><i class="icofont-trash"></i></span>
											</div>
										</div>

										<div class="dash-item">
											<a href="#">
												<div class="sl-avatar ">
													<img alt="avatar" src="images/resources/small-pic2.png" class="img-responsive img-circle">
												</div>
												<div class="sl-content">
													<p class="inline-block"><span class="txt-success">madalyn rascon</span><span>assigned a new task</span></p>
													<span class="">28 Min</span>
												</div>
											</a>
											<div class="edition-btn">
												<span class="iconbox button soft-primary"><i class="icofont-pen-alt-1"></i></span>
												<span class="iconbox button soft-danger"><i class="icofont-trash"></i></span>
											</div>
										</div>

										<div class="dash-item">
											<a href="#">
												<div class="sl-avatar ">
													<img alt="avatar" src="images/resources/small-pic3.png" class="img-responsive img-circle">
												</div>
												<div class="sl-content">
													<p class="inline-block"><span class="txt-success">Ezequiel Merideth</span><span>completed project wireframes</span></p>
													<span class="">yesterday</span>
												</div>
											</a>
											<div class="edition-btn">
												<span class="iconbox button soft-primary"><i class="icofont-pen-alt-1"></i></span>
												<span class="iconbox button soft-danger"><i class="icofont-trash"></i></span>
											</div>
										</div>

										<div class="dash-item">
											<a href="#">
												<div class="sl-avatar ">
													<img alt="avatar" src="images/resources/small-pic1.png" class="img-responsive img-circle">
												</div>
												<div class="sl-content">
													<p class="inline-block"><span class="txt-success">jonnie metoyer</span><span>created a group 'Hencework' in the discussion forum</span></p>
													<span class="">18 feb</span>
												</div>
											</a>
											<div class="edition-btn">
												<span class="iconbox button soft-primary"><i class="icofont-pen-alt-1"></i></span>
												<span class="iconbox button soft-danger"><i class="icofont-trash"></i></span>
											</div>
										</div>
										<div class="sp sp-bars"></div>
									</div>	
								 </li>
								 <li>
								 	<div class="posted-photos">
									 	<div class="row merged-10" uk-lightbox="animation: scale">
											<div class="col-lg-3 col-md-4 col-sm-6">
												<figure>
													<a class="uk-inline" href="images/resources/album1.jpg" data-caption="Caption 1"><img src="images/resources/album1.jpg" alt="">
													</a>
												</figure>
											</div>
											<div class="col-lg-3 col-md-4 col-sm-6">
												<figure>
													<a class="uk-inline" href="images/resources/album2.jpg" data-caption="Caption 2"><img src="images/resources/album2.jpg" alt="">
													</a>
												</figure>
											</div>
											<div class="col-lg-3 col-md-4 col-sm-6">
												<figure>
													<a class="uk-inline" href="images/resources/album3.jpg" data-caption="Caption 3"><img src="images/resources/album3.jpg" alt="">
													</a>
												</figure>
											</div>
											<div class="col-lg-3 col-md-4 col-sm-6">
												<figure>
													<a class="uk-inline" href="images/resources/album4.jpg" data-caption="Caption 4"><img src="images/resources/album4.jpg" alt="">
													</a>
												</figure>
											</div>
											<div class="col-lg-3 col-md-4 col-sm-6">
												<figure>
													<a class="uk-inline" href="images/resources/album5.jpg" data-caption="Caption 5"><img src="images/resources/album5.jpg" alt="">
													</a>
												</figure>
											</div>
											<div class="col-lg-3 col-md-4 col-sm-6">
												<figure>
													<a class="uk-inline" href="images/resources/album6.jpg" data-caption="Caption 6"><img src="images/resources/album6.jpg" alt="">
													</a>
												</figure>
											</div>
											<div class="col-lg-3 col-md-4 col-sm-6">
												<figure>
													<a class="uk-inline" href="images/resources/album7.jpg" data-caption="Caption 7"><img src="images/resources/album7.jpg" alt="">
													</a>
												</figure>
											</div>
											<div class="col-lg-3 col-md-4 col-sm-6">
												<figure>
													<a class="uk-inline" href="images/resources/album8.jpg" data-caption="Caption 8"><img src="images/resources/album8.jpg" alt="">
													</a>
												</figure>
											</div>
											<div class="col-lg-3 col-md-4 col-sm-6">
												<figure>
													<a class="uk-inline" href="images/resources/album9.jpg" data-caption="Caption 8"><img src="images/resources/album9.jpg" alt="">
													</a>
												</figure>
											</div>
											<div class="col-lg-3 col-md-4 col-sm-6">
												<figure>
													<a class="uk-inline" href="images/resources/album5.jpg" data-caption="Caption 5"><img src="images/resources/album5.jpg" alt="">
													</a>
												</figure>
											</div>
											<div class="col-lg-3 col-md-4 col-sm-6">
												<figure>
													<a class="uk-inline" href="images/resources/album2.jpg" data-caption="Caption 2"><img src="images/resources/album2.jpg" alt="">
													</a>
												</figure>
											</div>
											<div class="col-lg-3 col-md-4 col-sm-6">
												<figure>
													<a class="uk-inline" href="images/resources/album4.jpg" data-caption="Caption 4"><img src="images/resources/album4.jpg" alt="">
													</a>
												</figure>
											</div>
										</div>
									</div>
								 </li>
								 <li>
								 	<div class="posted-photos">
									 	<div class="row merged-10" uk-lightbox="animation: scale">
											<div class="col-lg-4 col-md-6 col-sm-6">
												<div class="recent-media">
													<figure uk-lightbox="">
														<img alt="" src="images/resources/course-6.jpg">
														<a data-caption="YouTube" href="https://www.youtube.com/watch?v=YE7VzlLtp-4" class="play-btn"><i class="icofont-play"></i>
														</a>
														<span>Vu.Js Free Tutorial</span>
													</figure>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 col-sm-6">
												<div class="recent-media">
													<figure uk-lightbox="">
														<img alt="" src="images/resources/course-1.jpg">
														<a data-caption="YouTube" href="https://www.youtube.com/watch?v=YE7VzlLtp-4" class="play-btn"><i class="icofont-play"></i>
														</a>
														<span>Css3 2020 Tutorial</span>
													</figure>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 col-sm-6">
												<div class="recent-media">
													<figure uk-lightbox="">
														<img alt="" src="images/resources/course-3.jpg">
														<a data-caption="YouTube" href="https://www.youtube.com/watch?v=YE7VzlLtp-4" class="play-btn"><i class="icofont-play"></i>
														</a>
														<span>Advance Angular Tutorial</span>
													</figure>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 col-sm-6">
												<div class="recent-media">
													<figure uk-lightbox="">
														<img alt="" src="images/resources/course-4.jpg">
														<a data-caption="YouTube" href="https://www.youtube.com/watch?v=YE7VzlLtp-4" class="play-btn"><i class="icofont-play"></i>
														</a>
														<span>Css3 2020 Tutorial</span>
													</figure>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 col-sm-6">
												<div class="recent-media">
													<figure uk-lightbox="">
														<img alt="" src="images/resources/course-5.jpg">
														<a data-caption="YouTube" href="https://www.youtube.com/watch?v=YE7VzlLtp-4" class="play-btn"><i class="icofont-play"></i>
														</a>
														<span>Advance Wordress 2021</span>
													</figure>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 col-sm-6">
												<div class="recent-media">
													<figure uk-lightbox="">
														<img alt="" src="images/resources/course-6.jpg">
														<a data-caption="YouTube" href="https://www.youtube.com/watch?v=YE7VzlLtp-4" class="play-btn"><i class="icofont-play"></i>
														</a>
														<span>VU Js Best Video Course</span>
													</figure>
												</div>
											</div>
										</div>
									</div>
								 </li>
								 <li>
								 	<div class="row col-xs-6 merged-10">
										<div class="col-lg-4 col-md-4 col-sm-6">
											<div class="friendz">
												<figure><img src="images/resources/speak-1.jpg" alt=""></figure>
												<span><a href="#" title="">Amy Watson</a></span>
												<ins>Bz University, Pakistan</ins>
												<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-6">
											<div class="friendz">
												<figure><img src="images/resources/speak-2.jpg" alt=""></figure>
												<span><a href="#" title="">Muhammad Khan</a></span>
												<ins>Oxford University, UK</ins>
												<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-6">
											<div class="friendz">
												<figure><img src="images/resources/speak-3.jpg" alt=""></figure>
												<span><a href="#" title="">Sadia Gill</a></span>
												<ins>Wb University, USA</ins>
												<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-6">
											<div class="friendz">
												<figure><img src="images/resources/speak-4.jpg" alt=""></figure>
												<span><a href="#" title="">Rjapal</a></span>
												<ins>Km University, India</ins>
												<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-6">
											<div class="friendz">
												<figure><img src="images/resources/speak-5.jpg" alt=""></figure>
												<span><a href="#" title="">Amy watson</a></span>
												<ins>Oxford University, UK</ins>
												<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-6">
											<div class="friendz">
												<figure><img src="images/resources/speak-6.jpg" alt=""></figure>
												<span><a href="#" title="">Bob Frank</a></span>
												<ins>WB University, Canada</ins>
												<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-6">
											<div class="friendz">
												<figure><img src="images/resources/speak-7.jpg" alt=""></figure>
												<span><a href="#" title="">Amy Watson</a></span>
												<ins>Bz University, Pakistan</ins>
												<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-6">
											<div class="friendz">
												<figure><img src="images/resources/speak-8.jpg" alt=""></figure>
												<span><a href="#" title="">Muhammad Khan</a></span>
												<ins>Oxford University, UK</ins>
												<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-6">
											<div class="friendz">
												<figure><img src="images/resources/speak-9.jpg" alt=""></figure>
												<span><a href="#" title="">Sadia Gill</a></span>
												<ins>WB University, USA</ins>
												<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="sp sp-bars"></div>
										</div>
									</div>
								 </li>
								 <li>
								 	<table class="table table-default uk-table-striped">
									 	<thead>
											<tr>
												<th>Invoce#</th>
												<th>Date</th>
												<th>Item Name</th>
												<th>Item Sales</th>
												<th>Earning</th>
												<th>Options</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>001</td>
												<td>01 jan, 2020</td>
												<td><b>PHP Online Course</b></td>
												<td>03</td>
												<td>$199</td>
												<td>
													<span class="iconbox button soft-primary"><i class="icofont-pen-alt-1"></i></span>
													<span class="iconbox button soft-danger"><i class="icofont-trash"></i></span>
												</td>
											</tr>
											<tr>
												<td>002</td>
												<td>02 Feb,2020</td>
												<td><b>Holly Bilble</b></td>
												<td>02</td>
												<td>$299</td>
												<td>
													<span class="iconbox button soft-primary"><i class="icofont-pen-alt-1"></i></span>
													<span class="iconbox button soft-danger"><i class="icofont-trash"></i></span>
												</td>
											</tr>
											<tr>
												<td>003</td>
												<td>04 Feb,2020</td>
												<td><b>Advance Laravel Videos</b></td>
												<td>06</td>
												<td>$449</td>
												<td>
													<span class="iconbox button soft-primary"><i class="icofont-pen-alt-1"></i></span>
													<span class="iconbox button soft-danger"><i class="icofont-trash"></i></span>
												</td>
											</tr>
											<tr>
												<td>004</td>
												<td>12 March,2020</td>
												<td><b>New Vu.js Bascis</b></td>
												<td>20</td>
												<td>$849</td>
												<td>
													<span class="iconbox button soft-primary"><i class="icofont-pen-alt-1"></i></span>
													<span class="iconbox button soft-danger"><i class="icofont-trash"></i></span>
												</td>
											</tr>
											<tr>
												<td>005</td>
												<td>04 April,2020</td>
												<td><b>Advance HTML5 Scripts</b></td>
												<td>06</td>
												<td>$449</td>
												<td>
													<span class="iconbox button soft-primary"><i class="icofont-pen-alt-1"></i></span>
													<span class="iconbox button soft-danger"><i class="icofont-trash"></i></span>
												</td>
											</tr>
										</tbody>
									 </table>
								 </li>
								 <li>
								 	<div class="total-sales">
									 	<div class="row">
											<div class="col-lg-6">
												<div class="earning-box">
													<span>Sales earnings this month (October), after associated author fees, & before taxes:</span>
													<h5>$330.29</h5>
													<h6>Net Sales</h6>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="earning-box">
													<span>Total value of your sales, with associated author fees, before taxes:</span>
													<h5>$660.60</h5>
													<h6>Gross Sales</h6>
												</div>
											</div>
										</div>
									 </div>
									 <div class="d-widget mt-4">
										<div class="d-widget-title">
											<h5>Your Sales By Countries</h5>
										</div>
										<table class="table top-countries table-default table-striped">
											<thead>
												<tr>
													<th>Countries</th>
													<th>Item Sales</th>
													<th>This Month</th>
													<th>Last Month</th>
													<th>Total</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><figure><img src="images/flags/001-united-kingdom.png" alt=""></figure> <span>England</span></td>
													<td>$20</td>
													<td>$40</td>
													<td>$120</td>
													<td>$1220</td>
												</tr>
												<tr>
													<td><figure><img src="images/flags/002-united-states.png" alt=""></figure> <span>United States</span></td>
													<td>$40</td>
													<td>$40</td>
													<td>$120</td>
													<td>$1220</td>
												</tr>
												<tr>
													<td><figure><img src="images/flags/003-france.png" alt=""></figure> <span>France</span></td>
													<td>$40</td>
													<td>$60</td>
													<td>$30</td>
													<td>$120</td>
												</tr>
												<tr>
													<td><figure><img src="images/flags/004-germany.png" alt=""></figure> <span>Germany</span></td>
													<td>$150</td>
													<td>$200</td>
													<td>$2770</td>
													<td>$8720</td>
												</tr>
												<tr>
													<td><figure><img src="images/flags/005-spain.png" alt=""></figure> <span>Spain</span></td>
													<td>$130</td>
													<td>$640</td>
													<td>$820</td>
													<td>$2210</td>
												</tr>
												<tr>
													<td><figure><img src="images/flags/006-china.png" alt=""></figure> <span>China</span></td>
													<td>$12</td>
													<td>$654</td>
													<td>$7798</td>
													<td>$9920</td>
												</tr>
												<tr>
													<td><figure><img src="images/flags/007-italy.png" alt=""></figure> <span>Italy</span></td>
													<td>$987</td>
													<td>$232</td>
													<td>$567</td>
													<td>$9862</td>
												</tr>
												<tr>
													<td><figure><img src="images/flags/008-japan.png" alt=""></figure> <span>Japan</span></td>
													<td>$486</td>
													<td>$239</td>
													<td>$233</td>
													<td>$1520</td>
												</tr>
											</tbody>
										</table>
									</div>
								 </li>
								 <li>
									<div class="uk-width">
										<div class="setting-card">
											<h2>Notification</h2>
											<p class="mb-4">Notifications - Choose when and how to be notified.</p>
											<h6>Choose when and how to be notified</h6>
											<div class="seting-mode">
												<input type="checkbox" hidden="hidden" id="switch1">
												<label class="switch" for="switch1"></label>
												<i class="icofont-substitute"></i> <span>Subscriptions</span>
												<p>Notify me about activity from the profiles I'm subscribed to</p>
											</div>
											<div class="seting-mode">
												<input type="checkbox" hidden="hidden" id="switch2">
												<label class="switch" for="switch2"></label>
												<i class="icofont-at"></i> <span>Recommended Researches </span>
												<p>Notify me of courses I might like based on what I watch</p>
											</div>
											<div class="seting-mode">
												<input type="checkbox" hidden="hidden" id="switch3">
												<label class="switch" for="switch3"></label>
												<i class="icofont-comment"></i> <span> Active Comments</span> 
												<p>Notify me about activity on my comments on others’ courses</p>
											</div>
											<div class="seting-mode">
												<input type="checkbox" hidden="hidden" id="switch4">
												<label class="switch" for="switch4"></label>
												<i class="icofont-reply"></i> <span>Reply to My comments </span>
												<p>Notify me about replies to my comments</p>
											</div>
											<h6>Email Notifications</h6>
											<div class="seting-mode">
												<input type="checkbox" hidden="hidden" id="switch5">
												<label class="switch" for="switch5"></label>
												<i class="icofont-email"></i> <span>Send me Emails about akedimc activity and updates</span> 
												<p>If this setting is turned off, socimo may still send you messages regarding your account, required service announcements, legal notifications, and privacy matters</p>
											</div>
											<div class="seting-mode">
												<input type="checkbox" hidden="hidden" id="switch6">
												<label class="switch" for="switch6"></label>
												<i class="icofont-foot-print"></i> <span>Promotional and helpful Recommendations</span>
												<p>Send me any promotional and recommendation email from akedemic</p>
											</div>
											<div class="seting-mode">
												<input type="checkbox" hidden="hidden" id="switch7">
												<label class="switch" for="switch7"></label>
												<i class="icofont-search-stock"></i> <span>Show your profile on search engine.</span> 
												<p>If this setting is turned off, socimo may still send you messages regarding your account, required service announcements, legal notifications, and privacy matters</p>
											</div>
											<div class="seting-mode">
												<input type="checkbox" hidden="hidden" id="switch8">
												<label class="switch" for="switch8"></label>
												<i class="icofont-users-social"></i> <span>Show Your followers on your timeline.</span> 
												<p>Send me any promotional and recommendation email from akedemic</p>
											</div>
											<div class="seting-mode">
												<input type="checkbox" hidden="hidden" id="switch9">
												<label class="switch" for="switch9"></label>
												<i class="icofont-read-book-alt"></i> <span>Show your courses and researches. </span>
												<p>Send me any promotional and recommendation email from akedemic</p>
											</div>
										</div>
									</div>
                                </li>
							</ul>
							<a href="#" title="" class="button primary circle mt-5">Save Changes</a>
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