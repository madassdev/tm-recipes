<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CoreUI CSS -->

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script>
        if (location.protocol !== 'https:' && location.hostname != 'localhost') {
            location.replace(`https:${location.href.substring(location.protocol.length)}`);
        }
    </script>
    @yield('links')

    <title>Recipe</title>
</head>

<body class="c-app bg-gray-200 text-gray-900">
    @include('partials.sidebar')

    <div class="c-wrapper">
        <header class="c-header c-header-light c-header-fixed">
            @include('partials.header')
            @yield('subheader')
        </header>

        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">

                    @if(session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show fadeOut col-md-6 mx-auto" role="alert">
                        {{session()->get('error')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show fadeOut col-md-6 mx-auto" role="alert">
                        {{session()->get('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @yield('content')
                </div>
            </main>
        </div>
        <footer class="c-footer">
            <div><a href="https://coreui.io">CoreUI</a> © 2020 creativeLabs.</div>
            <div class="mfs-auto">Powered by&nbsp;<a href="https://coreui.io/pro/">CoreUI Pro</a></div>
        </footer>
    </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- Popper.js first, then CoreUI JS -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
    <script>
    </script>
    @yield('scripts')

</body>

</html>