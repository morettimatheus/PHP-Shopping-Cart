<body style="background-color:#ecf0f1">
<div class="container" style="padding-top: 60px;">
    <div class='row'>
        <div class='col-md-4'></div>
        <div class='col-md-4'>
          <form accept-charset="UTF-8" action="#" class="require-validation">
            <div class='form-row'>
              <div class='col-xs-12 form-group required'>
                <label class='control-label'>Name on Card</label>
                <input class='form-control' size='4' type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                <label class='control-label'>Card Number</label>
                <input autocomplete='off' class='form-control card-number' size='20' type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-4 form-group cvc required'>
                <label class='control-label'>CVC</label>
                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'>Expiration</label>
                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'> </label>
                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12'>
                <div class='form-control total btn btn-info'>
                  Total:
                  <span class='amount'>£300</span>
                </div>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12 form-group'>
                <button class='form-control btn btn-primary submit-button' type='submit' style="margin-top: 10px;"><i class="fa fa-shopping-cart fa-lg"></i> Pay </button>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12 form-group'>
              	<a href="cart">
	                <span style="margin-top: 10px;" class="form-control btn btn-warning col-md-12 form-group">
	                « Return to Cart
	                </span>
                </a>
              </div>
            </div>
          </form>
        </div>
</div>
</body>