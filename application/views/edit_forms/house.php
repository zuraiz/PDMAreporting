<?php
    $this->load->view('template/header');

?>

<div class="container">
    <div ng-controller="HouseDamageCtrl">
<form method="post" action="<?php echo base_url();?>house/update">
            <div class="row form-row">
                <div class="col-lg-12 ">
                    <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 text">
                            <h2>House Damage</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 label text-right"> Name of Owner:</div>
                <div class="col-lg-3 "> 
                <input type="text" class="form-control" value="<?php echo $data['name'];?>" name="name" id="" placeholder="Name" ng-model="data.name" required>
                </div>
                </div>
                      

                     <div class="row">
                      <div class="col-lg-2 text-right label">Father Name:</div>
                <div class="col-lg-3 "> 
                   <input type="text" class="form-control" name="fathername" value="<?php echo $data['father_name'];?>"id="" placeholder="Father Name" ng-model="data.fathername">
                
                </div>
                </div>
                <div class="row">
                      <div class="col-lg-2 text-right label">Date of Incident:</div>
                <div class="col-lg-3 "> 
                <p><input type="date" class="form-control" name="incidentdate" value="<?php echo $data['date_of_incident'];?>" ng-model="data.incidentdate"></p>
                
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Cnic Number:</div>
                <div class="col-lg-3 "> 
                       <input type="text" class="form-control" name="cnic" id="" value="<?php echo $data['cnic'];?>" placeholder="CNIC Number" ng-model="data.cnicnumber">
                </div>
                </div>
                
                <div class="row">
                <div class="col-lg-2 text-right label">District</div>
                <div class="col-lg-3">
                    <select class="form-control input-sm" name="district" ng-model="data.district">
                    <option selected="selected">
                        <?php echo $data['district'];?>
                    </optiion>
                             <option>Abbottabad</option>
                            <option>Bannu</option>
                             <option>Batagram</option>
                             <option>Buner</option>
                             <option>Charsadda</option>
                             <option>Chitral</option>
                            <option>Dera Ismail Khan</option>
                             <option>Hangu</option>
                             <option>Haripur</option>
                             <option>Karak</option>
                             <option>Kohat</option>
                             <option>Kohistan</option>
                             <option>Lakki Marwat</option>
                             <option>Lower Dir</option>
                             <option>Malakand</option>
                             <option>Mansehra</option>
                             <option>Mardan</option>
                             <option>Nowshera</option>
                             <option>Peshawar</option>
                             <option>Shangla</option>
                             <option>Swabi</option>
                            <option>Swat</option>
                             <option>Tank</option>
                             <option>Tor Ghar</option>
                             <option>Upper Dir</option>
                             <option>Lower Kohistan</option>


                      </select>         
                  </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label"> Address:</div>
                <div class="col-lg-3 ">
                       <input type="text" class="form-control" name="address" id="" value="<?php echo $data['address'];?>"placeholder="Address" ng-model="data.address">
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Nature of Clamity:</div>
                <div class="col-lg-3">
                    <select class="form-control input-sm" name="reason" ng-model="data.reason">
                    <optiion selected="selected"><?php
                    echo $data['hd_reason'];?></optiion>
                            <option >Flood </option>
                            <option >Earth Quake</option>
                             <option> Thunder Storm</option>
                      </select>         
                  </div>
                       </div>
                <div class="row">
                    <div class="col-sm-2 text-right label">Budget</div>
                    <div class="col-sm-3">
                        <select name="budget" required="required">
                        <?php 
                        foreach ($budget as $b) {
                        ?>
                            <option value="<?php echo $b->b_id?>"
                            <?php 
                            if($data['b_id']==$b->b_id)
                                echo 'selected';
                            ?>
                            ><?php echo $b->b_amount;?></option>
                        <?php
                        }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 text-right label">
                        Special Compensation <input type="checkbox" name="" id="compensation-checkbox">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" name="" class="form-control" id="compensation-amount" disabled ng-model="data.special_compensation">
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-2 text-right label">House Damage:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="housedamage" value="full" 
                <?php
                if($data['damage_type'] == "full")
                echo 'checked';
                ?>
                > Fully Damage
                 <input type="radio" name="housedamage" value="partial" 
                 <?php
                if($data['damage_type'] == "partial")
                echo 'checked';
                ?>
                > Partially Damage

                
                </div>
                </div>

                    <div class="row">
                      <div class="col-lg-2 text-right label">Halqa patwari:</div>
                     <div class="col-lg-3 "> 
                  <input type="radio" name="patwari" value="yes"
                  <?php
                if($data['patwari'] == "yes")
                echo 'checked';
                ?>
                  >Yes
                 <input type="radio" name="patwari" value="no" 
                 <?php
                if($data['patwari'] == "no")
                echo 'checked';
                ?>
                  >No

                
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Rep of MPA:</div>
                <div class="col-lg-3 "> 
                 <input type="radio" name="repofmpa" value="yes" 
                 <?php
                if($data['rep_mpa'] == "yes")
                echo 'checked';
                ?>
                 > Yes
                 <input type="radio" name="repofmpa" value="no" 
                 <?php
                if($data['rep_mpa'] == "no")
                echo 'checked';
                ?>
                 > No

                </div>
                </div>

                 <div class="row">
                      <div class="col-lg-2 text-right label">Tehsildar:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="tehsildar" value="yes" 
                <?php
                if($data['tehsildar'] == "yes")
                echo 'checked';
                ?>
                > Yes
                 <input type="radio" name="tehsildar" value="no" 
                <?php
                if($data['tehsildar'] == "no")
                echo 'checked';
                ?>
                 > No
   
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Local School Headmaster:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="headmaster" value="yes" 
                <?php
                if($data['headmaster'] == "yes")
                echo 'checked';
                ?>
                > Yes
                 <input type="radio" name="headmaster" value="no" 
                 <?php
                if($data['headmaster'] == "no")
                echo 'checked';
                ?>
                 > No

                      
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Local Imam Masjid:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="imam" value="yes" 
                <?php
                if($data['imam'] == "yes")
                echo 'checked';
                ?>
                > Yes
                 <input type="radio" name="imam" value="no" 
                 <?php
                if($data['imam'] == "no")
                echo 'checked';
                ?>
                 > No

                      
                </div>
                </div>

                 <div class="row">
                <div class="col-lg-2 text-right label">Counter Signed by DC :</div>
                <div class="col-lg-3 "> 
               <input type="radio" name="dc" value="yes" 
                <?php
                    if($data['dc'] == "yes")
                    echo 'checked';
                    ?>
                > Yes
                <input type="radio" name="dc" value="no" 
                <?php
                    if($data['dc'] == "no")
                    echo 'checked';
                    ?>
                > No

                      
                </div>
                </div>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-4">
                 <input type="hidden" value="<?php echo $data['hd_id']?>" name="hd_id">
            <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
        </form>
        </div>
</div>
        <script>
          $( ".datepicker" ).datepicker();
        </script>
<?php
$this->load->view('template/footer');

?>