<div class="postDropdown">
    <div class="select">
        <span>University</span>
        <i class="fa fa-chevron-left"></i>
    </div>
    <input type="hidden" name="{{$name}}">
    <ul class="postDropdown-menu">
        @foreach($cData->company as $key=>$val)
            <li>{{$val->name}}</li>
        @endforeach
    </ul>
</div>
