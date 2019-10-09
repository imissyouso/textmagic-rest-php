[comment]: <> (HEAD)
# TextMagic PHP SDK
This library provides you with an easy way of sending SMS and receiving replies by integrating TextMagic SMS Gateway into your PHP application.

## What Is TextMagic?
TextMagic’s application programming interface (API) provides the communication link between your application and TextMagic’s SMS Gateway, allowing you to send and receive text messages and to check the delivery status of text messages you’ve already sent.


[comment]: <> (/HEAD)
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
        "imissyouso/textmagic-rest-php": "dev-master#v2.0.589"
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

Please follow the [installation](#installation) instructions and execute the following PHP code:

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

// Simple ping request example
try {
    $result = $api->ping();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->ping: ', $e->getMessage(), PHP_EOL;
}

// Send a new message request example
$input = new SendMessageInputObject();
$input->setText('Test message test');
$input->setPhones('+19993322111,+19993322110');

try {
    $result = $api->sendMessage($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->sendMessage: ', $e->getMessage(), PHP_EOL;
}

// Get all outgoing messages request example
try {
    $result = $api->getAllOutboundMessages(1, 10);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getAllOutboundMessages: ', $e->getMessage(), PHP_EOL;
}

// Upload an avatar for a contacts list (group) example. 3223 number here it is sample list ID
try {
    $file = new SplFileObject("test.jpg");
    $result = $api->uploadListAvatar($file, 3223);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->uploadListAvatar: ', $e->getMessage(), PHP_EOL;
}

```
[comment]: <> (FOOTER)
## License
The library is available as open source under the terms of the [MIT License](http://opensource.org/licenses/MIT).

[comment]: <> (/FOOTER)