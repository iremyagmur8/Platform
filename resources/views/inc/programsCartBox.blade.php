@isset($cData->company)
    @foreach($cData->company as $key=>$val)
        <div class="post-item">
            <div class="post-item-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        @isset($val->logos)
                            <div class="post-image">
                                <a href="#">
                                    <img alt=""
                                         src="{{url("images/logos/". $val->logos->file)}}">
                                </a>
                            </div>
                        @endisset
                    </div>
                    <div class="col-lg-9">
                        <div class="post-item-description">
                            <h2>
                                <a href="/category/{{str_slug($val->name,"-")."/".$val->id}}">{{$val->name}}
                                </a></h2>
                            @isset($val->types )  <p>
                                {{$val->types->title }}</p> @endisset
                            <p><i class="text-primary fas fa-university fa-fw"></i> <a href="">{{$val->name}}</a></p>
                            <p><i class="text-primary fa fa-map-pin fa-fw"></i><a href="">&nbsp;{{$val->name}}</a></p>
                        </div>
                    </div>
                </div>
                <hr/>
                <li><i class="text-primary fas fa-university fa-fw"></i>&nbsp;STATE UNIVERSITY</li>
                <li><i class="text-primary fas fa-award fa-fw"></i>&nbsp;POSTGRADUATE</li>
                <li><i class="text-primary fas fa-chalkboard fa-fw"></i>&nbsp;NORMAL EDUCATION</li>
                <li><i class="text-primary fas fa-language fa-fw"></i>&nbsp;TURKISH</li>
            </div>
        </div>
    @endforeach
@endisset
