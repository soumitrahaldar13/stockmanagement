

<div class="modal fade" id="update_modal<?php echo $row['ID']?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="admin_IP_update_query.php">
        <div class="modal-header">
          <h3 class="modal-title">Update IP</h3>
        </div>
        <div class="modal-body">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="form-group">
              <label>ID:</label>
              <input type="hidden" name="id" value="<?php echo $row['ID']?>"/>
             <input type="text" name="ID" value="<?php echo $row['ID']?>" class="form-control" minlength="5" maxlength="20"readonly/>
            </div>
            <div class="form-group">
              <label>IP:</label>
              <input type="hidden" name="id" value="<?php echo $row['ID']?>"/>
               <input type="text" name="IP" value="<?php echo $row['IP']?>" class="form-control"readonly/>
            </div>
            <div class="form-group">
              <label>ACTIVE:</label>
              <input type="hidden" name="id" value="<?php echo $row['ID']?>"/>
             <input type="text" name="ACTIVE" value="<?php echo $row['ACTIVE']?>" class="form-control"readonly/>
            </div>
            <div class="form-group">
              <label>in_use</label>
              <input type="hidden" name="id" value="<?php echo $row['ID']?>"/>
             <input type="text" name="in_use" value="<?php echo $row['in_use']?>" class="form-control"readonly/>
            </div>
            <div class="form-group">
              <label>New IP:</label>
              <input type="hidden" name="id" value="<?php echo $row['ID']?>"/>
             <input type="text" name="New_IP" value="<?php echo $row['New_IP']?>" class="form-control" required="required"/>
            </div>
          </div>
        </div>
        <div style="clear:both;"></div>
        <div class="modal-footer">
          <button name="update_IP" id="update_IP" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>
          <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
        </div>
        </div>
      </form>
    </div>
  </div>
</div>


