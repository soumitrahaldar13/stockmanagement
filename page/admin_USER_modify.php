

<div class="modal fade" id="update_modal<?php echo $row['id']?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="admin_USER_update_query.php">
        <div class="modal-header">
          <h3 class="modal-title">Update USER</h3>
        </div>
        <div class="modal-body">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="form-group">
              <label>USER NAME:</label>
              <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
             <input type="text" name="NAME" value="<?php echo $row['NAME']?>" class="form-control" required="required"/>
            </div>
            <div class="form-group">
              <label>DESIGNATION:</label>
              <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
               <input type="text" name="DESIGNATION" value="<?php echo $row['DESIGNATION']?>" class="form-control" required="required">
            </div>
             <div class="form-group">
              <label> CELL:</label>
              <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
             <input type="text" name="CELL" value="<?php echo $row['CELL']?>" class="form-control" required="required"/>
            </div>

            <div class="form-group">
              <label>FLOOR NO.:</label>
              <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
             <!-- <input type="text" name="FLOOR_NO" value="<?php echo $row['FLOOR_NO']?>" class="form-control" required="required"/> -->
             <select name="FLOOR_NO" id="FLOOR_NO" class="form-control" required="required">
                                  <option value="<?php echo $row['FLOOR_NO']?>"><?php echo $row['FLOOR_NO']?></option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                  <option value="10">10</option>
                                </select>
            </div>
            <div class="form-group">
              <label>Mobile No.:</label>
              <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
             <input type="text" name="MOBILE_NO" value="<?php echo $row['MOBILE_NO']?>" class="form-control" required="required"/>
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