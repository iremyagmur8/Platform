<div class="postDropdown">
    <div class="select">
        <span>@if(isset($cData->types)) {{$cData->types->title}} @else University Type @endif</span>
        <i class="fa fa-chevron-left"></i>
    </div>
    <input type="hidden" name="{{$name}}" value="">
    <ul class="postDropdown-menu">
        @foreach($cData->uniType as $key=>$val)
            <li id="{{$val->id}}">{{$val->title}}</li>
        @endforeach
    </ul>
</div>
