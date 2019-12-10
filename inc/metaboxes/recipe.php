<?php
//Class 25.14
function meal_recipe_metabox($metaboxes){
    $metaboxes[] = array(
        'id' => 'meal-recipe',
        'title'=>__('Recipe Details','meal'),
        'post_type'=>'recipe',
        'context'=>'normal',
        'priority'=>'default',
        'sections'=>array(
            array(
                'name'=>'meal-recipe-section-one',
                'icon'=>'fa fa-image',
                'fields'=>array(
                    array(
                        'id'=>'price',
                        'title'=>__('Price','meal'),
                        'type'=>'text',
                        'default' => '0.00'
                    )
                )
            )      
        )
    );
    return $metaboxes;
}
add_filter('cs_metabox_options','meal_recipe_metabox');
?>