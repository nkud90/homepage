<?php
// Mapping array for user-friendly names
$friendlyNames = include('mapping.php');

// Function to create breadcrumbs
function createBreadcrumbs($friendlyNames) {
    $uri = $_SERVER['REQUEST_URI'];
    $parts = explode('/', trim($uri, '/'));

    $breadcrumbs = '<p><a href="/">Home</a>';
    $path = '';

    for ($i = 0; $i < count($parts); $i++) {
        if ($parts[$i] === 'index.php') {
            continue;
        }

        $currentPart = $parts[$i];
        // Check if the current part exists in the mapping array
        if (array_key_exists($currentPart, $friendlyNames)) {
            $prettyName = $friendlyNames[$currentPart];
        } else {
            // Replace underscores with spaces and capitalize the first letter
            $prettyName = ucwords(str_replace('_', ' ', $currentPart));
        }

        $path .= '/' . $currentPart;

        if ($i == count($parts) - 1) {
            $prettyName = str_replace('.php', '', $prettyName);
            $breadcrumbs .= ' / ' . $prettyName;
        } else {
            $breadcrumbs .= ' / <a href="' . $path . '">' . $prettyName . '</a>';
        }
    }

    $breadcrumbs .= '</p>';
    return $breadcrumbs;
}

echo createBreadcrumbs($friendlyNames);
?>
