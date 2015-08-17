yii2-sharelinks-widget
======================

Yii2 widget for popular social networks "share link" generation

## Supported Social Networks

* [Facebook](http://facebook.com)
* [Twitter](http://twitter.com)
* [Google+](http://plus.google.com)
* [Vkontakte](http://vk.com)
* [LinkedIn](http://linkedin.com)
* [Send to Kindle](http://fivefilters.org/kindle-it)

## Installation via Composer
add to `require` section of your `composer.json`
`"ijackua/yii2-sharelinks-widget": "dev-master"`
and run composer update

## Usage Example
in template file use
~~~php
<?php echo \ijackua\sharelinks\ShareLinks::widget(
	[
		'viewName' => '@app/views/mypath/shareLinks.php'   //custom view file for you links appearance
	]
); ?>
~~~

## Example custom view file
This eaxmple uses custom icons from Fontello, but you can make it what ever you want and customize what links do you need and what not.
Your `@app/views/mypath/shareLinks.php` file could look like
~~~php
<?php
use ijackua\sharelinks\ShareLinks;
use \yii\helpers\Html;

/**
 * @var yii\base\View $this
 */

?>

<div class="socialShareBlock">
	<?=
	Html::a('<i class="icon-facebook-squared"></i>', $this->context->shareUrl(ShareLinks::SOCIAL_FACEBOOK),
		['title' => 'Share to Facebook']) ?>
	<?=
	Html::a('<i class="icon-twitter-squared"></i>', $this->context->shareUrl(ShareLinks::SOCIAL_TWITTER),
		['title' => 'Share to Twitter']) ?>
	<?=
	Html::a('<i class="icon-linkedin-squared"></i>', $this->context->shareUrl(ShareLinks::SOCIAL_LINKEDIN),
		['title' => 'Share to LinkedIn']) ?>
	<?=
	Html::a('<i class="icon-gplus-squared"></i>', $this->context->shareUrl(ShareLinks::SOCIAL_GPLUS),
		['title' => 'Share to Google Plus']) ?>
	<?=
	Html::a('<i class="icon-vkontakte"></i>', $this->context->shareUrl(ShareLinks::SOCIAL_VKONTAKTE),
		['title' => 'Share to Vkontakte']) ?>
	<?=
	Html::a('<i class="icon-tablet"></i>', $this->context->shareUrl(ShareLinks::SOCIAL_KINDLE),
		['title' => 'Send to Kindle']) ?>
</div>
~~~
