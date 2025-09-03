<?php
namespace Office\Controllers;

use Office\Models\OfficeModel;

class OfficeController {
    public function register_hooks() {
        // Tạo shortcode để test
        add_shortcode('offices_search', [$this, 'render_offices']);
    }

    public function render_offices() {
        $model = new OfficeModel();
        $categories = $model->get_categories();

        ob_start();
        include __DIR__ . '/../views/office-list.php';
        return ob_get_clean();
    }
}
