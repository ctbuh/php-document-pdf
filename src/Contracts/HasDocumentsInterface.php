<?php

namespace ctbuh\Document\Contracts;

interface HasDocumentsInterface
{
    /**
     * Usually: /entity_type/{unique_id}/. Like: /members/5609836281
     * @return string
     */
    public function getDocumentFolderPath();

    /**
     * @return DocumentInterface[]
     */
     public function getAllDocuments();

    /**
     * Find first Document matching certain code.
     * 
     * @param $code
     * @return DocumentInterface
     */
    public function getDocumentByCode($code);

    // public function deleteDocumentsByCode($code);
}
