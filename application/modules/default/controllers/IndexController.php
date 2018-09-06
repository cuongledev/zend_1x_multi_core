<?php
Class IndexController extends Zendcn_Controller_Action{

    public function init(){
        echo "<br />" . __METHOD__;
        $params = $this->_request->getParams();
        echo "<pre>";
        print_r($params);
    }

    public function indexAction(){
        echo "<br />" . __METHOD__;
        $this->test();

        $model = new Default_Model_Test();
        $model->getItems();


    }
    public function viewAction(){
        echo "<br />" . __METHOD__;
    }
}