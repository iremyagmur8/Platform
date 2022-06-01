<select class="form-control input-sm" name="town" id="towns"
        style="border-radius: 40px; background-color: transparent !important;">
    @foreach($cData->towns as $key=>$val)
        <option value="{{$val->id}}">{{$val->name}}</option>
    @endforeach
</select>
<script>
    $('select[name=town]').change(function () {
        var town = document.getElementById('towns').value;
        $.ajax({
            type: "GET",
            url: '/districts/' +town+ '.htm',
            success: function (response) {
                console.log(response);
                if (response != 0) {
                    var message = response;
                    document.getElementById('districts').innerHTML = message;
                } else {
                    alert('file not uploaded');
                }
            }
        })
    })
</script>
