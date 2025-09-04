<?php
namespace Building\Controllers;

use Building\Models\BuildingModel;

class BuildingController extends Controller {

    private $model;

    public function __construct() {
        $this->model = new BuildingModel();
    }

    public function register_hooks() {
        $render = ( !empty($_GET) ) ? 'buildingsResult' : 'buildingsQuan';
        add_shortcode('buildings_search', [$this, $render]);
    }

    public function buildingsQuan() {
        $page          = $this->model->page();
        $quans         = $this->model->quans($page->slug);
        $buildingsQuan = $this->model->buildingsQuan($page->slug, $quans);

        return $this->render('building-quan', [
            'page'  => $page,
            'quans' => $quans,
            'buildingsQuan' => $buildingsQuan
        ]);
    }

    public function buildingsResult() {
        $buildings = $this->model->buildings();

        return $this->render('building-result', [
            'buildings' => $buildings
        ]);
    }
}
