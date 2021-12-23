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
      'name' => 'annuel',
      'label' => 'Thématique annuelle',
      'type' => 'boolean',
      'default' => '',
      'info' => '',
      'group' => '3.Texte',
      'localize' => false,
      'options' => 
      array (
        'default' => false,
      ),
      'width' => '1-4',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    4 => 
    array (
      'name' => 'titre',
      'label' => 'Titre',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '3.Texte',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '3-4',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    5 => 
    array (
      'name' => 'soustitre',
      'label' => 'Sous-titre',
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
      'name' => 'intervenant',
      'label' => 'Intervenant',
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
    7 => 
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
    8 => 
    array (
      'name' => 'cycle',
      'label' => 'Cycle',
      'type' => 'text-autocomplete',
      'default' => '',
      'info' => '',
      'group' => '3.Texte',
      'localize' => false,
      'options' => 
      array (
        'collection' => 'agendas',
        'field' => 'cycle',
      ),
      'width' => '1-3',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    9 => 
    array (
      'name' => 'type_evenement',
      'label' => 'Typologie',
      'type' => 'text-autocomplete',
      'default' => '',
      'info' => '',
      'group' => '3.Texte',
      'localize' => false,
      'options' => 
      array (
        'collection' => 'agendas',
        'field' => 'type_evenement',
      ),
      'width' => '1-3',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    10 => 
    array (
      'name' => 'moderation',
      'label' => 'Modération',
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
    11 => 
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
      'width' => '1-3',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    12 => 
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
        'type' => 'url',
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
    14 => 
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
    15 => 
    array (
      'name' => 'localisation',
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
          'label' => 'Occurrence et Lieux',
          'display' => 'localisation.display',
          'options' => 
          array (
            'fields' => 
            array (
              0 => 
              array (
                'type' => 'collectionlinkselect',
                'name' => 'localisation',
                'label' => 'Lieu',
                'options' => 
                array (
                  'link' => 'localisation',
                  'display' => 'name',
                  'multiple' => false,
                  'limit' => false,
                ),
              ),
              1 => 
              array (
                'name' => 'startDate',
                'label' => 'Date début',
                'width' => '1-4',
                'type' => 'date',
              ),
              2 => 
              array (
                'name' => 'startHour',
                'label' => 'Heure début',
                'width' => '1-4',
                'type' => 'time',
              ),
              3 => 
              array (
                'name' => 'endDate',
                'label' => 'Date fin',
                'width' => '1-4',
                'type' => 'date',
              ),
              4 => 
              array (
                'name' => 'endHour',
                'label' => 'Heure fin',
                'width' => '1-4',
                'type' => 'time',
              ),
              5 => 
              array (
                'name' => 'synthax',
                'type' => 'text',
                'label' => 'Syntaxe de l\'horaire',
                'options' => 
                array (
                  'type' => 'text',
                  'placeholder' => 'format de l\'horaire',
                ),
              ),
            ),
          ),
        ),
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    16 => 
    array (
      'name' => 'photo',
      'label' => 'Photo (format jpg)',
      'type' => 'image',
      'default' => '',
      'info' => 'Attention format JPG',
      'group' => '4.Propriétés',
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
    17 => 
    array (
      'name' => 'fichier',
      'label' => 'Ajouter un fichier',
      'type' => 'file',
      'default' => '',
      'info' => '',
      'group' => '4.Propriétés',
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
    18 => 
    array (
      'name' => 'credit_photo',
      'label' => 'Crédit photo',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '4.Propriétés',
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
    19 => 
    array (
      'name' => 'public',
      'label' => 'Public ',
      'type' => 'text',
      'default' => '',
      'info' => 'Âge',
      'group' => '4.Propriétés',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-4',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    20 => 
    array (
      'name' => 'langue',
      'label' => 'Langue',
      'type' => 'select',
      'default' => '',
      'info' => '',
      'group' => '4.Propriétés',
      'localize' => false,
      'options' => 
      array (
        'options' => 
        array (
          0 => 'fr',
          1 => 'en',
          2 => 'de',
          3 => 'it',
        ),
        'default' => 'fr',
      ),
      'width' => '1-4',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    21 => 
    array (
      'name' => 'tarif',
      'label' => 'Tarif',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '4.Propriétés',
      'localize' => false,
      'options' => 
      array (
        'type' => 'number',
      ),
      'width' => '1-4',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    22 => 
    array (
      'name' => 'jauge',
      'label' => 'Jauge (nombre)',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '4.Propriétés',
      'localize' => false,
      'options' => 
      array (
        'type' => 'number',
      ),
      'width' => '1-4',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    23 => 
    array (
      'name' => 'res_url',
      'label' => 'Réservation (URL)',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '4.Propriétés',
      'localize' => false,
      'options' => 
      array (
        'type' => 'url',
      ),
      'width' => '1-2',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    24 => 
    array (
      'name' => 'res_mail',
      'label' => 'Réservation (mail)',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '4.Propriétés',
      'localize' => false,
      'options' => 
      array (
        'type' => 'email',
      ),
      'width' => '1-2',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    25 => 
    array (
      'name' => 'res_phone',
      'label' => 'Réservations (téléphone)',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '4.Propriétés',
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
    26 => 
    array (
      'name' => 'res_autre',
      'label' => 'Réservation (autres)',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '4.Propriétés',
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
    27 => 
    array (
      'name' => 'collaboration',
      'label' => 'Collaboration',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '4.Propriétés',
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
    28 => 
    array (
      'name' => 'collaboration_url',
      'label' => 'Collaboration URL',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '4.Propriétés',
      'localize' => false,
      'options' => 
      array (
        'type' => 'url',
      ),
      'width' => '2-3',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    29 => 
    array (
      'name' => 'partenaire',
      'label' => 'Partenaire',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '4.Propriétés',
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
    30 => 
    array (
      'name' => 'partenaire_url',
      'label' => 'Partenaire URL',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '4.Propriétés',
      'localize' => false,
      'options' => 
      array (
        'type' => 'url',
      ),
      'width' => '2-3',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    31 => 
    array (
      'name' => 'cadre',
      'label' => 'Cadre',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '4.Propriétés',
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
    32 => 
    array (
      'name' => 'cadre_url',
      'label' => 'Cadre URL',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '4.Propriétés',
      'localize' => false,
      'options' => 
      array (
        'type' => 'url',
      ),
      'width' => '2-3',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    33 => 
    array (
      'name' => 'soutien',
      'label' => 'Soutien',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '4.Propriétés',
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
    34 => 
    array (
      'name' => 'soutien_url',
      'label' => 'Soutien URL',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '4.Propriétés',
      'localize' => false,
      'options' => 
      array (
        'type' => 'url',
      ),
      'width' => '2-3',
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
  '_modified' => 1640277306,
  'color' => '#A0D468',
  'acl' => 
  array (
    'author' => 
    array (
      'entries_view' => true,
      'entries_create' => true,
      'entries_edit' => true,
      'entries_delete' => true,
    ),
    'public' => 
    array (
      'entries_view' => true,
      'entries_edit' => false,
    ),
    'editor' => 
    array (
      'entries_edit' => true,
      'entries_view' => true,
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
  'icon' => 'calendar.svg',
);