

<div class="modal fade" id="update_modal<?php echo $row['id']?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="admin_AMC_update_query.php">
        <div class="modal-header">
          <h3 class="modal-title">Update PRODUCT Assignment</h3>
        </div>
        <div class="modal-body">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="form-group">
              <label>AMC NAME:</label>
              <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
             <input type="text" name="name" value="<?php echo $row['name']?>" class="form-control" required="required"/>
            </div>
            <div class="form-group">
              <label>AMC Address:</label>
              <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
               <textarea type="text" name="Address"  class="form-control" required="required"><?php echo $row['address']?></textarea>
            </div>

            <div class="form-group">
              <label>Mobile No.:</label>
              <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
             <input type="text" name="Mobile" value="<?php echo $row['mobile']?>" class="form-control" required="required"/>
            </div>
            <div class="form-group">
              <label>START DATE:</label>
              <input type="date" name="START_DATE" value="<?php echo $row['start_date'] ?>" class="form-control" required="required" />
            </div>
            <div class="form-group">
              <label>REMINDER DATE:</label>
              <input type="date" name="REMINDER_DATE" value="<?php echo $row['Reminder_date'] ?>" class="form-control" required="required" />
            </div>
            <div class="form-group">
              <label>END DATE:</label>
              <input type="date" name="END_DATE" value="<?php echo $row['end_date'] ?>" class="form-control" required="required" />
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