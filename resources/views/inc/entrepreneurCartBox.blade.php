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
                            <hr class="hr-blog mb-3" style="max-width:505px;">
                            <div class="row">
                                <div class="col-6">
                                    @isset($val->types )  <p style="display: inline-block">
                                        {{$val->types->title }}</p> @endisset
                                </div>
                                <div class="col-6 text-right">
                                    <a href="#" class="btn-outline-danger">Web Site</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endisset
