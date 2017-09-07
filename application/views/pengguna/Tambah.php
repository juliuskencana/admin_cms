
<div class="portlet light bordered">
    <div class="portlet-body form">
        <form class="form-horizontal" id="tambahPengguna" role="form" method="post" action="">
            <?php if(validation_errors()): ?>
                <div class="alert alert-danger">
                    <span>
                        <p>Form tidak memenuhi kriteria yang ada, harap review lagi input anda</p>
                        <ul>
                            <?php echo validation_errors(); ?>
                        </ul>
                    </span>
                </div>
            <?php endif ?>
            <div class="form-body">
                <div class="form-group <?php if(form_error('username') != ""){echo 'has-error';} ?>">
                    <label class="col-md-3 control-label">Username</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo set_value('username'); ?>">
                        <?php echo form_error('username', '<span class="help-block">', '</span>'); ?>
                    </div>
                </div>
                <div class="form-group <?php if(form_error('first_name') != ""){echo 'has-error';} ?>">
                    <label class="col-md-3 control-label">Nama Awal</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Nama Awal" name="first_name" value="<?php echo set_value('first_name'); ?>">
                        <?php echo form_error('first_name', '<span class="help-block">', '</span>'); ?>
                    </div>
                </div>
                <div class="form-group <?php if(form_error('last_name') != ""){echo 'has-error';} ?>">
                    <label class="col-md-3 control-label">Nama Akhir</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Nama Akhir" name="last_name" value="<?php echo set_value('last_name'); ?>">
                        <?php echo form_error('last_name', '<span class="help-block">', '</span>'); ?>
                    </div>
                </div>
                <div class="form-group <?php if(form_error('email') != ""){echo 'has-error';} ?>">
                    <label class="col-md-3 control-label">Email</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>">
                        <?php echo form_error('email', '<span class="help-block">', '</span>'); ?>
                    </div>
                </div>
                <div class="form-group <?php if(form_error('phone') != ""){echo 'has-error';} ?>">
                    <label class="col-md-3 control-label">No telepon</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="No telepon" name="phone" value="<?php echo set_value('phone'); ?>">
                        <?php echo form_error('phone', '<span class="help-block">', '</span>'); ?>
                    </div>
                </div>
                <div class="form-group <?php if(form_error('handphone') != ""){echo 'has-error';} ?>">
                    <label class="col-md-3 control-label">Handphone</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Handphone" name="handphone" value="<?php echo set_value('handphone'); ?>">
                        <?php echo form_error('handphone', '<span class="help-block">', '</span>'); ?>
                    </div>
                </div>
                <div class="form-group <?php if(form_error('gender') != ""){echo 'has-error';} ?>">
                    <label class="col-md-3 control-label">Jenis Kelamin</label>
                    <div class="col-md-6">
                        <select class="form-control" name="gender">
                            <option value="1" <?php if (set_value('gender') == 1) {echo "selected";} ?>>Pria</option>
                            <option value="2" <?php if (set_value('gender') == 2) {echo "selected";} ?>>Wanita</option>
                        </select>
                        <?php echo form_error('gender', '<span class="help-block">', '</span>'); ?>
                    </div>
                </div>
                <div class="form-group <?php if(form_error('role_id') != ""){echo 'has-error';} ?>">
                    <label class="col-md-3 control-label">Role</label>
                    <div class="col-md-6">
                        <select class="form-control" name="role_id">
                            <?php foreach ($role as $key => $value): ?>
                                <?php if ($value->id != 1): ?>
                                    <option value="<?php echo $value->id ?>" <?php if (set_value('role_id') == $value->id) {echo "selected";} ?>><?php echo $value->role ?></option>
                                <?php endif ?>
                            <?php endforeach ?>
                        </select>
                        <?php echo form_error('role_id', '<span class="help-block">', '</span>'); ?>
                    </div>
                </div>
                <div class="form-group <?php if(form_error('birthdate') != ""){echo 'has-error';} ?>">
                    <label class="col-md-3 control-label">Tanggal Lahir</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="dd/mm/yyyy" name="birthdate" value="<?php echo set_value('birthdate'); ?>" id="mask_date2">
                        <?php echo form_error('birthdate', '<span class="help-block">', '</span>'); ?>
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn green" id="submit"> Submit </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#tambahPengguna').submit(function(){
            document.getElementById("submit").disabled = true;
        });
    });
</script>