<div class="col-lg-4 sidebar sticky-sidebar">
    <div class="text-medium textTitle">Apply Now</div>
    <p class="lead">
        We'll help you find and apply for your dream university in TURKEY
    </p>
    <div class="line my-3"></div>
    <p>Leave your details and we will call you to discuss your options.</p>
    <form class="widget-contact-form" novalidate="" action="include/contact-form.php" role="form"
          method="post">

        <div class="form-group">
            <label for="name">First Name *</label>
            <input type="text" aria-required="true" name="widget-contact-form-name"
                   class="form-control required name" placeholder="Enter your First Name">
        </div>
        <div class="form-group">
            <label for="name">Last Name *</label>
            <input type="text" aria-required="true" name="widget-contact-form-name"
                   class="form-control required surname" placeholder="Enter your Last Name">
        </div>
        <div class="form-group">
            <label for="email">Email *</label>
            <input type="email" aria-required="true" required="" name="widget-contact-form-email"
                   class="form-control required email" placeholder="Enter your Email">
        </div>
        <div class="form-group">
            <label for="email">Phone Number</label>
            <input type="text" aria-required="true" name="widget-contact-form-phone"
                   class="form-control required" placeholder="Enter your Phone number">
        </div>
        @isset($cData->uniType)
            <div class="form-group">
                <label for="name">University</label>
                <div class="postDropdown">
                    <div class="select">
                        <span>University</span>
                        <i class="fa fa-chevron-left"></i>
                    </div>
                    <input type="hidden" name="gender">
                    <ul class="postDropdown-menu">
                        @foreach($cData->uniType as $key=>$val)
                            <li>{{$val->title}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endisset
        @isset($cData->degrees)
            <div class="form-group">
                <label for="name">Degree Type</label>
                <div class="postDropdown">
                    <div class="select">
                        <span>Degrees Type</span>
                        <i class="fa fa-chevron-left"></i>
                    </div>
                    <input type="hidden" name="gender">
                    <ul class="postDropdown-menu">
                        @foreach($cData->degrees as $key=>$val)
                            <li>{{$val->title}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endisset
        @isset($cData->programs)
            <div class="form-group">
                <label for="name">Program</label>
                <div class="postDropdown">
                    <div class="select">
                        <span>Program</span>
                        <i class="fa fa-chevron-left"></i>
                    </div>
                    <input type="hidden" name="gender">
                    <ul class="postDropdown-menu">
                        @foreach($cData->programs as $key=>$val)
                            <li>{{$val->title}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endisset
        <div class="form-group text-center">
            <button class="btn button-light" type="submit" id="form-submit">Yes, I'd like free
                advice
            </button>
        </div>
    </form>
</div>
