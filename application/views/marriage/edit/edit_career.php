<style type="text/css">
  .panelbodycustom{
    border:1px solid #DDD;
    padding: 10px;
  }
</style>
<div style="margin-top: 20px;" class="row">
  <div class="col-md-4">
    <?php include(APPPATH . "/views/marriage/sidebar.php"); ?>
  </div>
  <div class="col-md-8">
    <div style="box-shadow: 0 0 6px rgba(0,0,0,.2); border-radius: 10px; padding: 10px;">
      <?php include(APPPATH . "/views/marriage/profileinformation.php"); ?>
      <div style="background-color: #efefef; padding: 5px; color: #b14343; font-weight: bold; margin-bottom: 10px;">Update Education & Career</div>
      <div  class="panelbodycustom">
        <?php echo form_open_multipart(site_url("marriage/updatemycareer"), array("class" => "form-horizontal")) ?>
          <input type="hidden" value="<?php echo $marriageprofile->marriage_profile_id; ?>" name="marriage_profile_id">
                  <div class="row form-group">
		            		<div class="col-md-3 ">
		            			<label >Education : </label>
		            		</div>
		            		<div class="col-md-9 ">
		            			<div class="row">
		            				<div class="col-md-5">
		            					<input type="text" class="form-control" value="<?php echo $marriageprofile->education_in ?>"  placeholder="Bachelors" name="education_in">
		            				</div>
		            				<div class="col-md-1"  style="margin-top: 8px;">IN</div>
		            				<div class="col-md-6">
										<input type="text" class="form-control"  value="<?php echo $marriageprofile->education_to ?>"  placeholder="Comupter Science" name="education_to">
		            				</div>		            				
		            			</div>
		            		</div>	            		
		            	</div>

                   <div class="row form-group">
		            		<div class="col-md-3 ">
		            			<label >Education Description  : </label>
		            		</div>
		            		<div class="col-md-9 ">
								<textarea class="form-control"  name="educational_description"  value="<?php echo $marriageprofile->education_description ?>" ><?php echo $marriageprofile->education_description ?></textarea>
		            		</div>		            		
		            	</div>

                <div class="row form-group">
		            		<div class="col-md-3 ">
		            			<label >Ocupation  : </label>
		            		</div>
		            		<div class="col-md-9 ">
								<input type="text" placeholder="IT Professional" class="form-control" name="ocupation" value="<?php echo $marriageprofile->occupation ?>"   >
		            		</div>		            		
		            	</div>

                <div class="row form-group">
		            		<div class="col-md-3 ">
		            			<label >Ocupation Description  : </label>
		            		</div>
		            		<div class="col-md-9 ">
								<textarea class="form-control" name="ocupation_description" value="<?php echo $marriageprofile->occupation_description ?>" ><?php echo $marriageprofile->occupation_description ?></textarea>
		            		</div>		            		
		            	</div>

                      <div class="row form-group">
		            		<div class="col-md-3 ">
		            			<label >Anual Income  : </label>
		            		</div>
		            		<div class="col-md-9 ">
								<input type="text" class="form-control"  value="<?php echo $marriageprofile->anual_income ?>" name="anual_income">
		            		</div>		            		
		            	</div>
          
                      <div class="row form-group">
		            		<div class="col-md-3 ">
		            			<label >Assets  : </label>
		            		</div>
		            		<div class="col-md-9 ">
								<input type="text" class="form-control"  value="<?php echo $marriageprofile->assets ?>" name="assets">
		            		</div>		            		
		            	</div>
		            	
		            

                    
            <div  id="updatebutton" class="row">
            <div style="text-align: right;" class="col-md-12">
              <button type="submit" class="btn btn-success">Update</button>
            </div>
              
          </div> 
          <?php echo form_close() ?>
      </div>           
  </div>
</div>