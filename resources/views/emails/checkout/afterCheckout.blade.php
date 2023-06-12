@component('mail::message')

Hi {{$checkout->User->name}}
<br>
Thank You for register, please see payment instruction by click the button below.

@component('mail::button', ['url' => route('user.checkout.invoice', $checkout->id)])
Get Invoice
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent  
 