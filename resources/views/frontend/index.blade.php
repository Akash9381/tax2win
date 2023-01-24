@extends('frontend.layouts.frontend_layouts')
@section('title', 'Tax Mall - All in one Platform - ITR | GST | TDS | ROC | OTHER')



@section('content')
<!--==================================================-->
<div class="slider_area slider16 d-flex align-items-center" id="home">
    <div class="container">
        <div class="row d-flex align-items-center">
            <!--Start Single Portfolio -->
            <div class="col-md-6 col-lg-6">
                <div class="single_slider wow fadeInUp" data-wow-delay=".4">
                    <div class="slider_content">
                        <div class="slider_text">
                            <div class="slider_text_inner">
                                <h5> Welcome to Tax mall </h5>
                                <h2> Easiest Way of e-filing your </h2>
                                <h2> Income Tax Return in India </h2>
                                <!--<p>There are many variations passages Lorem Ipsum available but majority have suffered alteration in some form</p>-->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 mt-n1">
                <div class="em-feature-single-box wow fadeInLeft" data-wow-delay=".5">
                    <div class="feature-single-box-inner">
                        <div class="em-feature-title">
                            <h2>Get a personal eCA</h2>
                            <p>Get your personal eCA to do tax filing for you.And it is personal, convenient & fast with
                                maximum refund calculated for you.</p>
                        </div>
                        <div class="em-feature-button">
                            <a href="{{url('ca-assisted')}}">Get a personal eCA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="service_area pt-80 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text_center mb-55">

                    <div class="section_main_title">
                        <h1>Services</h1>
                    </div>
                    <div class="em_bar">
                        <div class="em_bar_bg"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service_style_ten wow flipInY" data-wow-delay="0ms" data-wow-duration="2500ms">
                    <div class="single_service_style_ten">

                        <div class="service_style_ten_content">
                            <h4 class="pb-2"><a href="#">ITR</a></h4>
                            <p>Income Tax Return is the form in which assessee files information about his Income and
                                tax thereon to Income Tax Department. Various forms are ITR 1, ITR 2, ITR 3, ITR 4, ITR
                                5, ITR 6 and ITR 7. When you file a belated return, you are not allowed to carry forward
                                certain losses.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service_style_ten wow flipInY" data-wow-delay="0ms" data-wow-duration="2500ms">
                    <div class="single_service_style_ten">

                        <div class="service_style_ten_content">
                            <h4 class="pb-2"><a href="#">GST</a></h4>
                            <p>The proposed goods and services tax (GST) regime, slated to be introduced from April 1,
                                2016 will be a paradigm shift from the present taxation model to an advanced one. While
                                GST is flaunted as the single largest indirect tax reform that will boost India’s GDP,
                                its impact on the consumer is less talked about.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service_style_ten wow flipInY" data-wow-delay="0ms" data-wow-duration="2500ms">
                    <div class="single_service_style_ten">

                        <div class="service_style_ten_content">
                            <h4 class="pb-2"><a href="#">TDS</a></h4>
                            <p>The concept of TDS was introduced with an aim to collect tax from the very source of
                                income. As per this concept, a person (deductor) who is liable to make payment of
                                specified nature to any other person (deductee) shall deduct tax at source and remit the
                                same into the account of the Central Government. .</p>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>


<!--==================================================-->
<!-- Start Techno service Area -->
<!--==================================================-->
<div class="service-area style-four pt-40 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-lg-5">
                <div class="section_title text_left mb-30 mt-3 wow fadeInRight" data-wow-delay=".4">
                    <div class="section_sub_title1 upper mb-3">
                        <h6>Tax Mall</h6>
                    </div>
                    <div class="section_main_title1">
                        <h1>Best income tax efiling website in India</h1>
                    </div>
                    <div class="section_content_text2">
                        <p>We have changed the way people do tax filing in India. We don’t just get your tax return
                            filed within minutes but get you maximum refunds in shortest time.</p>
                    </div>
                    <div class="abou-button2 pt-1">
                        <a href="#"> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-7 d-xs-none">
                <div class="row">
                    <div class="flipbox_area top_feature col-lg-4 col-md-6 col-sm-4 col-xs-4">
                        <div class="techno_flipbox mb-30">
                            <div class="techno_flipbox_font">
                                <div class="techno_flipbox_inner">

                                    <div class="flipbox_title">
                                        <h6>Trusted by 1+ Million Users</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="techno_flipbox_back">
                                <div class="techno_flipbox_inner">
                                    <div class="flipbox_title">
                                        <h6 class="text-white">Trusted by 1+ Million Users</h6>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flipbox_area top_feature col-lg-4 col-md-6 col-sm-4 col-xs-4">
                        <div class="techno_flipbox mb-30">
                            <div class="techno_flipbox_font">
                                <div class="techno_flipbox_inner">

                                    <div class="flipbox_title">
                                        <h6>Top 25 Emerging Startup of Asia</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="techno_flipbox_back">
                                <div class="techno_flipbox_inner">
                                    <div class="flipbox_title">
                                        <h6 class="text-white">Top 25 Emerging Startup of Asia</h6>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flipbox_area top_feature col-lg-4 col-md-6 col-sm-4 col-xs-4">
                        <div class="techno_flipbox mb-30">
                            <div class="techno_flipbox_font">
                                <div class="techno_flipbox_inner">

                                    <div class="flipbox_title">
                                        <h6>Authorized by Income Tax Department</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="techno_flipbox_back">
                                <div class="techno_flipbox_inner">
                                    <div class="flipbox_title">
                                        <h6 class="text-white">Authorized by Income Tax Department</h6>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flipbox_area top_feature col-lg-4 col-md-6 col-sm-4 col-xs-4">
                        <div class="techno_flipbox mb-30">
                            <div class="techno_flipbox_font">
                                <div class="techno_flipbox_inner">

                                    <div class="flipbox_title">
                                        <h6>4.8 Star Service Rating</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="techno_flipbox_back">
                                <div class="techno_flipbox_inner">
                                    <div class="flipbox_title">
                                        <h6 class="text-white">4.8 Star Service Rating</h6>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="flipbox_area top_feature col-lg-4 col-md-6 col-sm-4 col-xs-4">
                        <div class="techno_flipbox mb-30">
                            <div class="techno_flipbox_font">
                                <div class="techno_flipbox_inner">

                                    <div class="flipbox_title">
                                        <h6>Secure and safe</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="techno_flipbox_back">
                                <div class="techno_flipbox_inner">
                                    <div class="flipbox_title">
                                        <h6 class="text-white">Secure and safe</h6>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="flipbox_area top_feature col-lg-4 col-md-6 col-sm-4 col-xs-4">
                        <div class="techno_flipbox mb-30">
                            <div class="techno_flipbox_font">
                                <div class="techno_flipbox_inner">

                                    <div class="flipbox_title">
                                        <h6>Chartered Accountants</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="techno_flipbox_back">
                                <div class="techno_flipbox_inner">
                                    <div class="flipbox_title">
                                        <h6 class="text-white">Chartered Accountants</h6>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
