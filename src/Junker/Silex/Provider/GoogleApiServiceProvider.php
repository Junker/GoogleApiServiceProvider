<?php

namespace Junker\Silex\Provider;

use Silex\Application;
use Silex\ServiceProviderInterface;


class GoogleApiServiceProvider implements ServiceProviderInterface
{
	public function register(Application $app)
	{
		$app['google.api.client'] = $app->share(function() use ($app)
		{
			$client = new \Google_Client();

			if (isset($app['google.api.client.id']))
				$client->setClientId($app['google.api.client.id']);
			else
				throw new \Exception("google.api.client.id must be defined", 1);

			if (isset($app['google.api.client.secret']))
				$client->setClientSecret($app['google.api.client.secret']);
			else
				throw new \Exception("google.api.client.secret must be defined", 1);

			if (isset($app['google.api.client.scopes']))
				$client->setScopes($app['google.api.client.scopes']);
			else
				throw new \Exception("google.api.client.scopes must be defined", 1);

			return $client;
		});

		$app['google.api.developer'] = $app->share(function() use ($app)
		{
			$client = new \Google_Client();

			if (isset($app['google.api.developer.key']))
				$client->setDeveloperKey($app['google.api.developer.key']);
			else
				throw new \Exception("google.api.developer.key must be defined", 1);

			if (isset($app['google.api.developer.scopes']))
				$client->setScopes($app['google.api.developer.scopes']);

			return $client;
		});

		$app['google.api.service'] = $app->share(function() use ($app)
		{
			$client = new \Google_Client();

			if (isset($app['google.api.service.key_file']))
				$client->setAuthConfig($app['google.api.service.key_file']);
			else
				throw new \Exception("google.api.service.key_file must be defined", 1);
			
			
			if (isset($app['google.api.service.scopes']))
				$client->setScopes($app['google.api.service.scopes']);

			return $client;
		});
	}

	public function boot(Application $app)
	{

	}
}
