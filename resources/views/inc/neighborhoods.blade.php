@foreach($cData->neighborhood as $key=>$val)
    <option value="{{$val->id}}">{{$val->name}}</option>
@endforeach
