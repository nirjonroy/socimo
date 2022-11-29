@extends('master.frontend_master.master')
@section('title')
    Marcket Place
@endsection
@section('main-body')
    <section>
        <div class="gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="page-contents" class="row merged20">
                            <div class="col-lg-9">
                                <div class="main-wraper">
                                    <div class="main-title">Shops</div>
                                    @foreach($shops as $shop)
                                    <div class="blog-posts">
                                        <figure><img src="{{asset($shop->businessPhoto)}}" alt=""></figure>
                                        <div class="blog-post-meta">
                                            <ul>
                                                <li><i class="icofont-read-book"></i><a title="Reads" href="#">93k</a></li>
                                                <li><i class="icofont-comment"></i><a title="comments" href="#">33</a></li>
                                            </ul>

                                            <h4>{{$shop->BusinessName}}</h4>
                                            <p>
                                            {{$shop->BusinessSubtitle}}
                                            </p>
                                            <span><i class="icofont-clock-time"></i> {{$shop->created_at}}</span>
                                            <a href="{{url('home/businessPage/'. $shop->id)}}" title="" class="button primary circle">Visit</a>
                                        </div>
                                    </div>
                                   @endforeach
                                   
                                    
                                    <div class="load mt-5 mb-4">
                                        <ul class="pagination">
                                            <li><a href="#" title=""><i class="icofont-arrow-left"></i></a></li>
                                            <li><a class="active" href="#" title="">1</a></li>
                                            <li><a href="#" title="">2</a></li>
                                            <li><a href="#" title="">3</a></li>
                                            <li><a href="#" title="">4</a></li>
                                            <li><a href="#" title="">5</a></li>
                                            <li>....</li>
                                            <li><a href="#" title="">10</a></li>
                                            <li><a href="#" title=""><i class="icofont-arrow-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <aside class="sidebar static right">
                                    <div class="widget">
                                        <h4 class="widget-title">Popular Books</h4>
                                        <div class="popular-book">
                                            <figure><img src="images/resources/book10.jpg" alt=""></figure>
                                            <div class="book-about">
                                                <h6><a href="#" title="">Vu.js 2 Basics</a></h6>
                                                <span>Richard Ali</span>
                                                <a href="#" title=""><i class="icofont-book-mark"></i></a>
                                            </div>
                                        </div>
                                        <div class="popular-book">
                                            <figure><img src="images/resources/book9.jpg" alt=""></figure>
                                            <div class="book-about">
                                                <h6><a href="#" title="">Css3 for Bigners</a></h6>
                                                <span>Richard Ali</span>
                                                <a href="#" title=""><i class="icofont-book-mark"></i></a>
                                            </div>
                                        </div>
                                        <div class="popular-book">
                                            <figure><img src="images/resources/book5.jpg" alt=""></figure>
                                            <div class="book-about">
                                                <h6><a href="#" title="">Technology Wants 2020</a></h6>
                                                <span>Richard Ali</span>
                                                <a href="#" title=""><i class="icofont-book-mark"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget">
                                        <h4 class="widget-title">Ask Research Question?</h4>
                                        <div class="ask-question">
                                            <i class="icofont-question-circle"></i>
                                            <h6>Ask questions in Q&A to get help from experts in your field.</h6>
                                            <a class="ask-qst" href="#" title="">Ask a question</a>
                                        </div>
                                    </div>
                                    <div class="widget">
                                        <h4 class="widget-title">Explor Events <a class="see-all" href="#" title="">See All</a></h4>
                                        <div class="rec-events bg-purple">
                                            <i class="icofont-gift"></i>
                                            <h6><a title="" href="">BZ University good night event in columbia</a></h6>
                                            <img alt="" src="images/clock.png">
                                        </div>
                                        <div class="rec-events bg-blue">
                                            <i class="icofont-microphone"></i>
                                            <h6><a title="" href="">The 3rd International Conference 2020</a></h6>
                                            <img alt="" src="images/clock.png">
                                        </div>
                                    </div>
                                    <div class="widget stick-widget">
                                        <h4 class="widget-title">Who's follownig</h4>
                                        <ul class="followers" >
                                            <li>
                                                <figure><img alt="" src="images/resources/friend-avatar.jpg"></figure>
                                                <div class="friend-meta">
                                                    <h4>
                                                        <a title="" href="time-line.html">Kelly Bill</a>
                                                        <span>Dept colleague</span>
                                                    </h4>
                                                    <a class="underline" title="" href="#">Follow</a>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img alt="" src="images/resources/friend-avatar2.jpg"></figure>
                                                <div class="friend-meta">
                                                    <h4>
                                                        <a title="" href="time-line.html">Issabel</a>
                                                        <span>Dept colleague</span>
                                                    </h4>
                                                    <a class="underline" title="" href="#">Follow</a>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img alt="" src="images/resources/friend-avatar3.jpg"></figure>
                                                <div class="friend-meta">
                                                    <h4>
                                                        <a title="" href="time-line.html">Andrew</a>
                                                        <span>Dept colleague</span>
                                                    </h4>
                                                    <a class="underline" title="" href="#">Follow</a>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img alt="" src="images/resources/friend-avatar4.jpg"></figure>
                                                <div class="friend-meta">
                                                    <h4>
                                                        <a title="" href="time-line.html">Sophia</a>
                                                        <span>Dept colleague</span>
                                                    </h4>
                                                    <a class="underline" title="" href="#">Follow</a>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img alt="" src="images/resources/friend-avatar5.jpg"></figure>
                                                <div class="friend-meta">
                                                    <h4>
                                                        <a title="" href="time-line.html">Allen</a>
                                                        <span>Dept colleague</span>
                                                    </h4>
                                                    <a class="underline" title="" href="#">Follow</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
