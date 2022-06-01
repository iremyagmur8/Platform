<select class="form-control input-sm" name="city" id="cities"
        style="border-radius: 40px; background-color: transparent !important;">
    @foreach($cData->cities as $key=>$val)
        <option value="{{$val->id}}">{{$val->name}}</option>
    @endforeach
</select>
<script>
    $('select[name=city]').change(function () {
        var city = document.getElementById('cities').value;
        $.ajax({
            type: "GET",
            url: '/towns/' +city+ '.htm',
            success: function (response) {
                console.log(response);
                if (response != 0) {
                    var message = response;
                    document.getElementById('towns').innerHTML = message;
                } else {
                    alert('file not uploaded');
                }
            }
        })
    })
</script>
