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
                            @isset($val->cities)
                                <span class="post-meta-date"><i
                                        class="fas fa-map-marker-alt"></i>{{$val->cities->name}}</span>
                            @endisset
                            <h2>
                                <a href="/category/{{str_slug($val->name,"-")."/".$val->id}}">{{$val->name}}
                                </a></h2>
                            @isset($val->types )  <p>
                                Type:&nbsp;{{$val->types->title }}</p> @endisset
                            <a href="#" class="item-link">Read More <i
                                    class="icon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <hr/>
                <li><i class="text-primary fas fa-school fa-fw"></i> 0 Faculties</li>
                <li><i class="text-primary fas fa-user-md fa-fw"></i> 0 Professor</li>
                <li><i class="text-primary fas fa-user-md fa-fw"></i> 0 Associate Professor</li>
                <li><i class="text-primary fas fa-user fa-fw"></i>0 Doctor Faculty Member</li>
            </div>
        </div>
    @endforeach
@endisset
