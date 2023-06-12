@component('mail::message')

Hi {{$checkout->User->name}}
<br>
Thank You for register, please see payment instruction by click the button below.

@component('mail::button', ['url' => route('dashboard', $checkout->id)])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent  
 