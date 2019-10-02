<?php

namespace ctbuh\Document\Contracts;

interface DocumentRepositoryInterface
{
    /**
     * @param HasDocumentsInterface $account
     * @param DocumentInterface $document
     * @param array $options
     * @return DocumentInterface
     */
    public function persist(HasDocumentsInterface $account, DocumentInterface $document, $options);

    /**
     * @param HasDocumentsInterface $account
     * @return DocumentInterface[]
     */
    public function findAll(HasDocumentsInterface $account);

    /**
     * @param HasDocumentsInterface $account
     * @param $code
     * @return DocumentInterface
     */
    public function findByCode(HasDocumentsInterface $account, $code);
}
