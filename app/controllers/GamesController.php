<?php

class GamesController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function getMain()
	{
		echo 'You\'ve made it to games main';
		// if ( ! is_null($this->layout))
// 		{
// 			$this->layout = View::make($this->layout);
// 		}
	}

}
