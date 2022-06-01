<select class="form-control input-sm" name="district" id="districts"
        style="border-radius: 40px; background-color: transparent !important;">
    @foreach($cData->districts as $key=>$val)
        <option value="{{$val->id}}">{{$val->name}}</option>
    @endforeach
</select>
<script>
    $('select[name=district]').change(function () {
        var district = document.getElementById('districts').value;
        $.ajax({
            type: "GET",
            url: '/neighborhoods/' +district+ '.htm',
            success: function (response) {
                console.log(response);
                if (response != 0) {
                    var message = response;
                    document.getElementById('neighborhoods').innerHTML = message;
                } else {
                    alert('file not uploaded');
                }
            }
        })
    })
</script>
