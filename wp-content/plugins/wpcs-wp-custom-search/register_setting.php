<?phpadd_action( 'admin_init', 'register_wpcs_settings' );function register_wpcs_settings() {	register_setting( 'wpcs-settings-group', 'wpcs_top_head' );	register_setting( 'wpcs-settings-group', 'wpcs_sub_head' );		register_setting( 'wpcs-settings-group', 'wpcs_default_cat' );	register_setting( 'wpcs-settings-group', 'wpcs_custom_taxonomy' );	register_setting( 'wpcs-settings-group', 'wpcs_wp_tags' );	register_setting( 'wpcs-settings-group', 'wpcs_hide_empty' );	register_setting( 'wpcs-settings-group', 'wpcs_hide_uncat' );	register_setting( 'wpcs-settings-group', 'wpcs_search_button' );	register_setting( 'wpcs-settings-group', 'wpcs_search_field' );	register_setting( 'wpcs-settings-group', 'wpcs_back_color' );	register_setting( 'wpcs-settings-group', 'wpcs_button_color' );	register_setting( 'wpcs-settings-group', 'wpcs_cat_color' );	register_setting( 'wpcs-settings-group', 'wpcs_text_color' );	register_setting( 'wpcs-settings-group', 'wpcs_top_head_px' );	register_setting( 'wpcs-settings-group', 'wpcs_sub_head_px' );	register_setting( 'wpcs-settings-group', 'wpcs_custom_css' );	register_setting( 'wpcs-settings-group', 'wpcs_top_head_widget' );	register_setting( 'wpcs-settings-group', 'wpcs_sub_head_widget' );		register_setting( 'wpcs-settings-group', 'wpcs_default_cat_widget' );	register_setting( 'wpcs-settings-group', 'wpcs_custom_taxonomy_widget' );	register_setting( 'wpcs-settings-group', 'wpcs_wp_tags_widget' );	register_setting( 'wpcs-settings-group', 'wpcs_hide_empty_widget' );	register_setting( 'wpcs-settings-group', 'wpcs_hide_uncat_widget' );	register_setting( 'wpcs-settings-group', 'wpcs_search_button_widget' );	register_setting( 'wpcs-settings-group', 'wpcs_search_field_widget' );	register_setting( 'wpcs-settings-group', 'wpcs_back_color_widget' );	register_setting( 'wpcs-settings-group', 'wpcs_button_color_widget' );	register_setting( 'wpcs-settings-group', 'wpcs_cat_color_widget' );	register_setting( 'wpcs-settings-group', 'wpcs_text_color_widget' );	register_setting( 'wpcs-settings-group', 'wpcs_top_head_px_widget' );	register_setting( 'wpcs-settings-group', 'wpcs_sub_head_px_widget' );	register_setting( 'wpcs-settings-group', 'wpcs_thnumbnail_widget' );	register_setting( 'wpcs-settings-group', 'wpcs_title_widget' );	register_setting( 'wpcs-settings-group', 'wpcs_excerpt_widget' );	register_setting( 'wpcs-settings-group', 'wpcs_author_widget' );	register_setting( 'wpcs-settings-group', 'wpcs_count_widget' );	register_setting( 'wpcs-settings-group', 'wpcs_excerpt_length_widget' );	register_setting( 'wpcs-settings-group', 'wpcs_postno_widget' );} ?>