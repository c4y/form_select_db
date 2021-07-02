<?php

/**
 * Register the namespaces
 */
/* ClassLoader::addNamespaces(array
(
    'C4Y',
)); */

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    'Contao\FormSelectDb'     => 'system/modules/form_select_db/forms/FormSelectDb.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    // 'newspagination'    => 'system/modules/newspagination/templates',
));