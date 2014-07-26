<?php
/**
 * User: Singrana
 * @email: singrana@singrana.com
 * Date: 25.07.14 21:36
 */

namespace singrana\widgets\MoveTop;

class GoTopAsset extends \yii\web\AssetBundle
{
	public $baseUrl = '@web';

	public $css =
	[
		'css/style.less',
	];

	public $js =
	[
		'js/moveTop.js',
	];

	public function init()
	{
		$this->sourcePath=__DIR__.'/assets';

		parent::init();
	}
}