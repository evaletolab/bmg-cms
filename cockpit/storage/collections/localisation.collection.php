<?php
 return array (
  'name' => 'localisation',
  'label' => 'Lieux',
  '_id' => 'localisation',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'active',
      'label' => 'Actif',
      'type' => 'boolean',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
        'default' => true,
      ),
      'width' => '1-2',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    1 => 
    array (
      'name' => 'name',
      'label' => 'Nom du lieux',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-2',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    2 => 
    array (
      'name' => 'phone',
      'label' => 'Téléphone',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'info',
      'label' => 'Informations',
      'type' => 'textarea',
      'default' => '',
      'info' => '(horaires, semaine, etc)',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    4 => 
    array (
      'name' => 'gps',
      'label' => 'Localisation',
      'type' => 'set',
      'default' => '',
      'info' => '',
      'group' => 'Carte',
      'localize' => false,
      'options' => 
      array (
        'fields' => 
        array (
          0 => 
          array (
            'name' => 'street',
            'type' => 'text',
          ),
          1 => 
          array (
            'name' => 'postalcode',
            'type' => 'text',
          ),
          2 => 
          array (
            'name' => 'city',
            'type' => 'text',
          ),
          3 => 
          array (
            'name' => 'tag',
            'type' => 'text',
          ),
          4 => 
          array (
            'name' => 'location',
            'type' => 'location',
          ),
        ),
      ),
      'width' => '1-1',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
  ),
  'sortable' => false,
  'in_menu' => false,
  '_created' => 1640016925,
  '_modified' => 1640078444,
  'color' => '#4FC1E9',
  'acl' => 
  array (
    'public' => 
    array (
      'entries_view' => true,
    ),
    'author' => 
    array (
      'entries_view' => true,
      'entries_edit' => true,
      'entries_create' => true,
    ),
  ),
  'sort' => 
  array (
    'column' => '_created',
    'dir' => -1,
  ),
  'rules' => 
  array (
    'create' => 
    array (
      'enabled' => false,
    ),
    'read' => 
    array (
      'enabled' => false,
    ),
    'update' => 
    array (
      'enabled' => false,
    ),
    'delete' => 
    array (
      'enabled' => false,
    ),
  ),
  'icon' => 'globe.svg',
);