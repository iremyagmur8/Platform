@foreach($cData->district as $key=>$val)
<option value="{{$val->id}}">{{$val->name}}</option>
@endforeach
