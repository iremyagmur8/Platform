<select class="form-control input-sm" name="neighborhood" id="neighborhoods"
        style="border-radius: 40px; background-color: transparent !important;">
    @foreach($cData->neighborhoods as $key=>$val)
        <option value="{{$val->id}}">{{$val->name}}</option>
    @endforeach
</select>
