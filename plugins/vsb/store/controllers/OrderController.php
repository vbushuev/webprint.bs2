<?php namespace Vsb\Store\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class OrderController extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'manager.orders'
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Vsb.Store', 'main-menu-item', 'side-menu-item');
        // BackendMenu::setContext('Vsb.Store', 'main-menu-item2');
    }
}
