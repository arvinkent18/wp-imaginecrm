<footer>
    <div class="container-fluid">
        <div class="grid w-100">
            <div class="row no gutters w-100 h-200" id="subscribe-sect">
                <div class="col-md-12">
                    <h2 class=" text-center">
                        <span class="breaker">SUBSCRIBE</span>
                    </h2>
                    <p style="text-align:center; color: grey;">Sign up with your email address to receive news and updates</p>

                </div>
            </div>



            <div class="row no-gutters w-100" id="footer-sect">
                <div class="col-md-8">
                    <ul class="fa-ul" id="lista">
                        <li> <a href="https://www.w3schools.com"><i style="color: white;" class="fa fa-facebook-f" id="icons"></i></a></li>
                        <li><i style="color: white;" class="fa fa-linkedin-square" id="icons"></i></li>
                        <li><i class="fa fa-twitter  fa-inverse" id="icons"></i></li>
                    </ul>

                    <div class="flex-column">
                        <span class="navbar-text phone-numbers" id="contact">(213) 632-6840INFO@IMAGINECRM.ORG</span>
                    </div>

                    <div class="flex-column">
                        <span class="navbar-text phone-numbers" id="terms">DIVERSITY - RELATIONSHIPS - EDUCATION</span>
                    </div>

                    <div class="flex-column">
                        <span class="navbar-text phone-numbers" id="copyright">COPYRIGHT<span><i class="fa fa-copyright" aria-hidden="true"></i></span> 2019 imagineCRM. All rights reserved.</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/bottomlogo2.png" alt="logo" width="auto" height="300" class="responsive" id="botlogo">
                </div>

            </div>



        </div>
    </div>


</footer>
<?php wp_footer(); ?>
<script>
    jQuery(document).ready(function() {

        jQuery("#menu-main-navigation li").each(function(index) {
            const subTitle = jQuery(this).find('a').attr('title');
            const counter = index + 1;

            if (subTitle != undefined) {
                jQuery("<style>#menu-main-navigation li:nth-child(" + counter + "):after { content: '" + subTitle + "'; color: #6e6e6e; }</style>").appendTo("head")
            }


            console.log(subTitle)
        });

    });
</script>
</body>

</html>