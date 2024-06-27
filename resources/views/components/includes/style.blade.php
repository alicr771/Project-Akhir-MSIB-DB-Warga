<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
<link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
@if (Route::is('forgot') || Route::is('login') || Route::is('reset.password'))
<link rel="stylesheet" href="{{ asset('css/argon-dashboard.css') }}">
@else
<link rel="stylesheet" href="{{ asset('assets/css/argon.css') }}">
@endif
@vite('resources/sass/app.scss', 'resources/js/app.js')
