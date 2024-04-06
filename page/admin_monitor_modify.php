

<div class="modal fade" id="update_modal<?php echo $row['id']?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="admin_monitor_update_query.php">
        <div class="modal-header">
          <h3 class="modal-title">Update MONITOR</h3>
        </div>
        <div class="modal-body">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="form-group">
              <label>GEM NO:</label>
              <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
             <input type="text" name="GEM_NO" value="<?php echo $row['GEM_NO']?>" class="form-control" required="required"/>
            </div>
            <div class="form-group">
              <label>GEM Date:</label>
              <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
               <input type="date" name="GEM_Date" value="<?php echo $row['GEM_Date']?>" class="form-control" required="required"/>
            </div>
            <div class="form-group">
              <label>VENDOR NAME:</label>
              <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
             <input type="text" name="VENDOR_NAME" value="<?php echo $row['VENDOR_NAME']?>" class="form-control"readonly/>
            </div>
            <div class="form-group">
              <label>BRAND NAME</label>
              <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
             <input type="text" name="BRAND_NAME" value="<?php echo $row['BRAND_NAME']?>" class="form-control" required="required"/>
            </div>
            <div class="form-group">
              <label>Serial Number:</label>
              <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
             <input type="text" name="Serial_Number" value="<?php echo $row['Serial_Number']?>" class="form-control" required="required"/>
            </div>
            <div class="form-group">
              <label>Model No:</label>
              <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
             <input type="text" name="Model_No" value="<?php echo $row['Model_No']?>" class="form-control" required="required"/>
            </div>
            <div class="form-group">
              <label>Display Size:</label>
              <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
             <input type="text" name="Display_Size" value="<?php echo $row['Display_Size']?>" class="form-control" required="required"/>
            </div>

             <div class="form-group">
              <label>Problem:</label>
              <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
              <input type="text" name="Problem" value="<?php echo $row['Problem'] ?>" class="form-control"  />
            </div>
            <div class="form-group">
              <label>Defunct:</label>
              <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
              <select id="Defunct" name="Defunct" class="form-control" required="required">
                                       
                                       <option value="<?php echo $row['Defunct'];?>"> <?php if($row['Defunct']==1)
                                       {?>  yes  <?php }else{?>NO<?php
                                       }?></option>
                                       <option value="1">YES</option>
                                       <option value="0">NO</option>
                                   </select>
            </div>

            <div class="form-group">
              <label>Warranty START DATE:</label>
              <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
              <input type="date" name="START_DATE" value="<?php echo $row['START_DATE'] ?>" class="form-control" />
            </div>
            <div class="form-group">
              <label>Warranty END DATE:</label>
              <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
              <input type="date" name="END_DATE" value="<?php echo $row['END_DATE'] ?>" class="form-control"  />
            </div>
          </div>
        </div>
        <div style="clear:both;"></div>
        <div class="modal-footer">
          <button name="update_monitor" id="update_monitor" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>
          <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
        </div>
        </div>
      </form>
    </div>
  </div>
</div>