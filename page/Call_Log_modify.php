
<div class="modal fade" id="update_modal_CALL_LOG<?php echo $p_ID?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="call_log_update_query.php" name="myForm" class="w3_form_post" enctype="multipart/form-data">
        <div class="modal-header">
          <h3 class="modal-title">call log</h3>
        </div>
        <div class="modal-body">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="form-group">
              <label>NAME:</label>
              <input type="hidden" name="id" value="<?php echo $p_ID ?>"/>
             <input type="text" name="name" value="<?php echo $row['NAME'] ?>" class="form-control" pattern="[A-Za-z ]{1,32}" required="required"  disabled/>
            </div>
             <div class="form-group">
              <label>DESIGNATION :</label>
              <input type="hidden" name="id" value="<?php echo $p_ID?>"/>
               <input type="text" name="DESIGNATION" value="<?php echo $row['DESIGNATION'] ?>" class="form-control" disabled/>
            </div>
             <div class="form-group">
              <label>CELL:</label>
              <input type="hidden" name="id" value="<?php echo $p_ID?>"/>
               <input type="text" name="CELL" value="<?php echo $row['CELL'] ?>" class="form-control" disabled/>
            </div>
             <div class="form-group">
              <label>FLOOE NO:</label>
              <input type="hidden" name="id" value="<?php echo $p_ID?>"/>
               <input type="text" name="FLOOR_NO" value="<?php echo $row['FLOOR_NO'] ?>" class="form-control" disabled/>
            </div>
            <div class="form-group">
              <label>Mobile No.:</label>
              <input type="hidden" name="id" value="<?php echo $p_ID?>"/>
             <input type="text" name="Mobile" value="<?php echo $row['MOBILE_NO']?>" class="form-control" minlength="4" maxlength="10" pattern="[6789][0-9]{9}" required="required"  disabled/>
            </div>
             <div class="form-group">
              <label>EMP ID :</label>
              <input type="hidden" name="id" value="<?php echo $p_ID?>"/>
              <input type="text" name="emp_code" value="<?php echo $row['emp_code'] ?>" class="form-control" disabled/>
            </div>

            <div class="form-group">
              <label>IP:</label>
              <input type="text" name="IP" value="<?php echo $row['IP']; ?>" class="form-control" required="required" disabled/>
            </div>
            <div class="form-group">
              <label>PRODUCT NAME:</label>
              <input type="text" name="PRODUCT_NAME" value="<?php echo $row['PRODUCT_NAME'] ?>" class="form-control" required="required" disabled/>
            </div>
            <div class="form-group">
              <label>Serial Number:</label>

              <input type="text" name="Serial_Number" value="<?php echo $row['Serial_Number'] ?>" class="form-control" required="required" disabled/>
            </div>
            <div class="form-group">
              <label>PROBLEM :</label>
              <input type="hidden" name="id" value="<?php echo $p_ID?>"/>
               <textarea type="text" name="problem"  class="form-control" required="required"></textarea>
            </div>
          </div>
        </div>

        <div style="clear:both;"></div>
        <div class="modal-footer">
          <button name="update_call_log" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Submit</button>
          <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
        </div>
        </div>
      </form>

    </div>
  </div>
</div>

