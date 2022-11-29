@extends('master.frontend_master.master')

@section('title')
    Videos
@endsection

@section('main-body')

    <section>
        <div class="gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="page-contents" class="row merged20">
                            <div class="col-lg-3">
                                <aside class="sidebar static left">
                                    <div class="widget stick-widget ">
                                        <h4 class="widget-title">Watch</h4>
                                        <form class="video-search" method="post">
                                            <i class="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></i>
                                            <input type="text" placeholder="Search Video">
                                            <button type="submit"></button>
                                        </form>
                                        <ul class="video-links">
                                            <li>
                                                <a href="#" title=""><i class=""><svg class="feather feather-home" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></i> Home</a>
                                            </li>
                                            <li>
                                                <a href="#" title=""><i class=""><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"/><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"/></svg></i> Latest</a>
                                            </li>
                                            <li>
                                                <a href="#" title=""><i class=""><svg class="feather feather-zap" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></i> Trending</a>
                                            </li>
                                            <li>
                                                <a href="#" title=""><i class="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mic"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line></svg></i> Live</a>
                                            </li>
                                            <li>
                                                <a href="#" title=""><i class="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg></i> Saved Videos</a>
                                            </li>
                                        </ul>
                                        <h4 class="main-title"><i class="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg></i> Your Watch List</h4>
                                        <ul class="watchlist">
                                            <li class="unread">
                                                <figure><img src="images/resources/user2.jpg" alt=""></figure>
                                                <a href="#" title="">Rosie Garebal</a>
                                                <span class="new-highlight"></span>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/user3.jpg" alt=""></figure>
                                                <a href="#" title="">Danial Cabral</a>
                                                <span class="new-highlight"></span>
                                            </li>
                                            <li class="unread">
                                                <figure><img src="images/resources/user4.jpg" alt=""></figure>
                                                <a href="#" title="">William John</a>
                                                <span class="new-highlight"></span>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/user5.jpg" alt=""></figure>
                                                <a href="#" title="">Adrew Jane</a>
                                                <span class="new-highlight"></span>
                                            </li>
                                            <li class="unread">
                                                <figure><img src="images/resources/user1.jpg" alt=""></figure>
                                                <a href="#" title="">Billgates</a>
                                                <span class="new-highlight"></span>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/user2.jpg" alt=""></figure>
                                                <a href="#" title="">Rita Arvind</a>
                                                <span class="new-highlight"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-lg-9">
                                <div class="main-wraper">
                                    <div class="main-title">Latest Videos</div>
                                    <div class="main-wraper">
                                        <div class="user-post video">
                                            <div class="friend-info">
                                                <figure>
                                                    <img alt="" src="images/resources/user1.jpg">
                                                </figure>
                                                <div class="friend-name">
                                                    <div class="more">
                                                        <div class="more-post-optns">
                                                            <i class="">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></i>
                                                            <ul>
                                                                <li>
                                                                    <i class="icofont-pen-alt-1"></i>Edit Post
                                                                    <span>Edit This Post within a Hour</span>
                                                                </li>
                                                                <li>
                                                                    <i class="icofont-ban"></i>Hide Post
                                                                    <span>Hide This Post</span>
                                                                </li>
                                                                <li>
                                                                    <i class="icofont-ui-delete"></i>Delete Post
                                                                    <span>If inappropriate Post By Mistake</span>
                                                                </li>
                                                                <li>
                                                                    <i class="icofont-flag"></i>Report
                                                                    <span>Inappropriate content</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ins><a title="" href="time-line.html">Jack Carter</a> Upload video <em><a class="folow" href="#" title="">Follow</a></em></ins>
                                                    <span><i class="icofont-globe"></i> published: Sep,15 2020</span>
                                                </div>
                                                <div class="post-meta">
                                                    <h4>When your private pictures are used against you</h4>
                                                    <p>A film about a secret of a housewife which is revealed on her 3rd Wedding Anniversary</p>
                                                    <iframe height="400" src="https://www.youtube.com/embed/zdow47FQRfQ" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    <div class="we-video-info">
                                                        <ul>
                                                            <li>
																<span title="views" class="views">
																	<i>
	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></i>
																	<ins>1.2k</ins>
																</span>
                                                            </li>
                                                            <li>
																<span title="Comments" class="Recommend">
																	<i>
	<svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></i>
																	<ins>54</ins>
																</span>

                                                            </li>
                                                            <li>
																<span title="follow" class="Follow">
																	<i>
	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></i>
																<ins>5k</ins>
																</span>
                                                            </li>
                                                            <li>
																<span class="share-pst" title="Share">
																	<i>
	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></i>
																<ins>205</ins>
																</span>
                                                            </li>
                                                        </ul>
                                                        <a href="post-detail.html" title="" class="reply">Reply <i class="icofont-reply"></i></a>
                                                    </div>
                                                    <div class="stat-tools">
                                                        <div class="box">
                                                            <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
                                                                <div class="Emojis">
                                                                    <div class="Emoji Emoji--like">
                                                                        <div class="icon icon--like"></div>
                                                                    </div>
                                                                    <div class="Emoji Emoji--love">
                                                                        <div class="icon icon--heart"></div>
                                                                    </div>
                                                                    <div class="Emoji Emoji--haha">
                                                                        <div class="icon icon--haha"></div>
                                                                    </div>
                                                                    <div class="Emoji Emoji--wow">
                                                                        <div class="icon icon--wow"></div>
                                                                    </div>
                                                                    <div class="Emoji Emoji--sad">
                                                                        <div class="icon icon--sad"></div>
                                                                    </div>
                                                                    <div class="Emoji Emoji--angry">
                                                                        <div class="icon icon--angry"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box">
                                                            <div class="Emojis">
                                                                <div class="Emoji Emoji--like">
                                                                    <div class="icon icon--like"></div>
                                                                </div>
                                                                <div class="Emoji Emoji--love">
                                                                    <div class="icon icon--heart"></div>
                                                                </div>
                                                                <div class="Emoji Emoji--haha">
                                                                    <div class="icon icon--haha"></div>
                                                                </div>
                                                                <div class="Emoji Emoji--wow">
                                                                    <div class="icon icon--wow"></div>
                                                                </div>
                                                                <div class="Emoji Emoji--sad">
                                                                    <div class="icon icon--sad"></div>
                                                                </div>
                                                                <div class="Emoji Emoji--angry">
                                                                    <div class="icon icon--angry"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
                                                        <a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
                                                        <div class="emoji-state">
                                                            <div class="popover_wrapper">
                                                                <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/thumb.png"></a>
                                                                <div class="popover_content">
                                                                    <span><img alt="" src="images/smiles/thumb.png"> Likes</span>
                                                                    <ul class="namelist">
                                                                        <li>Jhon Doe</li>
                                                                        <li>Amara Sin</li>
                                                                        <li>Sarah K.</li>
                                                                        <li><span>20+ more</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="popover_wrapper">
                                                                <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/heart.png"></a>
                                                                <div class="popover_content">
                                                                    <span><img alt="" src="images/smiles/heart.png"> Love</span>
                                                                    <ul class="namelist">
                                                                        <li>Amara Sin</li>
                                                                        <li>Jhon Doe</li>
                                                                        <li><span>10+ more</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="popover_wrapper">
                                                                <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/smile.png"></a>
                                                                <div class="popover_content">
                                                                    <span><img alt="" src="images/smiles/smile.png"> Happy</span>
                                                                    <ul class="namelist">
                                                                        <li>Sarah K.</li>
                                                                        <li>Jhon Doe</li>
                                                                        <li>Amara Sin</li>
                                                                        <li><span>100+ more</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="popover_wrapper">
                                                                <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/weep.png"></a>
                                                                <div class="popover_content">
                                                                    <span><img alt="" src="images/smiles/weep.png"> Dislike</span>
                                                                    <ul class="namelist">
                                                                        <li>Danial Carbal</li>
                                                                        <li>Amara Sin</li>
                                                                        <li>Sarah K.</li>
                                                                        <li><span>15+ more</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <p>10+</p>
                                                        </div>
                                                        <div class="new-comment" style="display: none;">
                                                            <form method="post">
                                                                <input type="text" placeholder="write comment">
                                                                <button type="submit"><i class="icofont-paper-plane"></i></button>
                                                            </form>
                                                            <div class="comments-area">
                                                                <ul>
                                                                    <li>
                                                                        <figure><img alt="" src="images/resources/user1.jpg"></figure>
                                                                        <div class="commenter">
                                                                            <h5><a title="" href="#">Jack Carter</a></h5>
                                                                            <span>2 hours ago</span>
                                                                            <p>
                                                                                i think that some how, we learn who we really are and then live with that decision, great post!
                                                                            </p>
                                                                            <span>you can view the more detail via link</span>
                                                                            <a title="" href="https://www.youtube.com/watch?v=HpZgwHU1GcI" target="_blank">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
                                                                        </div>
                                                                        <a title="Like" href="#"><i class="icofont-heart"></i></a>
                                                                        <a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <figure><img alt="" src="images/resources/user2.jpg"></figure>
                                                                        <div class="commenter">
                                                                            <h5><a title="" href="#">Ching xang</a></h5>
                                                                            <span>2 hours ago</span>
                                                                            <p>
                                                                                i think that some how, we learn who we really are and then live with that decision, great post!

                                                                            </p>
                                                                        </div>
                                                                        <a title="Like" href="#"><i class="icofont-heart"></i></a>
                                                                        <a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- share youtube video -->
                                    <div class="main-wraper">
                                        <div class="user-post video">
                                            <div class="friend-info">
                                                <figure>
                                                    <img alt="" src="images/resources/user2.jpg">
                                                </figure>
                                                <div class="friend-name">
                                                    <div class="more">
                                                        <div class="more-post-optns">
                                                            <i class="">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></i>
                                                            <ul>
                                                                <li>
                                                                    <i class="icofont-pen-alt-1"></i>Edit Post
                                                                    <span>Edit This Post within a Hour</span>
                                                                </li>
                                                                <li>
                                                                    <i class="icofont-ban"></i>Hide Post
                                                                    <span>Hide This Post</span>
                                                                </li>
                                                                <li>
                                                                    <i class="icofont-ui-delete"></i>Delete Post
                                                                    <span>If inappropriate Post By Mistake</span>
                                                                </li>
                                                                <li>
                                                                    <i class="icofont-flag"></i>Report
                                                                    <span>Inappropriate content</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ins><a title="" href="time-line.html">Farhea</a> Shared Vimeo Link <em><a href="#" title="">Follow</a></em></ins>
                                                    <span><i class="icofont-globe"></i> published: Sep,15 2020</span>
                                                </div>
                                                <div class="post-meta">
                                                    <h4>Hypoglycemia | Endocrinology Medicine Lectures | Medical Online Education | V-Learning</h4>
                                                    <p>A film about a secret of a housewife which is revealed on her 3rd Wedding Anniversary</p>
                                                    <iframe src="https://player.vimeo.com/video/464733913" height="350" allow="autoplay; fullscreen" allowfullscreen></iframe>
                                                    <div class="we-video-info">
                                                        <ul>
                                                            <li>
																<span title="views" class="views">
																	<i>
	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></i>
																	<ins>1.2k</ins>
																</span>
                                                            </li>
                                                            <li>
																<span title="Comments" class="Recommend">
																	<i>
	<svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></i>
																	<ins>54</ins>
																</span>

                                                            </li>
                                                            <li>
																<span title="follow" class="Follow">
																	<i>
	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></i>
																<ins>5k</ins>
																</span>
                                                            </li>
                                                            <li>
																<span class="share-pst" title="Share">
																	<i>
	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></i>
																<ins>205</ins>
																</span>
                                                            </li>
                                                        </ul>
                                                        <a href="post-detail.html" title="" class="reply">Reply <i class="icofont-reply"></i></a>
                                                    </div>
                                                    <div class="stat-tools">
                                                        <div class="box">
                                                            <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
                                                                <div class="Emojis">
                                                                    <div class="Emoji Emoji--like">
                                                                        <div class="icon icon--like"></div>
                                                                    </div>
                                                                    <div class="Emoji Emoji--love">
                                                                        <div class="icon icon--heart"></div>
                                                                    </div>
                                                                    <div class="Emoji Emoji--haha">
                                                                        <div class="icon icon--haha"></div>
                                                                    </div>
                                                                    <div class="Emoji Emoji--wow">
                                                                        <div class="icon icon--wow"></div>
                                                                    </div>
                                                                    <div class="Emoji Emoji--sad">
                                                                        <div class="icon icon--sad"></div>
                                                                    </div>
                                                                    <div class="Emoji Emoji--angry">
                                                                        <div class="icon icon--angry"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box">
                                                            <div class="Emojis">
                                                                <div class="Emoji Emoji--like">
                                                                    <div class="icon icon--like"></div>
                                                                </div>
                                                                <div class="Emoji Emoji--love">
                                                                    <div class="icon icon--heart"></div>
                                                                </div>
                                                                <div class="Emoji Emoji--haha">
                                                                    <div class="icon icon--haha"></div>
                                                                </div>
                                                                <div class="Emoji Emoji--wow">
                                                                    <div class="icon icon--wow"></div>
                                                                </div>
                                                                <div class="Emoji Emoji--sad">
                                                                    <div class="icon icon--sad"></div>
                                                                </div>
                                                                <div class="Emoji Emoji--angry">
                                                                    <div class="icon icon--angry"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
                                                        <a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
                                                        <div class="emoji-state">
                                                            <div class="popover_wrapper">
                                                                <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/thumb.png"></a>
                                                                <div class="popover_content">
                                                                    <span><img alt="" src="images/smiles/thumb.png"> Likes</span>
                                                                    <ul class="namelist">
                                                                        <li>Jhon Doe</li>
                                                                        <li>Amara Sin</li>
                                                                        <li>Sarah K.</li>
                                                                        <li><span>20+ more</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="popover_wrapper">
                                                                <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/heart.png"></a>
                                                                <div class="popover_content">
                                                                    <span><img alt="" src="images/smiles/heart.png"> Love</span>
                                                                    <ul class="namelist">
                                                                        <li>Amara Sin</li>
                                                                        <li>Jhon Doe</li>
                                                                        <li><span>10+ more</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="popover_wrapper">
                                                                <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/smile.png"></a>
                                                                <div class="popover_content">
                                                                    <span><img alt="" src="images/smiles/smile.png"> Happy</span>
                                                                    <ul class="namelist">
                                                                        <li>Sarah K.</li>
                                                                        <li>Jhon Doe</li>
                                                                        <li>Amara Sin</li>
                                                                        <li><span>100+ more</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="popover_wrapper">
                                                                <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/weep.png"></a>
                                                                <div class="popover_content">
                                                                    <span><img alt="" src="images/smiles/weep.png"> Dislike</span>
                                                                    <ul class="namelist">
                                                                        <li>Danial Carbal</li>
                                                                        <li>Amara Sin</li>
                                                                        <li>Sarah K.</li>
                                                                        <li><span>15+ more</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <p>10+</p>
                                                        </div>
                                                        <div class="new-comment" style="display: none;">
                                                            <form method="post">
                                                                <input type="text" placeholder="write comment">
                                                                <button type="submit"><i class="icofont-paper-plane"></i></button>
                                                            </form>
                                                            <div class="comments-area">
                                                                <ul>
                                                                    <li>
                                                                        <figure><img alt="" src="images/resources/user1.jpg"></figure>
                                                                        <div class="commenter">
                                                                            <h5><a title="" href="#">Jack Carter</a></h5>
                                                                            <span>2 hours ago</span>
                                                                            <p>
                                                                                i think that some how, we learn who we really are and then live with that decision, great post!
                                                                            </p>
                                                                            <span>you can view the more detail via link</span>
                                                                            <a title="" href="https://www.youtube.com/watch?v=HpZgwHU1GcI" target="_blank">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
                                                                        </div>
                                                                        <a title="Like" href="#"><i class="icofont-heart"></i></a>
                                                                        <a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <figure><img alt="" src="images/resources/user2.jpg"></figure>
                                                                        <div class="commenter">
                                                                            <h5><a title="" href="#">Ching xang</a></h5>
                                                                            <span>2 hours ago</span>
                                                                            <p>
                                                                                i think that some how, we learn who we really are and then live with that decision, great post!

                                                                            </p>
                                                                        </div>
                                                                        <a title="Like" href="#"><i class="icofont-heart"></i></a>
                                                                        <a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- share vimeo video -->
                                    <div class="main-wraper">
                                        <div class="wraper-title">
                                            <span><i class="icofont-video-alt"></i> Videos Play List</span>
                                            <a href="videos.html" title="">See all Videos</a>
                                        </div>
                                        <div class="videos-caro">
                                            <div class="item-video" data-merge="2">
                                                <a class="owl-video" href="https://www.youtube.com/watch?v=8iZTb9NWbz8"></a>
                                                <div class="posted-user">
                                                    <img src="images/resources/user4.jpg" alt="">
                                                    <span>Frank J.</span>
                                                </div>
                                                <div class="vid-info">
                                                    <span>1 year ago</span>
                                                    <span><i class="icofont-eye-open"></i> 3.1k</span>
                                                </div>
                                            </div>
                                            <div class="item-video" data-merge="2">
                                                <a class="owl-video" href="https://www.youtube.com/watch?v=8itUNRIWVIs"></a>
                                                <div class="posted-user">
                                                    <img src="images/resources/user2.jpg" alt="">
                                                    <span>Maria K.</span>
                                                </div>
                                                <div class="vid-info">
                                                    <span>2 weeks ago</span>
                                                    <span><i class="icofont-eye-open"></i> 1.1k</span>
                                                </div>
                                            </div>
                                            <div class="item-video" data-merge="2">
                                                <a class="owl-video" href="https://www.youtube.com/watch?v=JpxsRwnRwCQ"></a>
                                                <div class="posted-user">
                                                    <img src="images/resources/user1.jpg" alt="">
                                                    <span>Jack Carter</span>
                                                </div>
                                                <div class="vid-info">
                                                    <span>4 weeks ago</span>
                                                    <span><i class="icofont-eye-open"></i> 20k</span>
                                                </div>
                                            </div>
                                            <div class="item-video" data-merge="2">
                                                <a class="owl-video" href="https://www.youtube.com/watch?v=WNeLUngb-Xg"></a>
                                                <div class="posted-user">
                                                    <img src="images/resources/user3.jpg" alt="">
                                                    <span>Fawad Jan</span>
                                                </div>
                                                <div class="vid-info">
                                                    <span>1 Month ago</span>
                                                    <span><i class="icofont-eye-open"></i> 8k</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- video playlist carousel -->
                                    <div class="main-wraper">
                                        <div class="user-post video">
                                            <div class="friend-info">
                                                <figure>
                                                    <img alt="" src="images/resources/user3.jpg">
                                                </figure>
                                                <div class="friend-name">
                                                    <div class="more">
                                                        <div class="more-post-optns">
                                                            <i class="">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></i>
                                                            <ul>
                                                                <li>
                                                                    <i class="icofont-pen-alt-1"></i>Edit Post
                                                                    <span>Edit This Post within a Hour</span>
                                                                </li>
                                                                <li>
                                                                    <i class="icofont-ban"></i>Hide Post
                                                                    <span>Hide This Post</span>
                                                                </li>
                                                                <li>
                                                                    <i class="icofont-ui-delete"></i>Delete Post
                                                                    <span>If inappropriate Post By Mistake</span>
                                                                </li>
                                                                <li>
                                                                    <i class="icofont-flag"></i>Report
                                                                    <span>Inappropriate content</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ins><a title="" href="time-line.html">Fawad Khanzada</a> Shared video <em><a href="#" title="">Follow</a></em></ins>
                                                    <span><i class="icofont-globe"></i> published: Sep,15 2020</span>
                                                </div>
                                                <div class="post-meta">
                                                    <h4>After watching this, your brain will not be the same..</h4>
                                                    <p>In a classic research-based TEDx Talk, Dr. Lara Boyd describes how neuroplasticity gives you the power to shape the brain you ...</p>
                                                    <iframe height="400" src="https://www.youtube.com/embed/LNHBMFCzznE" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    <div class="we-video-info">
                                                        <ul>
                                                            <li>
																<span title="views" class="views">
																	<i>
	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></i>
																	<ins>1.2k</ins>
																</span>
                                                            </li>
                                                            <li>
																<span title="Comments" class="Recommend">
																	<i>
	<svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></i>
																	<ins>54</ins>
																</span>

                                                            </li>
                                                            <li>
																<span title="follow" class="Follow">
																	<i>
	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></i>
																<ins>5k</ins>
																</span>
                                                            </li>
                                                            <li>
																<span class="share-pst" title="Share">
																	<i>
	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></i>
																<ins>205</ins>
																</span>
                                                            </li>
                                                        </ul>
                                                        <a href="post-detail.html" title="" class="reply">Reply <i class="icofont-reply"></i></a>
                                                    </div>
                                                    <div class="stat-tools">
                                                        <div class="box">
                                                            <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
                                                                <div class="Emojis">
                                                                    <div class="Emoji Emoji--like">
                                                                        <div class="icon icon--like"></div>
                                                                    </div>
                                                                    <div class="Emoji Emoji--love">
                                                                        <div class="icon icon--heart"></div>
                                                                    </div>
                                                                    <div class="Emoji Emoji--haha">
                                                                        <div class="icon icon--haha"></div>
                                                                    </div>
                                                                    <div class="Emoji Emoji--wow">
                                                                        <div class="icon icon--wow"></div>
                                                                    </div>
                                                                    <div class="Emoji Emoji--sad">
                                                                        <div class="icon icon--sad"></div>
                                                                    </div>
                                                                    <div class="Emoji Emoji--angry">
                                                                        <div class="icon icon--angry"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box">
                                                            <div class="Emojis">
                                                                <div class="Emoji Emoji--like">
                                                                    <div class="icon icon--like"></div>
                                                                </div>
                                                                <div class="Emoji Emoji--love">
                                                                    <div class="icon icon--heart"></div>
                                                                </div>
                                                                <div class="Emoji Emoji--haha">
                                                                    <div class="icon icon--haha"></div>
                                                                </div>
                                                                <div class="Emoji Emoji--wow">
                                                                    <div class="icon icon--wow"></div>
                                                                </div>
                                                                <div class="Emoji Emoji--sad">
                                                                    <div class="icon icon--sad"></div>
                                                                </div>
                                                                <div class="Emoji Emoji--angry">
                                                                    <div class="icon icon--angry"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
                                                        <a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
                                                        <div class="emoji-state">
                                                            <div class="popover_wrapper">
                                                                <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/thumb.png"></a>
                                                                <div class="popover_content">
                                                                    <span><img alt="" src="images/smiles/thumb.png"> Likes</span>
                                                                    <ul class="namelist">
                                                                        <li>Jhon Doe</li>
                                                                        <li>Amara Sin</li>
                                                                        <li>Sarah K.</li>
                                                                        <li><span>20+ more</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="popover_wrapper">
                                                                <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/heart.png"></a>
                                                                <div class="popover_content">
                                                                    <span><img alt="" src="images/smiles/heart.png"> Love</span>
                                                                    <ul class="namelist">
                                                                        <li>Amara Sin</li>
                                                                        <li>Jhon Doe</li>
                                                                        <li><span>10+ more</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="popover_wrapper">
                                                                <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/smile.png"></a>
                                                                <div class="popover_content">
                                                                    <span><img alt="" src="images/smiles/smile.png"> Happy</span>
                                                                    <ul class="namelist">
                                                                        <li>Sarah K.</li>
                                                                        <li>Jhon Doe</li>
                                                                        <li>Amara Sin</li>
                                                                        <li><span>100+ more</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="popover_wrapper">
                                                                <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/weep.png"></a>
                                                                <div class="popover_content">
                                                                    <span><img alt="" src="images/smiles/weep.png"> Dislike</span>
                                                                    <ul class="namelist">
                                                                        <li>Danial Carbal</li>
                                                                        <li>Amara Sin</li>
                                                                        <li>Sarah K.</li>
                                                                        <li><span>15+ more</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <p>10+</p>
                                                        </div>
                                                        <div class="new-comment" style="display: none;">
                                                            <form method="post">
                                                                <input type="text" placeholder="write comment">
                                                                <button type="submit"><i class="icofont-paper-plane"></i></button>
                                                            </form>
                                                            <div class="comments-area">
                                                                <ul>
                                                                    <li>
                                                                        <figure><img alt="" src="images/resources/user1.jpg"></figure>
                                                                        <div class="commenter">
                                                                            <h5><a title="" href="#">Jack Carter</a></h5>
                                                                            <span>2 hours ago</span>
                                                                            <p>
                                                                                i think that some how, we learn who we really are and then live with that decision, great post!
                                                                            </p>
                                                                            <span>you can view the more detail via link</span>
                                                                            <a title="" href="https://www.youtube.com/watch?v=HpZgwHU1GcI" target="_blank">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
                                                                        </div>
                                                                        <a title="Like" href="#"><i class="icofont-heart"></i></a>
                                                                        <a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <figure><img alt="" src="images/resources/user2.jpg"></figure>
                                                                        <div class="commenter">
                                                                            <h5><a title="" href="#">Ching xang</a></h5>
                                                                            <span>2 hours ago</span>
                                                                            <p>
                                                                                i think that some how, we learn who we really are and then live with that decision, great post!

                                                                            </p>
                                                                        </div>
                                                                        <a title="Like" href="#"><i class="icofont-heart"></i></a>
                                                                        <a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- share youtube video -->

                                    <div class="sp sp-bars"></div><!-- LOADER INDICATOR -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <figure class="bottom-mockup"><img src="images/footer.png" alt=""></figure>
    <div class="bottombar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="">&copy; copyright All rights reserved by Socimo 2020</span>
                </div>
            </div>
        </div>
    </div><!-- bottombar -->

    <div class="wraper-invite">
        <div class="popup">
            <span class="popup-closed"><i class="icofont-close"></i></span>
            <div class="popup-meta">
                <div class="popup-head">
                    <h5><i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></i> Invite Colleagues</h5>
                </div>
                <div class="invitation-meta">
                    <p>
                        Enter an email address to invite a colleague or co-author to join you on socimo. They will receive an email and, in some cases, up to two reminders.
                    </p>
                    <form method="post" class="c-form">
                        <input type="text" placeholder="Enter Email">
                        <button type="submit" class="main-btn">Invite</button>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- invite colleague popup -->

    <div class="popup-wraper">
        <div class="popup">
            <span class="popup-closed"><i class="icofont-close"></i></span>
            <div class="popup-meta">
                <div class="popup-head">
                    <h5><i>
                            <svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></i> Send Message</h5>
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
                <div class="tab-pane fade" id="notifications">
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

    <div class="post-new-popup">
        <div class="popup" style="width: 800px;">
            <span class="popup-closed"><i class="icofont-close"></i></span>
            <div class="popup-meta">
                <div class="popup-head">
                    <h5><i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></i>Create New Post</h5>
                </div>
                <div class="post-new">
                    <div class="post-newmeta">
                        <ul class="post-categoroes">
                            <li><i class="icofont-camera"></i> Photo / Video</li>
                            <li><i class="icofont-google-map"></i> Post Location</li>
                            <li><i class="icofont-file-gif"></i> Post Gif</li>
                            <li><i class="icofont-ui-tag"></i> Tag to Friend</li>
                            <li><i class="icofont-users"></i> Share in Group</li>
                            <li><i class="icofont-link"></i> Share Link</li>
                            <li><i class="icofont-video-cam"></i> Go Live</li>
                            <li><i class="icofont-sale-discount"></i> Post Online Course</li>
                            <li><i class="icofont-read-book"></i> Post A Book</li>
                            <li><i class="icofont-globe"></i> Post an Ad</li>
                        </ul>
                        <form method="post" class="dropzone" action="/upload-target">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form>
                    </div>
                    <form method="post" class="c-form">
                        <textarea id="emojionearea1" placeholder="What's On Your Mind?"></textarea>
                        <div class="activity-post">
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox" checked>
                                <label for="checkbox"><span>Activity Feed</span></label>
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox2" checked>
                                <label for="checkbox2"><span>My Story</span></label>
                            </div>
                        </div>
                        <div class="select-box">
                            <div class="select-box__current" tabindex="1">
                                <div class="select-box__value"><input class="select-box__input" type="radio" id="0" value="1" name="Ben" checked="checked" />
                                    <p class="select-box__input-text"><i class="icofont-globe-alt"></i> Public</p>
                                </div>
                                <div class="select-box__value"><input class="select-box__input" type="radio" id="1" value="2" name="Ben" checked="checked" />
                                    <p class="select-box__input-text"><i class="icofont-lock"></i> Private</p>
                                </div>
                                <div class="select-box__value"><input class="select-box__input" type="radio" id="2" value="3" name="Ben" checked="checked" />
                                    <p class="select-box__input-text"><i class="icofont-user"></i> Specific Friend</p>
                                </div>
                                <div class="select-box__value"><input class="select-box__input" type="radio" id="3" value="4" name="Ben" checked="checked" />
                                    <p class="select-box__input-text"><i class="icofont-star"></i> Only Friends</p>
                                </div>
                                <div class="select-box__value"><input class="select-box__input" type="radio" id="4" value="5" name="Ben" checked="checked" />
                                    <p class="select-box__input-text"><i class="icofont-users-alt-3"></i> Joined Groups</p>
                                </div>
                                <img class="select-box__icon" src="images/arrow-down.svg" alt="Arrow Icon" aria-hidden="true" />
                            </div>
                            <ul class="select-box__list">
                                <li><label class="select-box__option" for="0"><i class="icofont-globe-alt"></i> Public</label></li>
                                <li><label class="select-box__option" for="1"><i class="icofont-lock"></i> Private</label></li>
                                <li><label class="select-box__option" for="2"><i class="icofont-user"></i> Specific Friend</label></li>
                                <li><label class="select-box__option" for="3"><i class="icofont-star"></i> Only Friends</label></li>
                                <li><label class="select-box__option" for="4"><i class="icofont-users-alt-3"></i> Joined Groups</label></li>
                            </ul>
                        </div>
                        <input class="schedule-btn" type="text" id="datetimepicker" readonly>
                        <input type="text" placeholder="https://www.youtube.com/watch?v=vgvsuiFlA-Y&t=56s">
                        <button type="submit" class="main-btn">Publish</button>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- New post popup -->

    <div class="new-question-popup">
        <div class="popup">
            <span class="popup-closed"><i class="icofont-close"></i></span>
            <div class="popup-meta">
                <div class="popup-head">
                    <h5><i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg></i> Ask Question</h5>
                </div>
                <div class="post-new">
                    <form method="post" class="c-form">

                        <input type="text" placeholder="Question Title">
                        <textarea placeholder="Write Question"></textarea>

                        <select>
                            <option>Select Your Question Type</option>
                            <option>Article</option>
                            <option>Book</option>
                            <option>Chapter</option>
                            <option>Code</option>
                            <option>conference Paper</option>
                            <option>Cover Page</option>
                            <option>Data</option>
                            <option>Exprement Finding</option>
                            <option>Method</option>
                            <option>Poster</option>
                            <option>Preprint</option>
                            <option>Technicial Report</option>
                            <option>Thesis</option>
                            <option>Research</option>
                        </select>
                        <div class="uploadimage">
                            <i class="icofont-eye-alt-alt"></i>
                            <label class="fileContainer">
                                <input type="file">Upload File
                            </label>
                        </div>

                        <button type="submit" class="main-btn">Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- ask question -->

    <div class="share-wraper">
        <div class="share-options">
            <span class="close-btn"><i class="icofont-close-circled"></i></span>
            <h5><i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg></i>Share To!</h5>
            <form method="post">
                <textarea placeholder="Write Something"></textarea>
            </form>
            <ul>
                <li><a title="" href="#">Your Timeline</a></li>
                <li class="friends"><a title="" href="#">To Friends</a></li>
                <li class="socialz"><a class="active" title="" href="#">Social Media</a></li>
            </ul>
            <div style="display: block;" class="social-media">
                <ul>
                    <li><a title="" href="#" class="facebook"><i class="icofont-facebook"></i></a></li>
                    <li><a title="" href="#" class="twitter"><i class="icofont-twitter"></i></a></li>
                    <li><a title="" href="#" class="instagram"><i class="icofont-instagram"></i></a></li>
                    <li><a title="" href="#" class="pinterest"><i class="icofont-pinterest"></i></a></li>
                    <li><a title="" href="#" class="youtube"><i class="icofont-youtube"></i></a></li>
                    <li><a title="" href="#" class="dribble"><i class="icofont-dribbble"></i></a></li>
                    <li><a title="" href="#" class="behance"><i class="icofont-behance-original"></i></a></li>
                </ul>
            </div>
            <div style="display: none;" class="friends-to">
                <div class="follow-men">
                    <figure><img class="mCS_img_loaded" src="images/resources/user1.jpg" alt=""></figure>
                    <div class="follow-meta">
                        <h5><a href="#" title="">Jack Carter</a></h5>
                        <span>family member</span>
                    </div>
                    <a href="#" title="">Share</a>
                </div>
                <div class="follow-men">
                    <figure><img class="mCS_img_loaded" src="images/resources/user2.jpg" alt=""></figure>
                    <div class="follow-meta">
                        <h5><a href="#" title="">Xang Ching</a></h5>
                        <span>Close Friend</span>
                    </div>
                    <a href="#" title="">Share</a>
                </div>
                <div class="follow-men">
                    <figure><img class="mCS_img_loaded" src="images/resources/user3.jpg" alt=""></figure>
                    <div class="follow-meta">
                        <h5><a href="#" title="">Emma Watson</a></h5>
                        <span>Matul Friend</span>
                    </div>
                    <a href="#" title="">Share</a>
                </div>
            </div>
            <button type="submit" class="main-btn">Publish</button>
        </div>
    </div><!-- share post -->

@endsection
