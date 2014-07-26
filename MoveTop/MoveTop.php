<?php
/**
 * User: Singrana
 * @email: singrana@singrana.com
 * Date: 25.07.14 21:14
 */

namespace singrana\widgets\MoveTop;

use yii\base\Widget;
use yii\helpers\Html;

use singrana\widgets\MoveTop\GoTopAsset;

class MoveTop extends Widget
{
	public $icon='fa fa-angle-double-up';
	public $useFontAwesome	=	true;

	public function run()
	{
		if($this->useFontAwesome)
			\singrana\fontAwesome\FontAwesomeAsset::register($this->getView());

		GoTopAsset::register($this->getView());

		return Html::a(Html::tag('i', '', ['class' => 'go-top '.$this->icon]), '#');
	}
}