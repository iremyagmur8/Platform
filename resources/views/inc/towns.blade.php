@foreach($cData->town as $key=>$val)
    <option value="{{$val->id}}">{{$val->name}}</option>
@endforeach
