<div class="owl-carousel owl-theme">
    @foreach ($slider as $slide)
        <div class="item">
            <img src="{{ $slide->src }}" alt="{{ $slide->judul }}">
        </div>
    @endforeach
</div>
