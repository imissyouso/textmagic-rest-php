# TextMagic PHP SDK

This library provides you with an easy solution to send SMS and receive replies by integrating TextMagic SMS Gateway to your PHP application.
## What is TextMagic?
TextMagic's application programming interface (API) provides the communication link between your application and TextMagic’s SMS Gateway, allowing you to send and receive text messages and to check the delivery status of text messages you’ve already sent.

For detailed documentation, please visit [http://docs.textmagictesting.com/](http://docs.textmagictesting.com/)

## Requirements

PHP 5.5 and later

## Installation
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```javascript
{
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/imissyouso/textmagic-rest-php.git"
        }
    ],
    "require": {
        "imissyouso/textmagic-rest-php": "dev-master#v2.0.325"
    }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
require_once(__DIR__.'/vendor/autoload.php');
```

## Usage Example

Please follow the [installation](#installation) instruction and execute the following PHP code:

```php
require_once(__DIR__ . '/vendor/autoload.php');

use TextMagic\Models\SendMessageInputObject;
use TextMagic\Api\TextMagicApi;
use TextMagic\Configuration;

$config = Configuration::getDefaultConfiguration()
    ->setUsername('YOUR_USERNAME')
    ->setPassword('YOUR_PASSWORD');

$api = new TextMagicApi(
    new GuzzleHttp\Client(),
    $config
);

$input = new SendMessageInputObject();
$input->setText('Test message test');
$input->setPhones('+19993322111,+19993322110');

try {
    $result = $api->sendMessage($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->sendMessage: ', $e->getMessage(), PHP_EOL;
}
```

## License
The library is available as open source under the terms of the [MIT License](http://opensource.org/licenses/MIT).