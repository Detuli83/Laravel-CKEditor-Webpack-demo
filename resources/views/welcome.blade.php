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

            .ck.ck-editor {
                height: 100vh!important;
                width: 100vw!important;
            }

            .ck-editor__editable_inline {
                min-height: 92vh;
                max-height: 100%;
            }

        </style>
        <script src="{{ asset('js/ckeditor.js') }}"></script>

    </head>
    <body>
        <div id="editor" style="height: 100vh; width: 100vw">
            <p>Dummy Content</p>
        </div>
    </body>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                fullPage: true
            } )
            .catch( error => {
                console.error( error );
            } );

    </script>

</html>
