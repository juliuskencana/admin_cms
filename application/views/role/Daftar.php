<div class="portlet light bordered">
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <a href="<?php echo base_url('Role/TambahRole') ?>" id="sample_editable_1_new" class="btn sbold green"> Tambah Baru
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped table-bordered table-hover table-checkable order-column" id='sample_2'>
            <thead>
                <tr>
                    <th> # </th>
                    <th> Nama Role</th>
                    <th> Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($role as $key => $value): ?>
                    <tr class="odd gradeX">
                        <td><?php echo $key+1 ?></td>
                        <td><?php echo $value->role ?></td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Pilih
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-dot-circle-o"></i> Hapus Role 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-dot-circle-o"></i> Edit Role 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-dot-circle-o"></i>Ubah Permission 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-dot-circle-o"></i>Tampilan Menu 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>