@include('user.header')
<!-- banner -->
<div class="inside-banner">
    <div class="container">
        <span class="pull-right"><a href="#">Home</a> / Contact Us</span>
        <h2>Contact Us</h2>
    </div>
</div>
<!-- banner -->


<div class="container">
    <div class="spacer">
        <div class="row contact">
            <div class="col-lg-6 col-sm-6 ">

                <input type="text" class="form-control" placeholder="Full Name">
                <input type="text" class="form-control" placeholder="Email Address">
                <input type="text" class="form-control" placeholder="Contact Number">
                <textarea rows="6" class="form-control" placeholder="Message"></textarea>
                <button type="submit" class="btn btn-success" name="Submit">Send Message</button>

            </div>
            <div class="col-lg-6 col-sm-6 ">
                <div class="well"><iframe width="100%" height="300" frameborder="0" scrolling="no"
                        marginheight="0" marginwidth="0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13813.242694188486!2d31.31980784882867!3d30.05662807107522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583e5d94c66301%3A0xddddf100de42206c!2sNasr%20City%2C%20Al%20Manteqah%20Al%20Oula%2C%20Nasr%20City%2C%20Cairo%20Governorate%204450113!5e0!3m2!1sen!2seg!4v1713639295322!5m2!1sen!2seg"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

@include('user.footer')
