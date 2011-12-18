<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Abstract controller for CRUD ORM
 * @author jwest
 */
abstract class Controller_Admin_CRUD extends Controller_System_Admin
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
     * Base controller for example admin panel
     * @var string
     */
    public $base_controller = 'admin/';
    
    
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
        CRUD_Tools::init($this->request, $this->response);
        
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
        $view->filters = CRUD_Tools::get_param('id');
        
        foreach($view->filters as $filter => $value)
        {
            $this->model->add_filter($filter, $value);
        }
        
        $view->data = $this->model->get_array();
        $view->columns = $this->model->get_items();
        $view->base_controller = $this->base_controller;
        $view->pagination = null;
        $view->sortable = $this->model->is_sortable();

        if($this->model->render_pagination())
        {
            $view->pagination = $this->model->render_pagination();
        }
        
        $this->template->content = $view->render();        
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
        $view->errors = array();
        
        if($this->request->method() == 'POST')
        {
            try 
            {                
                $id = $this->model->save_create(CRUD_Tools::all_param());

                if($this->request->post('submit_next'))
                {
                    $this->request->redirect($this->base_controller.$this->controller_name.'/add/');
                }
                else if($this->request->post('submit_previous'))
                {
                    $this->request->redirect($this->base_controller.$this->controller_name.'/show/');
                }
                else
                {
                    $this->request->redirect($this->base_controller.$this->controller_name.'/edit/'.$id);            
                }
            }
            catch(ORM_Validation_Exception $e)
            {
                //throw orm validation exception and send to view  
                $view->errors = $e->errors('validations');
            }
            catch(Validation_Exception $e)
            {
                //throw validation exception and send to view
                $view->errors = $e->array->errors('validations');
            }
        }
        
        $view->id = null;
        $view->base_controller = $this->base_controller;
        $view->name = $this->controller_name;
        $view->data = $this->model->get_for_create();
        $view->columns = (object)array
        (
            'left' => array(), 
            'right' => array()
        );

        foreach($this->model->get_items() as $name => $column)
        {
            if($column->is_edit() AND $column->get_position() == 'left')
            {
                $view->columns->left[$name] = $column;
            }
            else if($column->is_edit() AND $column->get_position() == 'right')
            {
                $view->columns->right[$name] = $column;
            }
        }
        
        $this->template->content = $view->render();
    }
   
    
    /**
     * Edit new item
     */
    public function action_edit()
    {
        $id = $this->request->param('id');
        $view = new View('crud/'.$this->view.'/edit');
        $view->errors = array();
        
        if($id == null)
        {
            $this->request->redirect($this->base_controller.$this->controller_name.'/show/');
        }
        
        if($this->request->method() == 'POST')
        {
            try 
            {
                $this->model->save_update(CRUD_Tools::all_param(), $id);      
                //$this->model->clear();
        
                if($this->request->post('submit_next'))
                {
                    $this->request->redirect($this->base_controller.$this->controller_name.'/add/');
                }
                else if($this->request->post('submit_previous'))
                {
                    $this->request->redirect($this->base_controller.$this->controller_name.'/show/');
                }
                else
                {
                    $this->request->redirect($this->base_controller.$this->controller_name.'/edit/'.$id);            
                }
            }
            catch(ORM_Validation_Exception $e)
            {
                //throw orm validation exception and send to view  
                $view->errors = $e->errors('validations');
            }
            catch(Validation_Exception $e)
            {
                //throw validation exception and send to view  
                $view->errors = $e->array->errors('validations');
            }
        }

        $view->id = $id;
        $view->base_controller = $this->base_controller;
        $view->name = $this->controller_name;
        $view->data = $this->model->get_for_edit($id);
        $view->columns = (object)array
        (
            'left' => array(), 
            'right' => array()
        );

        foreach($this->model->get_items() as $name => $column)
        {
            if($column->is_edit() AND $column->get_position() == 'left')
            {
                $view->columns->left[$name] = $column;
            }
            else if($column->is_edit() AND $column->get_position() == 'right')
            {
                $view->columns->right[$name] = $column;
            }
        }

        $this->template->content = $view->render();
    }
    
    
    public function action_delete()
    {
        $id = $this->request->param('id');
        
        if($id == null)
        {
            $this->request->redirect($this->base_controller.$this->controller_name.'/show/');
        }
        
        $this->model->delete_row($id);
        
        $this->request->redirect($this->base_controller.$this->controller_name.'/show/');
    }
    
    
    public function action_delete_many()
    {                
        $this->model->sort_rows($_POST['row']);

        $this->auto_render = FALSE;
        $this->response->body(__('Items sorted') . Debug::dump($_POST));
    }
    
    
    public function action_sort()
    {                
        $this->model->sort_rows($_POST['row']);

        $this->auto_render = FALSE;
        $this->response->body(__('Items sorted') . Debug::dump($_POST));
    }
    
    
}

?>
