<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Geo\Resource\Doctrine;

return [

    'doctrine' => [

        'driver' => [
            // defines an annotation driver with two paths, and names it `my_annotation_driver`
            Module::class => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    __DIR__ . '/../src/Entity'
                ],
            ],

            // default metadata driver, aggregates all other drivers into a single one.
            // Override `orm_default` only if you know what you're doing
            'orm_default' => [
                'drivers' => [
                    Entity::class =>
                        Module::class,
                ]
            ],

        ],
        'entity_resolver' => [
            'orm_default' => [
                'resolvers' => [
                     Entity\CountryInterface::class =>
                         Entity\Country::class,
                     Entity\RegionInterface::class =>
                         Entity\Region::class,
                     Entity\ZipCodeInterface::class =>
                         Entity\ZipCode::class,
                ],
            ],
        ],
    ],

    'service_manager' => [
        'factories' => [

        ]
    ],

    Module::class => [
        // ...
    ],
];
