

<div class="modal fade" id="update_modal<?php echo $row['ID']?>" aria-hidden="true">
  <div class="modal-dialog">

    <form method="POST" action="admin_VENDOR_update_query.php">
    <div class="modal-content">
      
        <div class="modal-header">
          <h3 class="modal-title">Update VENDOR</h3>
        </div>
        <div class="modal-body">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="form-group">
              <label>VENDOR NAME:</label>
              <input type="hidden" name="id" value="<?php echo $row['ID']?>"/>
             <input type="text" name="name" value="<?php echo $row['NAME']?>" class="form-control" required="required"/>
            </div>
            <div class="form-group">
              <label>VENDOR Address:</label>
              <input type="hidden" name="id" value="<?php echo $row['ID']?>"/>
              <textarea type="text" name="Address" class="form-control" required="required"> <?php echo $row['Address']?></textarea>
            </div>
            <div class="form-group">
              <label>Mobile No.:</label>
              <input type="hidden" name="id" value="<?php echo $row['ID']?>"/>
             <input type="text" name="mobile" value="<?php echo $row['mobile']?>" class="form-control" required="required"/>
            </div>
            
          </div>
        </div>
        <div style="clear:both;"></div>
        <div class="modal-footer">
          <button name="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>
          <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
        </div>
        </div>
      </form>
    </div>
  </div>
</div>