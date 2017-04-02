<div id="footer" class=" ppb_wrapper">
         <ul class="sidebar_widget three">
            <li id="text-2" class="widget widget_text">
               <h2 class="widgettitle">Our Awards</h2>
               <div class="textwidget">
                  <p>London is a megalopolis of people, ideas and frenetic energy. The capital and largest city of the United Kingdom.<br />
                     <img src="wp-content/uploads/2016/12/awards.png" width="246" height="113" style="margin-top:30px;" alt=""/>
                  </p>
               </div>
            </li>
            <li id="text-4" class="widget widget_text">
               <h2 class="widgettitle">Información de Contacto</h2>
               <div class="textwidget">
                  <p><span class="ti-mobile" style="margin-right:10px;"></span>(57) 321-773-6762</p>
                  <!--<p><span class="ti-location-pin" style="margin-right:10px;"></span>184 Main Street East Perl Habour 8007</p>-->
                  <p><span class="ti-alarm-clock" style="margin-right:10px;"></span>Lunes - Sabado 8.00 - 18.00</p>
                  <div style="margin-top:20px;">
                     <div class="social_wrapper shortcode dark ">
                        <ul>
                           <li class="facebook"><a target="_blank" title="Facebook" href="index.html#"><i class="fa fa-facebook"></i></a></li>
                           <li class="twitter"><a target="_blank" title="Twitter" href="https://twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                           <li class="youtube"><a target="_blank" title="Youtube" href="index.html#"><i class="fa fa-youtube"></i></a></li>
                           <li class="pinterest"><a target="_blank" title="Pinterest" href="https://pinterest.com/#"><i class="fa fa-pinterest"></i></a></li>
                           <li class="instagram"><a target="_blank" title="Instagram" href="https://instagram.com/theplanetd"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </li>
            <li id="grandtour_instagram-9" class="widget Grandtour_Instagram">
               <h2 class="widgettitle">Ultimos Tours</h2>
               <ul class="flickr">
               <?php                            
               $qry=mysqli_query($link,"SELECT * FROM tour ORDER BY id DESC LIMIT 6 ");     
               while($tour = mysqli_fetch_array($qry))                        
               {
               ?>
                  <li><center><a target="_blank" href="tours/users_tours/ver.php?id=<? echo $tour['id']; ?>"><img style="height: 80px; width: 85px; padding-bottom: 10px;" src="logic/<? echo $tour['foto']; ?>" alt="" /></a></center></li>
               <? 
               }
               ?>
               </ul>
               <br class="clear"/>
            </li>
            
         </ul>
      </div>
      <div class="footer_bar  ppb_wrapper ">
         <div class="footer_bar_wrapper ">
            <div class="menu-footer-menu-container">
               <ul id="footer_menu" class="footer_nav">
                  <li id="menu-item-215" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-215"><a href="index.html">Home</a></li>
                  <li id="menu-item-216" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-216"><a href="tour/index.html">Tour</a></li>
                  <li id="menu-item-217" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-217"><a href="blog/index.html">Blog</a></li>
                  <li id="menu-item-218" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-218"><a href="index.html#">Purchase Theme</a></li>
               </ul>
            </div>
            <div id="copyright">© Copyright Grand Tour Theme Demo - Theme by ThemeGoods</div>
            <br class="clear"/>      
            <a id="toTop" href="javascript:;"><i class="fa fa-angle-up"></i></a>
         </div>
      </div>