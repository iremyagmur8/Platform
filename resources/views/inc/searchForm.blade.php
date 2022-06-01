<section class="reservation-form-over" xmlns="http://www.w3.org/1999/html">
    <div class="container p-0">
        <form action="/search/{{$placeholder}}/{{request('id')}}/{{$type}}" method="post">
            @csrf
            <div class="row  reservation-form align-items-center">
                <div class="col-lg-3">
                    <div class="form-group mb-0">
                        <div class="input-group">
                            <input class="form-control" name="search" type="text" style="min-height: 43px"
                                  @if(isset($cData->search)) placeholder="{{$cData->search}}" @else placeholder="Search {{$placeholder}}..." @endif>
                        </div>
                    </div>
                </div>
                @if($type == 1 || $type == 3)
                    @isset($cData->cities)
                        <div class="col-lg-3">
                            <div class="form-group mb-0">
                                <div class="input-group">
                                    @include('inc.dropdowns.citiesDropdown',['name' => 'cities'])
                                </div>
                            </div>
                        </div>
                    @endisset
                    @if($type == 1)
                        @isset($cData->uniType)
                            <div class="col-lg-3">
                                <div class="form-group mb-0">
                                    <div class="input-group">
                                        @include('inc.dropdowns.universityTypeDropdown', ['name' => 'type'])
                                    </div>
                                </div>
                            </div>
                        @endisset
                    @endif
                @elseif($type == 4 && $placeholder == 'Faculties')
                    @isset($cData->company)
                        <div class="col-lg-3">
                            <div class="form-group mb-0">
                                <div class="input-group">
                                    @include('inc.dropdowns.universityDropdown', ['name' => 'universities'])
                                </div>
                            </div>
                        </div>
                    @endisset
                @endif
                <div class="col-lg-2">
                    <div class="form-group mb-0">
                        <button class="btn mb-0">Filter</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</section>
