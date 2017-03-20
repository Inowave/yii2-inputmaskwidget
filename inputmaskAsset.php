<?php
    namespace inowave\inputmaskwidget;  
   
    use yii\web\AssetBundle;
	use yii\base\InvalidConfigException;
	
	
    class inputmaskAsset extends AssetBundle
    {
		//public $sourcePath = '@vendor/inowave/inputmaskwidget/assets';
		public $sourcePath = __DIR__ . '/assets';
		
    	public $js = [
        	'js/jquery.inputmask.bundle.min.js'
    	];
	
    	public $depends = [
    		'yii\web\YiiAsset',
    	];
    }
 ?>