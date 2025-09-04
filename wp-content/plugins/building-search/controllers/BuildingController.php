<?php
namespace Building\Controllers;

use Building\Models\BuildingModel;

class BuildingController extends Controller {

    private $model;

    public function __construct() {
        $this->model = new BuildingModel();
    }

    public function register_hooks() {
        add_shortcode('buildings_search', [$this, 'renderBuildings']);
    }

    public function renderBuildings() {
        $page          = $this->model->page();
        $quans         = $this->model->quans($page->slug);
        $buildingsQuan = $this->model->buildingsQuan($page->slug, $quans);
        // dd($buildingsQuan);

        return $this->render('Building-list', [
            'page'  => $page,
            'quans' => $quans,
            'buildingsQuan' => $buildingsQuan
        ]);
    }
}
