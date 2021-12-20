<?php
 return array (
  'name' => 'Agenda',
  'label' => 'Agenda',
  '_id' => 'Agenda',
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
    3 => 
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
    4 => 
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
    5 => 
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
    6 => 
    array (
      'name' => 'type_evenement',
      'label' => 'Typoelogie',
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
    8 => 
    array (
      'name' => 'url_meg',
      'label' => 'URL événement MEG',
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
    10 => 
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
    11 => 
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
    12 => 
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
    13 => 
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
    14 => 
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
    15 => 
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
    16 => 
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
    17 => 
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
  '_modified' => 1634284445,
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
);