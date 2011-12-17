<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Abstract controller for CRUD ORM
 * @author jwest
 */
abstract class Controller_CRUD extends Controller
{
   
    /**
     * General model for controller
     * @var Model_CRUD string if you declare other by default in your controller
     */
    public $model = null;
    
    
    /**
     * Get controller name
     * @var string
     */
    public $controller_name = null;
    
    
    /**
     * Change if you have use custom view
     * @var string
     */
    public $view = 'default';
    
    
    /**
     * Prepare controller and model for crud actions
     */
    public function before() 
    {
        parent::before();        
        
        $this->controller_name = $this->request->controller();
        
        if($this->model == null)
        {
            $this->model = $this->request->controller();
        }
        
        if(is_string($this->model))
        {
            $this->model = ORM::factory(Inflector::singular($this->model));
        }
    }
    
    
    /**
     * Redirect to show action
     */
    public function action_index()
    {
        $this->get_show();
    }
    
    
    /**
     * Show data in grid from view
     */
    public function GET_show()
    {
        $view = new View('crud/'.$this->view.'/grid');
        $view->name = $this->controller_name;
        $view->data = $this->model->get_array();
        $view->columns = $this->model->get_items();
        $view->pagination = null;

        if($this->model->render_pagination())
        {
            $view->pagination = $this->model->render_pagination();
        }
        
        $this->response->body($view->render());
    }
    
    
    /**
     * Return data in json format
     */
    public function POST_show()
    {
        $data = $this->model->get_array();
        
        echo json_encode($data);
    }
    
    
    /**
     * Create new item
     */
    public function action_add()
    {        
        $view = new View('crud/'.$this->view.'/edit');
        $view->name = $this->controller_name;
        $view->data = $this->model->get_for_create();
        $view->columns = $this->model->get_items();
        $view->errors = array();

        if($this->request->method() == 'POST')
        {
            try 
            {
                $id = $this->model->save_create($this->request->post());

                if($this->request->post('submit_next'))
                {
                    $this->request->redirect($this->controller_name.'/add/');
                }
                else if($this->request->post('submit_previous'))
                {
                    $this->request->redirect($this->controller_name.'/show/');
                }
                else
                {
                    $this->request->redirect($this->controller_name.'/edit/'.$id);            
                }
            }
            catch(Validation_Exception $e)
            {
                //throw validation exception and send to view
                $view->errors = $e->array->errors('validations');
            }
        }
        
        $this->response->body($view->render());
    }
   
    
    /**
     * Edit new item
     */
    public function action_edit()
    {
        $id = $this->request->param('id');
        
        if($id == null)
        {
            $this->request->redirect($this->controller_name.'/show/');
        }
        
        $view = new View('crud/'.$this->view.'/edit');
        $view->name = $this->controller_name;
        $view->data = $this->model->get_for_edit($id);
        $view->columns = $this->model->get_items();
        $view->errors = array();

        if($this->request->method() == 'POST')
        {
            try 
            {
                $this->model->save_update($this->request->post(), $id);
        
        
                if($this->request->post('submit_next'))
                {
                    $this->request->redirect($this->controller_name.'/add/');
                }
                else if($this->request->post('submit_previous'))
                {
                    $this->request->redirect($this->controller_name.'/show/');
                }
                else
                {
                    //$this->request->redirect($this->controller_name.'/edit/'.$id);            
                }
            }
            catch(Validation_Exception $e)
            {
                //throw validation exception and send to view
                $view->errors = $e->array->errors('validations');
            }
        }

        $this->response->body($view->render());
    }
    
    
    public function GET_delete()
    {
        $id = $this->request->param('id');
        
        if($id == null)
        {
            $this->request->redirect($this->controller_name.'/show/');
        }
        
        $this->model->delete_row($id);
        
        $this->request->redirect($this->controller_name.'/show/');
    }
    
    
}

?>
