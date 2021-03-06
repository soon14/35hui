<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController {
    /**
     * @var string the default layout for the controller view. Defaults to '//layouts/column1',
     * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
     */
    public $layout='//layouts/column1';
    /**
     * @var array context menu items. This property will be assigned to {@link CMenu::items}.
     */
    public $menu=array();
    public $menuAction=array();
    /**
     * @var array the breadcrumbs of the current page. The value of this property will
     * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
     * for more details on how to specify this property.
     */
    public $breadcrumbs=array();
    /**
     * 当前的树形菜单的id
     * @var <type>
     */
    public $currentMenu = 0;
    /**
     * RBAC 验证
     * @return bool
     */
    protected function beforeAction($action) {
        $item = strtolower($this->route);// @see CController::getRoute();
        if(Yii::app()->params['autoAddOperation']){
            $auth = Yii::app()->getAuthManager();
            if( $auth->getAuthItem($item)===NULL )
                $auth->createOperation($item,$item);
        }
        $user = Yii::app()->user;
        if($user->getIsGuest())
            $user->loginRequired();
        else {
            if( $user->checkAccess(Yii::app()->params['systemAdministrator']) )
                return true;
            if( ! $user->checkAccess($item) ) 
                throw new CHttpException(403,'You are not authorized to perform this action.');
            return true;
        }
    }
}