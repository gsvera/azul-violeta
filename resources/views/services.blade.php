@extends('layouts.layout')
@section('content')
<div>
    <div class="banner-services">
        <div>
            <div class="banner-home-content">
                <h1 class="banner-home-title">@lang('services.banner-title')</h1>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <h2 class="subtitle-big">@lang('services.subtitle')</h2>
        <div class="content-center my-4">
            <div class="separator"></div>
        </div>
        <div class="content-two-col-text">
            <div>
                <p>
                   @lang('services.text-one')
                </p>
            </div>
            <div>
                <p>
                    @lang('services.text-two')
                </p>
            </div>
        </div>        
        <div class="content-center">
            <img src="/assets/ejemplo-servicios.jpg" alt="@lang('services.alt-one')">
        </div>
    </div>
    <div class="layout-content">
        <h3 class="subtitle-slim text-center mt-xs-3">@lang('services.our-services')</h3>
        <div class="step-wedding">
            <div class="step-border-top step-wedding-div">
                <h2 class="step-title">@lang('services.subtitle-our-services')</h2>
                <p class="text-elipsis" id="text-step-one">
                    @lang('services.text-three')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('services.subtitle-our-services-two')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('services.text-four')
                </p>
            </div>     
            <div class="step-border-top">
                <h2 class="step-title">@lang('services.subtitle-our-services-three')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('services.text-five')
                </p>
            </div>        
        </div>
        <div class="step-wedding">
            <div class="step-border-top">
                <h2 class="step-title">@lang('services.subtitle-our-services-four')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('services.text-six')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('services.subtitle-our-services-five')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('services.text-seven')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('services.subtitle-our-services-six')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('services.text-eight')
                </p>
            </div>
        </div>
        <div class="step-wedding">
            <div class="step-border-top">
                <h2 class="step-title">@lang('services.subtitle-our-services-seven')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('services.text-nine')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('services.subtitle-our-services-eight')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('services.text-ten')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('services.subtitle-our-services-nine')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('services.text-eleven')
                </p>
            </div>
        </div>
        <div class="step-wedding">
            <div class="step-border-top">
                <h2 class="step-title">@lang('services.subtitle-our-services-ten')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('services.text-twelve')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('services.subtitle-our-services-eleven')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('services.text-thirteen')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('services.subtitle-our-services-twelve')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('services.text-fourteen')
                </p>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <div class="two-cols">
            <div class="pt-3">
                <h2 class="subtitle-slim">@lang('services.title-coordination')</h2>
                <h3 class="subtitle-text with-separator">@lang('services.subtitle-coordination')</h3>
                <span class="separator"></span>
                <div class="mt-10">
                    <p>
                        @lang('services.text-fifteen')
                    </p>
                </div>
            </div>
            <div class="content-center-xy">
                <div class="content-img-location">
                    <img src="/assets/coordinacion-boda.jpg" alt="@lang('services.alt-two')">
                </div>
            </div>
        </div>
    </div>
    <div class="simple-layout-content">
        <h3 class="subtitle-slim text-center">@lang('services.include-coordination')</h3>
    </div>
    <div class="content-why-choose-us">
        <div class="content-center">
            <div class="content-center-xy">
                <i onclick='prevSlide(".track-slide-coordination", ".slide-coordination")' class="fa fa-arrow-left icon-arrow-white" aria-hidden="true"></i>
            </div>
            <div class="slider">
                <div class="track track-slide-coordination" data-value="0">
                    <div class="slide slide-coordination">
                        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
                            @lang('services.subtitle-include-one')
                        </h3>
                        <div class="wd-6">
                            <p class="text-light mt-5">
                                @lang('services.text-sixteen')
                            </p>
                        </div>
                    </div>
                    <div class="slide slide-coordination">
                        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
                            @lang('services.subtitle-include-two')
                        </h3>
                        <div class="wd-6">
                            <p class="text-light mt-5">
                                @lang('services.text-seventeen')
                            </p>
                        </div>
                    </div>
                    <div class="slide slide-coordination">
                        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
                            @lang('services.subtitle-include-three')
                        </h3>
                        <div class="wd-6">
                            <p class="text-light mt-5">
                                @lang('services.text-eighteen')
                            </p>
                        </div>
                    </div>
                    <div class="slide slide-coordination">
                        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
                            @lang('services.subtitle-include-four')
                        </h3>
                        <div class="wd-6">
                            <p class="text-light mt-5">
                                @lang('services.text-nineteen')
                            </p>
                        </div>
                    </div>
                    <div class="slide slide-coordination">
                        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
                            @lang('services.subtitle-include-five')
                        </h3>
                        <div class="wd-6">
                            <p class="text-light mt-5">
                                @lang('services.text-twenty')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-center-xy">
                <i onclick='nextSlide(".track-slide-coordination", ".slide-coordination")' class="fa fa-arrow-right icon-arrow-white" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    <div class="layout-content-full mt-10">
        <div class="content-space-between-desk wd-9">
            <div class="p-2 box-card">
                <h3 class="subtitle-text with-separator text-center">@lang('services.our-staff')</h3>
                <span class="separator mx-auto"></span>
                <p class="mt-5">@lang('services.text-twenty-one')</p>
            </div>
            <div class="p-2 box-card">
                <h3 class="subtitle-text with-separator text-center">@lang('services.full-coverage')</h3>
                <span class="separator mx-auto"></span>
                <p class="mt-5">@lang('services.text-twenty-two')</p>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <div class="two-cols">
            <div class="pt-3">
                <h2 class="subtitle-slim">@lang('services.decoration-wedding')</h2>
                <h3 class="subtitle-text with-separator">@lang('services.subtitle-decoration-wedding')</h3>
                <span class="separator"></span>
                <div class="mt-10">
                    <p>
                        @lang('services.text-twenty-three')
                    </p>
                </div>
            </div>
            <div class="content-center-xy">
                <div class="content-img-location">
                    <img src="/assets/coordinacion-boda.jpg" alt="@lang('services.alt-three')">
                </div>
            </div>
        </div>
    </div>
    <div class="simple-layout-content">
        <h3 class="subtitle-slim text-center">@lang('services.decoration-services')</h3>
    </div>
    <div class="content-why-choose-us">
        <div class="content-center">
            <div class="content-center-xy">
                <i onclick='prevSlide(".track-slide-decoration", ".slide-decoration")' class="fa fa-arrow-left icon-arrow-white" aria-hidden="true"></i>
            </div>
            <div class="slider">
                <div class="track track-slide-decoration" data-value="0">
                    <div class="slide slide-decoration">
                        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
                            @lang('services.sub-decoration-services-one')
                        </h3>
                        <div class="wd-6">
                            <p class="text-light mt-5">
                                @lang('services.text-twenty-four')
                            </p>
                        </div>
                    </div>
                    <div class="slide slide-decoration">
                        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
                            @lang('services.sub-decoration-services-two')
                        </h3>
                        <div class="wd-6">
                            <p class="text-light mt-5">
                                @lang('services.text-twenty-five')
                            </p>
                        </div>
                    </div>
                    <div class="slide slide-decoration">
                        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
                            @lang('services.sub-decoration-services-three')
                        </h3>
                        <div class="wd-6">
                            <p class="text-light mt-5">
                                @lang('services.text-twenty-six')
                            </p>
                        </div>
                    </div>
                    <div class="slide slide-decoration">
                        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
                            @lang('services.sub-decoration-services-four')
                        </h3>
                        <div class="wd-6">
                            <p class="text-light mt-5">
                                @lang('services.text-twenty-seven')
                            </p>
                        </div>
                    </div>
                    <div class="slide slide-decoration">
                        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
                            @lang('services.sub-decoration-services-five')
                        </h3>
                        <div class="wd-6">
                            <p class="text-light mt-5">
                                @lang('services.text-twenty-eight')
                            </p>
                        </div>
                    </div>
                    <div class="slide slide-decoration">
                        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
                            @lang('services.sub-decoration-services-six')
                        </h3>
                        <div class="wd-6">
                            <p class="text-light mt-5">
                                @lang('services.text-twenty-nine')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-center-xy">
                <i onclick='nextSlide(".track-slide-decoration", ".slide-decoration")' class="fa fa-arrow-right icon-arrow-white" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    <div class="layout-content-full mt-10 wd-6">
        <div>
            <h3 class="subtitle-text with-separator text-center">@lang('services.desing-process')</h3>
            <span class="separator mx-auto"></span>
            <p class="mt-5">@lang('services.text-thirty')</p>
        </div>        
    </div>
    <div class="layout-content">
        <div class="two-cols">
            <div class="pt-3">
                <h2 class="subtitle-slim">@lang('services.title-catering')</h2>
                <h3 class="subtitle-text with-separator">@lang('services.subtitle-catering')</h3>
                <span class="separator"></span>
                <div class="mt-10">
                    <p>
                        @lang('services.text-thirty-one')
                    </p>
                </div>
            </div>
            <div class="content-center-xy">
                <div class="content-img-location">
                    <img src="/assets/catering.jpg" alt="@lang('services.alt-four')">
                </div>
            </div>
        </div>
    </div>
    <div class="simple-layout-content">
        <h3 class="subtitle-slim text-center">@lang('services.gastronomic-option')</h3>
    </div>
    <div class="content-why-choose-us">
        <div class="content-center">
            <div class="content-center-xy">
                <i onclick='prevSlide(".track-slide-catering", ".slide-catering")' class="fa fa-arrow-left icon-arrow-white" aria-hidden="true"></i>
            </div>
            <div class="slider">
                <div class="track track-slide-catering" data-value="0">
                    <div class="slide slide-catering">
                        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
                            @lang('services.sub-gastronomic-one')
                        </h3>
                        <div class="wd-6">
                            <p class="text-light mt-5">
                                @lang('services.text-thirty-two')
                            </p>
                        </div>
                    </div>
                    <div class="slide slide-catering">
                        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
                            @lang('services.sub-gastronomic-two')
                        </h3>
                        <div class="wd-6">
                            <p class="text-light mt-5">
                                @lang('services.text-thirty-three')
                            </p>
                        </div>
                    </div>
                    <div class="slide slide-catering">
                        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
                            @lang('services.sub-gastronomic-three')
                        </h3>
                        <div class="wd-6">
                            <p class="text-light mt-5">
                                @lang('services.text-thirty-four')
                            </p>
                        </div>
                    </div>
                    <div class="slide slide-catering">
                        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
                            @lang('services.sub-gastronomic-four')
                        </h3>
                        <div class="wd-6">
                            <p class="text-light mt-5">
                                @lang('services.text-thirty-five')
                            </p>
                        </div>
                    </div>
                    <div class="slide slide-catering">
                        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
                            @lang('services.sub-gastronomic-five')
                        </h3>
                        <div class="wd-6">
                            <p class="text-light mt-5">
                                @lang('services.text-thirty-six')
                            </p>
                        </div>
                    </div>
                    <div class="slide slide-catering">
                        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
                            @lang('services.sub-gastronomic-six')
                        </h3>
                        <div class="wd-6">
                            <p class="text-light mt-5">
                                @lang('services.text-thirty-seven')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-center-xy">
                <i onclick='nextSlide(".track-slide-catering", ".slide-catering")' class="fa fa-arrow-right icon-arrow-white" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    <div class="layout-content-full mt-10">
        <div class="content-space-between-desk wd-9">
            <div class="p-2 box-card">
                <h3 class="subtitle-text with-separator text-center">@lang('services.title-tasting')</h3>
                <span class="separator mx-auto"></span>
                <p class="mt-5">@lang('services.text-thirty-eight')</p>
            </div>
            <div class="p-2 box-card">
                <h3 class="subtitle-text with-separator text-center">@lang('services.title-special-services')</h3>
                <span class="separator mx-auto"></span>
                <p class="mt-5">@lang('services.text-thirty-nine')</p>
            </div>
        </div>
    </div>
</div>
@endsection