<?php
$app->bind('/get-autocomplete/:collection/:field', function($params) {

$tags = [];
$field = $params['field'];

$options = ['fields' => [$params['field'] => true]]; // field name of your tags field

$entries = $this->module('collections')->find($params['collection'], $options);

if ($entries) {
    foreach($entries as $entry) {
        $tags[] = $entry[$field];
    }
}

// remove duplicates
$tags = array_keys(array_flip($tags));

return $tags;

});
