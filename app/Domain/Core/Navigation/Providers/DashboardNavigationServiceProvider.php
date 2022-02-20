<?php

namespace App\Domain\Core\Navigation\Providers;

use App\Domain\Core\Navigation\Menu;
use App\Domain\Core\Navigation\MenuItem;
use App\Domain\Core\Navigation\Navigation;
use Illuminate\Support\ServiceProvider;

class DashboardNavigationServiceProvider extends ServiceProvider
{
    private array $defaultMenuItems = [
        [
            'title' => 'Dashboard',
            'url' => '#',
            'icon' => 'assets/dashboard/app-assets/images/sidebaricon/Dashboard.png',
            'priority' => 10,
        ],
         [
            'title' => 'Project ',
            'url' => '#',
            'icon' => 'assets/dashboard/app-assets/images/sidebaricon/Project.png',
            'priority' => 15,
            'menus' => [
                [
                    'location' => 'project-settings-submenu',
                    'items' => [
                        [
                            'title' => 'Project',
                            'url' => '#',
                            'icon' => '',
                            'priority' => 1,
                        ],
                        [
                            'title' => 'Task',
                            'url' => '#',
                            'icon' => '',
                            'priority' => 2,
                        ],
                        [
                            'title' => 'Gannt Chart',
                            'url' => '#',
                            'icon' => '',
                            'priority' => 3,
                        ],
                         [
                            'title' => 'Job Order',
                            'url' => '#',
                            'icon' => '',
                            'priority' => 4,
                        ],
                        [
                            'title' => 'Sub-contractors',
                            'url' => '#',
                            'icon' => '',
                            'priority' => 5,
                        ],
                    ],
                ]
            ]
        ],
         [
            'title' => 'Support',
            'url' => '#',
            'icon' => 'assets/dashboard/app-assets/images/sidebaricon/Support.png',
            'priority' => 20,
            'menus' => [
                [
                    'location' => 'support-settings-submenu',
                    'items' => [
                        [
                            'title' => 'Chatbot-LiveChat',
                            'url' => '#',
                            'icon' => '',
                            'priority' => 1,
                        ],
                        [
                            'title' => 'Knowledgebase',
                            'url' => '#',
                            'icon' => '',
                            'priority' => 2,
                        ],
                        [
                            'title' => 'Support Team',
                            'url' => '#',
                            'icon' => '',
                            'priority' => 3,
                        ],
                         [
                            'title' => 'Support Ticket',
                            'url' => '#',
                            'icon' => '',
                            'priority' => 4,
                        ],
                        [
                            'title' => 'Community',
                            'url' => '#',
                            'icon' => '',
                            'priority' => 5,
                        ],
                        [
                            'title' => 'Contact Form',
                            'url' => '#',
                            'icon' => '',
                            'priority' => 6,
                        ],
                        [
                            'title' => 'Maintaince',
                            'url' => '#',
                            'icon' => '',
                            'priority' => 7,
                        ],
                    ],
                ]
            ]
        ],

        [
            'title' => 'Features-Apps ',
            'url' => '#',
            'icon' => 'assets/dashboard/app-assets/images/sidebaricon/Features App.png',
            'priority' => 20,
            'menus' => [
                [
                    'location' => 'feature-apps-settings-submenu',
                    'items' => [
                        [
                            'title' => 'Notes',
                            'url' => '#',
                            'icon' => '',
                            'priority' => 1,
                        ],
                        [
                            'title' => 'Calender',
                            'url' => '#',
                            'icon' => '',
                            'priority' => 2,
                        ],
                        [
                            'title' => 'Task',
                            'url' => '#',
                            'icon' => '',
                            'priority' => 3,
                        ],
                         [
                            'title' => 'Mail',
                            'url' => '#',
                            'icon' => '',
                            'priority' => 4,
                        ],
                    ],
                ]
            ]
        ],

        [
            'title' => 'Settings (Client)',
            'url' => '#',
            'icon' => 'assets/dashboard/app-assets/images/sidebaricon/Settings (client).png',
            'priority' => 50,
        ],
        [
            'title' => 'Admin Settings',
            'url' => '#',
            'icon' => 'assets/dashboard/app-assets/images/sidebaricon/Admin settings.png',
            'priority' => 100,
            'menus' => [
                [
                    'location' => 'admin-settings-submenu',
                    'items' => [
                        [
                            'title' => 'SaSS Settings',
                            'url' => '#',
                            'icon' => '',
                            'priority' => 10,
                        ],
                        [
                            'title' => 'Packages',
                            'url' => '#',
                            'icon' => '',
                            'priority' => 50,
                        ],
                        [
                            'title' => 'Securities',
                            'url' => '#',
                            'icon' => '',
                            'priority' => 100,
                        ],
                    ],
                ]
            ]
        ],
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('dashboard.navigation', fn () => new Navigation());
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $dashboardNavigations = $this->app->make('dashboard.navigation');

        $dashboardNavigations->register($sidebarMenu = new Menu('sidebar'));

        foreach ($this->defaultMenuItems as $defaultMenuItem) {
            $menuItem = new MenuItem(
                $defaultMenuItem['title'],
                $defaultMenuItem['url'],
                isset($defaultMenuItem['icon']) && strlen($defaultMenuItem['icon']) > 0 ? asset($defaultMenuItem['icon']) : '',
                $defaultMenuItem['priority']
            );

            if (isset($defaultMenuItem['menus']) && count($defaultMenuItem['menus']) > 0) {
                foreach ($defaultMenuItem['menus'] as $defaultSubmenu) {
                    $subMenu = new Menu($defaultSubmenu['location']);

                    foreach ($defaultSubmenu['items'] as $defaultSubmenuItem) {
                        $subMenu->registerMenuItem(
                            new MenuItem(
                                $defaultSubmenuItem['title'],
                                $defaultSubmenuItem['url'],
                                isset($defaultSubmenuItem['icon']) && strlen($defaultSubmenuItem['icon']) > 0 ? asset($defaultSubmenuItem['icon']) : '',
                                $defaultSubmenuItem['priority']
                            )
                        );
                    }

                    $menuItem->registerMenu($subMenu);
                }
            }

            $sidebarMenu->registerMenuItem($menuItem);
        }
    }
}
