<?php

namespace PicturePark\API\Model;

class OutputResolveManyRequest
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The IDs of the contents whose outputs should to be retrieved.
     *
     * @var list<string>
     */
    protected $contentIds;
    /**
     * The IDs of the contents whose outputs should to be retrieved.
     *
     * @return list<string>
     */
    public function getContentIds() : array
    {
        return $this->contentIds;
    }
    /**
     * The IDs of the contents whose outputs should to be retrieved.
     *
     * @param list<string> $contentIds
     *
     * @return self
     */
    public function setContentIds(array $contentIds) : self
    {
        $this->initialized['contentIds'] = true;
        $this->contentIds = $contentIds;
        return $this;
    }
}