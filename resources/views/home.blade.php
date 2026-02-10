@extends('layouts.layout')
@section('content')
    <div class="antialiased">
        <div class="banner-home">
            <div>
                <div class="banner-home-content">
                    <h1 class="banner-home-title">@lang('home.title-home')</h1>
                </div>
            </div>
        </div>
        <div class="layout-content">
            <h2 class="subtitle-big">@lang('home.subtitle-home')</h2>
            <p class="mt-5">@lang('home.text-one')</p>
            <p>@lang('home.text-two')</p>
            <div class="content-img-home">
                <div class="content-img-left">
                    <div>
                        <img class="img-started" src="/assets/mesa-larga.jpg" alt="Mesa larga para eventos de bodas">
                    </div>
                </div>
                <div class="content-img-center">
                    <img class="img-started" src="/assets/novia.jpg" alt="Novia">
                </div>
                <div class="content-img-right">
                    <div>
                        <div class="content-img-right-one">
                            <img class="img-started" src="/assets/novio.jpg" alt="Novio">
                        </div>
                        <div class="content-img-right-two">
                            <img class="img-started" src="/assets/iniciales-gigantes.png" alt="Iniciales gigantes para bodas">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="layout-content">
            <div class="two-cols">
                <div class="pt-3">
                    <h2 class="subtitle-slim">@lang('home.subtitle-about')</h2>
                    <h3 class="subtitle-text with-separator">@lang('home.our-history')</h3>
                    <span class="separator"></span>
                    <div class="mt-10">
                        <p>@lang('home.text-three')</p>
                        <p>@lang('home.text-four')</p>
                    </div>
                </div>
                <div class="content-center-xy">
                    <div class="content-img-our-history">
                        <img src="/assets/anillos.jpg" alt="Anillos de bodas">
                    </div>
                </div>
            </div>
        </div>
        <div class="layout-content-full">
            <div class="two-cols">
                <div class="bg-mission content-center-xy">
                    <div class="">
                        <div>
                            <h3 class="subtitle-text subtitle-text-light with-separator">@lang('home.our-mission')</h3>
                            <span class="separator separator-light"></span>
                            <p class="text-light mt-5">@lang('home.text-five')</p>
                        </div>
                        <div class="mt-5">
                            <h3 class="subtitle-text subtitle-text-light with-separator">@lang('home.our-vision')</h3>
                            <span class="separator separator-light"></span>
                            <p class="text-light mt-5">@lang('home.text-six')</p>
                        </div>
                    </div>
                </div>
                <div class="content-img-mission">
                    <img src="/assets/mission.jpg" alt="Decoracion de eventos de bodas">
                </div>
            </div>
        </div>
        <div class="layout-content">
            <h2 class="subtitle-slim text-center">
              @lang('home.our-values')   
            </h2>
            <div class="box-simple-border">
                <div>
                    <div class="number">01.</div>
                    <h3 class="box-simple-border-subtitle">@lang('home.commitment')</h3>
                    <p>@lang('home.text-seven')</p>
                </div>
                <div class="left-separator top-separator">
                    <div class="number">02.</div>
                    <h3 class="box-simple-border-subtitle">@lang('home.warmth')</h3>
                    <p>@lang('home.text-eight')</p>
                </div>
                <div class="left-separator top-separator">
                    <div class="number">03.</div>
                    <h3 class="box-simple-border-subtitle">@lang('home.excellence')</h3>
                    <p>@lang('home.text-nine')</p>
                </div>
                <div class="left-separator top-separator">
                    <div class="number">04.</div>
                    <h3 class="box-simple-border-subtitle">@lang('home.integrity')</h3>
                    <p>@lang('home.text-ten')</p>
                </div>
            </div>
        </div>
        <div class="layout-content-full">
            <h2 class="subtitle-slim text-center">@lang('home.our-team')</h2>
            <div class="content-our-team">                
                <div>
                    <img class="img-our-team" src="/assets/trabaja-con-nosotros.jpg" alt="Equipo de coordinación durante boda">
                </div>
                <div class="content-center-xy">
                    <div>
                        <p>@lang('home.text-eleven')</p>
                        <p>@lang('home.text-twelve')</p>
                    </div>
                </div>                
            </div>
        </div>
        <div class="layout-content-full">
            <div class="content-why-choose-us">
                <h3 class="subtitle-text-light subtitle-text text-center mt-xs-3">@lang('home.why-work-with-us')</h3>
                <p class="text-light mt-5">@lang('home.text-thirteen')</p>
                <p class="text-light">@lang('home.text-fourteen')</p>
            </div>
            <div class="bg-img-choose-us">
                <div>
                    <div class="layout-content">
                        <div class="box-border-white-3">
                            <div>
                                <h2 class="subtitle-text-light subtitle-text text-center mb-3">@lang('home.constant-communication')</h2>
                                <p class="text-light">@lang('home.text-seventeen')</p>
                            </div>
                            <div class="left-separator-white">
                                <h2 class="subtitle-text-light subtitle-text text-center mb-3">@lang('home.why-choose-us')</h2>
                                <p class="text-light">@lang('home.text-eighteen')</p>
                            </div>
                            <div class="left-separator-white">
                                <h2 class="subtitle-text-light subtitle-text text-center mb-3">@lang('home.destination-we-handle')</h2>
                                <p class="text-light">@lang('home.text-nineteen')</p>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <div class="layout-content">
            <h2 class="subtitle-slim text-center">@lang('home.our-process')</h2>
            <h3 class="subtitle-big mt-xs-3">@lang('home.text-fifteen')</h3>
            <p class="mt-5">@lang('home.text-sixteen')</p>
            <div class="step-wedding">
                <div class="step-border-top step-wedding-div">
                    <p class="number-step">@lang('home.one')</p>
                    <h4 class="step-title">@lang('home.first-step')</h4>
                    <h5 class="step-subtitle">@lang('home.first-step-subtitle')</h5>
                    <p class="text-elipsis" id="text-step-one">
                        @lang('home.text-step-one')
                        <br />
                        <br />
                        @lang('home.text-step-two')
                    </p>
                    <button type="button" class="show-more" id="button-step-one" onclick="showText('one')">@lang('home.read-more')</button>                
                </div>
                <div class="step-border-top">
                    <p class="number-step">@lang('home.two')</p>
                    <h4 class="step-title">@lang('home.second-step')</h4>
                    <h5 class="step-subtitle">@lang('home.second-step-subtitle')</h5>
                    <p class="text-elipsis" id="text-step-two">
                        @lang('home.text-step-three')
                        <br />
                        <br />
                        @lang('home.text-step-four')
                    </p>
                    <button type="button" class="show-more" id="button-step-two" onclick="showText('two')">@lang('home.read-more')</button>
                </div>
                <div class="step-border-top">
                    <p class="number-step">@lang('home.three')</p>
                    <h4 class="step-title">@lang('home.three-step')</h4>
                    <h5 class="step-subtitle">@lang('home.three-step-subtitle')</h5>
                    <p class="text-elipsis" id="text-step-three">
                        @lang('home.text-step-five')
                        <br />
                        <br />
                        @lang('home.text-step-six')
                    </p>                    
                    <button type="button" class="show-more" id="button-step-three" onclick="showText('three')">@lang('home.read-more')</button>
                </div>
            </div>
            <div class="step-wedding">
                <div class="step-border-top">
                    <p class="number-step">@lang('home.four')</p>
                    <h4 class="step-title">@lang('home.four-step')</h4>
                    <h5 class="step-subtitle">@lang('home.four-step-subtitle')</h5>
                    <p class="text-elipsis" id="text-step-four">
                        @lang('home.text-step-seven')
                        <br />
                        <br />
                        @lang('home.text-step-eight')
                    </p>
                    <button type="button" class="show-more" id="button-step-four" onclick="showText('four')">@lang('home.read-more')</button>
                </div>
                <div class="step-border-top">
                    <p class="number-step">@lang('home.five')</p>
                    <h4 class="step-title">@lang('home.five-step')</h4>
                    <h5 class="step-subtitle">@lang('home.five-step-subtitle')</h5>
                    <p class="text-elipsis" id="text-step-five">
                        @lang('home.text-step-nine')
                    </p>
                    <button type="button" class="show-more" id="button-step-five" onclick="showText('five')">@lang('home.read-more')</button>
                </div>
                <div class="step-border-top">
                    <p class="number-step">@lang('home.six')</p>
                    <h4 class="step-title">@lang('home.six-step')</h4>
                    <h5 class="step-subtitle">@lang('home.six-step-subtitle')</h5>
                    <p class="text-elipsis" id="text-step-six">@lang('home.text-step-ten')</p>
                    <button type="button" class="show-more" id="button-step-six" onclick="showText('six')">@lang('home.read-more')</button>
                </div>
            </div>
            <div class="step-wedding">
                <div class="step-border-top">
                    <p class="number-step">@lang('home.seven')</p>
                    <h4 class="step-title">@lang('home.seven-step')</h4>
                    <h5 class="step-subtitle">@lang('home.seven-step-subtitle')</h5>
                    <p class="text-elipsis" id="text-step-seven">
                        @lang('home.text-step-eleven')
                        <br />
                        <br />
                        @lang('home.text-step-twelve')
                    </p>
                    <button type="button" class="show-more" id="button-step-seven" onclick="showText('seven')">@lang('home.read-more')</button>
                </div>
                <div class="step-border-top">
                    <p class="number-step">@lang('home.eight')</p>
                    <h4 class="step-title">@lang('home.eight-step')</h4>
                    <h5 class="step-subtitle">@lang('home.eight-step-subtitle')</h5>
                    <p class="text-elipsis" id="text-step-eight">@lang('home.text-step-thirteen')</p>
                    <button type="button" class="show-more" id="button-step-eight" onclick="showText('eight')">@lang('home.read-more')</button>
                </div>
            </div>
        </div>
        
    </div>
@endsection