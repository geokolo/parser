<?php

namespace Caleido\Parser\Facades;

use Caleido\Parser\Xml\Reader as BaseReader;
use SimpleXMLIterator;

class Reader extends BaseReader
{
    /**
     * Provides SimpleXMLIterator to document.
     *
     * @return \Caleido\Parser\Document
     */
    public function via(SimpleXMLIterator $xml)
    {
        return $this->document->setContent($xml);
    }
}