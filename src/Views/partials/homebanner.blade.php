<?php
$banner_items = ExtensionsValley\Banners\Models\BannerModel::getAllBannersWithType($position, $category_id);
?>
<div id="slider" data-section="home">
        <div class="owl-carousel owl-carousel-main owl-carousel-fullwidth">
             @if(sizeof($banner_items))
                    @foreach($banner_items as $banner)
            <div class="item" style="background: #ba78ff;">
                <div class="container" style="position: relative;">
                    <div class="row animate-box" data-animate-effect="fadeIn">
                        <div class="col-md-7 col-sm-7">
                            <div class="fh5co-owl-text-wrap">
                                <div class="fh5co-owl-text">
                                    <h1 class="fh5co-lead ">{{$banner->name}}</h1>
                                    <h2 class="fh5co-sub-lead ">{!! $banner->description!!} <a href="{{$banner->link}}" target="_blank">Read More</a></h3>
                                    <p class=""><a href="{{$banner->link}}" class="btn btn-primary btn-lg">Read More</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-push-1 col-sm-4 col-sm-push-1 mobile-image">
                            <div class="mobile"><img src='{{asset("$banner->media")}}' alt="" /></div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
            @else

            <div class="item" style="background: #ba78ff;">
                <div class="container" style="position: relative;">
                    <div class="row animate-box" data-animate-effect="fadeIn">
                        <div class="col-md-7 col-sm-7">
                            <div class="fh5co-owl-text-wrap">
                                <div class="fh5co-owl-text">
                                    <h1 class="fh5co-lead ">App for iOs</h1>
                                    <h2 class="fh5co-sub-lead ">100% Free Fully Responsive HTML5 Bootstrap Template. Crafted with love by the fine folks at <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a></h3>
                                    <p class=""><a href="#" class="btn btn-primary btn-lg">View Case Study</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-push-1 col-sm-4 col-sm-push-1 mobile-image">
                            <div class="mobile"><img src="{{asset("$themeHelper->active_template_path/images/ios.png")}}" alt="Free HTML5 Template by FREEHTML5.co"></div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- You may change the background color here.  -->
            <div class="item" style="background: #ba78ff;">
                <div class="container" style="position: relative;">
                    <div class="row animate-box" data-animate-effect="fadeIn">
                        <div class="col-md-7 col-md-push-1 col-md-push-5 col-sm-7 col-sm-push-1 col-sm-push-5">
                            <div class="fh5co-owl-text-wrap">
                                <div class="fh5co-owl-text">
                                    <h1 class="fh5co-lead ">App for Andriod</h1>
                                    <h2 class="fh5co-sub-lead ">100% Free Fully Responsive HTML5 Bootstrap Template. Crafted with love by the fine folks at <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a></h3>
                                    <p class=""><a href="#" class="btn btn-primary btn-lg">View Case Study</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-pull-7 col-sm-4 col-sm-pull-7 mobile-image">
                            <div class="mobile"><img src="{{asset("$themeHelper->active_template_path/images/andriod.png")}}" alt="Free HTML5 Template by FREEHTML5.co"></div>
                        </div>

                    </div>
                </div>
            </div>
            @endif

        </div>
    </div>
