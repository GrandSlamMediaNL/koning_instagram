<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

if (\Keizer\KoningInstagram\Utility\ConfigurationUtility::isValid()) {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Keizer.' . $_EXTKEY,
        'Auth',
        array(
            'Auth' => 'handleAuth'
        ),
        array(
            'Auth' => 'handleAuth'
        ),
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_PLUGIN
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Keizer.' . $_EXTKEY,
        'Show',
        array(
            'Content' => 'show'
        ),
        array(
            'Content' => 'show'
        ),
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_PLUGIN
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Keizer.' . $_EXTKEY,
        'User',
        array(
            'Content' => 'user'
        ),
        array(
            'Content' => 'user'
        ),
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_PLUGIN
    );
}
