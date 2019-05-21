<?php
namespace Tests\Models;

class CustomCategory extends Category {
    protected $appends = ['is_admin'];

	public function getCacheTTL() {
        return 5;
    }

    public function getCacheTagName() {
        return 'custom_category';
    }

    public function isCacheBustingEnabled() {
        return $GLOBALS['cache_busting'];
    }

    public function isStaticCacheEnabled() {
        return true;
    }

    public function getIsAdminAttribute() {
        return true;
    }
}