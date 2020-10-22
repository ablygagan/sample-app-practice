<?php
class FatController {
	
	protected $_modelName;
	protected $_controllerName;
	protected $_actionName;
	protected $_template;

	protected $_autoCreateModel = true;

	function __construct($action) {
		echo 'Contr-->'.$this->_controllerName = get_class($this);
		echo '<br/>';
		echo 'Model-->'.$this->_modelName = substr($this->_controllerName, 0, (strlen($this->_controllerName)) - strlen('Controller'));
		echo '<br/>';
		echo 'Action-->'.$this->_actionName = $action;

		$model = $this->_modelName;
		
		if ($this->_autoCreateModel) {
			if (file_exists ( CONF_APPLICATION_PATH . 'models/' . strtolower ( $this->_modelName ) . '.php' )) {
				$this->$model = new $model ();
			} else {
				$this->$model = new FatModel ();
			}
		}

		$this->_template = new FatTemplate($this->_controllerName, $this->_actionName);

	}

	function set($name,$value) {
		
		$this->_template->set($name, $value);
	}
}
