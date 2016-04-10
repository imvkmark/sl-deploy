<?php namespace Imvkmark\SlDeploy\Http;

use App\Http\Controllers\Controller;
use Imvkmark\SlDeploy\Jobs\WebDeploy;

class SlDeployController extends Controller {

	public function postCodingDeploy() {
		if (\Input::get('token') == config('app.key')) {
			dispatch(new WebDeploy());
		} else {
			\Log::error('Deploy! But Token Error!');
		}
	}
}

