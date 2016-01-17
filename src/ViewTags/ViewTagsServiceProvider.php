<?php

namespace ViewTags;

use Illuminate\Support\ServiceProvider;

class ViewTagsServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     * @return void
     */
    public function register()
    {
        $this->app->singleton('view.tags', function ()
        {
            return new TagsContainer();
        });
    }
}
