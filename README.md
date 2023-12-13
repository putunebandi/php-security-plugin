# php-security-plugin

[![made-with-PHP](https://img.shields.io/badge/made%20with-PHP-blue.svg)](https://www.php.net/)
[![license](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)
[![issues](https://img.shields.io/github/issues/putunebandi/php-security-plugin?color=blue)](https://github.com/putunebandi/php-security-plugin/issues)

<p align="center">
  <img src="https://gist.githubusercontent.com/putunebandi/7bafeac9025f05612c54fd4698f26226/raw/462ed642252bffd7c4dcb23ce957a2c53af2b54f/picture_BandiSecurity.png" alt="Hello World" width="40%">
</p>

This project is a simple implementation to improve security in PHP applications. The Security class provides several basic security features, including setting security headers and filtering parameters to protect against potential attacks.

---

## Resources

- [Installation](#installation)
- [Usage](#usage)
- [License](#license)
- [Version](#version)
- [Thanks](#thanks)

## Installation

You can use this security plugin easily by simply copying the code from the BandiSecurity.php and including the script into the main configuration or header file.

## Usage

You can enhance the security layer of your PHP project by utilizing the 'Security' class. It offers easy integration and can be customized to meet your specific needs. Here's an example code snippet for implementation.

1. Using include_once() or require_once()
```php
<?php
// ...
include_once('BandiSecurity.php');
// or use
require_once('BandiSecurity.php');
// ...
?>
```
2. Adding Code to Main Configuration or Header
```php
<?php

// Simple PHP Security Plugin
// Coded by Rizki Wahyu Pratama
// Thanks to Afrizal F.A, incrustwerush.org, @dwisiswant0, noobsec.org

if (!class_exists('Security')) {
    class Security
    {
        // ...
        // ...
    }

    Security::setHeaders();
    Security::applySecurity();
}
?>
<?php
// Your config or header here
?>
```

## License

Please see the [LICENSE file](LICENSE) for more information.

## Thanks
Thanks for some references and ideas for making this tool

- [In Crust We Rush - PHP Security Plugin](https://github.com/ICWR-TECH/PHP-Security-Plugin)
- [noobSecurity - AntiScanScanClub](https://github.com/noobsec/AntiScanScanClub-laravel)
