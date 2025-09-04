<?php
namespace Building\Models;

class BuildingModel {

    public function taxonomyQuan( $taxonomy ){
        return 'pa_quan-' . $taxonomy;
    }

    public function page() {
        return get_term(get_queried_object_id(), 'product_cat');
    }

    public function quans($taxonomy, $hide_empty = false) {
        $terms = get_terms([
            'taxonomy'   => $this->taxonomyQuan($taxonomy),
            'hide_empty' => $hide_empty,
        ]);

        return !is_wp_error($terms) ? $terms : [];
    }

    public function buildingsQuan($taxonomy, $quans) {
        $buildings = [];

        foreach ($quans as $quan) {
            $buildings[$quan->term_id] = [
                'quan'      => $quan,
                'buildings' => get_posts(
                    [
                        'post_type'      => 'product',
                        'posts_per_page' => 4,
                        'tax_query'      => [
                            [
                                'taxonomy'   => $this->taxonomyQuan($taxonomy),
                                'field'    => 'term_id',
                                'terms'    => $quan->term_id,
                            ],
                        ],
                    ]
                )
            ];
        }  

        return $buildings;
    }
}