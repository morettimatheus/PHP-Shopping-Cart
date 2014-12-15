<body>
<div class="container">

    <?php foreach ($products as $k => $value) { ?> 
        <?php echo '<div class="col-md-2 column productbox">
            <img src=" ' . $value->imagepath .'" class="img-responsive">
            <div class="producttitle">' . $value->name . '</div>
            <div class="productprice">' . $value->description . ' 
            <div>
            <div class="pull-right">
                <button id="buybutton" class="btn btn-danger btn-sm btn-send" role="button" value="'.$value->productNo.'"> <i class="fa fa-shopping-cart"></i> BUY</a>
            </div>
            </div>
            <div class="pricetext">£' . number_format($value->price, 2) .'</div>
        </div>
    </div>' ?>
    <?php } ?>
</div>
<script src="<?php echo base_url();?>/public/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('.btn-send').click(function(event) {
    var productNo = $(this).attr('value');
    $.ajax({
        url: '<?php echo base_url(); ?>cart/addProductToCart',
        type: 'post',
        data: 'productNo=' + productNo,
      })
      .done(function() {
        alert("Product added to cart!");
      })
      .fail(function() {
        alert("error adding product");
      });
    event.preventDefault();
  });
});
</script>
</body>