<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-sm-12">              
                <section class="panel">
                    <header class="panel-heading">
                        Medicine List
                    </header>
                    <div class="panel-body">
                        <?php
                        if ($this->session->userdata('successfull')):
                            echo '<div class="alert alert-dismissable alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Well done !!!  </strong>' . $this->session->userdata('successfull') . '</div>';
                            $this->session->unset_userdata('successfull');
                        endif;
                        if ($this->session->userdata('failed')):
                            echo '<div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Oh snap !!!  </strong>' . $this->session->userdata('failed') . '</div>';
                            $this->session->unset_userdata('failed');
                        endif;
                        ?>
                        <div class="adv-table">
                            <span class="tools pull-right">
                                <button class="btn  btn-success"  data-toggle="modal" href="#addMedicine">
                                    Add Medicine&nbsp;<i class="fa fa-plus"></i>
                                </button> 
                            </span>
                            <table  class="display table table-bordered table-striped" id="editable-sample">
                                <thead>
                                    <tr>
                                        <th>Manufacturer Name</th>
                                        <th>Brand Name</th>
                                        <th>Generic Name</th>
                                        <th>Strength</th>
                                        <th>Dosages</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
<!--main content end-->
<!--Add Medicine Modal-->
<div class="modal fade top-modal-without-space" id="addMedicine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" style="text-align: center;">Add Medicine Information</h4>
            </div>
            <div class="modal-body" style="overflow-y: scroll; max-height: 480px;">
                <div class="form">
                    <form class="cmxform form-horizontal tasi-form" id="addAppointmentForm" method="POST" action="<?php echo site_url('medicine/medicine/addMedicine'); ?>">
                        <div class="form-group">
                            <label for="patientname" class="control-label col-lg-3">Manufacturer Name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="manufacturer_name" id="manufacturer_name" required="required"> 
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="patientname" class="control-label col-lg-3">Brand Name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="brand_name" id="brand_name" required="required"> 
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="patientname" class="control-label col-lg-3">Generic Name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="generic_name" id="generic_name" required="required"> 
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="patientname" class="control-label col-lg-3">Strength</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="strength" id="strength" required="required"> 
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="patientname" class="control-label col-lg-3">Dosages</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="dosages" id="dosages" required="required"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-9">
                                <button class="btn btn-success" type="submit"  >&nbsp;&nbsp;Submit&nbsp;&nbsp;</button>   
                                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>          
        </div>
    </div>
</div>
<!--/Add Medicine Modal-->

<!--Edit Medicine Modal-->
<div class="modal fade top-modal-without-space" id="editAreaModaledit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" style="text-align: center;">Edit Medicine Information</h4>
            </div>
            <div class="modal-body" style="overflow-y: scroll; max-height: 480px;">
                <div class="form">
                    <form class="cmxform form-horizontal tasi-form" id="addAppointmentForm" method="POST" action="<?php echo site_url('medicine/medicine/editMedicine'); ?>">
                        <div class="form-group">
                            <label for="patientname" class="control-label col-lg-3">Manufacturer Name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="manufacturer_name" id="manufacturer_nameedit" required="required">
                                <input class="form-control" type="hidden" name="medicine_id" id="medicine_idedit">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="patientname" class="control-label col-lg-3">Brand Name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="brand_name" id="brand_nameedit" required="required"> 
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="patientname" class="control-label col-lg-3">Generic Name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="generic_name" id="generic_nameedit" required="required"> 
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="patientname" class="control-label col-lg-3">Strength</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="strength" id="strengthedit" required="required"> 
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="patientname" class="control-label col-lg-3">Dosages</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="dosages" id="dosagesedit" required="required"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-9">
                                <button class="btn btn-success" type="submit"  >&nbsp;&nbsp;Submit&nbsp;&nbsp;</button>  
                                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!--/Edit Medicine Modal-->

<!--Delete Medicine Modal-->
<div class="modal fade" id="deleteMedicineData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="cmxform form-horizontal tasi-form" id="deleteUserForm" method="post" action="<?php echo site_url('medicine/medicine/deleteMedicine') ?>">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Delete Medicine&nbsp;</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <h5><i class="fa fa-warning"></i>&nbsp;&nbsp; Do You  Want To Delete Medicine Information</h5>
                                    <input id="medicine_id_delete" name="medicine_id" type="hidden" value="" />

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" > YES </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"> NO </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--Delete Medicine Modal-->
<script>
    $(document).ready(function() {
        var oTable = $('#editable-sample').dataTable({
            "processing": true,
            "serverSide": true,
            "pagingType": "full_numbers",
            "ajax": '<?php echo site_url('medicine/medicine/getMedicineList'); ?>',
            "aoColumns": [
                {"sClass": "center"},
                {"sClass": "center"},
                {"sClass": "center"},
                {"sClass": "center"},
                {"sClass": "center"},
                {"sClass": "center"}]

        });
    });

    function showEditModal(id) {
        var IdedieModal = id;
        var userExplode = IdedieModal.split(",");
        var medicine_id = userExplode[0];
        var manufacturer_name = userExplode[1];
        var brand_name = userExplode[2];
        var generic_name = userExplode[3];
        var strength = userExplode[4];
        var dosages = userExplode[5];
        $("#medicine_idedit").val(medicine_id);
        $("#manufacturer_nameedit").val(manufacturer_name);
        $("#brand_nameedit").val(brand_name);
        $("#generic_nameedit").val(generic_name);
        $("#strengthedit").val(strength);
        $("#dosagesedit").val(dosages);
        $('#editAreaModaledit').modal('show');
    }

    function showDeleteModal(id) {
        $("#medicine_id_delete").val(id);
        $('#deleteMedicineData').modal('show');
    }
</script>