<?php
\Route::controller('sl_deploy', '\Imvkmark\SlDeploy\Http\SlDeployController', [
	'postCodingDeploy' => 'sl_deploy.coding_deploy'
]);