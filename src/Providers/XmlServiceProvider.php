<?php

namespace Caleido\Parser\Providers;

use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use Caleido\Parser\Facades\Document as XmlDocument;
use Caleido\Parser\Facades\Reader as XmlReader;
// use Caleido\Parser\Xml\Document as XmlDocument;
// use Caleido\Parser\Xml\Reader as XmlReader;

class XmlServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('caleido.parser.facades', static function (Container $app) {
            return new XmlReader(new XmlDocument($app));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['caleido.parser.facades'];
    }
}
