@extends('layouts.layout')
@section('content')
<div>
    <div class="banner-gallery">
        <div>
            <div class="banner-home-content">
                <h1 class="banner-home-title">@lang('gallery.banner-title')</h1>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <div class="two-cols">
            <div class="pt-3">
                <h2 class="subtitle-slim">@lang('gallery.title-gallery')</h2>
                <h3 class="subtitle-text with-separator">@lang('gallery.subtitle-gallery')</h3>
                <span class="separator"></span>
                <div class="mt-5">
                    <p>
                        @lang('gallery.text-one')
                    </p>
                    <p class="mt-1">
                        @lang('gallery.text-two')
                    </p>
                </div>
            </div>
            <div class="content-center-xy">
                <div class="content-img-location">
                    <img src="/assets/gallery-history.jpg" alt="@lang('gallery.alt-one')">
                </div>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <p class="subtitle-big text-center">@lang('gallery.explore-cathegory')</p>
        <div class="layout-gallery">
            <div class="wd-6 mb-3 mt-5">
                <h2 class="subtitle-slim text-center">@lang('gallery.sub-beach-wedding')</h2>
                <div class="content-center my-2">
                    <div class="separator"></div>
                </div>
                <p>@lang('gallery.text-three')</p>
            </div>
            <div class="content-grid-gallery">
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-beach" src="/assets/gallery/playa-uno.jpg" loading="lazy" alt="">
                </div>
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-beach" src="/assets/gallery/playa-dos.jpg" loading="lazy"  alt="">
                </div>
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-beach" src="/assets/gallery/playa-tres.jpg" loading="lazy"  alt="">
                </div>
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-beach" src="/assets/gallery/playa-cuatro.jpg" loading="lazy"  alt="">
                </div>
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-beach" src="/assets/gallery/playa-cinco.jpg" loading="lazy"  alt="">
                </div>
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-beach" src="/assets/gallery/playa-seis.jpg" loading="lazy"  alt="">
                </div>
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-beach" src="/assets/gallery/playa-siete.jpg" loading="lazy"  alt="">
                </div>
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-beach" src="/assets/gallery/playa-ocho.jpg" loading="lazy"  alt="">
                </div>
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-beach" src="/assets/gallery/playa-nueve.jpeg" loading="lazy"  alt="">
                </div>
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-beach" src="/assets/gallery/playa-diez.jpg" loading="lazy"  alt="">
                </div>
            </div>
        </div>
        <div class="layout-gallery">
            <div class="wd-6 mb-3 mt-5">
                <h2 class="subtitle-slim text-center">@lang('gallery.sub-cenote-wedding')</h2>
                <div class="content-center my-2">
                    <div class="separator"></div>
                </div>
                <p>@lang('gallery.text-four')</p>
            </div>
            <div class="content-grid-gallery">
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-cenote" src="/assets/gallery/cenote-uno.jpg" loading="lazy"  alt="">
                </div>
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-cenote" src="/assets/gallery/cenote-dos.jpg" loading="lazy"  alt="">
                </div>
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-cenote" src="/assets/gallery/cenote-tres.jpg" loading="lazy"  alt="">
                </div>
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-cenote" src="/assets/gallery/cenote-cuatro.jpg" loading="lazy"  alt="">
                </div>
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-cenote" src="/assets/gallery/cenote-cinco.jpg" loading="lazy"  alt="">
                </div>                
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-cenote" src="/assets/gallery/cenote-seis.jpg" loading="lazy"  alt="">
                </div>                
            </div>
        </div>
        <div class="layout-gallery">
            <div class="wd-6 mb-3 mt-5">
                <h2 class="subtitle-slim text-center">@lang('gallery.sub-ranch-wedding')</h2>
                <div class="content-center my-2">
                    <div class="separator"></div>
                </div>
                <p>@lang('gallery.text-five')</p>
            </div>
            <div class="content-grid-gallery">
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-cenote" src="/assets/gallery/hacienda-uno.jpg" loading="lazy"  alt="">
                </div>
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-cenote" src="/assets/gallery/hacienda-dos.png" loading="lazy"  alt="">
                </div>
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-cenote" src="/assets/gallery/hacienda-tres.jpg" loading="lazy"  alt="">
                </div>
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-cenote" src="/assets/gallery/hacienda-cuatro.png" loading="lazy"  alt="">
                </div>
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-cenote" src="/assets/gallery/hacienda-cinco.jpg" loading="lazy"  alt="">
                </div>                
            </div>
        </div>
        <div class="layout-gallery">
            <div class="wd-6 mb-3 mt-5">
                <h2 class="subtitle-slim text-center">@lang('gallery.sub-religion-wedding')</h2>
                <div class="content-center my-2">
                    <div class="separator"></div>
                </div>
                <p>@lang('gallery.text-six')</p>
            </div>
            <div class="content-grid-gallery">
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-cenote" src="/assets/gallery/religiosa-uno.jpg" loading="lazy"  alt="">
                </div>
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-cenote" src="/assets/gallery/religiosa-dos.jpg" loading="lazy"  alt="">
                </div>
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-cenote" src="/assets/gallery/religiosa-tres.jpg" loading="lazy"  alt="">
                </div>
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-cenote" src="/assets/gallery/religiosa-cuatro.jpg" loading="lazy"  alt="">
                </div>
            </div>
        </div>
        <div class="layout-gallery">
            <div class="wd-6 mb-3 mt-5">
                <h2 class="subtitle-slim text-center">@lang('gallery.sub-corporative-events')</h2>
                <div class="content-center my-2">
                    <div class="separator"></div>
                </div>
                <p>@lang('gallery.text-seven')</p>
            </div>
            <div class="content-grid-gallery">
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-cenote" src="/assets/gallery/corporativo-uno.jpg" loading="lazy"  alt="">
                </div>
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-cenote" src="/assets/gallery/corporativo-dos.jpg" loading="lazy"  alt="">
                </div>
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-cenote" src="/assets/gallery/corporativo-tres.jpg" loading="lazy"  alt="">
                </div>
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-cenote" src="/assets/gallery/corporativo-cuatro.jpg" loading="lazy"  alt="">
                </div>
                <div class="card-img-gallery">
                    <img class="img-gallery gallery-cenote" src="/assets/gallery/corporativo-cinco.jpg" loading="lazy"  alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="content-simple-text">
        <div>
            <h3 class="subtitle-big mt-xs-3 text-light mb-3">@lang('gallery.each-wedding')</h3>
            <p class="text-light">@lang('gallery.text-eight')</p>
        </div>
    </div>

    <div class="layout-content-full">
        <div class="content-our-team">
            <div>
                <img class="img-our-team" src="/assets/experiencie.jpg" alt="@lang('gallery.alt-two')">
            </div>
            <div class="content-center-xy">
                <div>
                    <h3 class="subtitle-slim text-center mb-3">@lang('gallery.subtitle-experience')</h3>
                    <p>@lang('gallery.text-nine')</p>
                </div>
            </div>
        </div>
    </div>


    <div class="content-why-choose-us">
        <div class="text-center">
            <i class="fa fa-quote-right text-light fs-big" aria-hidden="true"></i>
            <h3 class="subtitle-text-light subtitle-text">@lang('gallery.subtitle-testimonial')</h3>
        </div>
        <div class="content-center">
            <div class="content-center-xy">
                <i onclick='prevSlide(".track-slide-experience", ".slide-experience")' class="fa fa-arrow-left icon-arrow-white" aria-hidden="true"></i>
            </div>
            <div class="slider mt-5">
                <div class="track track-slide-experience" data-value="0">
                    <div class="slide slide-experience">
                        <h3 class="subtitle-text-light subtitle-comments text-center mt-xs-3">
                            @lang('gallery.testimonial-one')
                        </h3>
                        <div class="wd-6">
                            <p class="text-light mt-1">
                                @lang('gallery.text-ten')
                            </p>
                        </div>
                    </div>
                    <div class="slide slide-experience">
                        <h3 class="subtitle-text-light subtitle-comments text-center mt-xs-3">
                            @lang('gallery.testimonial-two')
                        </h3>
                        <div class="wd-6">
                            <p class="text-light mt-1">
                                @lang('gallery.text-eleven')
                            </p>
                        </div>
                    </div>
                    <div class="slide slide-experience">
                        <h3 class="subtitle-text-light subtitle-comments text-center mt-xs-3">
                            @lang('gallery.testimonial-three')
                        </h3>
                        <div class="wd-6">
                            <p class="text-light mt-1">
                                @lang('gallery.text-twelve')
                            </p>
                        </div>
                    </div>
                    <div class="slide slide-experience">
                        <h3 class="subtitle-text-light subtitle-comments text-center mt-xs-3">
                            @lang('gallery.testimonial-four')
                        </h3>
                        <div class="wd-6">
                            <p class="text-light mt-1">
                                @lang('gallery.text-thirteen')
                            </p>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="content-center-xy">
                <i onclick='nextSlide(".track-slide-experience", ".slide-experience")' class="fa fa-arrow-right icon-arrow-white" aria-hidden="true"></i>
            </div>
        </div>
    </div>




</div>


@endsection