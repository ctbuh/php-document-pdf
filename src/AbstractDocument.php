<?php

namespace ctbuh\Document;

use ctbuh\Document\Contracts\DocumentInterface;
use ctbuh\PdfApi\PdfApi;

abstract class AbstractDocument implements DocumentInterface
{
    protected $options = array();
    protected $pdfApi;

    public function getCode()
    {
        return get_class($this);
    }

    public function getFolderPath()
    {
        return null;
    }

    /**
     * @return string
     */
    abstract public function getFilename();

    protected function getClientOptions()
    {
        return array(
            'api_host' => '',
            'api_endpoint_url' => '',
            'api_token' => ''
        );
    }

    public function getOptions()
    {
        return array(
            /*
            'viewportSize' => '1024x768',
            'noOutline' => true,
            'printMediaType' => true,
            'disableJavascript' => true,
            'marginTop' => '1cm',
            'marginRight' => '0.5cm',
            'marginBottom' => '0.5cm',
            'marginLeft' => '0.5cm',
            'pageSize' => 'A4',
            'dpi' => 96, // 72 recommended, 96 default, has no affect on windows
            */
        );
    }

    abstract public function toHtml();

    /**
     * @param null $filename
     * @param array $headers
     * @return void
     */
    final public function inlinePdf($filename = null, $headers = array())
    {
        $api = new PdfApi();
        $api->inline($this->toHtml(), $this->getOptions(), $this->getFilename());
    }

    /**
     * @return void
     */
    final public function downloadPdf($filename = null)
    {
        $api = new PdfApi();
        $api->download($this->toHtml(), $this->getOptions(), $this->getFilename());
    }

    final public function asPdf()
    {
        $api = new PdfApi();
        return $api->convert($this->toHtml(), $this->getOptions());
    }

    public function getUrl()
    {
        return null;
        //throw new BadMethodCallException('Pending Implementation! This Document only exists in memory at this moment!');
    }
}
