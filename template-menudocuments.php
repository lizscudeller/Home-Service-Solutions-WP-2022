
<?php 
/*Template Name: Menu_documents */
get_header ();?>



 <!-- Page Content -->
 <div class="page-heading header-text header-text2" >

</div>
<div class="container">
<div class="col-md-12" >
        <div class="section-heading ahrefgreen menus" ><br><br><br>
          <h2>Home Service Solutions - <em>Documents</em></h2>
        </div>

  <div class="row">
      <div class="col-md-12">
      <h3>Gutter Guard</h3>
        <div class="service-item">
        <?php echo do_shortcode('[dflip books="gutterdoc"][/dflip]'); ?>   <!--Teste id=927 / real id=1596--> 
      </div>
    </div>
  </div>

  <div class="row" style="padding-top:30px">
      <div class="col-md-12">
      <h3>Sales</h3>
        <div class="service-item">
        <?php echo do_shortcode('[dflip books="salesdoc"][/dflip]'); ?>   <!--Teste id=927 / real id=1602--> 
      </div>
    </div>
  </div>

  <div class="row" style="padding:30px 0">
      <div class="col-md-12">
      <h3>Review Documents</h3>
        <div class="service-item">
        <?php echo do_shortcode('[dflip books="reviews"][/dflip]'); ?>   <!--Teste id=927 / real id=1610--> 
      </div>
    </div>
  </div>

</div>

</div>


<?php get_footer ();?>

<script>
      AOS.init();
    </script>
