<div class="row">
<div class="col-md-12">
  <hr>
  <h1>Form to save User data</h1>
  <hr>
  <form action="">
    <input type="text" name="name" class="form-control">
    <input type="hidden"  value="<?php echo (isset($arr_user['id'])?$arr_user['id']:'' )?>">
    <input class="btn btn-success btn-lg btn-block" type="submit" value="Submit">
  </form>
</div>
</div>