<div class="jumbotron jumbo" 
@if (isset($jumbotronImage))
    style="background-image: url({{ asset($jumbotronImage) }});"
@endif
>
    <h1 class="display-4">{{ $title }}</h1>
</div>