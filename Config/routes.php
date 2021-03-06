<?php

/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action cralled 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.ctp)...
 */
Router::connect('/', array('controller' => 'users', 'action' => 'dashboard'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
Router::connect('/about', array('controller' => 'pages', 'action' => 'index'));
Router::connect('/about/*', array('controller' => 'pages', 'action' => 'display'));

// Login/Signup
Router::connect('/signup', array('controller' => 'users', 'action' => 'signup'));
Router::connect('/login', array('controller' => 'users', 'action' => 'login'));

// Profile Routes
// inventory
Router::connect('/profiles/:userSlug/inventory', array('controller' => 'users', 'action' => 'inventory'), array('pass' => array('userSlug'))
);

// Profile
Router::connect('/profiles/:userSlug', array('controller' => 'users', 'action' => 'view'), array('pass' => array('userSlug'))
);

// Categories
Router::connect(
        '/categories/:slug', array('controller' => 'categories', 'action' => 'view'), array(
    'pass' => array('slug'),
    'slug' => '[a-z0-9-]+'
        )
);

// Forums
// Forum root
Router::connect('/forums', array('controller' => 'threads', 'action' => 'forums', 'plugin' => false)
);

// Products Forum
Router::connect('/forum/:productSlug', array('controller' => 'threads', 'action' => 'all', 'plugin' => false), array('pass' => array('productSlug'))
);
// Product Thread
Router::connect('/forum/:productSlug/:threadSlug', array('controller' => 'threads', 'action' => 'view', 'plugin' => false), array('pass' => array('productSlug', 'threadSlug'))
);

// Products Gallery
Router::connect('/gallery/:productSlug', array('controller' => 'product_images', 'action' => 'index', 'plugin' => false), array('pass' => array('productSlug'))
);

// News
Router::connect('/news/:newsSlug', array('controller' => 'news', 'action' => 'view', 'plugin' => false), array(
    'pass' => array('newsSlug')
        )
);

// Grab product custom route for /productSlug urls
App::import('Lib', 'ProductRoute');
// Owners /inInventory Route
Router::connect('/:productSlug/users', array('controller' => 'products', 'action' => 'users', 'plugin' => false), array(
    'routeClass' => 'ProductRoute',
    'pass' => array('productSlug')
        )
);

// Product Main Slug
Router::connect('/:productSlug', array('controller' => 'products', 'action' => 'view', 'plugin' => false), array(
    'routeClass' => 'ProductRoute',
    'pass' => array('productSlug')
        )
);

Router::parseExtensions('json');

/**
 * Load all plugin routes.  See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
CakePlugin::routes();

/**
 * Load the CakePHP default routes. Remove this if you do not want to use
 * the built-in default routes.
 */
require CAKE . 'Config' . DS . 'routes.php';