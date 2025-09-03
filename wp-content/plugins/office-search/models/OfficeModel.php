<?php
namespace Office\Models;

class OfficeModel {
    public function officePage() {
        $term_id = get_queried_object_id(); 
        return $term_id ? get_term($term_id, 'product_cat') : null;
    }

    public function offices($hide_empty = false) {
        $terms = get_terms([
            'taxonomy'   => 'pa_quan-ha-noi',
            'hide_empty' => $hide_empty,
        ]);

        return !is_wp_error($terms) ? $terms : [];
    }
}