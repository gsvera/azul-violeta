@php
    $lang = App::getLocale();
    $prefijo = "";

    if($lang == 'es')
    {
        $prefijo = '/';
    }
    else{
        $prefijo = '/en/';
    }
@endphp

<div>
    <x-contact-box />
    <div class="footer">
        <div class="footer-content-menu">
            <div class="footer-content-space-between">
                <div class="content-center-mob">
                    <img src="/assets/logo-azul-violeta.jpg" alt="Logo azul violeta">
                </div>
                <div class="content-menu-footer">
                    <div class="menu-footer">
                        <div><a href="{{$prefijo}}">@lang('components.home')</a></div>
                        <div><a href="{{$prefijo . 'venues'}}">@lang('components.venues')</a></div>
                        <div><a href="{{$prefijo . ($lang == 'es' ? 'tipos-de-bodas' : 'wedding-type' )}}">@lang('components.weddings-type')</a></div>
                        <div><a href="{{$prefijo . ($lang == 'es' ? 'grupos-y-convenciones' : 'group-and-conventions')}}">@lang('components.group-and-conventions')</a></div>
                        <div><a href="{{$prefijo . ($lang == 'es' ? 'servicios' : 'services') }}">@lang('components.services')</a></div>
                        <div><a href="{{$prefijo . ($lang == 'es' ? 'galeria' : 'gallery')}}">@lang('components.gallery')</a></div>
                        <div>@lang('components.blog')</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-content-contact mt-5">
            <div>
                <p class="subtitle-footer">@lang('components.address')</p>
                <p class="text-light">5116 Dietrich Mill, North Emmet</p>
                <p class="text-light">Dakota USA 45862</p>
            </div>
            <div class="mt-xs-3">
                <p class="subtitle-footer">@lang('components.contact-footer')</p>
                <p class="text-light">998 881 8585</p>
                <p class="text-light">hola@azulvioleta.com</p>
            </div>
        </div>
        <div class="footer-content-copyright">
            <div>
                <p class="text-light">COPYRIGHT © 2026 HUELLA DIGITAL</p>
            </div>
            <div class="content-space-between-desk">
                <div class="text-light mt-xs-3"><a href="{{$prefijo . ($lang == 'es' ? 'politica-de-privacidad' : 'privacy-policy')}}">@lang('components.privacy')</a></div>
                <div class="text-light ml-ds-4 mt-xs-3"><a href="{{$prefijo . ($lang == 'es' ? 'terminos-y-condiciones' : 'terms-and-conditions')}}">@lang('components.terms')</a></div>
            </div>
        </div>
    </div>
</div>