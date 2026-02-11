@extends('layouts.layout')
@section('content')
<div>
    <div class="banner-wedding-type">
        <div>
            <div class="banner-home-content">
                <h1 class="banner-home-title">@lang('wedding-type.banner-title')</h1>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <h2 class="subtitle-big">@lang('wedding-type.subtitle')</h2>
        <div class="content-center my-4">
            <div class="separator"></div>
        </div>
        <div class="wd-6">
            <p>
                @lang('wedding-type.text-one')
            </p>
        </div>        
        <div class="content-center mt-5">
            <img src="/assets/type-wedding.jpg" alt="@lang('wedding-type.alt-one')">
        </div>
    </div>
    <div class="content-why-choose-us">
        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
            @lang('wedding-type.custom-advice')
        </h3>
        <div class="wd-6">
            <p class="text-light mt-5">
                @lang('wedding-type.text-two')
            </p>
        </div>
    </div>
     <div class="layout-content">
        <h2 class="subtitle-slim text-center">
            @lang('wedding-type.subtitle-ceremonies')
        </h2>
        <div class="box-simple-border">
            <div>
                <div class="number">01.</div>
                <h3 class="box-simple-border-subtitle">@lang('wedding-type.subtitle-ceremonies-one')</h3>
                <p class="mt-1">
                    @lang('wedding-type.text-three')
                </p>
            </div>
            <div class="left-separator top-separator">
                <div class="number">02.</div>
                <h3 class="box-simple-border-subtitle">@lang('wedding-type.subtitle-ceremonies-two')</h3>
                <p class="mt-1">
                    @lang('wedding-type.text-four')
                </p>
            </div>
            <div class="left-separator top-separator">
                <div class="number">03.</div>
                <h3 class="box-simple-border-subtitle">@lang('wedding-type.subtitle-ceremonies-three')</h3>
                <p class="mt-1">
                    @lang('wedding-type.text-five')
                </p>
            </div>
            <div class="left-separator top-separator">
                <div class="number">04.</div>
                <h3 class="box-simple-border-subtitle">@lang('wedding-type.subtitle-ceremonies-four')</h3>
                <p class="mt-1">
                    @lang('wedding-type.text-six')
                </p>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <div class="two-cols">
            <div class="pt-3">
                <h2 class="subtitle-slim">@lang('wedding-type.title-civil-wedding')</h2>
                <h3 class="subtitle-text with-separator">@lang('wedding-type.subtitle-civil-wedding')</h3>
                <span class="separator"></span>
                <div class="mt-10">
                    <p>
                        @lang('wedding-type.text-seven')
                    </p>
                </div>
            </div>
            <div class="content-center-xy">
                <div class="content-img-location">
                    <img src="/assets/civil-wedding.jpg" alt="@lang('wedding-type.alt-two')">
                </div>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <h3 class="subtitle-slim text-center mt-xs-3">@lang('wedding-type.required-civil-wedding')</h3>
        <div class="content-box-list mt-5">
            <div>
                <div class="box-list">
                    <h2 class="box-list-title">@lang('wedding-type.subtitle-required-one')</h2>
                    <ul class="required-list-item">
                        <li><i class="fa fa-check" aria-hidden="true"></i>@lang('wedding-type.list-item-one')</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>@lang('wedding-type.list-item-two')</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>@lang('wedding-type.list-item-three')</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>CURP</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>@lang('wedding-type.list-item-four')</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>@lang('wedding-type.list-item-five')</li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="box-list">
                    <h2 class="box-list-title">@lang('wedding-type.subtitle-required-two')</h2>
                    <ul class="required-list-item">
                        <li><i class="fa fa-check" aria-hidden="true"></i>@lang('wedding-type.list-item-six')</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>@lang('wedding-type.list-item-seven')</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>@lang('wedding-type.list-item-eight')</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>@lang('wedding-type.list-item-nine')</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>@lang('wedding-type.list-item-ten')</li>
                    </ul>
                </div>
            </div>            
        </div>
    </div>
    <div class="content-why-choose-us">
        <div class="content-center">
            <div class="content-center-xy">
                <i onclick='changeSlide("one", 0)' class="fa fa-arrow-left icon-arrow-white" aria-hidden="true"></i>
            </div>
            <div class="slider">
                <div class="track track-one">
                    <div class="slide">
                        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
                            @lang('wedding-type.the-process')
                        </h3>
                        <div class="wd-6">
                            <p class="text-light mt-5">
                                @lang('wedding-type.text-eight')
                            </p>
                        </div>
                    </div>
                    <div class="slide">
                        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
                            @lang('wedding-type.bilingual-ceremony')
                        </h3>
                        <div class="wd-6">
                            <p class="text-light mt-5">
                                @lang('wedding-type.text-nine')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-center-xy">
                <i onclick='changeSlide("one", 1)' class="fa fa-arrow-right icon-arrow-white" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <div class="two-cols">
            <div class="pt-3">
                <h2 class="subtitle-slim">@lang('wedding-type.title-catholic-wedding')</h2>
                <h3 class="subtitle-text with-separator">@lang('wedding-type.subtitle-catholic-wedding')</h3>
                <span class="separator"></span>
                <div class="mt-10">
                    <p>
                        @lang('wedding-type.text-ten')
                    </p>
                </div>
            </div>
            <div class="content-center-xy">
                <div class="content-img-location">
                    <img src="/assets/catholic-wedding.jpg" alt="Boda catolica">
                </div>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <h3 class="subtitle-slim text-center mt-xs-3">@lang('wedding-type.required-catholic-wedding')</h3>
        <div class="content-box-list-3 mt-5">
            <div>
                <div class="box-list-3">
                    <h2 class="box-list-title">@lang('wedding-type.subtitle-catholic-required-one')</h2>
                    <ul class="required-list-item">
                        <li><i class="fa fa-check" aria-hidden="true"></i>@lang('wedding-type.list-catholic-item-one')</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>@lang('wedding-type.list-catholic-item-two')</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>@lang('wedding-type.list-catholic-item-three')</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>@lang('wedding-type.list-catholic-item-four')</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>@lang('wedding-type.list-caatholic-item-five')</li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="box-list-3">
                    <h2 class="box-list-title">@lang('wedding-type.subtitle-catholic-required-two')</h2>
                    <p>
                        @lang('wedding-type.text-eleven')
                    </p>
                </div>
            </div> 
            <div>
                <div class="box-list-3">
                    <h2 class="box-list-title">@lang('wedding-type.subtitle-catholic-required-three')</h2>
                    <p>
                        @lang('wedding-type.text-twelve')
                    </p>
                </div>
            </div>            
        </div>
    </div>
    <div class="content-why-choose-us">
        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
            @lang('wedding-type.enclosures-option')
        </h3>
        <div class="wd-6">
            <p class="text-light mt-5">
                @lang('wedding-type.text-thirteen')
            </p>
        </div>
    </div>
    <div class="layout-content">
        <div class="two-cols">
            <div class="pt-3">
                <h2 class="subtitle-slim">@lang('wedding-type.title-symbolic-wedding')</h2>
                <h3 class="subtitle-text with-separator">@lang('wedding-type.subtitle-symbolic-wedding')</h3>
                <span class="separator"></span>
                <div class="mt-10">
                    <p>
                        @lang('wedding-type.text-fourteen')
                    </p>
                </div>
            </div>
            <div class="content-center-xy">
                <div class="content-img-location">
                    <img src="/assets/symbolic-wedding.jpg" alt="@lang('wedding-type.alt-three')">
                </div>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <h3 class="subtitle-slim text-center mt-xs-3">@lang('wedding-type.title-rituals')</h3>
        <div class="step-wedding">
            <div class="step-border-top step-wedding-div">
                <h2 class="step-title step-mobile-center">@lang('wedding-type.subtitle-rituals-one')</h2>
                <p class="text-elipsis" id="text-step-one">
                    @lang('wedding-type.text-fifteen')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('wedding-type.subtitle-rituals-two')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('wedding-type.text-sixteen')
                </p>
            </div>            
        </div>
        <div class="step-wedding">
            <div class="step-border-top">
                <h2 class="step-title">@lang('wedding-type.subtitle-rituals-three')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('wedding-type.text-seventeen')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('wedding-type.subtitle-rituals-four')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('wedding-type.text-eighteen')
                </p>
            </div>
        </div>
    </div>
    <div class="content-why-choose-us">
        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
            @lang('wedding-type.pro-offices')
        </h3>
        <div class="wd-6">
            <p class="text-light mt-5">
                @lang('wedding-type.text-nineteen')
            </p>
        </div>
    </div>
    <div class="layout-content">
        <div class="two-cols">
            <div class="pt-3">
                <h2 class="subtitle-slim">@lang('wedding-type.title-jewish-wedding')</h2>
                <h3 class="subtitle-text with-separator">@lang('wedding-type.subtitle-jewish-wedding')</h3>
                <span class="separator"></span>
                <div class="mt-10">
                    <p>
                        @lang('wedding-type.text-twenty')
                    </p>
                </div>
            </div>
            <div class="content-center-xy">
                <div class="content-img-location">
                    <img src="/assets/symbolic-wedding.jpg" alt="@lang('wedding-type.alt-four')">
                </div>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <h3 class="subtitle-slim text-center mt-xs-3">@lang('wedding-type.subtitle-jewish-elements')</h3>
        <div class="step-wedding">
            <div class="step-border-top step-wedding-div">
                <h2 class="step-title">@lang('wedding-type.subtitle-jewish-elements-one')</h2>
                <p class="text-elipsis" id="text-step-one">
                    @lang('wedding-type.text-twenty-one')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('wedding-type.subtitle-jewish-elements-two')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('wedding-type.text-twenty-two')
                </p>
            </div>            
        </div>
        <div class="step-wedding">
            <div class="step-border-top">
                <h2 class="step-title">@lang('wedding-type.subtitle-jewish-elements-three')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('wedding-type.text-twenty-three')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('wedding-type.subtitle-jewish-elements-four')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('wedding-type.text-twenty-four')
                </p>
            </div>
        </div>
    </div>
    <div class="content-why-choose-us">
        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
            @lang('wedding-type.services-jewish')
        </h3>
        <div class="wd-6">
            <p class="text-light mt-5">
                @lang('wedding-type.text-twenty-five')
            </p>
        </div>
    </div>
    <div class="layout-content">
        <div class="two-cols">
            <div class="pt-3">
                <h2 class="subtitle-slim">@lang('wedding-type.title-hindu-wedding')</h2>
                <h3 class="subtitle-text with-separator">@lang('wedding-type.subtitle-hindu-wedding')</h3>
                <span class="separator"></span>
                <div class="mt-10">
                    <p>
                        @lang('wedding-type.text-twenty-six')
                    </p>
                </div>
            </div>
            <div class="content-center-xy">
                <div class="content-img-location">
                    <img src="/assets/symbolic-wedding.jpg" alt="@lang('wedding-type.alt-five')">
                </div>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <h3 class="subtitle-slim text-center mt-xs-3">@lang('wedding-type.hindu-ceremonies')</h3>
        <div class="step-wedding">
            <div class="step-border-top step-wedding-div">
                <h2 class="step-title">@lang('wedding-type.subtitle-hindu-ceremonies')</h2>
                <p class="text-elipsis" id="text-step-one">
                    @lang('wedding-type.text-twenty-seven')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">Mehndi</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('wedding-type.text-twenty-eight')
                </p>
            </div>            
        </div>
        <div class="step-wedding">
            <div class="step-border-top">
                <h2 class="step-title">Sangeet</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('wedding-type.text-twenty-nine')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('wedding-type.subtitle-hindu-ceremonies-two')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('wedding-type.text-thirty')
                </p>
            </div>
        </div>
    </div>
    <div class="content-why-choose-us">
        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
            @lang('wedding-type.hindu-services')
        </h3>
        <div class="wd-6">
            <p class="text-light mt-5">
                @lang('wedding-type.text-thirty-one')
            </p>
        </div>
    </div>
    <div class="layout-content">
        <div class="two-cols">
            <div class="pt-3">
                <h2 class="subtitle-slim">@lang('wedding-type.title-destination-wedding')</h2>
                <h3 class="subtitle-text with-separator">@lang('wedding-type.subtitle-destination-wedding')</h3>
                <span class="separator"></span>
                <div class="mt-10">
                    <p>
                        @lang('wedding-type.text-thirty-two')
                    </p>
                </div>
            </div>
            <div class="content-center-xy">
                <div class="content-img-location">
                    <img src="/assets/destination-wedding.jpg" alt="@lang('wedding-type.alt-six')">
                </div>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <h3 class="subtitle-slim text-center mt-xs-3">@lang('wedding-type.advantage-destination-wedding')</h3>
        <div class="step-wedding">
            <div class="step-border-top step-wedding-div">
                <h2 class="step-title">@lang('wedding-type.subtitle-advantage-destination-wedding-one')</h2>
                <p class="text-elipsis" id="text-step-one">
                    @lang('wedding-type.text-thirty-three')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('wedding-type.subtitle-advantage-destination-wedding-two')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('wedding-type.text-thirty-four')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('wedding-type.subtitle-advantage-destination-wedding-three')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('wedding-type.text-thirty-five')
                </p>
            </div>
        </div>
    </div>
    <div class="content-why-choose-us">
        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
            @lang('wedding-type.experience-destination-wedding')
        </h3>
        <div class="wd-6">
            <p class="text-light mt-5">
                @lang('wedding-type.text-thirty-six')
            </p>
        </div>
    </div>
    <div class="layout-content">
        <div class="two-cols">
            <div class="pt-3">
                <h2 class="subtitle-slim">@lang('wedding-type.title-micro-wedding')</h2>
                <h3 class="subtitle-text with-separator">@lang('wedding-type.subtitle-micro-wedding')</h3>
                <span class="separator"></span>
                <div class="mt-10">
                    <p>
                        @lang('wedding-type.text-thirty-seven')
                    </p>
                </div>
            </div>
            <div class="content-center-xy">
                <div class="content-img-location">
                    <img src="/assets/small-wedding.jpg" alt="@lang('wedding-type.alt-seven')">
                </div>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <h3 class="subtitle-slim text-center mt-xs-3">@lang('wedding-type.micro-wedding-type')</h3>
        <div class="step-wedding">
            <div class="step-border-top step-wedding-div">
                <h2 class="step-title">@lang('wedding-type.micro-wedding-type-one')</h2>
                <p class="text-elipsis" id="text-step-one">
                    @lang('wedding-type.text-thirty-eight')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('wedding-type.micro-wedding-type-two')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('wedding-type.text-thirty-nine')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('wedding-type.micro-wedding-type-three')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('wedding-type.text-fourty')
                </p>
            </div>
        </div>
    </div>
    <div class="content-why-choose-us">
        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
            @lang('wedding-type.advantage-micro-wedding')
        </h3>
        <div class="wd-6">
            <p class="text-light mt-5">
                @lang('wedding-type.text-fourty-one')
            </p>
        </div>
    </div>
    <div class="layout-content">
        <div class="two-cols">
            <div class="pt-3">
                <h2 class="subtitle-slim">@lang('wedding-type.title-luxury-wedding')</h2>
                <h3 class="subtitle-text with-separator">@lang('wedding-type.subtitle-luxury-wedding')</h3>
                <span class="separator"></span>
                <div class="mt-10">
                    <p>
                        @lang('wedding-type.text-fourty-two')
                    </p>
                </div>
            </div>
            <div class="content-center-xy">
                <div class="content-img-location">
                    <img src="/assets/luxury-wedding.png" alt="@lang('wedding-type.alt-eight')">
                </div>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <h3 class="subtitle-slim text-center mt-xs-3">@lang('wedding-type.luxury-service')</h3>
        <div class="step-wedding">
            <div class="step-border-top step-wedding-div">
                <h2 class="step-title">@lang('wedding-type.subtitle-luxury-service-one')</h2>
                <p class="text-elipsis" id="text-step-one">
                    @lang('wedding-type.text-fourty-three')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('wedding-type.subtitle-luxury-service-two')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('wedding-type.text-fourty-four')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('wedding-type.subtitle-luxury-service-three')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('wedding-type.text-fourty-five')
                </p>
            </div>
        </div>
    </div>
    <div class="content-why-choose-us mb-5">
        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
            @lang('wedding-type.luxury-experience')
        </h3>
        <div class="wd-6">
            <p class="text-light mt-5">
                @lang('wedding-type.text-fourty-six')
            </p>
        </div>
    </div>
</div>

@endsection