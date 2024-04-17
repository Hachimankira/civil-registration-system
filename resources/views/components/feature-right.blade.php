<div class="row featurette mt-4 mb-4">
    <div class="col-md-7 order-md-2">
        <h2 class="h2">{{ $heading }}</h2>
        <p class="lead">{{ $description }}</p>
        <x-button link={{$link}}>
            Register here
        </x-button>
    </div>
    <div class="col-md-5 order-md-1">
        <img src="{{ $imgSrc }}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="250" height="250" role="img" aria-label="Placeholder: 500x500">
    </div>
</div>
<hr class="featurette-divider">