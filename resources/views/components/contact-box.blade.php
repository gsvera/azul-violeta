<div class="layout-content-contact-box">
    <p class="subtitle-slim text-center">@lang('components.title-contact-box')</p>
    <p class="subtitle-big mb-3">@lang('components.subtitle-contact-box')</p>
    <div class="container-input-custom">
        <label class="label-custom" for="full-name">@lang('components.full-name') *</label>
        <input class="input-custom" type="text" name="full-name" placeholder="@lang('components.placeholder-name')">
    </div>
    <div class="container-input-custom">
        <label class="label-custom" for="phone-number">@lang('components.phone-number') *</label>
        <input class="input-custom" type="text" name="phone-number" placeholder="@lang('components.placeholder-phonenumber')">
    </div>
    <div class="container-input-custom">
        <label class="label-custom" for="email">Email *</label>
        <input class="input-custom" type="text" name="email" placeholder="@lang('components.placeholder-email')">
    </div>
    <div class="container-input-custom">
        <label class="label-custom" for="message">@lang('components.message')</label>
        <textarea class="input-custom" type="text" name="message" placeholder="@lang('components.placeholder-message')" rows="5"></textarea>
    </div>
    <div class="content-center">
        <button class="btn-contact-box" type="button">@lang('components.btn-send-message')</button>
    </div>
</div>