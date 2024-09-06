@extends('theme.default.layouts.dashboard')

@section('dashboard-content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Simple Card</h4>
            </div>
            <div class="card-body">
                <h6>HTML Ipsum Presents</h6>
                <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada
                    fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                    tempor sit amet, ante. Donec eu libero sit amet quam egestas
                    semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo.
                    Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi,
                    condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean
                    fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus
                    lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar
                    facilisis. Ut felis.
                </p>
                <h6>Header Level 2</h6>
                <ol>
                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                    <li>Aliquam tincidunt mauris eu risus.</li>
                </ol>
                <div class="figure d-block">
                    <blockquote class="blockquote">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras
                            in mi at felis aliquet congue. Ut a est eget ligula molestie gravida.
                            Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est
                            malesuada
                            tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
                        </p>
                    </blockquote>
                </div>
                <h4>Header Level<span> 3</span></h4>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                    <li>Aliquam tincidunt mauris eu risus.</li>
                </ul>
                <pre>#header h1 a {
display: block;
width: 300px;
height: 80px;
}</pre>
                <dl>
                    <dt>Definition list</dt>
                    <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</dd>
                    <dt>Lorem ipsum dolor sit amet</dt>
                    <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</dd>
                </dl>
            </div>
        </div>
    </div>
@endsection
