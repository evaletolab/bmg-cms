<?php
 return array (
  'name' => 'articles',
  'label' => 'Articles',
  '_id' => 'articles',
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
      'required' => true,
    ),
    1 => 
    array (
      'name' => 'responsable',
      'label' => 'Responsable',
      'type' => 'account-link',
      'default' => '',
      'info' => '',
      'group' => '1.Meta',
      'localize' => false,
      'options' => 
      array (
        'display' => 'name',
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
      'label' => 'Édition',
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
      'name' => 'titre',
      'label' => 'Titre',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '2.Texte',
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
      'name' => 'sous_titre',
      'label' => 'Sous-titre',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '2.Texte',
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
      'name' => 'auteur',
      'label' => 'Auteur',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '1.Meta',
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
    6 => 
    array (
      'name' => 'rubrique',
      'label' => 'Rubrique',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '1.Meta',
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
    7 => 
    array (
      'name' => 'chapeau',
      'label' => 'Chapeau',
      'type' => 'markdown',
      'default' => '',
      'info' => '',
      'group' => '2.Texte',
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
    8 => 
    array (
      'name' => 'corps',
      'label' => 'Corps de l\'article',
      'type' => 'markdown',
      'default' => '',
      'info' => '',
      'group' => '2.Texte',
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
    9 => 
    array (
      'name' => 'notes',
      'label' => 'Notes et références',
      'type' => 'markdown',
      'default' => '',
      'info' => '',
      'group' => '2.Texte',
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
      'name' => 'bibliographie',
      'label' => 'Bibliographie',
      'type' => 'markdown',
      'default' => '',
      'info' => '',
      'group' => '2.Texte',
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
      'name' => 'exergues',
      'label' => 'Exergues',
      'type' => 'repeater',
      'default' => '',
      'info' => '',
      'group' => '2.Texte',
      'localize' => false,
      'options' => 
      array (
        'fields' => 
        array (
          0 => 
          array (
            'type' => 'text',
            'label' => 'Exergue',
          ),
        ),
      ),
      'width' => '1-1',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    12 => 
    array (
      'name' => 'agenda_linked',
      'label' => 'Assocations à l\' agenda ',
      'type' => 'collectionlink',
      'default' => '',
      'info' => '',
      'group' => '3.Données',
      'localize' => false,
      'options' => 
      array (
        'link' => 'agendas',
        'display' => 'titre',
        'multiple' => true,
        'limit' => false,
      ),
      'width' => '1-1',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    13 => 
    array (
      'name' => 'images',
      'label' => 'Images',
      'type' => 'repeater',
      'default' => '',
      'info' => '',
      'group' => '3.Données',
      'localize' => false,
      'options' => 
      array (
        'field' => 
        array (
          'type' => 'set',
          'label' => 'Images',
          'display' => 'name',
          'options' => 
          array (
            'fields' => 
            array (
              0 => 
              array (
                'type' => 'text',
                'name' => 'legende',
                'label' => 'Légende',
              ),
              1 => 
              array (
                'type' => 'text',
                'name' => 'credits',
                'label' => 'Crédits',
              ),
              2 => 
              array (
                'type' => 'image',
                'name' => 'image',
                'label' => 'Image (format jpg)',
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
      'required' => false,
    ),
  ),
  'sortable' => false,
  'in_menu' => false,
  '_created' => 1640017225,
  '_modified' => 1640275257,
  'color' => '',
  'acl' => 
  array (
    'public' => 
    array (
      'entries_edit' => false,
      'entries_view' => true,
    ),
    'author' => 
    array (
      'entries_view' => true,
      'entries_edit' => true,
      'entries_create' => true,
      'entries_delete' => true,
    ),
    'editor' => 
    array (
      'entries_view' => true,
      'entries_edit' => true,
      'entries_create' => true,
      'entries_delete' => true,
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