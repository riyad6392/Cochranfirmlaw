<div class="container" style="align-items: baseline;">
    <h3 class="style_h1" style="font-size: 100%; color: #000000!important; font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif;
    font-weight: 800; letter-spacing: 1px; ">“{{ $attorney->about_head_one ?? "Attorney" }}</h3>
    <h3 style="color: rgb(143, 105, 10); margin-left:10px;">{{ $attorney->about_head_two ?? "Attorney" }}“</h3>
</div>
<div class="container" style="text-align: center; justify-content:center; margin-top:20px; margin-left:50px; margin-right:50px;">
    {!! $attorney->bio !!}
</div>