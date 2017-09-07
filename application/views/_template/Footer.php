                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!--[if lt IE 9]>
<script src="<?= base_url() ?>assets/global/plugins/respond.min.js"></script>
<script src="<?= base_url() ?>assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?= base_url() ?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->

        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?= base_url() ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        
        <?php if (isset($page_plugin_js)): ?>
            <?php foreach ($page_plugin_js as $row): ?>
                <script src="<?= base_url() ?>assets/<?= $row ?>" type="text/javascript"></script>
            <?php endforeach ?>
        <?php endif ?>
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?= base_url() ?>assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>