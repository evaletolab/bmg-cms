<?php
 return array (
  'name' => 'articles',
  'label' => 'Articles',
  '_id' => 'articles',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'responsable',
      'label' => 'responsable',
      'type' => 'account-link',
      'default' => '',
      'info' => '',
      'group' => 'meta',
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
    1 => 
    array (
      'name' => 'etat',
      'label' => 'publié',
      'type' => 'boolean',
      'default' => '',
      'info' => '',
      'group' => 'meta',
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
    2 => 
    array (
      'name' => 'commentaire',
      'label' => '',
      'type' => 'textarea',
      'default' => '',
      'info' => '',
      'group' => 'meta',
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
    3 => 
    array (
      'name' => 'titre',
      'label' => 'titre',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => 'texte',
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
      'label' => 'sous titre',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => 'texte',
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
      'label' => 'auteur',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => 'meta',
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
      'label' => 'rubrique',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => 'meta',
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
      'name' => 'corps',
      'label' => 'corps de l\'article',
      'type' => 'wysiwyg',
      'default' => '',
      'info' => '',
      'group' => 'texte',
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
      'name' => 'chapeau',
      'label' => 'chapeau',
      'type' => 'wysiwyg',
      'default' => '',
      'info' => '',
      'group' => 'texte',
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
      'label' => 'notes et références',
      'type' => 'wysiwyg',
      'default' => '',
      'info' => '',
      'group' => 'texte',
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
      'label' => 'bibliographie',
      'type' => 'wysiwyg',
      'default' => '',
      'info' => '',
      'group' => 'texte',
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
    11 => 
    array (
      'name' => 'exergues',
      'label' => 'exergues',
      'type' => 'repeater',
      'default' => '',
      'info' => '',
      'group' => 'texte',
      'localize' => false,
      'options' => 
      array (
        'fields' => 
        array (
          0 => 
          array (
            'type' => 'text',
            'label' => 'exergue',
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
      'label' => 'assocations à l\' agenda ',
      'type' => 'collectionlink',
      'default' => '',
      'info' => '',
      'group' => 'données',
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
      'label' => 'images',
      'type' => 'repeater',
      'default' => '',
      'info' => '',
      'group' => 'données',
      'localize' => false,
      'options' => 
      array (
        'field' => 
        array (
          'type' => 'set',
          'label' => 'images',
          'display' => 'name',
          'options' => 
          array (
            'fields' => 
            array (
              0 => 
              array (
                'type' => 'text',
                'name' => 'legende',
                'label' => 'légende',
              ),
              1 => 
              array (
                'type' => 'text',
                'name' => 'credits',
                'label' => 'crédits',
              ),
              2 => 
              array (
                'type' => 'image',
                'name' => 'image',
                'label' => 'image',
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
  '_modified' => 1640020684,
  'color' => '',
  'acl' => 
  array (
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