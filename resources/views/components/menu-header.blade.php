@php
    $lang = App::getLocale();
    $prefijoTranslate = "";
    $prefijo = "";

    if($lang == 'es')
    {
        $prefijoTranslate = '/en';
        $prefijo = '/';
    }
    else{
        $prefijoTranslate = '/';
        $prefijo = '/en/';
    }
@endphp

<div class="menu-header" id="menu-header">
    <div class="menu-header-items">
        <div class="item-menu">
            <a href="{{$prefijo}}">@lang('components.home')</a>
        </div>
        <div class="item-menu">
            <a href="{{$prefijo . 'venues'}}">@lang('components.venues')</a>
        </div>
        <div class="item-menu">@lang('components.weddings-type')</div>
        <div class="item-menu">@lang('components.group-and-conventions')</div>
        <div class="item-menu-img">
            <img class="img-logo" src="/assets/logo-azul-violeta.jpg" alt="Logo azul violeta">
        </div>
        <div class="item-menu">@lang('components.services')</div>
        <div class="item-menu">@lang('components.gallery')</div>
        <div class="item-menu">@lang('components.blog')</div>
        <div class="item-menu">@lang('components.contanct')</div>
        <div class="item-menu">
            <a href="{{$prefijoTranslate}}" class="btn-lang">{{Str::upper($lang == 'en' ? 'es' : 'en')}}</a>
        </div>
    </div>
    <div class="menu-mobile">
        <div class="item-menu-img">
            <img class="img-logo" src="/assets/logo-azul-violeta.jpg" alt="Logo azul violeta">
        </div>
        <div class="content-center-mob">
            <button type="button" id="btn-menu">
                <img src="/assets/icons/ion_menu.svg" alt="Boton menu">
            </button>
            <div class="ml-4">
                <a href="{{$prefijoTranslate}}" class="btn-lang">{{Str::upper($lang == 'en' ? 'es' : 'en')}}</a>
            </div>
        </div>
        <div class="submenu-mobile" id="submenu-mobile">
            <div class="close-menu">
                <button type="button" id="btn-close-menu" class="text-light">X</button>
            </div>
            <div class="content-items-menu-mob">
                <div>
                    <div class="item-menu-light"><a href="{{$prefijo}}">@lang('components.home')</a></div>
                    <div class="item-menu-light"><a href="{{$prefijo . 'venues'}}">@lang('components.venues')</a></div>
                    <div class="item-menu-light">@lang('components.weddings-type')</div>
                    <div class="item-menu-light">@lang('components.group-and-conventions')</div>
                    <div class="item-menu-light">@lang('components.services')</div>
                    <div class="item-menu-light">@lang('components.gallery')</div>
                    <div class="item-menu-light">@lang('components.blog')</div>
                    <div class="item-menu-light">@lang('components.contanct')</div>
                </div>
            </div>
        </div>
    </div>
</div>