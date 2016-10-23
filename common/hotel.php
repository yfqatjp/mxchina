<?php
/**
 * 基本类
 */
abstract class Hotel {

    // 当前数据库操作对象
    public $db               =   null;

    /**
     * 架构函数
     * @access public
     * @param mixed $connection 数据库连接信息
     */
    public function __construct($db) {
    	//
    	$this->db = $db;
        // 模型初始化
        $this->_initialize();
    }

    /**
     * 初始化处理
     */
    protected function _initialize() {
    	
    }
    
    /**
     * 执行动作前的处理
     */
    public function beforeAction() {
    }
    
    
}