<?php 
/**
	Admin Page Framework v3.8.15 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/cs-tmc>
	Copyright (c) 2013-2017, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
abstract class cs_tmc_AdminPageFramework_MetaBox_Page extends cs_tmc_AdminPageFramework_PageMetaBox {
    public function __construct($sMetaBoxID, $sTitle, $asPageSlugs = array(), $sContext = 'normal', $sPriority = 'default', $sCapability = 'manage_options', $sTextDomain = 'cs-tmc') {
        parent::__construct($sMetaBoxID, $sTitle, $asPageSlugs, $sContext, $sPriority, $sCapability, $sTextDomain);
        $this->oUtil->showDeprecationNotice('The class, ' . __CLASS__ . ',', 'cs_tmc_AdminPageFramework_PageMetaBox');
    }
}
