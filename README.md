# GoogleApiServiceProvider

Google API Service Provider for Silex

## Installation
The best way to install HandlerSocketServiceProvider is to use a [Composer](https://getcomposer.org/download):

    php composer.phar require junker/google-api-service-provider
 
## Usage

```php
	$app->register(new Junker\Silex\Provider\GoogleApiServiceProvider(), [
		#Oauth instance
		'google.api.client.id' => '22166332432432113784.apps.googleusercontent.com', #optional
		'google.api.client.secret' => 'qa4R-T3-K7p4hWGtZ1SVpMlr.apps.googleusercontent.com', #optional
		'google.api.client.scopes' => ['https://www.googleapis.com/auth/userinfo.profile'], #optional

		'google.api.service.key_file' => __DIR__.'/../google.json', #optional
		'google.api.service.scopes' => __DIR__.'/../google.json', #optional

		'google.api.developer.key' => 'AIzgSyrQTNQ-kNhhwVYjTLakWEW_T89zbCvzYS8', #optional
	]);

	$oauth_client = $app['google.api.client'];
	$service_client = $app['google.api.service'];
	$developer_client = $app['google.api.developer'];
```

## Documentation
* https://github.com/google/google-api-php-client
