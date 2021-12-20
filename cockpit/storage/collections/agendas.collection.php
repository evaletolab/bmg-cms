<?php
 return array (
  'name' => 'agendas',
  'label' => 'Agenda',
  '_id' => 'agendas',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'etat',
      'label' => 'État',
      'type' => 'boolean',
      'default' => '',
      'info' => '',
      'group' => 'header',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-2',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
    1 => 
    array (
      'name' => 'who',
      'label' => 'Propriétaire',
      'type' => 'account-link',
      'default' => '',
      'info' => 'Owner',
      'group' => 'header',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-2',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    2 => 
    array (
      'name' => 'edition',
      'label' => '',
      'type' => 'collectionlinkselect',
      'default' => '',
      'info' => '',
      'group' => 'header',
      'localize' => false,
      'options' => 
      array (
        'link' => 'edition',
        'multiple' => false,
        'display' => 'name',
      ),
      'width' => '1-1',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'titre',
      'label' => 'titre',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => 'main',
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
    4 => 
    array (
      'name' => 'soustitre',
      'label' => 'soustitre',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => 'main',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    5 => 
    array (
      'name' => 'fiche_technique',
      'label' => 'Fiche Technique',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => 'main',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-3',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    6 => 
    array (
      'name' => 'categorie',
      'label' => 'Categorie',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => 'main',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-3',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    7 => 
    array (
      'name' => 'type_evenement',
      'label' => 'Typologie',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => 'main',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-3',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    8 => 
    array (
      'name' => 'collaboration',
      'label' => 'Collaboration',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => 'main',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    9 => 
    array (
      'name' => 'url',
      'label' => 'URL événement ',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => 'main',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    10 => 
    array (
      'name' => 'text',
      'label' => 'Rédact.',
      'type' => 'markdown',
      'default' => '',
      'info' => '',
      'group' => 'main',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-2',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    11 => 
    array (
      'name' => 'text2',
      'label' => 'Rédact.2',
      'type' => 'markdown',
      'default' => '',
      'info' => '',
      'group' => 'main',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-2',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    12 => 
    array (
      'name' => 'when',
      'label' => 'calendrier',
      'type' => 'repeater',
      'default' => '',
      'info' => '',
      'group' => 'calendrier',
      'localize' => false,
      'options' => 
      array (
        'field' => 
        array (
          'type' => 'set',
          'label' => ' ',
          'display' => 'startDate',
          'options' => 
          array (
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'startDate',
                'label' => 'Date début',
                'width' => '1-4',
                'type' => 'date',
              ),
              1 => 
              array (
                'name' => 'startHour',
                'label' => 'Heure début',
                'width' => '1-4',
                'type' => 'time',
              ),
              2 => 
              array (
                'name' => 'endDate',
                'label' => 'Date fin',
                'width' => '1-4',
                'type' => 'date',
              ),
              3 => 
              array (
                'name' => 'endHour',
                'label' => 'Heure fin',
                'width' => '1-4',
                'type' => 'time',
              ),
              4 => 
              array (
                'name' => 'synthax',
                'type' => 'text',
                'label' => 'Syntaxe',
                'options' => 
                array (
                  'type' => 'number',
                ),
              )
            ),
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
    13 => 
    array (
      'name' => 'date_debut',
      'label' => 'Date début',
      'type' => 'date',
      'default' => '',
      'info' => '',
      'group' => 'calendrier',
      'localize' => false,
      'options' => 
      array (
        'format' => 'DD-MM-YYYY',
      ),
      'width' => '1-4',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    14 => 
    array (
      'name' => 'heure_debut',
      'label' => 'Heure début',
      'type' => 'time',
      'default' => '',
      'info' => '',
      'group' => 'calendrier',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-4',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    15 => 
    array (
      'name' => 'date_fin',
      'label' => 'Date fin',
      'type' => 'date',
      'default' => '',
      'info' => '',
      'group' => 'calendrier',
      'localize' => false,
      'options' => 
      array (
        'format' => 'DD-MM-YYYY',
      ),
      'width' => '1-4',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    16 => 
    array (
      'name' => 'heure_fin',
      'label' => 'Heure fin',
      'type' => 'time',
      'default' => '',
      'info' => '',
      'group' => 'calendrier',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-4',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    17 => 
    array (
      'name' => 'synthax',
      'label' => 'Syntaxe ',
      'type' => 'text',
      'default' => '',
      'info' => 'Horaires',
      'group' => 'calendrier',
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
    18 => 
    array (
      'name' => 'photo',
      'label' => 'Photo',
      'type' => 'image',
      'default' => '',
      'info' => '',
      'group' => 'photo',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-2',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    19 => 
    array (
      'name' => 'credit_photo',
      'label' => 'credit photo',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => 'photo',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-2',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
  ),
  'sortable' => false,
  'in_menu' => false,
  '_created' => 1634049109,
  '_modified' => 1640020344,
  'color' => '#A0D468',
  'acl' => 
  array (
    'author' => 
    array (
      'entries_view' => true,
      'entries_create' => true,
      'entries_edit' => true,
    ),
    'public' => 
    array (
      'entries_view' => true,
      'entries_edit' => false,
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
  'icon' => 'calendar.svg',
);