<?php

namespace Contao;

class FormSelectDb extends \Contao\FormSelectMenu
{
    public function __construct($arrAttributes=null)
    {   
        parent::__construct($arrAttributes);

        $this->getOptionsFromDb();
    }

    public function getOptionsFromDb()
    {

        $this->arrOptions = array();

        $objDb = \Database::getInstance()->query($this->selectdb_condition);

        if(!empty($this->selectdb_emptytext)) {
            $this->arrOptions = array(array('value' => '', 'label' => $this->selectdb_emptytext));
        }

        if($objDb == null) {
            // $this->arrOptions = array(array('value' => '', 'label' => '-'));
            return;
        }

        while($objDb->next()) {
            $this->arrOptions[] = array(
                "value" => \Contao\StringUtil::decodeEntities($objDb->{$this->selectdb_value}),
                "label" => \Contao\StringUtil::decodeEntities($objDb->{$this->selectdb_label})
            );
        }
    }

}