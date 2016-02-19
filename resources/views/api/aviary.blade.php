@extends('layouts.master')

@section('content')
    <div class="main-container">
        @include('layouts.partials.alerts')

        <div class="page-header">
            <h2><i class="fa fa-picture-o"></i> Aviary API</h2>
        </div>

        <div class="btn-group btn-group-justified">
            <a href="http://developers.aviary.com/docs/web/setup-guide#constructor" target="_blank" class="btn btn-primary">
                <i class="fa fa-check-square-o"></i> API Overview
            </a>
            <a href="http://developers.aviary.com/docs/web/setup-guide#saving" target="_blank" class="btn btn-primary">
                <i class="fa fa-save"></i> Saving Images
            </a>
            <a href="http://developers.aviary.com/docs/web/setup-guide#styling" target="_blank" class="btn btn-primary">
                <i class="fa fa-flask"></i> CSS Styling
            </a>
        </div>

        <br>

        <p>
            <button onclick="return launchEditor(&quot;myimage&quot;, &quot;https://31.media.tumblr.com/d4411b4c0b41d9c7a73fbcdb1054cb5c/tumblr_n3fyfbZVud1tsaz7eo1_500.jpg&quot;);" class="btn btn-success"><i class="fa fa-magic"></i>Edit Photo
            </button>
        </p>

        <img id="myimage" src="https://31.media.tumblr.com/d4411b4c0b41d9c7a73fbcdb1054cb5c/tumblr_n3fyfbZVud1tsaz7eo1_500.jpg" width="250">

    </div>
    <script src="http://feather.aviary.com/js/feather.js"></script>
    <script>var featherEditor = new Aviary.Feather({
          apiKey: 'your-api-key',
          apiVersion: 3,
          theme: 'dark',
          tools: 'all',
          appendTo: '',
          onSave: function(imageID, newURL) {
            var img = document.getElementById(imageID);
            img.src = newURL;
          },
          onError: function(errorObj) {
            alert(errorObj.message);
          }
        });
        function launchEditor(id, src) {
          featherEditor.launch({
            image: id,
            url: src
          });
          return false;
        }
    </script>
@stop