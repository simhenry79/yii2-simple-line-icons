Yii 2 Simple Line Icons Asset Bundle
====================================

This extension provides a assets bundle with [Simple Line Icons](http://thesabbir.github.io/simple-line-icons/)
for [Yii framework 2.0](http://www.yiiframework.com/) applications and helper to use icons.

For license information check the [LICENSE](https://github.com/wfcreations/yii2-simple-line-icons/blob/master/LICENSE)-file.

[![Latest Stable Version](https://poser.pugx.org/wfcreations/yii2-simple-line-icons/v/stable)](https://packagist.org/packages/wfcreations/yii2-simple-line-icons) [![Total Downloads](https://poser.pugx.org/wfcreations/yii2-simple-line-icons/downloads)](https://packagist.org/packages/wfcreations/yii2-simple-line-icons) [![Latest Unstable Version](https://poser.pugx.org/wfcreations/yii2-simple-line-icons/v/unstable)](https://packagist.org/packages/wfcreations/yii2-simple-line-icons) [![License](https://poser.pugx.org/wfcreations/yii2-simple-line-icons/license)](https://packagist.org/packages/wfcreations/yii2-simple-line-icons)

Installation
------------

The preferred way to install this extension is through [composer](https://getcomposer.org/).

Either run

```bash
composer require "wfcreations/yii2-simple-line-icons:*"
```

or add

```
"wfcreations/yii2-simple-line-icons": "*",
```

to the `require` section of your `composer.json` file.

Usage
-----

In view

```php
wfcreations\simplelineicons\AssetBundle::register($this);

```

or as dependency in your main application asset bundle

```php
class AppAsset extends AssetBundle
{
	// ...

	public $depends = [
		// ...
		'\wfcreations\simplelineicons\AssetBundle'
	];
}

```

Helper
------

```php
use wfcreations\simplelineicons\SLI;

echo SLI::icon('home'); // <i class="icon-home"></i>
echo SLI::icon(
    'home', 
    ['data-role' => 'home']
); // <i class="home" data-role="home"></i>

echo Html::submitButton(
    Yii::t('app', '{icon} Login', ['icon' => SLI::icon('login')])
); // <button type="submit"><i class="icon-login"></i> Login</button>

// autocomplete icons name in IDE
echo SLI::icon(SLI::_USER_FEMALE);
echo SLI::icon(SLI::_USER_FOLLOW);
```
