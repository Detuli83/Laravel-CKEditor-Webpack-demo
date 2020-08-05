<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CKEditor App</title>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
            }

            .ck-editor__editable_inline {
                min-height: 98vh;
                width: 94%;
            }

        </style>
        <script src="{{ asset('js/ckeditor.js') }}"></script>

    </head>
    <body>
        <div class="flex-center position-ref">
            <div id="editor">
                <p>Edit me</p>
            </div>
        </div>
    </body>

    <script>
        BalloonEditor
            .create( document.querySelector( '#editor' ), {
                fullPage: true
            } )
            .catch( error => {
                console.error( error );
            } );

    </script>

</html>
