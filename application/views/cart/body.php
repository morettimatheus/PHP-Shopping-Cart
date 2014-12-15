<body>
<div class="container">
<?php 
$prods = array();
$i = 0;
foreach ($_SESSION['cart'] as $item) {
  if (isset($item)) {
    $prods[$item["id"]] = $products[$item["id"]];
    $prods[$item["id"]]->qtyOnCart = $item["qty"];
    $i++;
  }
}
if ($i > 0) { ?>
  <table id="cart" class="table table-hover table-condensed">
  <thead>
  <tr>
    <th style="width:50%">Product</th>
    <th style="width:10%">Price</th>
    <th style="width:8%">Quantity</th>
    <th style="width:22%" class="text-center">Subtotal</th>
    <th style="width:10%"></th>
  </tr>
</thead>
<tbody>
<?php }
$total = 0;
foreach ($prods as $key => $value) { 
  $total += number_format(($value->price * $value->qtyOnCart), 2);
  ?> 
  <?php echo '
  <tr>
    <td data-th="Product">
      <div class="row">
        <div class="col-sm-2 hidden-xs"><img src="'. $value->imagepath.'" alt="..." class="img-responsive"/></div>
        <div class="col-sm-10">
          <h4 class="nomargin">'.$value->name.'</h4>
          <p>'.$value->description.'</p>
        </div>
      </div>
    </td>
    <td data-th="Price">£' . number_format($value->price, 2) .'</td>
    <td data-th="Quantity" class="text-center">
    <input id="qty'.$value->productNo.'" type="number" class="form-control text-center" min="1" value="'. $value->qtyOnCart.'">
    </td>
    <td data-th="Subtotal" class="text-center">£' . number_format(($value->price * $value->qtyOnCart), 2) .'</td>
    <td class="actions" data-th="">
      <button class="btn btn-info btn-sm btn-refresh" value="'. $value->productNo.'"><i class="fa fa-refresh"></i></button>
      <button class="btn btn-danger btn-sm btn-remove" value="'. $value->productNo.'"><i class="fa fa-trash-o"></i></button>                
    </td>
  </tr>'?> <?php }?>
  <?php if ($i > 0) { ?>
    <?php echo '</tbody>
    <tfoot>
      <tr class="visible-xs">
        <td class="text-center"><strong>Total <?php echo $total ?></strong></td>
      </tr>
      <tr>
        <td><a href="home" class="btn btn-warning"><i class="fa fa-angle-left fa-lg"></i> Continue Shopping</a></td>
        <td colspan="2" class="hidden-xs"></td>
        <td class="hidden-xs text-center"><strong>Total £'?>
        <?php if (isset($item)) {echo number_format($total, 2);} ?>
        <?php echo '</strong></td>
        <td><a href="'.base_url().'payment" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right fa-lg"></i></a></td>
        <tr>
        <td colspan="2" class="hidden-xs"></td>
        <td colspan="2" class="hidden-xs"></td>
        <td>
        <a href="'.base_url().'cart/destroySession" class="btn btn-danger">Clear Cart <i class="fa fa-trash-o"></i></a></td></tr>
      </tr>
    </tfoot>'; }
    else {
      echo '
      <div class="alert alert-danger" role="alert">
        You don\'t have any products on your basket! 
        <a href="'. base_url() .'home" class="alert-link">Why don\'t you add some?</a>
      </div>';
      } ?>
  </table>
</div>
<script src="<?php echo base_url();?>/public/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('.btn-remove').click(function(event) {
    var removeNo = $(this).attr('value');
    $.ajax({
        url: '<?php echo base_url(); ?>cart/removeProductFromCart',
        type: 'post',
        data: 'removeNo=' + removeNo,
      })
      .done(function() {
        window.location.replace("<?php echo base_url(); ?>cart");
      })
      .fail(function() {
        alert("error removing product");
      });
    event.preventDefault();
  });
});
$(document).ready(function(){
  $('.btn-refresh').click(function(event) {
    var refreshNo = $(this).attr('value');
    var qty = $('#qty'+refreshNo).val();
    $.ajax({
        url: '<?php echo base_url(); ?>cart/changeQuantity',
        type: 'post',
        data: 'productNo=' + refreshNo + '&quantity=' + qty,
      })
      .done(function() {
        window.location.replace("<?php echo base_url(); ?>cart");
      })
      .fail(function() {
        alert("error removing product");
      });
    event.preventDefault();
  });
});
</script>
</body>