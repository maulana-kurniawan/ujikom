<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta17
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('components.head_auth')
</head>

<body class="d-flex flex-column">
    <script src="/assets/js/demo-theme.min.js?1674944402"></script>
    <div class="page page-center">
        @yield('content')
        @include('components.script_auth')
    </div>
</body>

@yield('custom_script')

@if(session('success'))
<script>
    Swal.fire({
        toast: true,
        position: 'top',
        icon: 'info',
        text: '{{ session("success") }}',
        showConfirmButton: false,
        timer: 3000
    });
</script>
@endif

</html>
