@component('mail::message')
# Introduction

{{--The body of your message.--}}

{{--@component('mail::button', ['url' => ''])--}}
{{--Button Text--}}
{{--@endcomponent--}}

{{--Thanks,<br>--}}
{{--{{ config('app.name') }}--}}
{{--@endcomponent--}}

Thank you {{ $order->name }}.  We just shipped {{ $order->item_count }} items.

@component('mail::button', ['url' => ''])
    Track Order #{{ $order->id }}
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent