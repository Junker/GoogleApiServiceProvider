# googleApiServiceProvi

Google API Service Provider for Silex

## Installation
The best way to install HandlerSocketServiceProvider is to use a [Composer](https://getcomposer.org/download):

    php composer.phar require junker/google-api-service-provider
 
## Usage

```php
	$app->register(new Junker\Silex\Provider\GoogleApiServiceProvider(), [
		'google.api.scopes' => 'http://www.google.com/calendar/feeds/ https://www.googleapis.com/auth/androidpublisher', #required
		'google.api.key_file' => __DIR__.'/../google.json', #optional
		'google.api.api_key' => 'AIzgSyrQTNQ-kNhhwVYjTLakWEW_T89zbCvzYS8', #optional
		'google.api.client_id' => '22166332432432113784.apps.googleusercontent.com', #optional
		'google.api.client_secret' => 'qa4R-T3-K7p4hWGtZ1SVpMlr.apps.googleusercontent.com', #optional
	]);

	$client = $app['google.api'];
```

## Documentation
https://github.com/google/google-api-php-client
https://code.google.com/p/google-api-php-client/wiki/OAuth2
