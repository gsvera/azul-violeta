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


<div class="layout-content" id="contact">
    <div class="wd-6">
        <p class="subtitle-slim text-center">@lang('components.title-contact')</p>
        <p class="mb-3 mt-5">@lang('components.text-contact')</p>
    </div>
    <div class="option-contact">
        <div>
            <p class="name-option-contact">
                WHATSAPP
            </p>
            <p class="data-contact">+52 112 332 1245</p>
        </div>
        <div class="content-center-xy">
            <a href="https://wa.me/1123321245" target="_blank" class="link-contact">
                @lang('components.link-whatsapp') <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>

    <div class="option-contact">
        <div>
            <p class="name-option-contact">
                @lang('components.option-contact-mail')
            </p>
            <p class="data-contact">hola@azul-violeta.com</p>
        </div>
        <div class="content-center-xy">
            <a href="mailto:hola@azul-violeta.com" class="link-contact">
                @lang('components.link-mail') <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
     <div class="option-contact">
        <div>
            <p class="name-option-contact">
                @lang('components.option-contact-phone')
            </p>
            <p class="data-contact">+52 112 332 1245</p>
        </div>
        <div class="content-center-xy">
            <a href="tel:+1123321245" class="link-contact">
                @lang('components.link-phone') <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <div class="layout-content-contact-box">
        <p class="subtitle-slim text-center mb-1">@lang('components.title-contact-box')</p>
        <p class="subtitle-big mb-3">@lang('components.subtitle-contact-box')</p>
        <p class="text-center mb-3">@lang('components.title-information')</p>
        <p class="mb-3">@lang('components.text-information')</p>
        <form action="{{url($prefijo . ($lang == 'es' ? 'gracias' : 'thanks'))}}" method="post" id="form-contact">
            {{@csrf_field()}}
            <div class="container-input-custom">
                <label class="label-custom" for="full-name">@lang('components.full-name') *</label>
                <input class="input-custom" type="text" name="full-name" id="full-name" placeholder="@lang('components.placeholder-name')">
            </div>
            <div class="container-input-custom">
                <label class="label-custom" for="phone-number">@lang('components.phone-number') *</label>
                <input class="input-custom" type="text" name="phone-number" id="phone-number" placeholder="@lang('components.placeholder-phonenumber')">
            </div>
            <div class="container-input-custom">
                <label class="label-custom" for="email">Email *</label>
                <input class="input-custom" type="text" name="email" id="email" placeholder="@lang('components.placeholder-email')">
            </div>
            <div class="container-input-custom">
                <label class="label-custom" for="message">@lang('components.message')</label>
                <textarea class="input-custom" type="text" name="message" placeholder="@lang('components.placeholder-message')" rows="5"></textarea>
            </div>
            <p class="warning d-none" id="error-text">@lang('components.required-fields')</p>
            <p class="warning d-none" id="error-email">@lang('components.required-email')</p>
            <div class="g-recaptcha mb-3" data-sitekey="{{env('GOOGLE_PUBLIC_KEY')}}" data-callback="recaptchaOK" data-expired-callback="recaptchaExpired"></div>
            <div class="content-center">
                <button class="disabled-btn" type="submit" id="btn-submit" disabled>@lang('components.btn-send-message')</button>
            </div>
        </form>
    </div>

</div>