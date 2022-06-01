<div class="postDropdown">
    <div class="select">
        <span>@if(isset($cData->city)) {{$cData->city->name}} @else City @endif</span>
        <i class="fa fa-chevron-left"></i>
    </div>
    <input type="hidden" name="{{$name}}" value="">
    <ul class="postDropdown-menu">
        @foreach($cData->cities as $key=>$val)
            <li id="{{$val->id}}" >{{$val->name}}</li>
        @endforeach
    </ul>
</div>
