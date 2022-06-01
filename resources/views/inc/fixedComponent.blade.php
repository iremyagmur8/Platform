<section class="reservation-form-over">
    <div class="container  p-0">
        <form action="#" method="post">
            <div class="row justify-content-center reservation-form align-items-center">
                <div class="col-lg-3">
                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control" name="q" type="text" placeholder="Search University">
                        </div>
                    </div>
                </div>
                @isset($cData->cities)
                    <div class="col-lg-3">
                        <div class="form-group">
                            <div class="input-group">
                                @include('inc.dropdowns.citiesDropdown')
                            </div>
                        </div>
                    </div>
                @endisset
                @isset($cData->uniPosts)
                    <div class="col-lg-3">
                        <div class="form-group">
                            <div class="input-group">
                                @include('inc.dropdowns.universityDropdown')
                            </div>
                        </div>
                    </div>
                @endisset
                @isset($cData->uniType)
                    <div class="col-lg-3">
                        <div class="form-group">
                            <div class="input-group">
                                @include('inc.dropdowns.universityTypeDropdown')
                            </div>
                        </div>
                    </div>
                @endisset
                <div class="col-lg-2">
                    <div class="form-group">
                        <button class="btn ">Filter</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
