<?php
    namespace inowave\inputmaskwidget;
	use yii\base\Widget;
	use yii\helpers\Inflector;
	use yii\base\InvalidConfigException;

    class inputmask extends Widget {
    	public function init() {
    		parent::init();
			$this->view = $this->getView();
    	}
		
		public function run() {
			inputmaskAsset::register($this->view);
		}
    } 
?>