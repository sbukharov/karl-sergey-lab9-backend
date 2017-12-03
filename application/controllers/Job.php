<?php

/* 
 * Rest Job server.
 */
require APPPATH . '/third_party/restful/libraries/Rest_controller.php';

class Job extends Rest_Controller {
    
    
    function __construct() {
        parent::__construct();
    }
    
    // Handle an incoming GET - cRud
    function index_get($key=null)
    {
        $this->response($this->tasks->all(), 200);
    }

    // Handle an incoming PUT - crUd
    function index_put($key=null)
    {
        $this->response('ok', 200);
    }

    // Handle an incoming POST - Crud
    function index_post($key=null)
    {
        $this->response('ok', 200);
    }

    // Handle an incoming DELETE - cruD
    function index_delete($key=null)
    {
        $this->response('ok', 200);
    }

}