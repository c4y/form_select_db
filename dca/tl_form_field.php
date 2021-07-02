<?php

$GLOBALS['TL_DCA']['tl_form_field']['palettes']['selectdb'] = '{type_legend},type,name,label;{fconfig_legend},mandatory,multiple;{db_legend},selectdb_emptytext,selectdb_value,selectdb_label,selectdb_condition;{expert_legend:hide},class,accesskey,tabindex;{template_legend:hide},customTpl;{invisible_legend:hide},invisible';


$GLOBALS['TL_DCA']['tl_form_field']['fields']['selectdb_emptytext'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['selectdb_emptytext'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'clr'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['selectdb_value'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['selectdb_value'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>32, 'tl_class'=>'w50'),
    'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['selectdb_label'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['selectdb_label'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>32, 'tl_class'=>'w50'),
    'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['selectdb_condition'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['selectdb_condition'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'clr','preserveTags'=>true),
    'sql'                     => "mediumtext NULL"
);