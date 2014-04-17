require_once ( get_stylesheet_directory() . '/theme-options.php' );

# ADD ADMIN CSS
function add_admin_style() {
    echo '<link rel="stylesheet" 
        href="'.get_bloginfo('template_url').'/admin-style.css">'; //adjust your path
}
add_action('admin_head', 'add_admin_style');
