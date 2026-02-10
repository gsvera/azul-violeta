@extends('layouts.layout')
@section('content')
<div>
    <div class="banner-groups-conventions">
        <div>
            <div class="banner-home-content">
                <h1 class="banner-home-title">@lang('groups-and-conventions.title-banner')</h1>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <h2 class="subtitle-big">@lang('groups-and-conventions.main-subtitle')</h2>
        <div class="content-center my-4">
            <div class="separator"></div>
        </div>
        <div class="wd-6">
            <p>
                @lang('groups-and-conventions.text-one')
            </p>
        </div>        
        <div class="content-center mt-5">
            <img src="/assets/experience-of-conventions.jpg" alt="@lang('groups-and-conventions.alt-one')">
        </div>
    </div>
    <div class="content-why-choose-us">
        <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">
                @lang('groups-and-conventions.main-subtitle-two')
        </h3>
        <div class="wd-6">
            <p class="text-light mt-5">
                @lang('groups-and-conventions.text-two')
            </p>
        </div>
    </div>
     <div class="layout-content">
        <h2 class="subtitle-slim text-center">
            @lang('groups-and-conventions.main-subtitle-three')
        </h2>
        <div class="box-simple-border">
            <div>
                <div class="number">01.</div>
                <h3 class="box-simple-border-subtitle">@lang('groups-and-conventions.subtitle-service-one')</h3>
                <p class="mt-1">@lang('groups-and-conventions.text-three')</p>
            </div>
            <div class="left-separator top-separator">
                <div class="number">02.</div>
                <h3 class="box-simple-border-subtitle">@lang('groups-and-conventions.subtitle-service-two')</h3>
                <p class="mt-1">@lang('groups-and-conventions.text-four')</p>
            </div>
            <div class="left-separator top-separator">
                <div class="number">03.</div>
                <h3 class="box-simple-border-subtitle">@lang('groups-and-conventions.subtitle-service-three')</h3>
                <p class="mt-1">@lang('groups-and-conventions.text-five')</p>
            </div>
            <div class="left-separator top-separator">
                <div class="number">04.</div>
                <h3 class="box-simple-border-subtitle">@lang('groups-and-conventions.subtitle-service-four')</h3>
                <p class="mt-1">@lang('groups-and-conventions.text-six')</p>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <div class="two-cols">
            <div class="pt-3">
                <h2 class="subtitle-slim">@lang('groups-and-conventions.title-organization')</h2>
                <h3 class="subtitle-text with-separator">@lang('groups-and-conventions.subtitle-organization-one')</h3>
                <span class="separator"></span>
                <div class="mt-3">
                    <p>
                        @lang('groups-and-conventions.text-seven')
                    </p>
                </div>
                <h3 class="subtitle-text with-separator mt-3">@lang('groups-and-conventions.subtitle-organization-two')</h3>
                <span class="separator"></span>
                <div class="mt-3">
                    <p>
                        @lang('groups-and-conventions.text-eight')
                    </p>
                </div>
            </div>
            <div class="content-center-xy">
                <div class="content-img-location">
                    <img src="/assets/organizacion-convenciones.jpg" alt="@lang('groups-and-conventions.alt-two')">
                </div>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <h3 class="subtitle-slim text-center mt-xs-3">@lang('groups-and-conventions.subtitle-organization-service')</h3>
        <div class="step-wedding">
            <div class="step-border-top step-wedding-div">
                <h2 class="step-title">@lang('groups-and-conventions.organization-service-one')</h2>
                <p class="text-elipsis" id="text-step-one">
                    @lang('groups-and-conventions.text-nine')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('groups-and-conventions.organization-service-two')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('groups-and-conventions.text-ten')
                </p>
            </div>            
        </div>
        <div class="step-wedding">
            <div class="step-border-top">
                <h2 class="step-title">@lang('groups-and-conventions.organization-service-three')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('groups-and-conventions.text-eleven')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('groups-and-conventions.organization-service-four')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('groups-and-conventions.text-twelve')
                </p>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <div class="two-cols">
            <div class="pt-3">
                <h2 class="subtitle-slim">@lang('groups-and-conventions.title-congresses')</h2>
                <h3 class="subtitle-text with-separator">@lang('groups-and-conventions.subtitle-congresses-one')</h3>
                <span class="separator"></span>
                <div class="mt-3">
                    <p>
                        @lang('groups-and-conventions.text-thirteen')
                    </p>
                </div>
                <h3 class="subtitle-text with-separator mt-3">@lang('groups-and-conventions.subtitle-congresses-two')</h3>
                <span class="separator"></span>
                <div class="mt-3">
                    <p>
                        @lang('groups-and-conventions.text-fourteen')
                    </p>
                </div>
            </div>
            <div class="content-center-xy">
                <div class="content-img-location">
                    <img src="/assets/congresos.jpg" alt="@lang('groups-and-conventions.alt-three')">
                </div>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <h3 class="subtitle-slim text-center mt-xs-3">@lang('groups-and-conventions.congresses-services')</h3>
        <div class="step-wedding">
            <div class="step-border-top step-wedding-div">
                <h2 class="step-title">@lang('groups-and-conventions.congresses-service-subtitle-one')</h2>
                <p class="text-elipsis" id="text-step-one">
                    @lang('groups-and-conventions.text-fifteen')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('groups-and-conventions.congresses-service-subtitle-two')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('groups-and-conventions.text-sixteen')
                </p>
            </div>            
        </div>
        <div class="step-wedding">
            <div class="step-border-top">
                <h2 class="step-title">@lang('groups-and-conventions.congresses-service-subtitle-three')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('groups-and-conventions.text-seventeen')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('groups-and-conventions.congresses-service-subtitle-four')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('groups-and-conventions.text-eighteen')
                </p>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <div class="two-cols">
            <div class="pt-3">
                <h2 class="subtitle-slim">@lang('groups-and-conventions.title-incentive-trips')</h2>
                <h3 class="subtitle-text with-separator">@lang('groups-and-conventions.subtitle-incentive-trips-one')</h3>
                <span class="separator"></span>
                <div class="mt-3">
                    <p>
                        @lang('groups-and-conventions.text-nineteen')
                    </p>
                </div>
                <h3 class="subtitle-text with-separator mt-3">@lang('groups-and-conventions.subtitle-incentive-trips-two')</h3>
                <span class="separator"></span>
                <div class="mt-3">
                    <p>
                        @lang('groups-and-conventions.text-twenty')
                    </p>
                </div>
            </div>
            <div class="content-center-xy">
                <div class="content-img-location">
                    <img src="/assets/incentive-trips.jpg" alt="@lang('groups-and-conventions.alt-four')">
                </div>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <h3 class="subtitle-slim text-center mt-xs-3">@lang('groups-and-conventions.title-desing-incentive-trips')</h3>
        <div class="step-wedding">
            <div class="step-border-top step-wedding-div">
                <h2 class="step-title">@lang('groups-and-conventions.subtitle-desing-trips-one')</h2>
                <p class="text-elipsis" id="text-step-one">
                    @lang('groups-and-conventions.text-twenty-one')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('groups-and-conventions.subtitle-desing-trips-two')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('groups-and-conventions.text-twenty-two')
                </p>
            </div>            
        </div>
        <div class="step-wedding">
            <div class="step-border-top">
                <h2 class="step-title">@lang('groups-and-conventions.subtitle-desing-trips-three')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('groups-and-conventions.text-twenty-three')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('groups-and-conventions.subtitle-desing-tripe-four')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('groups-and-conventions.text-twenty-four')
                </p>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <div class="two-cols">
            <div class="pt-3">
                <h2 class="subtitle-slim">@lang('groups-and-conventions.title-corporative-events')</h2>
                <h3 class="subtitle-text with-separator">@lang('groups-and-conventions.subtitle-corporative-events-one')</h3>
                <span class="separator"></span>
                <div class="mt-3">
                    <p>
                        @lang('groups-and-conventions.text-twenty-five')
                    </p>
                </div>
                <h3 class="subtitle-text with-separator mt-3">@lang('groups-and-conventions.subtitle-corporative-events-two')</h3>
                <span class="separator"></span>
                <div class="mt-3">
                    <p>
                        @lang('groups-and-conventions.text-twenty-six')
                    </p>
                </div>
            </div>
            <div class="content-center-xy">
                <div class="content-img-location">
                    <img src="/assets/corporative-events.jpg" alt="@lang('groups-and-conventions.alt-five')">
                </div>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <h3 class="subtitle-slim text-center mt-xs-3">@lang('groups-and-conventions.type-corporative-events')</h3>
        <div class="step-wedding">
            <div class="step-border-top step-wedding-div">
                <h2 class="step-title">@lang('groups-and-conventions.subtitle-type-events-one')</h2>
                <p class="text-elipsis" id="text-step-one">
                    @lang('groups-and-conventions.text-twenty-seven')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('groups-and-conventions.subtitle-type-events-two')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('groups-and-conventions.text-twenty-eight')
                </p>
            </div>            
        </div>
        <div class="step-wedding">
            <div class="step-border-top">
                <h2 class="step-title">@lang('groups-and-conventions.subtitle-type-events-three')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('groups-and-conventions.text-twenty-nine')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('groups-and-conventions.subtitle-type-events-four')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('groups-and-conventions.text-thirty')
                </p>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <div class="two-cols">
            <div class="pt-3">
                <h2 class="subtitle-slim">@lang('groups-and-conventions.title-team-building')</h2>
                <h3 class="subtitle-text with-separator">@lang('groups-and-conventions.subtitle-team-building-one')</h3>
                <span class="separator"></span>
                <div class="mt-3">
                    <p>
                        @lang('groups-and-conventions.text-thirty-one')
                    </p>
                </div>
                <h3 class="subtitle-text with-separator mt-3">@lang('groups-and-conventions.subtitle-team-building-two')</h3>
                <span class="separator"></span>
                <div class="mt-3">
                    <p>
                        @lang('groups-and-conventions.text-thirty-two')
                    </p>
                </div>
            </div>
            <div class="content-center-xy">
                <div class="content-img-location">
                    <img src="/assets/team-building.jpg" alt="@lang('groups-and-conventions.alt-six')">
                </div>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <h3 class="subtitle-slim text-center mt-xs-3">@lang('groups-and-conventions.available-activities')</h3>
        <div class="step-wedding">
            <div class="step-border-top step-wedding-div">
                <h2 class="step-title">@lang('groups-and-conventions.available-activities-one')</h2>
                <p class="text-elipsis" id="text-step-one">
                    @lang('groups-and-conventions.text-thirty-three')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('groups-and-conventions.available-activities-two')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('groups-and-conventions.text-thirty-four')
                </p>
            </div>            
        </div>
        <div class="step-wedding">
            <div class="step-border-top">
                <h2 class="step-title">@lang('groups-and-conventions.available-activities-three')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('groups-and-conventions.text-thirty-five')
                </p>
            </div>
            <div class="step-border-top">
                <h2 class="step-title">@lang('groups-and-conventions.availale-activities-four')</h2>
                <p class="text-elipsis" id="text-step-two">
                    @lang('groups-and-conventions.text-thirty-six')
                </p>
            </div>
        </div>
    </div>
</div>
@endsection