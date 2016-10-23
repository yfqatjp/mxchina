<?php
require_once(SYSBASE."common/hotel.php");
/**
 * 前台类
 */
class Front extends Hotel {

    /**
     * 初始化处理
     */
    protected function _initialize() {
    	parent::_initialize();
    	
    }
    
    /**
     * 执行动作前的处理
     */
    public function beforeAction() {
    	parent::beforeAction();
    }
}

// 前台的应用
$hotelApp = new Front($db);

// 应用的前期处理
$hotelApp->beforeAction();