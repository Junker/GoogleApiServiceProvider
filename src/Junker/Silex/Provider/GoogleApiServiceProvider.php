<?php

namespace Junker\Silex\Provider;

use Silex\Application;
use Silex\ServiceProviderInterface;


class GoogleApiServiceProvider implements ServiceProviderInterface
{
	public function register(Application $app)
	{
		$app['google.api'] = $app->share(function() use ($app)
		{
			$client = new \Google_Client();

			if (isset($app['google.api.key_file']))
			{
				$client->setAuthConfig($app['google.api.key_file']);
			}
			
			if (isset($app['google.api.api_key']))
			{
				$client->setDeveloperKey($app['google.api.api_key']);
			}

			if (isset($app['google.api.client_id']))
			{
				$client->setClientId($app['google.api.client_id']);
			}

			if (isset($app['google.api.client_secret']))
			{
				$client->setClientId($app['google.api.client_secret']);
			}

			if (isset($app['google.api.scopes']) && is_array($app['google.api.scopes']))
			{
				$client->setScopes($app['google.api.scopes']);
			} 
			else 
			{
				throw new Exception("Api scopes must be defined", 1);
			}

			return $client;
		});
	}

	public function boot(Application $app)
	{

	}
}
