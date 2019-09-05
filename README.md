# TextMagic PHP SDK

PHP client for TextMagic API

For detailed documentation, please visit [https://www.textmagic.com/docs/api/](https://www.textmagic.com/docs/api/)

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
        "imissyouso/textmagic-rest-php": "*@dev"
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