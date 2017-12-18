<?php
return array (
    'name' => 'home',
    'type' => 'controller',
    'technology' => 'web',
    'mapped_to' => 'home',
    'storage_role' => 'root',
    'fields' => 
    array (
        0 => 
        array (
            'name' => 'visited_products',
            'source' => 'cookie',
            'vulnerabilities' => 
            array (
                'vuln_list' => 
                array (
                    'SQL' => 
                    array (
                        'enabled' => true,
                        'blind' => true,
                    ),
                ),
            ),
        ),
    ),
    'children' => 
    array (
        'index' => 
        array (
            'name' => 'index',
            'type' => 'action',
            'technology' => 'web',
            'mapped_to' => 'index',
        ),
    ),
);