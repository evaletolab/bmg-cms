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
      'group' => '1.Meta',
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
      'group' => '1.Meta',
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
      'group' => '1.Meta',
      'localize' => false,
      'options' => 
      array (
        'link' => 'edition',
        'multiple' => false,
        'display' => 'name',
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
      'name' => 'comment',
      'label' => '',
      'type' => 'markdown',
      'default' => '',
      'info' => '',
      'group' => '1.Meta',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => false,
      'acl' => 
      array (
      ),
    ),
    4 => 
    array (
      'name' => 'titre',
      'label' => 'titre',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '3.Texte',
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
    5 => 
    array (
      'name' => 'soustitre',
      'label' => 'soustitre',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '3.Texte',
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
    6 => 
    array (
      'name' => 'fiche_technique',
      'label' => 'Fiche Technique',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '3.Texte',
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
    7 => 
    array (
      'name' => 'categorie',
      'label' => 'Categorie',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '3.Texte',
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
      'name' => 'type_evenement',
      'label' => 'Typologie',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '3.Texte',
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
    9 => 
    array (
      'name' => 'collaboration',
      'label' => 'Collaboration',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '3.Texte',
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
      'name' => 'url',
      'label' => 'URL événement ',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '3.Texte',
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
    11 => 
    array (
      'name' => 'text',
      'label' => 'Rédact.',
      'type' => 'markdown',
      'default' => '',
      'info' => '',
      'group' => '3.Texte',
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
    12 => 
    array (
      'name' => 'text2',
      'label' => 'Rédact.2',
      'type' => 'markdown',
      'default' => '',
      'info' => '',
      'group' => '3.Texte',
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
    13 => 
    array (
      'name' => 'calendar',
      'label' => 'Occurence',
      'type' => 'repeater',
      'default' => '',
      'info' => '',
      'group' => '2.Calendrier',
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
              ),
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
    14 => 
    array (
      'name' => 'photo',
      'label' => 'Photo (format jpg)',
      'type' => 'image',
      'default' => '',
      'info' => 'Attention format JPG',
      'group' => '4.Photo',
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
    15 => 
    array (
      'name' => 'credit_photo',
      'label' => 'credit photo',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '4.Photo',
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
  '_modified' => 1640079979,
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