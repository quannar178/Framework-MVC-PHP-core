<?php

class OrdersController extends VanillaController
{
    function beforeAction () {

    }

    function view($id = null) {
        $this->Order->id = $id;
        $this->Order->showHasOne();
        $order = $this->Order->search();
        $this->set('order',$order);
//        var_dump($order);
    }

    function afterAction() {

    }

}