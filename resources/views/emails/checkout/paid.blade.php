@component('mail::message')
#Your Transaction has Been Confirmed

Hi {{$checkout->User->name ?? ''}}
<br>
Your Transaction has been Confirmed, now you can enjoy the benefits of <b>{{$checkout->camps->title ?? ''}}</b> camp.

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
