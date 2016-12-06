 
<!-- START FOOTER WIDGETS SECTION -->
<footer>
	<div class="fullspan dark footer" id="footer">
		<div class="container">
			<div class="row">
					
                    <!-- START FOOTER 1 -->
                 		<div id="pinterest-pinboard-widget-2" class="col-md-4 visit"><h4>More about US</h4><div id="pinterest-pinboard-widget-container">

        
        <!-- START NAVIGTION -->
        <div class="footer-menu">
        <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'primary',
                                        'menu_class'     => 'nav navbar-vertical',
                                        'menu_id'     => 'menu-vertical',
                                        'depth'          => 1,
                                        'link_before'    => '<span class="screen-reader-text">',
                                        'link_after'     => '</span>',
                                    ) );
                                ?>
            <!--<ul id="menu-vertical" class="nav navbar-vertical">
                        <li><a href="#top">Home</a></li>
                        <li ><a href="#services">Services</a></li>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#gallery">Dishes</a></li>
                        <li><a href="#testimonial">Testimonials</a></li>
                        <li><a href="#reservation">Reservation</a></li>
                        <li><a href="#footer">Contact</a></li>
                    </ul>-->
        </div>
                   
                    <!-- END NAVIGTION -->
        <!-- Version:  // Execution Time: 53663.0153656 (ms) -->
</div></div><div id="tweets-widget-2" class="col-md-8 visit"><h4>Our Location</h4>
<p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14603.082750381707!2d90.40073814813232!3d23.791178779154816!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc658b2993afc49f3!2sLe+Pizzaria!5e0!3m2!1sen!2sbd!4v1469954643813" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</p>
		</div> 
					<!-- END FOOTER 1 -->
                    
                
                
			</div>
		</div>
	</div>
<!-- END FOOTER WIDGETS SECTION -->
<!-- START Footer Copyright -->
   <div class="fullspan copy">
	   <div class="container">
			<div class="row">
				<div class="col-md-12">
					copyright © 2016 <a href="http://lepizzariabd.com/" id="restaurant_template">lepizzariabd.com</a> All rights reserved. Design by <a href="http://thinkers.com.bd/" target="_blank">thinkers</a>				</div>
			</div>
	   </div>
   </div>
<!-- END Footer Copyright -->
</footer>

<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.form.min.js'></script>

</script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/scripts.js'></script>

<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/picker.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/picker.date.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/picker.time.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/legacy.js'></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-select.js"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var rtb_pickadate = {"date_format":"mmmm d, yyyy","time_format":"h:i A","disable_dates":[],"schedule_open":null,"schedule_closed":null,"early_bookings":null,"late_bookings":null,"date_onload":null,"time_interval":"30"};
/* ]]> */
</script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/booking-form.js'></script>
<script>
jQuery(document).ready(function($){
 'use strict';
  $(".crt-btn").click( function(){
    //alert("ok");
       $(".menu-cart").toggleClass("show");
   });



$("#select-menu").change(function(){
	var cat_id= $("#select-menu").val();
	var baseurl="<?php echo home_url(); ?>/restaurant/le-pizzaria/#"+cat_id;
	//alert(cat_id);
	console.log(baseurl);
	$("#select-form").attr('action', baseurl);
});
        $( ".btn-cart" ).click(function() {

            var id = $(this).attr("data-item-id");
            var item = $(this).attr("data-item-name-"+id);
            var price = $(this).attr("data-item-price-"+id);

            if($("#item-" + id).length == 0) {
                var html="";
                html +="<div calss='cart-row' id='item-"+id+"' >";

                html +="<input type='hidden' id='input-item-"+id+"' name='itemid[]' value='"+id+"' />";
                html +="<input type='hidden' id='input-item-qty-"+id+"' name='itemqty[]' value='1' />";
                html +="<input type='hidden' id='input-item-name-"+id+"' name='itemname[]' value='"+item+"' />";
                html +="<input type='hidden' id='input-item-price-"+id+"' name='itemprice[]' value='"+price+"' />";

                html +="<span class='cart-qty' id='item-qty-"+id+"' >1</span>";
                html +="<button  item-inc-id='"+id+"' id='item-inc-"+id+"' type='button' class='btn btn-primary btn-xs inc-item'>+</button>";
                html +="<button item-dec-id='"+id+"' id='item-dec-"+id+"' type='button' class='btn btn-primary btn-xs dec-item'>-</button> ";
                html +="<span class='cart-item-name' id='item-name-"+id+"' >"+item+"</span>";

                html +="<span class='pull-right'>Tk.</span> ";
                html +="<span class='item-price-cart pull-right' id='item-price-"+id+"' > "+price+" </span> </div>";
                html +="<input type='hidden' name='item-i-total' value='"+price+"' id='item-price-total-"+id+"' >";

                $( "#cart-box" ).append( html );
            }
            else{
                var qty = $( '#item-qty-'+id ).html();
                var incv=Number(qty)+1;
                $( '#item-qty-'+id ).html(incv);

                var curPrice = $( '#item-price-'+id ).html();
                var newPrice=Number(curPrice)+Number(price);

                $( "#input-item-qty-"+id).val(incv);
                $( "#input-item-price-"+id).val(newPrice);

                $( '#item-price-'+id ).html(newPrice);
                $( '#item-price-total-'+id).val(newPrice);



            }

            $( "#cart-total-price" ).html(sumitemprice());
        });

        $('body').on('click','.inc-item', function(e){
            var id = $(this).attr("item-inc-id");
            var qty = $( '#item-qty-'+id ).html();
            var incv=Number(qty)+1;
            $( '#item-qty-'+id ).html(incv);

            var curPrice = $( '#item-price-'+id ).html();
            var price=$("#data-item-price-"+id).attr("data-item-price-"+id);
            var newPrice=Number(curPrice)+Number(price);

            $( "#input-item-qty-"+id).val(incv);
            $( "#input-item-price-"+id).val(newPrice);

            $( '#item-price-'+id ).html(newPrice);
            $( '#item-price-total-'+id).val(newPrice);
            $( "#cart-total-price" ).html(sumitemprice());
        });

        $('body').on('click','.dec-item', function(e){
            var id = $(this).attr("item-dec-id");
            var qty = $( '#item-qty-'+id ).html();
            var incv=Number(qty)-1;
            if (incv==0)
            {
                $("#item-"+id).remove();
            }
            else{
                $( '#item-qty-'+id ).html(incv);

                var curPrice = $( '#item-price-'+id ).html();
                var price=$("#data-item-price-"+id).attr("data-item-price-"+id);
                var newPrice=Number(curPrice)-Number(price);

                $( "#input-item-qty-"+id).val(incv);
                $( "#input-item-price-"+id).val(newPrice);

                $( '#item-price-'+id ).html(newPrice);
                $( '#item-price-total-'+id).val(newPrice);
            }
            $( "#cart-total-price" ).html(sumitemprice());
        });

        $("#btn-checkout").prop('disabled', true);
        function enable_checkout(totalprice){
            //alert(totalprice);
            var min_order =$( '#min_order' ).val();
            if(totalprice>= min_order ){
                $("#btn-checkout").prop('disabled', false);
            }
            else{
                $("#btn-checkout").prop('disabled', true);
            }
        }
        function sumitemprice(){
            var sum = 0;
            $('.item-price-cart').each(function(){
                sum += parseFloat($(this).text());
            });
            var vat_included =$( '#vat_included' ).val();
            var vat_visibal =$( '#vat_visibal' ).val();
            var vat_diesable =$( '#vat_diesable' ).val();
            var delivery_fee =$( '#delivery_fee' ).val();
            var service_fee =$( '#service_fee' ).val();
            var min_order =$( '#min_order' ).val();
            var t=Number(sum);

            // if(vat_included == 1){
            //     //var vatammount=(15*sum)/(100+15);
            //     var vatammount=0;
            //     var t=Number(sum)+Number(delivery_fee);
            //     var neetamount=Number(sum);
            // }else if(vat_visibal == 1){
            //     var vatammount=(15*sum)/100;
            //     var t=Number(vatammount.toFixed(2))+Number(sum)+Number(delivery_fee);
            //     var containerprice=Number(sum)-Number(vatammount.toFixed(2));
            //     var neetamount=Number(sum);
            // }            
            // else if(vat_diesable == 0){
            //     var vatammount=0;
            //     var t=Number(vatammount.toFixed(2))+Number(sum)+Number(delivery_fee);
            //     var neetamount=Number(sum);
            // }else{
            //     var vatammount=0;
            //     var t=Number(sum)+Number(delivery_fee);
            //     var neetamount=Number(sum);
            // }

            var subtotal="<div class=''> Subtotal : <span class='pull-right'>"+sum+" TK.</span></div>";
            //var deliveryfee="<div class=''> Delivery FEE : <span class='pull-right'>"+delivery_fee+" TK.</span></div>";
            //var vat="<div class=''> +VAT <span class='pull-right'>"+vatammount.toFixed(2)+" TK.</span></div>";

            var totalprice="<div class=''> Total price: <span class='pull-right'>"+t+" TK.</span></div>";
            //totalprice +="<input type='hidden' value='"+vatammount.toFixed(2)+"' name='totalvat' />";
            //totalprice +="<input type='hidden' value='"+delivery_fee+"' name='deliveryfee' />";
            totalprice +="<input id='total-price' type='hidden' value='"+t+"' name='totalprice' />";
            //totalprice +="<input id='neetamount' type='hidden' value='"+neetamount+"' name='neetamount' />";

            var total=subtotal+totalprice;
            enable_checkout(sum);
            return total;
        }
    });
    </script>
	</body>
</html>