<?php

return array(
    'name'        => 'Extended Contact',
    'description' => '',
    'author'      => 'RedSpirit',
    'version'     => '0.0.1',
    'routes'   => array(
        'main' => array(
            'plugin_extended_contact' => array(
                'path'       => '/extended/{world}',
                'controller' => 'ExtendedContactBundle:Default:index',
                'defaults'    => array(
                    'world' => 'earth'
                ),
               /* 'requirements' => array(
                    'world' => 'earth|mars'
                )*/
            ),
            /*'plugin_extended_contact_list'  => array(
                'path'       => '/hello/{page}',
                'controller' => 'HelloWorldBundle:Default:index'
             ),*/
            /*'plugin_extended_contact_admin' => array(
                'path'       => '/hello/admin',
                'controller' => 'HelloWorldBundle:Default:admin'
            ),*/
        ),
        'public' => array(
            /*'plugin_helloworld_goodbye' => array(
                'path'       => '/hello/goodbye',
                'controller' => 'HelloWorldBundle:Default:goodbye'
            ),
            'plugin_helloworld_contact' => array(
                'path'       => '/hello/contact',
                'controller' => 'HelloWorldBundle:Default:contact'
            )*/
        ),
        'api' => array(
            /*'plugin_helloworld_api' => array(
                'path'       => '/hello',
                'controller' => 'HelloWorldBundle:Api:howdy',
                'method'     => 'GET'
            )*/
        )
    ),
     'menu'     => array(
        'main' => array(
            'priority' => 4,
            'items'    => array(
                'plugin.helloworld.index' => array(
                    'id'        => 'plugin_helloworld_index',
                    'iconClass' => 'fa-globe',
                    'access'    => 'plugin:helloworld:worlds:view',
                    'parent'    => 'mautic.core.channels',
                    'children'  => array(
                        'plugin.helloworld.manage_worlds'     => array(
                            'route' => 'plugin_helloworld_list'
                        ),
                        'mautic.category.menu.index' => array(
                            'bundle' => 'plugin:helloWorld'
                        )
                    )
                )
            )
        ),
        'admin' => array(
            'plugin.helloworld.admin' => array(
                'route'     => 'plugin_helloworld_admin',
                'iconClass' => 'fa-gears',
                'access'    => 'admin',
                'checks'    => array(
                    'parameters' => array(
                        'helloworld_api_enabled' => true
                    )
                ),
                'priority'  => 60
            )
        )
    ),
     'services'    => array(
        'events' => array(
            /*'plugin.helloworld.leadbundle.subscriber' => array(
                'class' => 'MauticPlugin\HelloWorldBundle\EventListener\LeadSubscriber'
            )*/
        ),
        'forms'  => array(
            /*'plugin.helloworld.form' => array(
                'class' => 'MauticPlugin\HelloWorldBundle\Form\Type\HelloWorldType',
                'alias' => 'helloworld'
            )*/
        ),
        'helpers' => array(
            /*'mautic.helper.helloworld' => array(
                'class'     => 'MauticPlugin\HelloWorldBundle\Helper\HelloWorldHelper',
                'alias'     => 'helloworld'
            )*/
        ),
        'other'   => array(
            /*'plugin.helloworld.mars.validator' => array(
                'class'     => 'MauticPlugin\HelloWorldBundle\Form\Validator\Constraints\MarsValidator',
                'arguments' => 'mautic.factory',
                'tag'       => 'validator.constraint_validator',
                'alias'     => 'helloworld_mars'
            )*/
        )
    ),
     'categories' => array(
        //'plugin:ExtendedContact' => 'mautic.extended.contact.categories'
    ),
    'parameters' => array(
       // 'helloworld_api_enabled' => false
    )
);

?>