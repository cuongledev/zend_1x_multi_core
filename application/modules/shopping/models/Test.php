<?php
class Shopping_Model_Test extends Zend_Db_Table{
    public function getItems(){
        echo "<br />" . __METHOD__;
    }
}