<?php
/**
 * @author Rafael J Torres <rafaelt88@gmail.com@gmail.com>
 */
class Calendar extends CWidget {
	public $events;
	public function init() {
		$assets = Yii::app ()->assetManager->publish ( dirname ( __FILE__ ) . '/assets' );
		Yii::app ()->clientscript->registerCssFile ( $assets . '/css/fullcalendar.css' )->registerCss ( 'calendar', '.fc-view{overflow: visible;}#calendar{line-height: 15px;}' )->registerScriptFile ( $assets . '/js/fullcalendar.js', CClientScript::POS_END );
	}
	public function run() {
		$this->render ( 'index', array (
				'events' => $this->events 
		) );
	}
}