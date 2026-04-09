<?php
Class Preview_Controller extends Controller {
	public function action_index($name) {
		$m = new Mongo();
		$mdb = $m->flexmailer;
		$campaign = $mdb->campaign;
		$thiscamp = $campaign->findOne(array('_id' => $name));
		if (!$thiscamp or !isset($thiscamp['html'])) {
			return Response::error('404');
		}
		return Response::make($thiscamp['html'], 200, array('Content-Type' => 'text/html; charset=UTF-8'));
	}
}
