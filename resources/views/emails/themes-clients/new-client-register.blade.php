@component('mail::message')
<p style="text-align: center;">Cordial saludo, el correo electrónico <strong>{{ $email }}</strong> se ha registrado ha <strong>{{config('app.name')}}</strong></p>
 <img class="img-responsive" src="{{ url('/img/main/logo_dark.png') }}" style="padding:15%">
<p style="text-align: center;">Gracias.</p>
@endcomponent
