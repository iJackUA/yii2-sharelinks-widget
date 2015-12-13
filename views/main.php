<?php
use ijackua\sharelinks\ShareLinks;
use \yii\helpers\Html;

/**
 * @var yii\base\View $this
 */

?>

<div class="socialShareBlock">
    <?=
    Html::a('<b>Fb</b>', $this->context->shareUrl(ShareLinks::SOCIAL_FACEBOOK),
            ['title' => 'Share to Facebook']) ?>
    <?=
    Html::a('<b>Tw</b>', $this->context->shareUrl(ShareLinks::SOCIAL_TWITTER),
            ['title' => 'Share to Twitter']) ?>
    <?=
    Html::a('<b>Li</b>', $this->context->shareUrl(ShareLinks::SOCIAL_LINKEDIN),
            ['title' => 'Share to LinkedIn']) ?>
    <?=
    Html::a('<b>GP</b>', $this->context->shareUrl(ShareLinks::SOCIAL_GPLUS),
            ['title' => 'Share to Google Plus']) ?>
    <?=
    Html::a('<b>Vk</b>', $this->context->shareUrl(ShareLinks::SOCIAL_VKONTAKTE),
            ['title' => 'Share to Vkontakte']) ?>
    <?=
    Html::a('<b>Xi</b>', $this->context->shareUrl(ShareLinks::SOCIAL_XING),
            ['title' => 'Share to Xing']) ?>
    <?=
    Html::a('<b>Ki</b>', $this->context->shareUrl(ShareLinks::SOCIAL_KINDLE),
            ['title' => 'Send to Kindle']) ?>
</div>


