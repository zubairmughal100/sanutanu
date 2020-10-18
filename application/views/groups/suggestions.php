<div style="margin-top: 20px;" class="row">

<?php include(APPPATH . "/views/groups/sidebarofgroups.php"); ?>
 
<div  class="col-md-9">

    <div style="background-color: #F2F2F2; padding: 10px; margin-bottom: 20px; border: 1px solid rgb(218, 221, 225);">
    <div class="row">
      <div class="col-md-6"> 
              <p style="color: black; font-size: 16px; font-weight: bold;">ALL Suggestions for You</p>
      </div>
    </div> 
    <p>Groups you might be interested in.</p>
    <div class="row">
           <?php  
            foreach($sugesstedgroups as $r):
          ?> 
      <div class="col-md-3">
        <div class="cardprofile">
          <a href="<?php echo site_url("groups/view/" .$r->groupid) ?>">
          <div style="width: 100%; height: 100px;">
            <img src="<?php echo base_url() ?>/<?php echo $this->settings->info->upload_path_relative ?>/<?php echo $r->grouppicture ?>" alt="John" style="border-radius: 5px 5px 0px 0px; width:100%; height: 100%;">
          </div>
          <div style="padding: 10px;">
            <p class="dhasdasdnxaskld"><?php echo $r->name; ?></p>
            <p class="asdhajskdasj"> <span id="changemembers<?php echo $r->groupid; ?>"> <?php echo $r->members; ?> </span> Members</p>
          </div>
           </a>
           <?php if ($this->group_model->checkusergroup($r->groupid) == 0) { ?>
           <?php if ($this->group_model->checkgroupjoined($r->groupid) > 0) { ?>
            <div id="leavegroupbutton<?php echo $r->groupid; ?>" onclick="leavegroupindex(<?php echo $r->groupid; ?>)" style="position: absolute;bottom: 0;margin: auto;left: 0;right: 0;">
            <button class="btn asnd_asda" style="background-color: #1ca1fa !important; color: white !important; border-radius: 0px;margin-bottom: 10px;border-color: rgb(218, 221, 225);width: 124px;">Joined</button>
          </div>
          <div id="joingroupbutton<?php echo $r->groupid; ?>" onclick="joingroupindex(<?php echo $r->groupid; ?>)" style="display: none;position: absolute;bottom: 0;margin: auto;left: 0;right: 0;">
            <button    class="btn asnd_asda" style="background-color: rgb(245, 246, 247); border-radius: 0px;margin-bottom: 10px;border-color: rgb(218, 221, 225);width: 124px;">Join</button>
          </div>
          <?php  }else{  ?>
            <div id="joingroupbutton<?php echo $r->groupid; ?>" onclick="joingroupindex(<?php echo $r->groupid; ?>)" style="position: absolute;bottom: 0;margin: auto;left: 0;right: 0;">
            <button    class="btn asnd_asda" style="background-color: rgb(245, 246, 247); border-radius: 0px;margin-bottom: 10px;border-color: rgb(218, 221, 225);width: 124px;">Join</button>
          </div>
            <div onclick="leavegroupindex(<?php echo $r->groupid; ?>)" id="leavegroupbutton<?php echo $r->groupid; ?>" style="display: none; position: absolute;bottom: 0;margin: auto;left: 0;right: 0;">
            <button    class="btn asnd_asda" style="background-color: #1ca1fa !important; color: white !important; border-radius: 0px;margin-bottom: 10px;border-color: rgb(218, 221, 225);width: 124px; ">Joined</button>
          </div>
        <?php } ?>
      <?php }else{ ?>
          <div style="position: absolute;bottom: 0;margin: auto;left: 0;right: 0;">
            <a href="<?php echo site_url("groups/view/" .$r->groupid) ?>" class="btn asnd_asda" style="background-color: #26e612 !important; color: white !important; border-radius: 0px;margin-bottom: 10px;border-color: rgb(218, 221, 225);width: 124px; ">View Group</a>
          </div>
        <?php } ?>
        </div>
      </div>
     
          <?php
            endforeach;
          ?> 
    </div>
  </div>

</div>
</div>
<script type="text/javascript">
  function joingroupindex(id)
  {
    $.ajax({
        type: 'GET',
        url: '<?php echo site_url('groups/join_groupajax/'); ?>'+id,
        success: function(res) {
          swal("Success", "Group Joined Successfully", "success");
          $("#joingroupbutton"+id).hide();
          $("#leavegroupbutton"+id).show();
          $("#changemembers"+id).html(res);
        }
    });
  }
  function leavegroupindex(id)
  {
    $.ajax({
        type: 'GET',
        url: '<?php echo site_url('groups/leave_groupajax/'); ?>'+id,
        success: function(res) {
          swal("Success", "Group Leave Successfully", "success");
          $("#joingroupbutton"+id).show();
          $("#leavegroupbutton"+id).hide();
          $("#changemembers"+id).html(res);
        }
    });
  }
  function joingroupfrinds(id)
  {
    $.ajax({
        type: 'GET',
        url: '<?php echo site_url('groups/join_groupajax/'); ?>'+id,
        success: function(res) {
          swal("Success", "Group Joined Successfully", "success");
          $("#joingroupbuttonfrinds"+id).hide();
          $("#leavegroupbuttonfrinds"+id).show();
          $("#changemembersfrinds"+id).html(res);
        }
    });
  }
  function leavegroupfrinds(id)
  {
    $.ajax({
        type: 'GET',
        url: '<?php echo site_url('groups/leave_groupajax/'); ?>'+id,
        success: function(res) {
          swal("Success", "Group Leave Successfully", "success");
          $("#joingroupbuttonfrinds"+id).show();
          $("#leavegroupbuttonfrinds"+id).hide();
          $("#changemembersfrinds"+id).html(res);
        }
    });
  }  
</script>

<div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div style="padding-top: 5px; padding-bottom: 5px; background-color: #f5f6f7 !important;" class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 style="color: #1d2129;font-size: 14px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap; font-weight: bold;" class="modal-title" id="myModalLabel"><?php echo lang("ctn_1030") ?></h4>
      </div>
      <div class="modal-body">
      <?php echo form_open(site_url("groups/add_group_pro"), array("class" => "form-horizontal")) ?>
      <br>
                    <label><?php echo lang("ctn_1031") ?></label>
                    <input style="border-radius: 0px;" type="text" class="form-control" id="email-in" name="name">
            <br>
            <label><?php echo lang("ctn_1032") ?></label>
            <textarea rows="6" style="border-radius: 0px;" id="description" class="form-control" name="description" placeholder="Write something.." ></textarea>
            <br>
            <label><?php echo lang("ctn_1033") ?></label>
            <select required="" name="groupcatid" class="form-control" style="border-radius: 0px;">
                      <?php  
            foreach($allcategoriesgroups as $key):
          ?>
            <option value="<?php echo $key->id; ?>"><?php echo $key->name; ?></option>
                  <?php
            endforeach;
          ?> 
            </select>
            </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo lang("ctn_60") ?></button>
        <input type="submit" class="btn btn-post" value="<?php echo lang("ctn_559") ?>" />
        <?php echo form_close() ?>
      </div>
    </div>
  </div>
</div>
</div>