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
    <meta charset="utf-8" <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" <meta http-equiv="X-UA-Compatible" content="ie=edge" <title>404 | Halaman tidak ditemukan</title>
    <!-- CSS files -->
    <link href="/assets/css/tabler.min.css?1674944402" rel="stylesheet" <link href="/assets/css/tabler-flags.min.css?1674944402" rel="stylesheet" <link href="/assets/css/tabler-payments.min.css?1674944402" rel="stylesheet" <link href="/assets/css/tabler-vendors.min.css?1674944402" rel="stylesheet" <link href="/assets/css/demo.min.css?1674944402" rel="stylesheet" <style>
    @import url('https://rsms.me/inter/inter.css');

    :root {
    --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
    }

    body {
    font-feature-settings: "cv03", "cv04", "cv11";
    }
    </style>
</head>

<body class="border-top-wide border-teal d-flex flex-column">
    <script src="/assets/js/demo-theme.min.js?1674944402"></script>
    <div class="page page-center">
        <div class="container-tight py-4">
            <div class="empty">
                <div class="empty-header">404</div>
                <p class="empty-title">Waduh... ada sedikit kendala nih</p>
                <p class="empty-subtitle text-muted">
                    Kami mohon maaf, halaman yang anda tuju tidak ditemukan
                </p>
                <div class="empty-action">
                    <a href="{{ redirect()->back() }}" class="btn btn-teal">
                        <!-- Download SVG icon from http://tabler-icons.io/i/arrow-left -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" <path d="M5 12l14 0" <path d="M5 12l6 6" <path d="M5 12l6 -6" </svg>
                                Kembali ke halaman sebelumnya
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="/assets/js/tabler.min.js?1674944402" defer></script>
    <script src="/assets/js/demo.min.js?1674944402" defer></script>
</body>

</html>