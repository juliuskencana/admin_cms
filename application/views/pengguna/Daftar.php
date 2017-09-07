<div class="portlet light bordered">
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <a href="<?php echo base_url('Pengguna/TambahPengguna') ?>" id="sample_editable_1_new" class="btn sbold green"> Tambah Baru
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
            <thead>
                <tr>
                    <th> # </th>
                    <th> Username </th>
                    <th> Nama </th>
                    <th> Email </th>
                    <th> No Telepon </th>
                    <th> Handphone </th>
                    <th> Jenis Kelamin </th>
                    <th> Role </th>
                    <th> Status </th>
                    <th> Opsi </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($user as $key => $value): ?>
                    <tr class="odd gradeX">
                        <td><?php echo $key+1 ?></td>
                        <td><?php echo $value->username ?></td>
                        <td><?php echo $value->first_name . ' ' . $value->last_name ?></td>
                        <td><?php echo ($value->email == NULL) ? '-' : $value->email; ?></td>
                        <td><?php echo ($value->phone == NULL) ? '-' : $value->phone; ?></td>
                        <td><?php echo ($value->handphone == NULL) ? '-' : $value->handphone; ?></td>
                        <td><?php echo ($value->gender == 1) ? 'Pria' : 'Wanita'; ?></td>
                        <td><?php echo $value->role ?></td>
                        <td><?php echo ($value->is_activated == 1) ? '<span class="label label-sm label-success"> Aktif </span>' : '<span class="label label-sm label-warning"> Tidak aktif </span>'; ?></td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Pilih
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-dot-circle-o"></i> Ganti Role 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-dot-circle-o"></i> Hapus Pengguna 
                                        </a>
                                    </li>
                                    <?php if ($value->is_activated == 1): ?>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-dot-circle-o"></i> Non-aktifkan Pengguna 
                                            </a>
                                        </li>
                                    <?php endif ?>
                                    <?php if ($value->is_activated == 0 || $value->is_activated == NULL): ?>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-dot-circle-o"></i> Aktifkan Pengguna 
                                            </a>
                                        </li>
                                    <?php endif ?>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>