<?php
return array(
    'doctrine' => array(
        'driver' => array(
            // defines an annotation driver with two paths, and names it `my_annotation_driver`
            'anketa_entity' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(
                    __DIR__. '/../src/Anketa/Entity',

                ),
            ),

            // default metadata driver, aggregates all other drivers into a single one.
            // Override `orm_default` only if you know what you're doing
            'orm_default' => array(
                'drivers' => array(
                    // register `my_annotation_driver` for any entity under namespace `My\Namespace`
                    'Anketa\Entity' => 'anketa_entity'
                )
            )
        )
    ),

    'zfcuser' => array(
        // telling ZfcUser to use our own class
        'users_entity_class'       => 'Anketa\Entity\User',
        // telling ZfcUserDoctrineORM to skip the entities it defines
        'enable_default_entities' => false,
    ),

    'bjyauthorize' => array(
        // Using the authentication identity provider, which basically reads the roles from the auth service's identity
        'identity_provider' => 'BjyAuthorize\Provider\Identity\AuthenticationIdentityProvider',

        'role_providers'        => array(
            // using an object repository (entity repository) to load all roles into our ACL
            'BjyAuthorize\Provider\Role\ObjectRepositoryProvider' => array(
                'object_manager'    => 'doctrine.entity_manager.orm_default',
                'role_entity_class' => 'Anketa\Entity\Role',
            ),
        ),
    ),

    'controllers' => array(
        'invokables' => array(
            'Anketa\Controller\Index' => 'Anketa\Controller\IndexController'
        ),
    ),
    'router' => array(
        'routes' => array(
            'anketa' => array(
                'type' => 'segment',
                'options' => array(
                    'route'    => '/[:action/][:id/]',
                    'constraints' => array(
                        'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'         => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Anketa\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        )
    )
);