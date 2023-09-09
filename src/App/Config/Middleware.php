<?php
declare(strict_types=1);

namespace App\Config;

use Framework\App;
use App\Middleware\{
	TemplateDataMiddleware,
	ValidationExceptionMiddleware,
	SessionMiddleware,
	FlashMiddleware,
	CSRFTokenMiddleware,
	CSRFGuardMiddleware
};

function registerMiddleware(App $app)
{
	$app->addMiddleware(CSRFGuardMiddleware::class);
	$app->addMiddleware(CSRFTokenMiddleware::class);
	$app->addMiddleware(TemplateDataMiddleware::class);
	$app->addMiddleware(ValidationExceptionMiddleware::class);
	$app->addMiddleware(FlashMiddleware::class);
	$app->addMiddleware(SessionMiddleware::class);
}