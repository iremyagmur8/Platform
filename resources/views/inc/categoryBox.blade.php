<div class="col-lg-3 col-md-6 col-sm-12">
    <div class="services-category-box wow fadeInUp animated animated animated" data-wow-delay="00ms"
         data-wow-duration="1500ms"
         style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
        <div class="inner-box">
            <div class="inner-image">
                <div class="inner-image-1" style="background-image: url(/images/shape-45.png);"></div>
                <div class="inner-image-2" style="background-image: url(/images/shape-46.png);"></div>
            </div>
            @isset($val->files[0])
                <figure class="icon-box m-0"><img src="{{Storage::url("/images/userfiles/". $val->files[0]->file)}}">
                </figure>
            @endisset
            <h3><a href="#">{{$val->title}}</a></h3>
            <div class="link"><a href="{{str_slug($val->title,"-")."/".$val->id}}"><i class="icon-arrow-right"></i></a></div>
            <div class="btn-box"><a href="{{str_slug($val->title,"-")."/".$val->id}}" class="theme-btn-one">Detaylar<i
                        class="icon-arrow-right"></i></a></div>
        </div>
    </div>
</div>
