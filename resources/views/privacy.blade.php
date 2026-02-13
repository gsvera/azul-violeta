@extends('layouts.layout')
@section('content')

<div>
    <div class="banner-thanks">
        <div>
            <div class="banner-home-content">
                <h1 class="banner-home-title">@lang('privacy.title')</h1>                
            </div>
        </div>
    </div>
    <div class="layout-content">
        <div class="wd-8">
            <h2 class="subtitle-big mb-3">@lang('privacy.subtitle')</h2>
            <p class="text-justify mb-3">
                @lang('privacy.text-one')
            </p>
            <h3 class="bold mb-2 question">@lang('privacy.subtitle-one')</h3>
            <h4 class="bold mb-1">@lang('privacy.important-data-one')</h4>
            <p class="text-justify mb-3">
                @lang('privacy.text-two')
            </p>
            <h4 class="bold mb-1">@lang('privacy.important-data-two')</h4>
            <p class="text-justify mb-3">
                @lang('privacy.text-three')
            </p>
            <h4 class="bold mb-1">@lang('privacy.important-data-three')</h4>
            <p class="text-justify mb-3">
                @lang('privacy.text-four')
            </p>
            <h3 class="bold mb-2 question">@lang('privacy.subtitle-two')</h3>
            <p class="text-justify mb-3">
                @lang('privacy.text-five')
            </p>
            <h3 class="bold mb-2 question">@lang('privacy.subtitle-three')</h3>
            <p class="text-justify mb-3">
                @lang('privacy.text-six')
            </p>
            <h3 class="bold mb-2 question">@lang('privacy.subtitle-four')</h3>
            <p class="text-justify mb-3">
                @lang('privacy.text-seven')
            </p>
            <h3 class="bold mb-2 question">@lang('privacy.subtitle-five')</h3>
            <p class="text-justify mb-3">
                @lang('privacy.text-eight')
            </p>
            <h3 class="bold mb-2 question">COOKIES</h3>
            <p class="text-justify mb-3">
                @lang('privacy.text-nine')
            </p>
            <h3 class="bold mb-2 question">@lang('privacy.subtitle-six')</h3>
            <p class="text-justify mb-3">
                @lang('privacy.text-ten')
            </p>            
            <p class="text-justify mb-1">@lang('privacy.date')</p>
        </div>
    </div>
</div>


@endsection