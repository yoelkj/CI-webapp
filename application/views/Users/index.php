<?php if( isset($arr_users) &&  !empty($arr_users)):?>
<table class="table table-striped table-bordered">
  <thead>
    <tr> <th>Name</th><th>Actions</th></tr>
  </thead>
  <tbody>

  <?php foreach ($arr_users as $key_user => $row_user):?>
  <tr>
    <td><?php echo $row_user['name']?></td>
    <td class="text-right">
    <a href="javascript:void();" class="btn btn-danger">Delete</a>
    <a href="javascript:void();" class="btn btn-dark">Edit</a>
    </td>
  </tr>
  <?php endforeach;?>

  </tbody>

</table>
<?php else:?>
  <div class="alert">Empty results</div>
<?php endif;?>