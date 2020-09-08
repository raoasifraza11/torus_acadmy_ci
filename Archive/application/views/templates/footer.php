<footer class="copyrights">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <ul class="check"> 
                            <li><a href="#">PSD to HTML</a></li>
                            <li><a href="#">Templates</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Get a Support</a></li>
                            <li><a href="#">Affiliate</a></li>
                        </ul><!-- end check -->
                    </div><!-- end col -->
                    <div class="col-md-3 col-sm-12">
                        <ul class="check"> 
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Terms of Usage</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="page-pricing.html">Pricing & Plan</a></li>
                            <li><a href="page-become-a-trainer.html">Become a Trainer</a></li>
                        </ul><!-- end check -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-12">
                        <ul class="check"> 
                            <li><a href="" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i> Pinterest</a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-dribbble"></i> Dribbble</a></li>
                        </ul><!-- end check -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-12">
                        <div class="newsletter">
                            <p>Your email is safe with us and we hate spam as much as you do.</p>
                            <form class="form-inline">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter your email here..">
                                </div>
                                <button type="submit" class="btn btn-primary">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div><!-- end row -->

                <hr>

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="copylinks">
                            <p>Copyrights &copy; 2016 <a href="https://www.tritechteal.com"> TriTechTeal</a> All Rights Reserved.</p>
                        </div><!-- end links -->
                    </div><!-- end col -->

                    <div class="col-md-6 col-sm-12">
                        <div class="footer-social text-right">
                            <a class="dmtop" href="#"><i class="fa fa-angle-up"></i></a>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </footer><!-- end copyrights -->

    </div><!-- end wrapper -->

    <!-- ******************************************
    /END SITE
    ********************************************** -->

    <!-- ******************************************
    DEFAULT JAVASCRIPT FILES
    ********************************************** -->
	<script>
$(function() {
   $("input[name='chkPinNo']").click(function() {
     if ($("#chkYes").is(":checked")) {
       $("#dvPinNo").show();
     } else {
       $("#dvPinNo").hide();
     }
   });
 });
	</script>
	<script>
	document.multiselect('#testSelect1')
		.setCheckBoxClick("checkboxAll", function(target, args) {
			console.log("Checkbox 'Select All' was clicked and got value ", args.checked);
		})
		.setCheckBoxClick("1", function(target, args) {
			console.log("Checkbox for item with value '1' was clicked and got value ", args.checked);
		});

	function enable() {
		document.multiselect('#testSelect1').setIsEnabled(true);
	}

	function disable() {
		document.multiselect('#testSelect1').setIsEnabled(false);
	}
</script>
<script>
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
    	var demovalue = $(this).val(); 
        $("div.myDiv").hide();
        $("#show"+demovalue).show();
    });
});
</script>
    <script src="<?php echo base_url();?>/assets/js/all.js"></script>
    <script src="<?php echo base_url();?>/assets/js/custom.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</body>


</html>