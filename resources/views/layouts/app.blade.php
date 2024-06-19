<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])

        {{-- Chart js --}}
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    </head>

    <body>
        @yield('layout')

        @stack('scripts')

        {{-- TINYMCE --}}
        <script src="https://cdn.tiny.cloud/1/{{ env('TINYMCE_API_KEY') }}/tinymce/7/tinymce.min.js" referrerpolicy="origin">
        </script>
        <script>
            tinymce.init({
                selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
                plugins: 'code table lists',
                toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </body>

</html>
