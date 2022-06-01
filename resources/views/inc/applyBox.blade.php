<div id="modalShop" class="modal modal-auto-open no-padding" data-delay="500" style="max-width: 700px;">
    <div class="row">
        <div class="col-md-12">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="modal-label-3" class="modal-title">We'll help you find and apply for your dream
                        university in TURKEY
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="row mb20">
                        <div class="col-md-12">
                            <p>Leave your details and we will call you to discuss your options.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-body">
                            <form action="/">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="inputFirstName"
                                               placeholder="First Name *">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="inputLastName"
                                               placeholder="Last Name *">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" id="inputEmail"
                                               placeholder="Your Email *">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="tel" class="form-control" id="inputPhone"
                                               placeholder="Phone Number *">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="postDropdown">
                                                <div class="select">
                                                    <span>University</span>
                                                    <i class="fa fa-chevron-left"></i>
                                                </div>
                                                <input type="hidden" name="university">
                                                <ul class="postDropdown-menu">
                                                    @foreach($cData->uniPosts as $key=>$val)
                                                        <li>{{$val->title}}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="postDropdown">
                                            <div class="select">
                                                <span>Degree Type</span>
                                                <i class="fa fa-chevron-left"></i>
                                            </div>
                                            <input type="hidden" name="degrees">
                                            <ul class="postDropdown-menu">
                                                @foreach($cData->degrees as $key=>$val)
                                                    <li>{{$val->title}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="postDropdown">
                                            <div class="select">
                                                <span>Program</span>
                                                <i class="fa fa-chevron-left"></i>
                                            </div>
                                            <input type="hidden" name="programs">
                                            <ul class="postDropdown-menu">
                                                @foreach($cData->programs as $key=>$val)
                                                    <li>{{$val->title}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-b" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
