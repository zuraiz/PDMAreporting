<style type="text/css">
    .label{
        color: #333;
    }
</style>
<div ng-controller="HouseDamageCtrl">
<form ng-submit="AddHouseDamage(data)" method="post" role="form" name="newHouseForm" novalidate>
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
                <div class="col-lg-2 text-right label">Cnic Number:</div>
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
                       <input type="text" class="form-control" name="" id="" placeholder="Address" ng-model="data.address" required>
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Nature of Clamity:</div>
             <div class="col-lg-3">
                    <select class="form-control input-sm" name="" ng-model="data.reason">
                            <option>Flood </option>
                            <option>Earth Quake</option>
                             <option>Thunder Storm</option>
                      </select>         
                  </div>
                       </div>
                <div class="row">
                    <div class="col-sm-2 text-right label">Relief</div>
                    <div class="col-sm-3">
                        
                        <input type="text" ng-model="data.budget" class="form-control" placeholder="Relief Amount" >
                        <!-- <select name="budget" ng-model="data.budget" required="required" class="form-control" required>
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
                <div class="col-lg-2 text-right label">House Damage:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="HouseDamage" value="full" ng-model="data.housedamage"> Fully Damage
                 <input type="radio" name="HouseDamage" value="partial" ng-model="data.housedamage"> Partially Damage

                
                </div>
                </div>

                    <div class="row">
                      <div class="col-lg-2 text-right label">Halqa patwari:</div>
                     <div class="col-lg-3 "> 
                  <input type="radio" name="Halqapatwari" value="yes" ng-model="data.halqapatwari"> Yes
                 <input type="radio" name="Halqapatwari" value="no" ng-model="data.halqapatwari"> No

                
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
                      <div class="col-lg-2 text-right label">Tehsiladar:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="Tehsiladar" value="yes" ng-model="data.tehsildar"> Yes
                 <input type="radio" name="Tehsiladar" value="no" ng-model="data.tehsildar"> No
   
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Local School Headmaster:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="LocalSchoolHeadmaster" value="yes" ng-model="data.localschoolheadmaster"> Yes
                 <input type="radio" name="LocalSchoolHeadmaster" value="no" ng-model="data.localschoolheadmaster"> No

                      
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Local Imam Masjid:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="LocalImamMasjid" value="yes" ng-model="data.localimammasjid"> Yes
                 <input type="radio" name="LocalImamMasjid" value="no" ng-model="data.localimammasjid"> No

                      
                </div>
                </div>

                 <div class="row">
                <div class="col-lg-2 text-right label">Counter Signed by DC :</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="dc" value="1" ng-model="data.dc"> Yes
                <input type="radio" name="dc" value="0" ng-model="data.dc"> No

                      
                </div>
                </div>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-lg-offset-4">
            <button type="submit" class="btn btn-success" ng-disabled="newHouseForm.$invalid">Submit</button>
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