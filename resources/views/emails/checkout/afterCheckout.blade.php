@component('mail::message')
# Register Camp {{$checkout->Camp->title}}

Hi {{$checkout->User->name}}
<br />
Thank you for registering on <b> {{ $checkout->Camp->title }} </b>Camp, Please see payment instructions by click the
button below.
@component('mail::button', ['url' => route('user.checkout.invoice', $checkout->id)])
Get Invoice
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
