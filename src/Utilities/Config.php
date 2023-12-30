<?php

namespace Yajra\DataTables\Utilities;

use Illuminate\Contracts\Config\Repository;
use Webman\Config as BaseConfig;

class Config
{

    /**
     * Check if config uses wild card search.
     *
     * @return bool
     */
    public function isWildcard(): bool
    {
        return (bool) BaseConfig::get('datatables.search.use_wildcards', false);
    }

    /**
     * Check if config uses smart search.
     *
     * @return bool
     */
    public function isSmartSearch(): bool
    {
        return (bool) BaseConfig::get('datatables.search.smart', true);
    }

    /**
     * Check if config uses case-insensitive search.
     *
     * @return bool
     */
    public function isCaseInsensitive(): bool
    {
        return (bool) BaseConfig::get('datatables.search.case_insensitive', false);
    }

    /**
     * Check if app is in debug mode.
     *
     * @return bool
     */
    public function isDebugging(): bool
    {
        return (bool) BaseConfig::get('app.debug', false);
    }

    /**
     * Get the specified configuration value.
     *
     * @param  string  $key
     * @param  mixed  $default
     * @return mixed
     */
    public function get($key, $default = null)
    {
        return BaseConfig::get($key, $default);
    }

    /**
     * Set a given configuration value.
     *
     * @param  array|string  $key
     * @param  mixed  $value
     * @return void
     */
    public function set($key, $value = null)
    {
        
    }

    /**
     * Check if dataTable config uses multi-term searching.
     *
     * @return bool
     */
    public function isMultiTerm(): bool
    {
        return (bool) BaseConfig::get('datatables.search.multi_term', true);
    }

    /**
     * Check if dataTable config uses starts_with searching.
     *
     * @return bool
     */
    public function isStartsWithSearch(): bool
    {
        return (bool) BaseConfig::get('datatables.search.starts_with', false);
    }

    public function jsonOptions(): int
    {
        /** @var int $options */
        $options = BaseConfig::get('datatables.json.options', 0);

        return $options;
    }

    public function jsonHeaders(): array
    {
        return (array) BaseConfig::get('datatables.json.header', []);
    }
}
