<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		// BEGIN CSS AND JS CONFIGURATION
		$this->data['page_plugin_css'] = array(
											"global/plugins/bootstrap-daterangepicker/daterangepicker.min.css",
											"global/plugins/morris/morris.css",
											"global/plugins/fullcalendar/fullcalendar.min.css",
											"global/plugins/jqvmap/jqvmap/jqvmap.css",
											"global/css/components-md.min.css",
											"global/css/plugins-md.min.css"
										);
		$this->data['page_plugin_js'] = array(
											"global/plugins/moment.min.js",
									        "global/plugins/bootstrap-daterangepicker/daterangepicker.min.js",
									        "global/plugins/morris/morris.min.js",
									        "global/plugins/morris/raphael-min.js",
									        "global/plugins/counterup/jquery.waypoints.min.js",
									        "global/plugins/counterup/jquery.counterup.min.js",
									        "global/plugins/amcharts/amcharts/amcharts.js",
									        "global/plugins/amcharts/amcharts/serial.js",
									        "global/plugins/amcharts/amcharts/pie.js",
									        "global/plugins/amcharts/amcharts/radar.js",
									        "global/plugins/amcharts/amcharts/themes/light.js",
									        "global/plugins/amcharts/amcharts/themes/patterns.js",
									        "global/plugins/amcharts/amcharts/themes/chalk.js",
									        "global/plugins/amcharts/ammap/ammap.js",
									        "global/plugins/amcharts/ammap/maps/js/worldLow.js",
									        "global/plugins/amcharts/amstockcharts/amstock.js",
									        "global/plugins/fullcalendar/fullcalendar.min.js",
									        "global/plugins/horizontal-timeline/horozontal-timeline.min.js",
									        "global/plugins/flot/jquery.flot.min.js",
									        "global/plugins/flot/jquery.flot.resize.min.js",
									        "global/plugins/flot/jquery.flot.categories.min.js",
									        "global/plugins/jquery-easypiechart/jquery.easypiechart.min.js",
									        "global/plugins/jquery.sparkline.min.js",
									        "global/plugins/jqvmap/jqvmap/jquery.vmap.js",
									        "global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js",
									        "global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js",
									        "global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js",
									        "global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js",
									        "global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js",
									        "global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js",
											"pages/scripts/charts-amcharts.min.js"
										);

		// END CSS AND JS CONFIGURATION
    }


	public function index()
	{
		// BEGIN PAGE CONFIGURATION
		if ($this->permission_model->validation_permission() == 0) {
			$this->data['page'] = "ErrorPermission";
		}else{
			$this->data['page'] = "Dasbor";
		}

		$this->data['title'] = "Dasbor";
		$this->data['breadcumb'] = array(
							   		array(
							   			"desc" => "Home",
										"link" => "#"
									)
			  					);
		$this->data['br_ActivePage'] = "Dasbor";
		$this->data['br_PageDesc'] = "Dasbor";
		// END PAGE CONFIGURATION
		

		$this->load->view('Index', $this->data);
	}
}
