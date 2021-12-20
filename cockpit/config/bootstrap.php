<?php
$app->bind('/get-autocomplete', function() {

$tags = [];

$options = ['fields' => ['tags' => true]]; // field name of your tags field

$entries = $this->module('collections')->find('pages', $options);

if ($entries) {
    foreach($entries as $entry) {
        if (!is_array($entry['tags'])) continue;
        foreach($entry['tags'] as $tag) {
            $tags[] = $tag;
        }
    }
}

// remove duplicates
$tags = array_keys(array_flip($tags));

return $tags;

});
