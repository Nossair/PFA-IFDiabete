<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'Se connecter',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    // 'logo' => '<b>S.D.D</b>',

    'logo' => '<div class="logo-svg" style="padding:4px 15px;width: 100%;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 316.35 82">
          <defs>
            <style>
              .a{fill:#fff;}
            </style>
          </defs>
          <path d="M281 38.5v-3a4.57 4.57 0 0 0-4.15-4h-24.5c-.37 0-.35.58-.35.68V14c0-1.38-1.82-2.5-3.21-2.5H71V5a5 5 0 0 0-10 0v22.5H8V14a4 4 0 0 0-8 0v54a4 4 0 0 0 8 0V54.5h53V77a5 5 0 0 0 10 0v-6.5h177.79c1.38 0 3.21-1.12 3.21-2.5V49.82a.36.36 0 0 1 .35-.32h24.5c1.93 0 4.15-1.06 4.15-3v-4h30.85l4.5-4H281zm-34 27H72v-49h175v49z" class="a"/>
          <path d="M86.87 28.2h8.35v25.24h-8.35V28.2zm11.95 0h20.3v6.34h-12v4.36h11.2v6.34h-11.2v8.21h-8.3V28.2zm36.83 15.34a3.8 3.8 0 0 1-3.46 1.76 4.65 4.65 0 0 1-1.73-.29 10.61 10.61 0 0 1-1.55-.79 2.83 2.83 0 0 0-1.19-.5q-.94 0-.94 1.48h-5.36a10.34 10.34 0 0 1 1.13-5.47A3.84 3.84 0 0 1 126 38a4.67 4.67 0 0 1 1.73.29 10.75 10.75 0 0 1 1.55.79 2.81 2.81 0 0 0 1.19.5q.94 0 .94-1.48h5.33a10.48 10.48 0 0 1-1.09 5.44zm23.11-13.79a11.29 11.29 0 0 1 4.79 4.41 12.81 12.81 0 0 1 1.69 6.64 12.57 12.57 0 0 1-1.73 6.66 11.56 11.56 0 0 1-4.91 4.41 16.57 16.57 0 0 1-7.4 1.57h-10.94V28.2h11.27a16 16 0 0 1 7.23 1.55zm-3.4 15.55a6.8 6.8 0 0 0 1.35-4.43 6.66 6.66 0 0 0-1.46-4.5 4.9 4.9 0 0 0-3.91-1.69h-2.74V47h3.13a4.43 4.43 0 0 0 3.63-1.7zm27.95-10.6a9.11 9.11 0 0 1 3.89 3.53 10.21 10.21 0 0 1 1.37 5.35 10.21 10.21 0 0 1-1.37 5.35 9.21 9.21 0 0 1-3.89 3.55 14.3 14.3 0 0 1-11.74 0 9.21 9.21 0 0 1-3.89-3.55 10.21 10.21 0 0 1-1.37-5.35 10.21 10.21 0 0 1 1.37-5.35 9.1 9.1 0 0 1 3.89-3.53 14.48 14.48 0 0 1 11.74 0zm-8 6.21a4.4 4.4 0 0 0-.81 2.77 4.4 4.4 0 0 0 .81 2.77 2.72 2.72 0 0 0 4.28 0 4.4 4.4 0 0 0 .81-2.77 4.4 4.4 0 0 0-.81-2.77 2.72 2.72 0 0 0-4.29 0zm23.69-2.2a1.59 1.59 0 0 0-.81.18.53.53 0 0 0-.31.47.86.86 0 0 0 .65.72 15.55 15.55 0 0 0 2.16.68A32.66 32.66 0 0 1 204.3 42a7.14 7.14 0 0 1 2.65 1.87 4.71 4.71 0 0 1 1.13 3.28 5.85 5.85 0 0 1-1.1 3.53 7 7 0 0 1-3.11 2.32 12.36 12.36 0 0 1-4.72.83 16.61 16.61 0 0 1-9.61-2.83l2.45-5a14.07 14.07 0 0 0 7.27 2.45 2 2 0 0 0 .9-.16.48.48 0 0 0 .32-.41.82.82 0 0 0-.63-.67 15.42 15.42 0 0 0-2-.63 26.56 26.56 0 0 1-3.6-1.15 7.18 7.18 0 0 1-2.61-1.87 4.76 4.76 0 0 1-1.13-3.31 6 6 0 0 1 1.08-3.58 7 7 0 0 1 3-2.38 11.43 11.43 0 0 1 4.55-.85 18.47 18.47 0 0 1 9.14 2.48l-2.66 5q-4.38-2.21-6.62-2.21zm26.65-3.92a8.9 8.9 0 0 1 3.64 3.8 12.54 12.54 0 0 1 1.26 5.78v1h-12.86a3.4 3.4 0 0 0 1.24 1.75 3.45 3.45 0 0 0 2 .59A5.76 5.76 0 0 0 225 46l4.21 4.14a10.33 10.33 0 0 1-3.83 2.68 13.38 13.38 0 0 1-5.09.92 12.46 12.46 0 0 1-5.74-1.24 8.67 8.67 0 0 1-3.75-3.5 10.59 10.59 0 0 1-1.28-5.29 10.83 10.83 0 0 1 1.3-5.4 8.88 8.88 0 0 1 3.69-3.56 11.69 11.69 0 0 1 5.49-1.29 11.32 11.32 0 0 1 5.65 1.33zm-3.83 4.86a2.24 2.24 0 0 0-3.38 0 4.27 4.27 0 0 0-.92 2.05h4.9a2.76 2.76 0 0 0-.6-2.05z" class="a"/>
        </svg>
      </div>',


    'logo_mini' => '<b>D.</b>G',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'blue-light',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */

    'menu' => [
        'Affichage',
        [
            'text' => 'Blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],
        [
            'text'        => 'Archive Des Patients ',
            'url'         => '/archive',
            'icon'        => 'list',
            'label_color' => '',
        ],
	      [
            'text'        => 'Liste des Patients',
            'url'         => '/admin.p',
	          'icon'        => 'users',
            'label_color' => 'success',
        ],


        [
            'text'        => 'Aliments',
            'url'         => '/afficherAliments',
            'icon'        => 'share',
        ],

        'Ajout',
        [
            'text' => 'Ajouter Patient',
            'url'  => 'ajoutPatient',
            'icon' => 'user',
        ],
        [
            'text' => 'Ajouter Aliment ',
            'url'  => 'addAliment',
            'icon' => 'database',
        ],
],
    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
    ],
];
