<div class="jumbotron jumbo" 
@if (isset($jumbotronImage))
    style="background-image: url({{ asset($jumbotronImage) }});"
@else
    style="background-color: crimson"
@endif
>
    <h1 class="display-4">{{ $title }}</h1>
</div>