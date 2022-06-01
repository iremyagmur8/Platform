@extends('solaris.module')
@section('title',' - Üniversiteler')
@section('modulecontent')


    <div class="portlet-box">
        <div class="portlet-header flex-row flex d-flex align-items-center">
            <a href="/solaris/add/{{$module}}" class="btn btn-rounded btn-primary btn-sm">Yeni Ekle</a>

        </div>
        <div class="portlet-body no-padding">
            <table class="table table-striped mb-0 table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Logo</th>
                    <th>Adı</th>
                    <th>Şehir</th>
                    <th>Tipi</th>
                    <th>Link</th>
                    <th>Admin</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @php($f=0)
                @foreach($cData->company as $key=>$val)
                    @php($f++)
                    <tr id="dat-{{$val->id}}">
                        <th scope="row">{{$f}}</th>
                        <td>
                            @isset($val->logos)<img alt="" src="{{url("images/logos/". $val->logos->file)}}"
                                                    style="width: 50px; height: 50px;"> @endisset
                        </td>
                        <td>{{$val->name}}</td>
                        <td>@isset($val->cities){{$val->cities->name}}@endisset</td>
                        <td>@isset($val->types){{$val->types->title}}@endisset</td>
                        <td>{{$val->links}}</td>
                        <td>@isset($val->users){{$val->users->name}} {{$val->users->surname}}@endisset</td>
                        <td>
                            <a href="/solaris/posts/edit/{{$val->id}}" class="btn btn-primary btn-sm"><i
                                        class="fas fa-edit"></i></a>
                            <a style="float: right;"
                               onclick="sil('{{Crypt::encryptString(json_encode(array("sID"=>$val->id,"func"=>"post","method"=>"destroy")))}}',{{$val->id}})"
                               class="btn btn-danger btn-sm"><i class="fas fa-times"></i></a>
                        </td>
                    </tr>
                @endforeach
                @if(count($cData->company)==0)
                    <tr>
                        <th scope="row" colspan="5" class="text-center">Kayıtlı veri yok</th>

                    </tr>
                @endif

                </tbody>
            </table>
        </div>
    </div>


@endsection
