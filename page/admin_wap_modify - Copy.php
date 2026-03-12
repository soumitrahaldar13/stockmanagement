

<div class="modal fade" id="update_modal<?php echo $row['ID']?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="admin_IObox_update_query.php">
        <div class="modal-header">
          <h3 class="modal-title">Update IP</h3>
        </div>
        <div class="modal-body">
          <div class="col-md-2"></div>
          <div class="col-md-8">
          
           <div class="form-group">
              <div class="form-group">
              <label>ID:</label>
              <input type="hidden" name="id" value="<?php echo $row['ID']?>"/>
             <input type="text" name="ID" value="<?php echo $row['ID']?>" class="form-control"readonly/>
            </div>
              <label>in_use</label>
              <input type="hidden" name="id" value="<?php echo $row['ID']?>"/>
             <input type="text" name="I/O_box" value="<?php echo $row['I/O_box']?>" class="form-control"/>
            </div>
            <div class="form-group">
              <label>ACTIVE:</label>
              <input type="hidden" name="id" value="<?php echo $row['ID']?>"/>
             <input type="text" name="ACTIVE" value="<?php echo $row['Active']?>" class="form-control"readonly/>
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


