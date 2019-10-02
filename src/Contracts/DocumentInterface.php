<?php

namespace ctbuh\Document\Contracts;

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
     * Uniquely identifies this 'type' of document.
     * @return string
     */
    public function getCode();

    /**
     * Namespace prefix for where this Document would be stored.
     * TODO: rename to getStoragePath() ?
     * @return string
     */
    public function getFolderPath();

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
     * PDF document as raw bytes.
     * TODO: move into its own PdfDocumentInterface?
     * 
     * @return string
     */
    public function asPdf();

    /**
     * Publicly accessible link for this Document.
     * S3 URL typically.
     * 
     * @return string
     */
    public function getUrl();
}
