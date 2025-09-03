<?php
namespace Office\Models;

class OfficeModel {
    public function get_categories() {
        $args = [
            'taxonomy'   => 'product_cat',
            'hide_empty' => true,
        ];
        return get_terms($args);
    }
}
