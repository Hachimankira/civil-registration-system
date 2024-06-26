<div class="col-xl-3 col-xxl-3 col-sm-6">
    <div class="widget-stat card {{ $color }} card shadow-lg">
        <div class="card-body ">
            <div class="media">
                <span class="mr-3">
                    <i class="la la-users"></i>
                </span>
                <div class="media-body text-white">
                    <p class="mb-1">{{ $name }}s</p>
                    <h3 class="text-white">{{ $count }}</h3>
                    <div class="progress mb-2 bg-white">
                        <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                    </div>
                    @isset($increased)
                        <small>{{ $increased }}</small>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>
