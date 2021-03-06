<style type="text/css">
    .label{
        color: #333;
    }
</style>
<div ng-controller="CattleCtrl">
    <form novalidate ng-submit="addCattle(data)" method="post" name="newCattleForm">
            <div class="row form-row">
                <div class="col-lg-12 ">
                    <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 text">
                            <h2>Cattle</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 label text-right"> Name of Owner:</div>
                <div class="col-lg-3 "> 
                <input type="text" class="form-control" name="" id="" placeholder="Name" ng-model="data.name" required>
                </div>
                </div>
                      

                     <div class="row">
                      <div class="col-lg-2 text-right label">Father Name:</div>
                <div class="col-lg-3 "> 
                   <input type="text" class="form-control" name="" id="" placeholder="Father Name" ng-model="data.fathername" required>
                
                </div>
                </div>
                <div class="row">
                      <div class="col-lg-2 text-right label">Date of Incident:</div>
                <div class="col-lg-3 "> 
                <p><input type="date" class="form-control" ng-model="data.incidentdate" required></p>
                
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">CNIC Number:</div>
                <div class="col-lg-3 "> 
                       <input type="text" class="form-control" name="" id="" placeholder="CNIC Number" ng-model="data.cnicnumber" required>
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">District</div>
                 <div class="col-lg-3">
                    <select class="form-control input-sm" name="" ng-model="data.district">
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
                       <textarea class="form-control" name="" id="" placeholder="Address" ng-model="data.address" required></textarea>
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Nature of Clamity :</div>
                 <div class="col-lg-3">
                    <select class="form-control input-sm" name="" ng-model="data.reason" >
                            <option>Flood </option>
                            <option>Earth Quake</option>
                             <option>Thunder Storm</option>
                      </select>         
                  </div>
                       </div>
                <div class="row">
                    <div class="col-sm-2 text-right label">Relief</div>
                    <div class="col-sm-3">
                       <input type="text" ng-model="data.budget" class="form-control" placeholder="Relief Amount">
                       <!--  <select name="budget" ng-model="data.budget" required="required" class="form-control" required>
                            <option ng-repeat="b in budget" value="{{b.b_id}}">
                                {{b.b_year}} - {{b.b_category}} - {{b.b_amount}}   
                            </option>
                        </select> -->
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
                <div class="col-lg-2 text-right label">Cattle Type:</div>
                <div class="col-lg-3"> 
                <input type="radio" name="cattletype" value="small" ng-model="data.cattletype"> Small
                <input type="radio" name="cattletype" value="big" ng-model="data.cattletype"> Big
                </div>
                </div>

                    <div class="row">
                      <div class="col-lg-2 text-right label">Halqa patwari:</div>
                     <div class="col-lg-3 "> 
                  <input type="radio" name="HalqaPatwari" value="yes" ng-model="data.halqapatwari"> Yes
                 <input type="radio" name="HalqaPatwari" value="no" ng-model="data.halqapatwari"> No

                
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Rep of MPA:</div>
                <div class="col-lg-3 "> 
                 <input type="radio" name="RepOfMPA" value="yes" ng-model="data.repofmpa"> Yes
                 <input type="radio" name="RepOfMPA" value="no" ng-model="data.repofmpa"> No

                </div>
                </div>

                 <div class="row">
                      <div class="col-lg-2 text-right label">District Officer Liverstock:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="DistrictOfficerLiverstock" value="yes" ng-model="data.districtofficerlivestock"> Yes
                 <input type="radio" name="DistrictOfficerLiverstock" value="no" ng-model="data.districtofficerlivestock"> No
   
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Local School Headmaster:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="headmaster" value="yes" ng-model="data.headmaster"> Yes
                 <input type="radio" name="headmaster" value="no" ng-model="data.headmaster"> No

                      
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Local Imam Masjid:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="imam" value="yes" ng-model="data.imam"> Yes
                <input type="radio" name="imam" value="no" ng-model="data.imam"> No

                      
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Counter Signed by DC :</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="dc" value="yes" ng-model="data.dc"> Yes
                <input type="radio" name="dc" value="no" ng-model="data.dc"> No

                      
                </div>
                </div>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-lg-offset-4">
                <input type="submit" value="Submit" class="btn btn-success" ng-disabled="newCattleForm.$invalid">
                    </div>
                    <div class="col-lg-3">
                         <div class="alert alert-info" ng-show="showalert===1">
            {{message}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
                    </div>
                </div>
    </form>
        
</div>
<script>
            $('#compensation-checkbox').click(function(){
                
                if($(this).prop('checked')){
                    $('#compensation-amount').prop('disabled', false);
                }else{
                    $('#compensation-amount').prop('disabled', true);
                }
            });
        </script>