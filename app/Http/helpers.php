<?php

    function load_asset($asset_url)
    {
        return ( env('APP_ENV') === 'production' ) ? secure_asset($asset_url) : asset($asset_url);
    }
