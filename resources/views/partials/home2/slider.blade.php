<div class="owl-carousel owl-theme">
    @foreach($slider as $i =>$v)
    <div class="item"><img src="{{$v->src}}" alt="Slide 1"></div>
    @endforeach
    <!-- Add more slides as needed -->
</div>
