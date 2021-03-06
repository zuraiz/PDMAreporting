
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cattle</h4>
        </div>
        <div class="modal-body">
        <div class="row">
             <div class="col-lg-12 ">
                <div class="form-group">

                    <div class="row">
                    <div class="col-lg-4 ">Name of Owner: </div>
                    <div class="col-sm-4">{{row.name}}</div>     
                  </div>

                      
                     <div class="row">
                       <div class="col-lg-4 ">Father Name:</div>
                       <div class="col-sm-4">{{row.father_name}}</div>
          </div>

                <div class="row">
                      <div class="col-lg-4 ">Date of Incident:</div>
                      <div class="col-sm-4">{{row.dateofincident}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-4">Cnic Number:</div>
                  <div class="col-sm-4">{{row.cnic}}</div>
                </div>

                <div class="row">
                <div class="col-lg-4 "> Address:</div>
                <div class="col-sm-4">{{row.address}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-4 ">Nature of Clamity:</div>
                   <div class="col-sm-4">{{row.reason}}</div>

                </div>

                <div class="row">
                  <div class="col-lg-4 ">District:</div>
                   <div class="col-sm-4">{{row.district}}</div>

                </div>

                <div class="row">
                  <div class="col-lg-4 ">Special Compensation:</div>
                   <div class="col-sm-4">{{row.special_compensation}}</div>

                </div>

                

              <div class="row">
                      <div class="col-lg-4"> Halqa patwari:</div>
                       <div class="col-sm-4">{{row.patwari}}</div>
             </div>

                <div class="row">
                  <div class="col-lg-4">Rep of MPA:</div>
                  <div class="col-sm-4">{{row.rep_mpa}}</div>

                </div>

                 <div class="row">
                      <div class="col-lg-4">District Officer Liverstock:</div>
                      <div class="col-sm-4">{{row.officer_livestock}}</div>
        		</div>

                <div class="row">
                  <div class="col-lg-4">Local School Headmaster:</div>
                  <div class="col-sm-4">{{row.headmaster}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-4 ">Local Imam Masjid:</div>
                  <div class="col-sm-4">{{row.imam}}</div>
                </div>

                  <div class="row">
                  <div class="col-lg-4 ">Counter signed by DC:</div>
                  <div class="col-sm-4">{{row.dc}}</div>
                </div>

                    </div>

                </div>
            </div>
        </div>
        <?php
        $is_ad = $this->session->userdata('is_mis');
        if ($is_ad) {

        ?>
        		<div class="row">
                	<div class="col-lg-1 col-lg-offset-8">
                	<a href="<?php echo base_url();?>cattle/edit/{{row.ct_id}}" class="btn btn-success"> Edit</a>
                	</div>	
                </div>
<?php
}
?>

                	<br>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      </div>
      </div>