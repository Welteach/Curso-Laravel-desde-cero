@extends('layouts.site')

@section('content')

<div class="main-section">
    <div class="container">
        <div class="main-section-data">
            <div class="row">
                <div class="col-lg-3 col-md-4 pd-left-none no-pd">
                    <div class="main-left-sidebar no-margin">
                        <div class="user-data full-width">
                            <div class="user-profile">
                                <div class="username-dt">
                                    <div class="usr-pic">
                                        <img src="{{ asset('images/resources/user-pic.png') }}" alt="">
                                    </div>
                                </div><!--username-dt end-->
                                <div class="user-specs">
                                    <h3>John Doe</h3>
                                    <span>Graphic Designer at Self Employed</span>
                                </div>
                            </div><!--user-profile end-->
                            <ul class="user-fw-status">
                                <li>
                                    <h4>Following</h4>
                                    <span>34</span>
                                </li>
                                <li>
                                    <h4>Followers</h4>
                                    <span>155</span>
                                </li>
                                <li>
                                    <a href="http://www.gambolthemes.net/workwise-new/my-profile.html" title="">View Profile</a>
                                </li>
                            </ul>
                        </div><!--user-data end-->
                        <div class="suggestions full-width">
                            <div class="sd-title">
                                <h3>Suggestions</h3>
                                <i class="la la-ellipsis-v"></i>
                            </div><!--sd-title end-->
                            <div class="suggestions-list">
                                <div class="suggestion-usd">
                                    <img src="images/resources/s1.png" alt="">
                                    <div class="sgt-text">
                                        <h4>Jessica William</h4>
                                        <span>Graphic Designer</span>
                                    </div>
                                    <span><i class="la la-plus"></i></span>
                                </div>
                                <div class="suggestion-usd">
                                    <img src="images/resources/s2.png" alt="">
                                    <div class="sgt-text">
                                        <h4>John Doe</h4>
                                        <span>PHP Developer</span>
                                    </div>
                                    <span><i class="la la-plus"></i></span>
                                </div>
                                <div class="suggestion-usd">
                                    <img src="images/resources/s3.png" alt="">
                                    <div class="sgt-text">
                                        <h4>Poonam</h4>
                                        <span>Wordpress Developer</span>
                                    </div>
                                    <span><i class="la la-plus"></i></span>
                                </div>
                                <div class="suggestion-usd">
                                    <img src="images/resources/s4.png" alt="">
                                    <div class="sgt-text">
                                        <h4>Bill Gates</h4>
                                        <span>C & C++ Developer</span>
                                    </div>
                                    <span><i class="la la-plus"></i></span>
                                </div>
                                <div class="suggestion-usd">
                                    <img src="images/resources/s5.png" alt="">
                                    <div class="sgt-text">
                                        <h4>Jessica William</h4>
                                        <span>Graphic Designer</span>
                                    </div>
                                    <span><i class="la la-plus"></i></span>
                                </div>
                                <div class="suggestion-usd">
                                    <img src="images/resources/s6.png" alt="">
                                    <div class="sgt-text">
                                        <h4>John Doe</h4>
                                        <span>PHP Developer</span>
                                    </div>
                                    <span><i class="la la-plus"></i></span>
                                </div>
                                <div class="view-more">
                                    <a href="#" title="">View More</a>
                                </div>
                            </div><!--suggestions-list end-->
                        </div><!--suggestions end-->
                        <div class="tags-sec full-width">
                            <ul>
                                <li><a href="#" title="">Help Center</a></li>
                                <li><a href="#" title="">About</a></li>
                                <li><a href="#" title="">Privacy Policy</a></li>
                                <li><a href="#" title="">Community Guidelines</a></li>
                                <li><a href="#" title="">Cookies Policy</a></li>
                                <li><a href="#" title="">Career</a></li>
                                <li><a href="#" title="">Language</a></li>
                                <li><a href="#" title="">Copyright Policy</a></li>
                            </ul>
                            <div class="cp-sec">
                                <img src="images/logo2.png" alt="">
                                <p><img src="images/cp.png" alt="">Copyright 2019</p>
                            </div>
                        </div><!--tags-sec end-->
                    </div><!--main-left-sidebar end-->
                </div>
                <div class="col-lg-6 col-md-8 no-pd">
                    <div class="main-ws-sec">
                        {!! Form::open(['url'=>'/home/subir']) !!}
                        <div class="post-topbar row mb-4">
                            <div class="col-md-2">
                                <img class="user-picy" src="{{ asset('images/resources/user-pic.png') }}" alt="">
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="comentario">
                            </div>
                            <div class="col-md-2">
                                <input class="btn btn-danger" type="submit" value="Enviar">
                            </div>
                        </div><!--post-topbar end-->
                        {!! Form::close() !!}
                    </div><!--main-ws-sec end-->
                </div>
                <div class="col-lg-3 pd-right-none no-pd">
                    <div class="right-sidebar">
                        <div class="widget widget-about">
                            <img src="images/wd-logo.png" alt="">
                            <h3>Track Time on Workwise</h3>
                            <span>Pay only for the Hours worked</span>
                            <div class="sign_link">
                                <h3><a href="sign-in.html" title="">Sign up</a></h3>
                                <a href="#" title="">Learn More</a>
                            </div>
                        </div><!--widget-about end-->
                        <div class="widget widget-jobs">
                            <div class="sd-title">
                                <h3>Top Jobs</h3>
                                <i class="la la-ellipsis-v"></i>
                            </div>
                            <div class="jobs-list">
                                <div class="job-info">
                                    <div class="job-details">
                                        <h3>Senior Product Designer</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                    </div>
                                    <div class="hr-rate">
                                        <span>$25/hr</span>
                                    </div>
                                </div><!--job-info end-->
                                <div class="job-info">
                                    <div class="job-details">
                                        <h3>Senior UI / UX Designer</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                    </div>
                                    <div class="hr-rate">
                                        <span>$25/hr</span>
                                    </div>
                                </div><!--job-info end-->
                                <div class="job-info">
                                    <div class="job-details">
                                        <h3>Junior Seo Designer</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                    </div>
                                    <div class="hr-rate">
                                        <span>$25/hr</span>
                                    </div>
                                </div><!--job-info end-->
                                <div class="job-info">
                                    <div class="job-details">
                                        <h3>Senior PHP Designer</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                    </div>
                                    <div class="hr-rate">
                                        <span>$25/hr</span>
                                    </div>
                                </div><!--job-info end-->
                                <div class="job-info">
                                    <div class="job-details">
                                        <h3>Senior Developer Designer</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                    </div>
                                    <div class="hr-rate">
                                        <span>$25/hr</span>
                                    </div>
                                </div><!--job-info end-->
                            </div><!--jobs-list end-->
                        </div><!--widget-jobs end-->
                        <div class="widget widget-jobs">
                            <div class="sd-title">
                                <h3>Most Viewed This Week</h3>
                                <i class="la la-ellipsis-v"></i>
                            </div>
                            <div class="jobs-list">
                                <div class="job-info">
                                    <div class="job-details">
                                        <h3>Senior Product Designer</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                    </div>
                                    <div class="hr-rate">
                                        <span>$25/hr</span>
                                    </div>
                                </div><!--job-info end-->
                                <div class="job-info">
                                    <div class="job-details">
                                        <h3>Senior UI / UX Designer</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                    </div>
                                    <div class="hr-rate">
                                        <span>$25/hr</span>
                                    </div>
                                </div><!--job-info end-->
                                <div class="job-info">
                                    <div class="job-details">
                                        <h3>Junior Seo Designer</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                    </div>
                                    <div class="hr-rate">
                                        <span>$25/hr</span>
                                    </div>
                                </div><!--job-info end-->
                            </div><!--jobs-list end-->
                        </div><!--widget-jobs end-->
                        <div class="widget suggestions full-width">
                            <div class="sd-title">
                                <h3>Most Viewed People</h3>
                                <i class="la la-ellipsis-v"></i>
                            </div><!--sd-title end-->
                            <div class="suggestions-list">
                                <div class="suggestion-usd">
                                    <img src="images/resources/s1.png" alt="">
                                    <div class="sgt-text">
                                        <h4>Jessica William</h4>
                                        <span>Graphic Designer</span>
                                    </div>
                                    <span><i class="la la-plus"></i></span>
                                </div>
                                <div class="suggestion-usd">
                                    <img src="images/resources/s2.png" alt="">
                                    <div class="sgt-text">
                                        <h4>John Doe</h4>
                                        <span>PHP Developer</span>
                                    </div>
                                    <span><i class="la la-plus"></i></span>
                                </div>
                                <div class="suggestion-usd">
                                    <img src="images/resources/s3.png" alt="">
                                    <div class="sgt-text">
                                        <h4>Poonam</h4>
                                        <span>Wordpress Developer</span>
                                    </div>
                                    <span><i class="la la-plus"></i></span>
                                </div>
                                <div class="suggestion-usd">
                                    <img src="images/resources/s4.png" alt="">
                                    <div class="sgt-text">
                                        <h4>Bill Gates</h4>
                                        <span>C &amp; C++ Developer</span>
                                    </div>
                                    <span><i class="la la-plus"></i></span>
                                </div>
                                <div class="suggestion-usd">
                                    <img src="images/resources/s5.png" alt="">
                                    <div class="sgt-text">
                                        <h4>Jessica William</h4>
                                        <span>Graphic Designer</span>
                                    </div>
                                    <span><i class="la la-plus"></i></span>
                                </div>
                                <div class="suggestion-usd">
                                    <img src="images/resources/s6.png" alt="">
                                    <div class="sgt-text">
                                        <h4>John Doe</h4>
                                        <span>PHP Developer</span>
                                    </div>
                                    <span><i class="la la-plus"></i></span>
                                </div>
                                <div class="view-more">
                                    <a href="#" title="">View More</a>
                                </div>
                            </div><!--suggestions-list end-->
                        </div>
                    </div><!--right-sidebar end-->
                </div>
            </div>
        </div><!-- main-section-data end-->
    </div> 
</div>

@endsection