@component('mail::message')
# Introduction

<div class="rojo">The body of your message.</div>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
