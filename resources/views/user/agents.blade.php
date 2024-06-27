@include('user.header')
<!-- banner -->
<div class="inside-banner">
    <div class="container">
        <span class="pull-right"><a href="#">Home</a> / Agents</span>
        <h2>Agents</h2>
    </div>
</div>
<!-- banner -->


<div class="container">
    <div class="spacer agents">

        <div class="row">
            <div class="col-lg-8  col-lg-offset-2 col-sm-12">
                <!-- agents -->
                <div class="row">
                    <div class="col-lg-2 col-sm-2 "><a href="#"><img src="{{ asset('user/images/agents/2.jpg') }}"
                                class="img-responsive" alt="agent name"></a></div>
                    <div class="col-lg-7 col-sm-7 ">
                        <h4>Mohammed Ahmed</h4>
                        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically
                            procrastinate B2C users after installed base benefits. Dramatically visualize customer
                            directed convergence without revolutionary ROI.</p>
                    </div>
                    <div class="col-lg-3 col-sm-3 "><span class="glyphicon glyphicon-envelope"></span> <a
                            href="mailto:abc@realestate.com">abc@gmial.com</a><br>
                        <span class="glyphicon glyphicon-earphone"></span> 1234567
                    </div>
                </div>
                <!-- agents -->
            </div>
        </div>


    </div>
</div>

@include('user.footer')