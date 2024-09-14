<!doctype html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>
        @hasSection('title')
            @yield('title') {{ '|' }}
        @endif
        {{ config('meta.title') }}
    </title>

    <meta name="description" content="{{ config('meta.description') }}">

    <meta name="author" content="Qaseedah Shareef">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework | DEMO">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description" content="{{ config('meta.description') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="shortcut icon" href="{{ asset('assets') }}/media/favicons/favicon.png">

    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('assets') }}/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets') }}/media/favicons/apple-touch-icon-180x180.png">

    <!-- Extra CSS Libraries -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    @stack('style')

    <!-- Main CSS -->
    <link rel="stylesheet" id="css-main" href="{{ asset('assets') }}/css/oneui.min-5.9.css">
</head>

<body>
    <div id="page-container"
        class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">


        @include('layouts.partials.backend-side-overlay') <!-- Right Side Overlay -->

        @include('layouts.partials.backend-side-navbar') <!-- Left Side Navbar -->

        @include('layouts.partials.backend-top-header')

        <main id="main-container">
            @yield('content')
        </main>

        <footer id="page-footer" class="bg-body-light">
            <div class="content py-3">
                <div class="row fs-sm">
                    <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
                        Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold"
                            href="https://qaseedah9.com" target="_blank">QS - Dev Team</a>
                    </div>
                    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                        <a class="fw-semibold" href="https://qaseedah9.com" target="_blank"> Qaseedah Shareef</a> &copy; <span data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
        </footer>
    </div>



    <!-- Extra JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets') }}/js/oneui.app.min-5.9.js"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('assets') }}/js/lib/jquery.min.js"></script>


    <script>
        // Ajax setup
        const csrf = $('meta[name="csrf-token"]').attr('content');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrf
            }
        });


        // Toast
        function showToast(text, type = 'success') {
            let bg;
            switch (type) {
                case 'error':
                    from = '#ff5b5c';
                    to = '#ff5b5c';
                    break;
                case 'success':
                    from = '#00b09b';
                    to = '#96c93d';
                    break;
                default:
                    from = '#00b09b';
                    to = '#96c93d';
                    break;
            }
            console.log(type, bg);

            Toastify({
                text,
                duration: 3000,
                gravity: "top",
                position: "right",
                close: true,
                stopOnFocus: true,
                style: { background: `linear-gradient(to right, ${from}, ${to})` },
                onClick: function() {}
            }).showToast();
        }
    </script>

    @session('success')
        <script>
            showToast('{{ session('success') }}', 'success');
        </script>
    @endif

    @if (session('error'))
        <script>
            showToast('{{ session('error') }}', 'error');
        </script>
    @endif

    @stack('script')

</body>

</html>
