@extends('layouts.layout')
@section('content')
<div>
    <div class="banner-venues">
        <div>
            <div class="banner-home-content">
                <h1 class="banner-home-title">@lang('venues.title-banner')</h1>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <h2 class="subtitle-big">@lang('venues.subtitle')</h2>
        <div class="content-center my-4">
            <div class="separator"></div>
        </div>
        <div class="content-two-col-text">
            <div>
                <p>
                    @lang('venues.text-one')
                </p>
            </div>
            <div>
                <p>
                    @lang('venues.text-two')
                </p>
            </div>
        </div>        
        <div class="content-center">
            <img src="/assets/locaciones-exclusivas.png" alt="Venues exclusivos">
        </div>
    </div>
    <div class="content-layout-full">
        <div class="content-why-choose-us">
            <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">@lang('venues.subtitle-type-venues')</h3>
            <div class="box-border-white-3 mt-5">
                <div>
                    <h2 class="subtitle-text-light subtitle-text text-center mb-3">@lang('venues.subtitle-beach-venue')</h2>
                    <p class="text-light">@lang('venues.text-three')</p>
                </div>
                <div class="left-separator-white">
                    <h2 class="subtitle-text-light subtitle-text text-center mb-3">@lang('venues.subtitle-cenote-venue')</h2>
                    <p class="text-light">@lang('venues.text-four')</p>
                </div>
                <div class="left-separator-white">
                    <h2 class="subtitle-text-light subtitle-text text-center mb-3">@lang('venues.subtitle-hacienda-venue')</h2>
                    <p class="text-light">@lang('venues.text-five')</p>
                </div>
            </div>
            <div class="box-border-white-2 mt-3">
                <div>
                    <h2 class="subtitle-text-light subtitle-text text-center mb-3">@lang('venues.subtitle-garden-venue')</h2>
                    <p class="text-light">@lang('venues.text-six')</p>
                </div>
                <div class="left-separator-white">
                    <h2 class="subtitle-text-light subtitle-text text-center mb-3">@lang('venues.subtitle-lounge-venue')</h2>
                    <p class="text-light">@lang('venues.text-seven')</p>
                </div>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <div class="two-cols">
            <div class="pt-3">
                <h2 class="subtitle-slim">@lang('venues.subtitle-beach-wedding')</h2>
                <h3 class="subtitle-text with-separator">@lang('venues.second-subtitle-beach-wedding')</h3>
                <span class="separator"></span>
                <div class="mt-10">
                    <p>@lang('venues.text-eight')</p>
                </div>
            </div>
            <div class="content-center-xy">
                <div class="content-img-location">
                    <img src="/assets/locacion-playa.jpg" alt="Locacion para bodas en playas">
                </div>
            </div>
        </div>
    </div>
    <div class="layout-content-full">
        <div class="two-cols">
            <div class="content-img-mission">
                <img src="/assets/playa-ventajas.jpg" alt="Decoracion de eventos de bodas en playas">
            </div>
            <div class="bg-mission content-center-xy">
                <div class="">
                    <div>
                        <h3 class="subtitle-text subtitle-text-light with-separator">@lang('venues.advantage-beach-one')</h3>
                        <span class="separator separator-light"></span>
                        <p class="text-light mt-5">@lang('venues.text-nine')</p>
                    </div>
                    <div class="mt-5">
                        <h3 class="subtitle-text subtitle-text-light with-separator">@lang('venues.advantage-beach-two')</h3>
                        <span class="separator separator-light"></span>
                        <p class="text-light mt-5">@lang('venues.text-ten')</p>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <div class="layout-content">
        <h3 class="subtitle-slim text-center mt-xs-3">@lang('venues.beach-options')</h3>
        <div class="step-wedding">
            <div class="step-border-top step-wedding-div">
                <h2 class="step-title">@lang('venues.beach-option-subtitle-one')</h2>
                <p class="text-elipsis" id="text-step-one">
                    @lang('venues.text-eleven')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('venues.beach-option-subtitle-two')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('venues.text-twelve')
                </p>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <div class="two-cols">
            <div class="pt-3">
                <h2 class="subtitle-slim">@lang('venues.subtitle-cenote-wedding')</h2>
                <h3 class="subtitle-text with-separator">@lang('venues.second-subtitle-cenote-wedding')</h3>
                <span class="separator"></span>
                <div class="mt-10">
                    <p>@lang('venues.text-thirteen')</p>
                </div>
            </div>
            <div class="content-center-xy">
                <div class="content-img-location">
                    <img src="/assets/locacion-cenote.jpg" alt="Locacion para bodas en cenotes">
                </div>
            </div>
        </div>
    </div>
    <div class="layout-content-full">
        <div class="two-cols">
            <div class="content-img-mission">
                <img src="/assets/cenotes-ventajas.jpg" alt="Decoracion de eventos de bodas para cenotes">
            </div>
            <div class="bg-mission content-center-xy">
                <div class="">
                    <div>
                        <h3 class="subtitle-text subtitle-text-light with-separator">@lang('venues.advantage-cenote-one')</h3>
                        <span class="separator separator-light"></span>
                        <p class="text-light mt-5">@lang('venues.text-fourteen')</p>
                    </div>
                    <div class="mt-5">
                        <h3 class="subtitle-text subtitle-text-light with-separator">@lang('venues.advantage-cenote-two')</h3>
                        <span class="separator separator-light"></span>
                        <p class="text-light mt-5">@lang('venues.text-fifteen')</p>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <div class="layout-content">
        <h3 class="subtitle-slim text-center mt-xs-3">@lang('venues.cenote-options')</h3>
        <div class="step-wedding">
            <div class="step-border-top step-wedding-div">
                <h2 class="step-title">@lang('venues.cenote-option-subtitle-one')</h2>
                <p class="text-elipsis" id="text-step-one">
                    @lang('venues.text-sixteen')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('venues.cenote-option-subtitle-two')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('venues.text-seventeen')
                </p>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <div class="two-cols">
            <div class="pt-3">
                <h2 class="subtitle-slim">@lang('venues.subtitle-hacienda-wedding')</h2>
                <h3 class="subtitle-text with-separator">@lang('venues.second-subtitle-hacienda-wedding')</h3>
                <span class="separator"></span>
                <div class="mt-10">
                    <p>@lang('venues.text-eighteen')</p>
                </div>
            </div>
            <div class="content-center-xy">
                <div class="content-img-location">
                    <img src="/assets/locacion-yucatan.jpg" alt="Locacion para bodas en yucatan">
                </div>
            </div>
        </div>
    </div>    
    <div class="content-simple-text">
        <div>
            <h3 class="subtitle-big mt-xs-3 text-light mb-3">@lang('venues.services-hacienda-subtitle')</h3>
            <p class="text-light">@lang('venues.text-nineteen')</p>
        </div>
    </div>
    <div class="layout-content">
        <h3 class="subtitle-slim text-center mt-xs-3">@lang('venues.hacienda-feature-subtitle')</h3>
        <div class="step-wedding">
            <div class="step-border-top step-wedding-div">
                <h2 class="step-title">@lang('venues.feature-subtitle-one')</h2>
                <p class="text-elipsis" id="text-step-one">
                    @lang('venues.text-twenty')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('venues.feature-subtitle-two')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('venues.text-twenty-one')
                </p>
            </div>
             <div class="step-border-top">
                <h2 class="step-title">@lang('venues.feature-subtitle-three')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('venues.text-twenty-two')
                </p>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <div class="two-cols">
            <div class="pt-3">
                <h2 class="subtitle-slim">@lang('venues.garden-option')</h2>
                <h3 class="subtitle-text with-separator">@lang('second-garden-option-subtitle')</h3>
                <span class="separator"></span>
                <div class="mt-10">
                    <p>@lang('venues.text-twenty-three')</p>
                </div>
            </div>
            <div class="content-center-xy">
                <div class="content-img-location">
                    <img src="/assets/locacion-jardin.jpg" alt="Locacion para bodas en jardin">
                </div>
            </div>
        </div>
    </div>
    <div class="layout-content-full">
        <div class="two-cols">
            <div class="content-img-mission">
                <img src="/assets/jardin-ventajas.jpg" alt="Decoracion de eventos de bodas en jardin">
            </div>
            <div class="bg-mission content-center-xy">
                <div class="">
                    <div>
                        <h3 class="subtitle-text subtitle-text-light with-separator">@lang('venues.advantage-subtitle-garden-one')</h3>
                        <span class="separator separator-light"></span>
                        <p class="text-light mt-5">@lang('venues.text-twenty-four')</p>
                    </div>
                    <div class="mt-5">
                        <h3 class="subtitle-text subtitle-text-light with-separator">@lang('venues.advantage-subtitle-garden-two')</h3>
                        <span class="separator separator-light"></span>
                        <p class="text-light mt-5">@lang('venues.text-twenty-five')</p>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <div class="layout-content">
        <h3 class="subtitle-slim text-center mt-xs-3">@lang('venues.garden-options')</h3>
        <div class="step-wedding">
            <div class="step-border-top step-wedding-div">
                <h2 class="step-title">@lang('venues.garden-option-subtitle-one')</h2>
                <p class="text-elipsis" id="text-step-one">
                    @lang('venues.text-twenty-six')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('venues.garden-option-subtitle-two')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('venues.text-twenty-seven')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('venues.garden-option-subtitle-three')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('venues.text-twenty-eight')
                </p>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <div class="two-cols">
            <div class="pt-3">
                <h2 class="subtitle-slim">@lang('venues.lounge-option')</h2>
                <h3 class="subtitle-text with-separator">@lang('venues.second-lounge-option-subtitle')</h3>
                <span class="separator"></span>
                <div class="mt-10">
                    <p>@lang('venues.text-twenty-nine')</p>
                </div>
            </div>
            <div class="content-center-xy">
                <div class="content-img-location">
                    <img src="/assets/locacion-salon.jpg" alt="Locacion para bodas en salon de eventos">
                </div>
            </div>
        </div>
    </div>
    <div class="layout-content-full">
        <div class="two-cols">
            <div class="content-img-mission">
                <img src="/assets/salon-ventajas.jpg" alt="Decoracion de eventos de bodas en salon">
            </div>
            <div class="bg-mission content-center-xy">
                <div class="">
                    <div>
                        <h3 class="subtitle-text subtitle-text-light with-separator">@lang('venues.lounge-types-subtitle')</h3>
                        <span class="separator separator-light"></span>
                        <p class="text-light mt-5">@lang('venues.text-thirty')</p>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <div class="layout-content">
        <h3 class="subtitle-slim text-center mt-xs-3">@lang('venues.advantage-lounge')</h3>
        <div class="step-wedding">
            <div class="step-border-top step-wedding-div">
                <h2 class="step-title">@lang('venues.advantage-lounge-subtitle-one')</h2>
                <p class="text-elipsis" id="text-step-one">
                    @lang('venues.text-thirty-one')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('venues.advantage-lounge-subtitle-two')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('venues.text-thirty-two')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('venues.advantage-lounge-subtitle-three')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('venues.text-thirty-three')
                </p>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <div class="two-cols">
            <div class="pt-3">
                <h2 class="subtitle-slim">@lang('venues.ranch-option')</h2>
                <h3 class="subtitle-text with-separator">@lang('venues.ranch-option-subtitle')</h3>
                <span class="separator"></span>
                <div class="mt-10">
                    <p>@lang('venues.text-thirty-four')</p>
                </div>
            </div>
            <div class="content-center-xy">
                <div class="content-img-location">
                    <img src="/assets/locacion-rancho.png" alt="Locacion para bodas en rancho">
                </div>
            </div>
        </div>
    </div>
    <div class="layout-content-full">
        <div class="two-cols">
            <div class="content-img-mission">
                <img src="/assets/ventajas-rancho.jpg" alt="Decoracion de eventos de bodas en rancho">
            </div>
            <div class="bg-mission content-center-xy">
                <div class="">
                    <div>
                        <h3 class="subtitle-text subtitle-text-light with-separator">@lang('venues.ranch-advantage-subtitle')</h3>
                        <span class="separator separator-light"></span>
                        <p class="text-light mt-5">@lang('venues.text-thirty-five')</p>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <div class="layout-content">
        <h3 class="subtitle-slim text-center mt-xs-3">@lang('venues.ranch-feature')</h3>
        <div class="step-wedding">
            <div class="step-border-top step-wedding-div">
                <h2 class="step-title">@lang('venues.ranch-feature-subtitle-one')</h2>
                <p class="text-elipsis" id="text-step-one">
                    @lang('venues.text-thirty-six')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('venues.ranch-feature-subtitle-two')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('venues.text-thirty-seven')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('venues.ranch-feature-subtitle-three')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('venues.text-thirty-eight')
                </p>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <div class="two-cols">
            <div class="pt-3">
                <h2 class="subtitle-slim">@lang('venues.religion-option')</h2>
                <h3 class="subtitle-text with-separator">@lang('venues.religion-option-subtitle')</h3>
                <span class="separator"></span>
                <div class="mt-10">
                    <p>@lang('venues.text-thirty-nine')</p>
                </div>
            </div>
            <div class="content-center-xy">
                <div class="content-img-location">
                    <img src="/assets/locacion-religioso.jpg" alt="Locacion para bodas en recintos religiosos">
                </div>
            </div>
        </div>
    </div>
    <div class="layout-content-full">
        <div class="two-cols">
            <div class="content-img-mission">
                <img src="/assets/religioso-ventajas.jpg" alt="Decoracion de eventos de bodas en recintos religiosos">
            </div>
            <div class="bg-mission content-center-xy">
                <div class="">
                    <div>
                        <h3 class="subtitle-text subtitle-text-light with-separator">@lang('venues.religion-advantage-subtitle')</h3>
                        <span class="separator separator-light"></span>
                        <p class="text-light mt-5">@lang('venues.text-fourty')</p>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <div class="layout-content">
        <h3 class="subtitle-slim text-center mt-xs-3">@lang('venues.religion-options-subtitle')</h3>
        <div class="step-wedding">
            <div class="step-border-top step-wedding-div">
                <h2 class="step-title">@lang('venues.religion-option-subtitle-one')</h2>
                <p class="text-elipsis" id="text-step-one">
                    @lang('venues.text-fourty-one')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('venues.religion-option-subtitle-two')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('venues.text-fourty-two')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('venues.religion-option-subtitle-three')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('venues.text-fourty-three')
                </p>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <div class="two-cols">
            <div class="pt-3">
                <h2 class="subtitle-slim">@lang('venues.hotel-option')</h2>
                <h3 class="subtitle-text with-separator">@lang('venues.hotel-option-subtitle')</h3>
                <span class="separator"></span>
                <div class="mt-10">
                    <p>@lang('venues.text-fourty-four')</p>
                </div>
            </div>
            <div class="content-center-xy">
                <div class="content-img-location">
                    <img src="/assets/locacion-hoteles.jpg" alt="Locacion para bodas en hoteles">
                </div>
            </div>
        </div>
    </div>
    <div class="layout-content-full">
        <div class="two-cols">
            <div class="content-img-mission">
                <img src="/assets/hoteles-ventajas.jpg" alt="Decoracion de eventos de bodas en hoteles">
            </div>
            <div class="bg-mission content-center-xy">
                <div class="">
                    <div>
                        <h3 class="subtitle-text subtitle-text-light with-separator">@lang('venues.advantage-subtitle-hotel')</h3>
                        <span class="separator separator-light"></span>
                        <p class="text-light mt-5">@lang('venues.text-fourty-five')</p>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <div class="layout-content">
        <h3 class="subtitle-slim text-center mt-xs-3">@lang('venues.accommodatios-type')</h3>
        <div class="step-wedding">
            <div class="step-border-top step-wedding-div">
                <h2 class="step-title">@lang('venues.accomodation-type-subtitle-one')</h2>
                <p class="text-elipsis" id="text-step-one">
                    @lang('venues.text-fourty-six')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('venues.accommodation-type-subtitle-two')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('venues.text-fourty-seven')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('venues.accommodation-type-subtitle-three')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('venues.text-fourty-eight')
                </p>
            </div>
        </div>
    </div>
</div>

@endsection