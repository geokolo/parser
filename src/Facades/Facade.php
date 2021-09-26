<?php

namespace Caleido\Parser\Facades;

/**
 * @method \Caleido\Parser\Document extract(string $content)
 * @method \Caleido\Parser\Document load(string $filename)
 * @method \Caleido\Parser\Document local(string $filename)
 * @method \Caleido\Parser\Document remote(string $filename)
 * @method \Caleido\Parser\Document via(\SimpleXMLIterator $xml)
 *
 * @see \Caleido\Parser\Xml\Reader
 */
class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'caleido.parser.facades';
    }
}