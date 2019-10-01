<?php

namespace ctbuh\Document;

/**
 * Interface DocumentInterface
 *
 * Serializable Export Class.
 *
 * @package ctbuh\Document
 */
interface DocumentInterface
{
    /**
     * Uniquely identifies this 'type' of document. Each Document has an owner too.
     * @return string
     */
    public function getCode();

    // public function getPathPrefix();

    /**
     * Default filename to be used when exporting.
     * @return mixed
     */
    public function getFilename();

    // public function getAlternativeFilename();

    /**
     * Get Document contents as HTML.
     * @return string
     */
    public function toHtml();

    /**
     * PDF document as raw bytes. toBytes(), toPdf()
     * @return string
     */
    public function asPdf();
}
