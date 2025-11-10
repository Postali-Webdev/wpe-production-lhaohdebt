<?php
/**
 * Theme footer
 *
 * @package Postali Child
 * @author Postali LLC
**/
?>

<?php if (!is_page_template('page-contact.php')) { ?>
    <?php get_template_part('block','pre-footer'); ?>
<?php } ?>

<footer>
    <section class="footer blk">
        <div class="container">
            <div class="columns">
                <div class="column-full" id="footer-left">
                    <span class="mobile-group">
                        <span class="mobile-group-left">
                            <div class="logo">
                                <a href="/" rel="home">
                                    <img src="/wp-content/uploads/2022/02/LHA-footer-logo.svg" class="custom-logo" alt="Luftman Heck &amp; Associates, LLP">
                                </a>
                            </div>
                        </span>
                        <span class="mobile-group-right">
                            <div class="address">
                                <p>
                                    <a href="<?php the_field('global_gmb_link', 'options') ?>" target="_blank"><?php the_field('global_address','options'); ?></a>
                                </p>
                            </div>
                            <div class="contact">
                                <p>
                                    <span>P</span> <a href="tel:<?php the_field('global_phone','options'); ?>" title="Call LHA Ohio Debt today"><?php the_field('global_phone','options'); ?></a><br>
                                    <span>E</span> <a href="mailto:<?php the_field('global_email','options'); ?>" title="Email LHA Ohio Debt today"><?php the_field('global_email','options'); ?></a>
                                </p>
                            </div>
                        </span>
                    </span>
                    <div class="disclaimer">
                        <p class="sans small">© 2003–<?php echo date("Y"); ?> Copyright by Luftman, Heck & Associates LLP. All rights reserved. 5890 Venture Dr, Dublin OH 43017-6142, Phone: (614) 215-9958.</p>
                        <?php if(is_page_template('front-page.php')) { ?>
                        <a href="https://www.postali.com" title="Site design and development by Postali" target="blank"><img src="https://www.postali.com/wp-content/themes/postali-site/img/postali-tag-reversed.png" alt="Postali | Results Driven Marketing" style="display:block; max-width:250px; margin:20px 0 0;"></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>

<script>(function (w,d,s,v,odl){(w[v]=w[v]||{})['odl']=odl;;
var f=d.getElementsByTagName(s)[0],j=d.createElement(s);j.async=true;
j.src='https://intaker.azureedge.net/widget/chat.min.js';
f.parentNode.insertBefore(j,f);
})(window, document, 'script','Intaker', 'luftmanheck');
</script>

<?php wp_footer(); ?>
</body>
</html>


