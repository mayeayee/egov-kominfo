<?php

return [
    /**
     * Default route to see the UML diagram.
     */
    'route' => '/uml',

    /**
     * You can turn on or off the indexing of specific types
     * of classes. By default, LTU processes only controllers
     * and models.
     */
    'casts'         => false,
    'channels'      => false,
    'commands'      => false,
    'components'    => false,
    'controllers'   => true,
    'events'        => false,
    'exceptions'    => false,
    'jobs'          => false,
    'listeners'     => false,
    'mails'         => false,
    'middlewares'   => false,
    'models'        => true,
    'notifications' => false,
    'observers'     => false,
    'policies'      => false,
    'providers'     => false,
    'requests'      => false,
    'resources'     => false,
    'rules'         => false,

    /**
     * You can define specific nomnoml styling.
     * For more information: https://github.com/skanaar/nomnoml
     */
    'style' => [
        'background' => '#ffff',
        'stroke'     => '#071013',
        'arrowSize'  => 1,
        'bendSize'   => 0.9,
        'direction'  => 'down',
        'gutter'     => 5,
        'edgeMargin' => 0,
        'gravity'    => 1,
        'edges'      => 'rounded',
        'fill'       => '#75C2F6',
        'fillArrows' => false,
        'font'       => 'Calibri',
        'fontSize'   => 12,
        'leading'    => 1.25,
        'lineWidth'  => 2,
        'padding'    => 8,
        'spacing'    => 50,
        'title'      => 'Filename',
        'zoom'       => 1,
        'acyclicer'  => 'greedy',
        'ranker'     => 'network-simplex'
    ],

    /**
     * Specific files can be excluded if need be.
     * By default, all default Laravel classes are ignored.
     */
    'excludeFiles' => [
        'Http/Kernel.php',
        'Console/Kernel.php',
        'Exceptions/Handler.php',
        'Http/Controllers/Controller.php',
        'Http/Middleware/Authenticate.php',
        'Http/Middleware/EncryptCookies.php',
        'Http/Middleware/PreventRequestsDuringMaintenance.php',
        'Http/Middleware/RedirectIfAuthenticated.php',
        'Http/Middleware/TrimStrings.php',
        'Http/Middleware/TrustHosts.php',
        'Http/Middleware/TrustProxies.php',
        'Http/Middleware/VerifyCsrfToken.php',
        'Providers/AppServiceProvider.php',
        'Providers/AuthServiceProvider.php',
        'Providers/BroadcastServiceProvider.php',
        'Providers/EventServiceProvider.php',
        'Providers/RouteServiceProvider.php',
        // 'Http/Livewire/PM/Antrian.php',
        // 'Http/Livewire/PM/Aplikasipm.php',
        // 'Http/Livewire/PM/Perbaikan.php',
        // 'Http/Livewire/PM/ShowAplikasipm.php',
        'Http/Livewire/Publik/AppPublik.php',
        // 'Http/Livewire/Publik/Cari.php',
        // 'Http/Livewire/Publik/Profile.php',
        'Http/Livewire/Publik/Tabelapp.php',
        // 'Http/Livewire/SuperAdmin/Aplikasi.php',
        // 'Http/Livewire/SuperAdmin/ODP.php',
        // 'Http/Livewire/SuperAdmin/pegawai.php',
        // 'Http/Livewire/SuperAdmin/Pengaduan.php',
        // 'Http/Livewire/SuperAdmin/ShowOPD.php',
        // 'Http/Livewire/SuperAdmin/ShowPegawai.php',
        // 'Http/Livewire/SuperAdmin/UserManagement.php',
        'Http/Controllers/Auth/ConfirmPasswordController.php',
        'Http/Controllers/Auth/ForgotPasswordController.php',
        'Http/Controllers/Auth/ResetPasswordController.php',
        'Http/Controllers/Auth/VerificationController.php',
        'Http/Controllers/Auth/RegisterController.php',
        'Http/Controllers/Auth/LoginController.php',
        'Http/Livewire/PM/Maintenance.php',
        'Http/Livewire/SuperAdmin/Pegawai.php',

    ],

    /**
     * In case you changed any of the default directories
     * for different classes, please amend below.
     */
    'directories' => [
        'casts'         => 'Casts/',
        'channels'      => 'Broadcasting/',
        'commands'      => 'Console/Commands/',
        'components'    => 'View/Components/',
        'controllers'   => 'Http/Controllers/',
        'events'        => 'Events/',
        'exceptions'    => 'Exceptions/',
        'jobs'          => 'Jobs/',
        'listeners'     => 'Listeners/',
        'mails'         => 'Mail/',
        'middlewares'   => 'Http/Middleware/',
        'models'        => 'Models/',
        'notifications' => 'Notifications/',
        'observers'     => 'Observers/',
        'policies'      => 'Policies/',
        'providers'     => 'Providers/',
        'requests'      => 'Http/Requests/',
        'resources'     => 'Http/Resources/',
        'rules'         => 'Rules/',
    ],
];
