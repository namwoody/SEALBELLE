
   <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <!-- Services -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" id="page-header">
                    <!--<small>Item Subheading</small>-->
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">
        
        <div id="content" class="col-md-8">
           <?php the_content(); ?>
        </div>
         
       <div class="col-md-4">
       	     <h3 id="hair-style">Timing</h3>
               
                 <h3>Seabelle Beauty Salon</h3>
<p>25-05 Broadway<br />
Queens, NY 11106<br />
10:00 am – 8:00 pm</p>
       	
       </div>


        </div>
        <!-- /.row -->
        

<?php endwhile; // end of the loop. ?>
