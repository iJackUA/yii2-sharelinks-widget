<?php
namespace ijackua\sharelinks;

use ijackua\sharelinks\ShareLinksAssets;
use Yii;
use yii\helpers\ArrayHelper;

class ShareLinks extends \yii\base\Widget
{
	/**
	 * Constants representing each socil net
	 */
	const SOCIAL_TWITTER = 1;
	const SOCIAL_FACEBOOK = 2;
	const SOCIAL_VKONTAKTE = 3;
	const SOCIAL_GPLUS = 4;
	const SOCIAL_LINKEDIN = 5;
	const SOCIAL_KINDLE = 6;
	const SOCIAL_XING = 7;

	/**
	 * Path to view file that will contain markup for the whole soc net buttons block
	 *
	 * @var string
	 */
	public $viewName = 'main';
	/**
	 * Url to share
	 *
	 * @var string
	 */
	public $url;
	/**
	 * jQuery selector for sharing links (to bind popup on click there)
	 *
	 * @var string
	 */
	public $linkSelector = '.socialShareBlock a';
	/**
	 * Sharing url template for each network
	 *
	 * @var array
	 */
	public $shareUrlMap = [
		self::SOCIAL_TWITTER => 'https://twitter.com/intent/tweet?url={url}',
		self::SOCIAL_FACEBOOK => 'https://www.facebook.com/sharer/sharer.php?u={url}',
		self::SOCIAL_VKONTAKTE => 'http://vk.com/share.php?url={url}',
		self::SOCIAL_GPLUS => 'https://plus.google.com/share?url={url}',
		self::SOCIAL_LINKEDIN => 'http://www.linkedin.com/shareArticle?url={url}',
		self::SOCIAL_KINDLE => 'http://fivefilters.org/kindle-it/send.php?url={url}',
		self::SOCIAL_XING => 'https://www.xing.com/spi/shares/new?url={url}'
	];

	public function init()
	{
		$this->url = (empty($this->url)) ? Yii::$app->getRequest()->getAbsoluteUrl() : $this->url;
		ShareLinksAssets::register($this->view);
	}

	public function run()
	{
		$js = '$("' . $this->linkSelector . '").yiiShareLinks();';
		$this->view->registerJs($js);
		echo $this->render($this->viewName);
	}

	public function shareUrl($networkId)
	{
		return str_replace('{url}', urlencode($this->url), ArrayHelper::getValue($this->shareUrlMap, $networkId));
	}

}
