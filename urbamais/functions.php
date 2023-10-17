<?php

/**
 * Proper way to enqueue scripts and styles
 */
function wpdocs_theme_name_scripts()
{
    if ((!is_page_template('template-lp-vizinho-premiado.php')) || (!is_page_template('template-lp-vizinho-premiado.php'))) {
        wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/css/normalize.css');
        wp_enqueue_style('webflow', get_stylesheet_directory_uri() . '/css/webflow.css');
        wp_enqueue_style('webflow-urba', get_stylesheet_directory_uri() . '/css/urbamais-layout.webflow.css', 6, true);
        wp_enqueue_style('style-urba', get_stylesheet_uri(), 8, true);
        wp_enqueue_script('jquery', 'https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js', array(), null, true);
    }
    if ((is_page_template('template-minha-casa.php')) || (is_single(1515)) || (is_page_template('template-minha-casa-2.php')) || (is_single(1533))) {
        wp_enqueue_style('webflow-lp-minha-casa', get_stylesheet_directory_uri() . '/css/minha-casa/lp-minha-casa.webflow.css', 4, true);
        wp_enqueue_style('webflow-lp-minha-casa', get_stylesheet_directory_uri() . '/css/minha-casa/normalize.css', 4, true);
        wp_enqueue_style('webflow-lp-minha-casa', get_stylesheet_directory_uri() . '/css/minha-casa/webflow.css', 4, true);
        wp_enqueue_script('webflow-lp-minha-casa', get_template_directory_uri() . '/js/minha-casa/webflow.js', array('jquery'), 2, true);
    } else {
        wp_enqueue_script('webflow-urba', get_template_directory_uri() . '/js/webflow.js', array('jquery'), null, true);
    }

    if (is_page_template('template-lp-vizinho-premiado.php')) {
        
        // Remove o jQuery padrao do wp
        wp_deregister_script('jquery');

        // Adiciona jQuery 3.4.1
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), '3.4.1');
        
        // Styles
        wp_enqueue_style('styles-vizinho', get_stylesheet_directory_uri() . '/css/styles-vizinho.css', array(), '1.1.1');
        
        // Scripts
        wp_enqueue_script('jquery-mask', get_template_directory_uri() . '/js/MascaraValidacao.js', array('jquery'), '1.1.0', true);
        wp_enqueue_script('js-vizinho', get_template_directory_uri() . '/js/index-vizinho.js', array('jquery-mask'), '2.1.3', true);
    }

    if (is_page_template('template-jardins-da-mantiqueira.php')) {
        // Styles
        wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
        wp_enqueue_style('aos-animation', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
        wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
        wp_enqueue_style('slick-lightbox-css', get_stylesheet_directory_uri() . '/css/slick-lightbox.css');
        wp_enqueue_style('style-mantiqueira', get_stylesheet_directory_uri() . '/css/styles-mantiqueira.css', array(), '1.0.2');

        // Scripts
        wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
        wp_enqueue_script('animation-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array('jquery'), null, true);
        wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);
        wp_enqueue_script('slick-lighbox-js', get_template_directory_uri() . '/js/slick-lightbox.min.js', array('jquery'), null, true);
        wp_enqueue_script('index-js', get_template_directory_uri() . '/js/index-mantiqueira.js', array('jquery'), null, true);
    }

    if ((is_page_template('template-smart-urba.php')) || (is_single(1347))) {
        wp_enqueue_style('webflow-lp', get_stylesheet_directory_uri() . '/css/lp-smart-urba.webflow.css', 2, true);
        wp_enqueue_script('webflow-lp', get_template_directory_uri() . '/js/lp-smart-urba-webflow.js', array('jquery'), 2, true);
    } else {
        wp_enqueue_script('webflow-urba', get_template_directory_uri() . '/js/webflow.js', array('jquery'), null, true);
    }

    if ((is_page_template('template-smart-urba-dunlop.php')) || (is_single(1486)) || (is_single(1496)) || (is_page_template('template-smart-urba-dunlop-2.php'))) {
        wp_enqueue_style('webflow-lp', get_stylesheet_directory_uri() . '/css/lp-smart-urba-dunlop.webflow.css', 2, true);
        wp_enqueue_script('webflow-lp', get_template_directory_uri() . '/js/lp-smart-urba-dunlop-webflow.js', array('jquery'), 2, true);
        /*wp_enqueue_script( 'cloudflare-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js', array(), null, true );*/
    } else {
        wp_enqueue_script('webflow-urba', get_template_directory_uri() . '/js/webflow.js', array('jquery'), 1, true);
    }

    if ((is_page_template('template-LP-reserva-macauba.php')) || (is_page_template('template-LP-reserva-regatas.php')) || (is_page_template('template-LP-santa-iria.php'))) {
        wp_enqueue_style('webflow-lp', get_stylesheet_directory_uri() . '/css/lp-reserva-macauba.webflow.css', 6, true);
        wp_enqueue_script('webflow-lp', get_template_directory_uri() . '/js/lp-reserva-macauba-webflow.js', array('jquery'), null, true);
        wp_enqueue_script('rd', 'https://d335luupugsy2.cloudfront.net/js/loader-scripts/3a7d0e9a-a652-4068-82e9-d28ba885fa3f-loader.js', array('jquery'), null, true);
        wp_enqueue_script('zoom', get_template_directory_uri() . '/js/zoom/jquery.zoom.min.js', array('jquery'), null, true);
    } else {
        wp_enqueue_script('webflow-urba', get_template_directory_uri() . '/js/webflow.js', array('jquery'), 1, true);
    }

    if ((is_page_template('template-reserva-regatas-residencial.php')) || (is_page_template('template-reserva-regatas-residencial-2.php')) ||
        (is_single(1363)) || (is_page_template('template-empreendimentos.php')) || (is_single(1780))
    ) {
        wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/css/normalize.css');
        wp_enqueue_style('webflow', get_stylesheet_directory_uri() . '/css/webflow.css');
        wp_enqueue_style('webflow-urba', get_stylesheet_directory_uri() . '/css/urbamais-layout.webflow.css', 6, true);
        wp_enqueue_style('webflow-lp', get_stylesheet_directory_uri() . '/css/lp-reserva-macauba.webflow.css', 6, true);

        wp_enqueue_script('zoom', get_template_directory_uri() . '/js/zoom/jquery.zoom.min.js', array('jquery'), null, true);
        wp_enqueue_script('webflow-urba', get_template_directory_uri() . '/js/webflow.js', array('jquery'), null, true);
        wp_enqueue_script('jquery', 'https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js', array(), null, true);
    } else {
        wp_enqueue_script('webflow-urba', get_template_directory_uri() . '/js/webflow.js', array('jquery'), 1, true);
    }

    if ((is_single(510)) || (is_single(417))) {
        wp_enqueue_script('webflow-ponto', get_template_directory_uri() . '/js/webflow-ponto.js', array('jquery'), null, true);
    } else {
        wp_enqueue_script('webflow-urba', get_template_directory_uri() . '/js/webflow.js', array('jquery'), null, true);
    }

    /*if (is_page_template ('template-reserva-regatas-residencial-2.php')) {
        wp_enqueue_style( 'normalize', get_stylesheet_directory_uri().'/css/normalize.css' );
        wp_enqueue_style( 'webflow', get_stylesheet_directory_uri().'/css/webflow.css' );
        wp_enqueue_style( 'webflow-urba', get_stylesheet_directory_uri().'/css/urbamais-layout.webflow.css' );
        wp_enqueue_style( 'style-urba', get_stylesheet_uri() );

        wp_enqueue_script( 'jquery-bootstrap', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), null, true );
        wp_enqueue_script( 'cloudflare-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array(), null, true );
        wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array(), null, true );
    } else {
        wp_enqueue_script( 'webflow-urba', get_template_directory_uri() . '/js/webflow.js', array('jquery'), 1, true );
    }*/

    if (is_page_template('single.php')) {
        wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/css/normalize.css');
        wp_enqueue_style('webflow', get_stylesheet_directory_uri() . '/css/webflow.css');
        wp_enqueue_style('webflow-urba', get_stylesheet_directory_uri() . '/css/urbamais-layout.webflow.css', 6, true);

        wp_enqueue_script('zoom', get_template_directory_uri() . '/js/zoom/jquery.zoom.min.js', array('jquery'), null, true);

        wp_enqueue_script('jquery', 'https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js', array(), null, true);
    } else {
        wp_enqueue_script('webflow-urba', get_template_directory_uri() . '/js/webflow.js', array('jquery'), 1, true);
    }

    wp_enqueue_script('rd-station', 'https://d335luupugsy2.cloudfront.net/js/integration/stable/rd-js-integration.min.js', array('jquery'), null, true);
    wp_enqueue_script('script-urba', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
    wp_enqueue_script('mascaratel', get_template_directory_uri() . '/js/MascaraValidacao.js', array('jquery'), null, true);


    if (is_page_template('template-parque-vitoria.php')) {
        wp_enqueue_style('css-parquevitoria', get_stylesheet_directory_uri() . '/css/parque-vitoria-styles.css');
    }
}

add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');
add_theme_support('post-thumbnails');

add_action('after_setup_theme', 'register_custom_nav_menus');
function register_custom_nav_menus()
{
    register_nav_menus(array(
        'header_menu' => 'Header Menu',
        'footer_1' => 'Footer Menu 1',
        'footer_2' => 'Footer Menu 2',
        'blog_menu' => 'Blog Menu'
    ));
}

if (function_exists('register_sidebar'))
    register_sidebar(
        array(
            'name' => 'Banner Lateral',
            'id' => 'banlat',
            'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
    );
if (function_exists('register_sidebar'))
    register_sidebar(
        array(
            'name' => 'Lateral Posts',
            'id' => 'latpos',
            'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
    );

//Registrando pagina de busca dos materiais
function template_chooser($template)
{
    global $wp_query;
    $post_type = get_query_var('post_type');
    if ($wp_query->is_search && $post_type == 'materiais') {
        return locate_template('search-materiais.php');
    }
    return $template;
}
add_filter('template_include', 'template_chooser');


/**
 * Custom walker class.
 */
class WPDocs_Walker_Nav_Menu extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        // Depth-dependent classes.
        $indent = ($depth > 0  ? str_repeat("\t", $depth) : ''); // code indent
        $display_depth = ($depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'multi-level',
            ($display_depth < 2 ? 'submenu' : ''),
            ($display_depth % 2  ? 'menu-odd' : 'menu-even'),
            ($display_depth >= 2 ? 'sub-submenu' : ''),
            'menu-depth-' . $display_depth
        );
        $class_names = implode(' ', $classes);
        $ancestor = $this->curItem->ID;
        // Build HTML for output.
        $output .= "\n" . $indent . '<ul id="sub-' . $ancestor . '" aria-labelledby="nav-item-' . $ancestor . '" class="' . $class_names . '">' . "\n";
    }
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        global $wp_query;
        $this->curItem = $item;
        $indent = ($depth > 0 ? str_repeat("\t", $depth) : ''); // code indent

        // Depth-dependent classes.
        $depth_classes = array(
            ($depth == 0 ? 'main-menu-item' : 'dropdown-item'),
            ($depth >= 2 ? 'sub-sub-menu-item' : ''),
            ($depth % 2 ? 'menu-item-odd' : 'menu-item-even'),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr(implode(' ', $depth_classes));

        // Passed classes.
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = esc_attr(implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item)));

        $has_children = '';
        $is_parent_toggle = '';
        $toggle_attrs = '';
        if ($args->walker->has_children) {
            $has_children = ' dropdown';
            $is_parent_toggle = ' dropdown-toggle';
            $toggle_attrs = ' data-target="#sub-' . $item->ID . '"';
        }

        // Build HTML.
        $output .= $indent . '<li id="nav-item-' . $item->ID . '" class="w-nav-link nav-link ' . $depth_class_names . ' ' . $class_names . ' ' . $has_children . '" ' . $toggle_attrs . '>';

        // Link attributes.
        $attributes  = !empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url)        ? ' href="'   . esc_attr($item->url) . '"' : '';
        $attributes .= ' class=" ' . $is_parent_toggle . ' ' . ($depth > 0 ? 'sub-menu-link' : 'main-menu-link') . '"';



        // Build HTML output and pass through the proper filter.
        $item_output = sprintf(
            '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters('the_title', $item->title, $item->ID),
            $args->link_after,
            $args->after
        );
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

class WPDocs_Walker_Nav_Menu_Footer extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        // Depth-dependent classes.
        $indent = ($depth > 0  ? str_repeat("\t", $depth) : ''); // code indent
        $display_depth = ($depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'dropdown-list w-dropdown-list',
            ($display_depth % 2  ? 'menu-odd' : 'menu-even'),
            ($display_depth >= 2 ? 'sub-sub-menu' : ''),
            'menu-depth-' . $display_depth
        );
        $class_names = implode(' ', $classes);
    }
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        global $wp_query;
        $indent = ($depth > 0 ? str_repeat("\t", $depth) : ''); // code indent
        // Depth-dependent classes.
        $depth_classes = array(
            ($depth == 0 ? 'nav-link w-nav-link' : 'dropdown-link w-dropdown-link'),
            ($depth >= 2 ? 'sub-sub-menu-item' : ''),
            ($depth % 2 ? 'menu-item-odd' : 'menu-item-even'),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr(implode(' ', $depth_classes));
        // Passed classes.
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = esc_attr(implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item)));
        $output .= $indent . '';
        // Link attributes.
        $attributes  = !empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url)        ? ' href="'   . esc_attr($item->url) . '"' : '';
        $attributes .= ' class="link ' . ($depth > 0 ? 'dropdown-link' : '') . '"';
        // Build HTML output and pass through the proper filter.
        $item_output = sprintf(
            '<a%2$s>%3$s%4$s%5$s</a>',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters('the_title', $item->title, $item->ID),
            $args->link_after,
            $args->after
        );
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
    function end_el(&$output, $item, $depth = 0, $args = array())
    {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        if ($item->ID == 41) {
            $output .= "";
        } else {
            $output .= "{$n}";
        }
    }

    function end_lvl(&$output, $depth = 0, $args = array())
    {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent  = str_repeat($t, $depth);
        $display_depth = ($depth + 1);
        if ($display_depth == 1) {
            $output .= "$indent</nav></div>{$n}";
        } else {
            $output .= "$indent{$n}";
        }
    }
}
class WPDocs_Walker_Nav_Menu_Blog extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        // Depth-dependent classes.
        $indent = ($depth > 0  ? str_repeat("\t", $depth) : ''); // code indent
        $display_depth = ($depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'dropdown-list w-dropdown-list',
            ($display_depth % 2  ? 'menu-odd' : 'menu-even'),
            ($display_depth >= 2 ? 'sub-sub-menu' : ''),
            'menu-depth-' . $display_depth
        );
        $class_names = implode(' ', $classes);
    }
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        global $wp_query;
        $indent = ($depth > 0 ? str_repeat("\t", $depth) : ''); // code indent
        // Depth-dependent classes.
        $depth_classes = array(
            ($depth == 0 ? 'nav-link w-nav-link' : 'dropdown-link w-dropdown-link'),
            ($depth >= 2 ? 'sub-sub-menu-item' : ''),
            ($depth % 2 ? 'menu-item-odd' : 'menu-item-even'),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr(implode(' ', $depth_classes));
        // Passed classes.
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = esc_attr(implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item)));
        $output .= $indent . '';
        // Link attributes.
        $attributes  = !empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url)        ? ' href="'   . esc_attr($item->url) . '"' : '';
        $attributes .= ' class="nav-link-2 w-nav-link ' . ($depth > 0 ? 'dropdown-link' : '') . '"';
        // Build HTML output and pass through the proper filter.
        $item_output = sprintf(
            '<a%2$s>%3$s%4$s%5$s</a>',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters('the_title', $item->title, $item->ID),
            $args->link_after,
            $args->after
        );
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
    function end_el(&$output, $item, $depth = 0, $args = array())
    {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        if ($item->ID == 41) {
            $output .= "";
        } else {
            $output .= "{$n}";
        }
    }

    function end_lvl(&$output, $depth = 0, $args = array())
    {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent  = str_repeat($t, $depth);
        $display_depth = ($depth + 1);
        if ($display_depth == 1) {
            $output .= "$indent</nav></div>{$n}";
        } else {
            $output .= "$indent{$n}";
        }
    }
}

function the_excerpt_first_line()
{
    $content = wp_filter_nohtml_kses(get_the_content());
    $text = substr($content, 0, strpos($content, '.') + 1);
    return $text;
}

function modificado_em()
{
    $u_time = get_the_time('U');
    $u_modified_time = get_the_modified_time('U');
    $data_modificado = '';
    if ($u_modified_time >= $u_time + 86400) {
        $updated_date = get_the_modified_time('j \d\e F \d\e Y');
        $updated_time = get_the_modified_time('h:i a');
        $data_modificado = ' - <span class="last-updated">Atualizado em ' . $updated_date . '</span>';
    }
    return $data_modificado;
}

function my_acf_google_map_api($api)
{

    // $api['key'] = 'AIzaSyC_eTL7Om6IkKzhK7GYsq_fgpH9rQ_mAJs';
    $api['key'] = 'AIzaSyCrzRGSxTLOp6uekQFsyYXbUSOPA42Yv98';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');



deactivate_plugins('/wordpress-seo/wp-seo.php');
