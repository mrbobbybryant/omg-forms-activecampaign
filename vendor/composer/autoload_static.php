<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit64b8ca80d14e9dc2927efe38fc864132
{
    public static $files = array (
        'cd575c704bc00f8c79fca9bc7fcc7bdc' => __DIR__ . '/..' . '/omg-forms/omg-forms.php',
        '6672aa223b2413f26793833d2a93851f' => __DIR__ . '/../..' . '/omg-forms-basic.php',
    );

    public static $classMap = array (
        'AC_Account' => __DIR__ . '/..' . '/activecampaign/api-php/includes/Account.class.php',
        'AC_Auth' => __DIR__ . '/..' . '/activecampaign/api-php/includes/Auth.class.php',
        'AC_Automation' => __DIR__ . '/..' . '/activecampaign/api-php/includes/Automation.class.php',
        'AC_Campaign' => __DIR__ . '/..' . '/activecampaign/api-php/includes/Campaign.class.php',
        'AC_Connector' => __DIR__ . '/..' . '/activecampaign/api-php/includes/Connector.class.php',
        'AC_Contact' => __DIR__ . '/..' . '/activecampaign/api-php/includes/Contact.class.php',
        'AC_Deal' => __DIR__ . '/..' . '/activecampaign/api-php/includes/Deal.class.php',
        'AC_Design' => __DIR__ . '/..' . '/activecampaign/api-php/includes/Design.class.php',
        'AC_Form' => __DIR__ . '/..' . '/activecampaign/api-php/includes/Form.class.php',
        'AC_Group' => __DIR__ . '/..' . '/activecampaign/api-php/includes/Group.class.php',
        'AC_List_' => __DIR__ . '/..' . '/activecampaign/api-php/includes/List.class.php',
        'AC_Message' => __DIR__ . '/..' . '/activecampaign/api-php/includes/Message.class.php',
        'AC_Organization' => __DIR__ . '/..' . '/activecampaign/api-php/includes/Organization.class.php',
        'AC_Segment' => __DIR__ . '/..' . '/activecampaign/api-php/includes/Segment.class.php',
        'AC_Settings' => __DIR__ . '/..' . '/activecampaign/api-php/includes/Settings.class.php',
        'AC_Subscriber' => __DIR__ . '/..' . '/activecampaign/api-php/includes/Subscriber.class.php',
        'AC_Tag' => __DIR__ . '/..' . '/activecampaign/api-php/includes/Tag.class.php',
        'AC_Tracking' => __DIR__ . '/..' . '/activecampaign/api-php/includes/Tracking.class.php',
        'AC_User' => __DIR__ . '/..' . '/activecampaign/api-php/includes/User.class.php',
        'AC_Webhook' => __DIR__ . '/..' . '/activecampaign/api-php/includes/Webhook.class.php',
        'ActiveCampaign' => __DIR__ . '/..' . '/activecampaign/api-php/includes/ActiveCampaign.class.php',
        'RequestException' => __DIR__ . '/..' . '/activecampaign/api-php/includes/exceptions/RequestException.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit64b8ca80d14e9dc2927efe38fc864132::$classMap;

        }, null, ClassLoader::class);
    }
}
