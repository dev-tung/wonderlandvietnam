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
        $buildingPage = $this->model->buildingPage();
        $buildingQuans = $this->model->buildingQuans();

        return $this->render('Building-list', [
            'buildingPage' => $this->model->buildingPage(),
            'buildingQuans' => $this->model->buildingQuans()
        ]);
    }
}
