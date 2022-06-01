<section id="page-title" class="p-t-{{$cData->padding}} p-b-{{$cData->padding}}"
         @if(isset($cData->category->files[0]->file))
         data-bg-parallax="{{Storage::url("/images/userfiles/".$cData->category->files[0]->file)}}"
         @else data-bg-parallax="https://platform.karip.net/storage//images/userfiles/BXn8AnVxqWMp5ZtWzUvoRXiEZLAwl3.jpg" @endif>
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="breadcrumb text-left">
            <ul>
                @foreach($cData->category->parents as $key=>$val)
                    <li><a href="#">{{$val["title"]}}</a></li>
                @endforeach

            </ul>
        </div>
        <div class="page-title text-left">
            @isset($cData->category->shortdescription)<h1>{{$cData->category->shortdescription}}</h1> @endisset
            @isset($cData->category->shortdescription)<span
                    style="color: #ed1b2f !important; font-size: 20px"> 232 </span><span>&nbsp;{{$cData->category->title}} found</span>@endisset
        </div>
    </div>
</section>

