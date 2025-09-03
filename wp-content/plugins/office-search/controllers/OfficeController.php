<?php
namespace Office\Controllers;

use Office\Models\OfficeModel;

class OfficeController extends Controller {

    private $model;

    public function __construct() {
        $this->model = new OfficeModel();
    }

    public function register_hooks() {
        add_shortcode('offices_search', [$this, 'render_offices']);
    }

    public function render_offices() {
        $officePage = $this->model->officePage();
        $offices = $this->model->offices();

        return $this->render('office-list', [
            'officePage' => $this->model->officePage(),
            'offices' => $this->model->offices()
        ]);
    }
}
