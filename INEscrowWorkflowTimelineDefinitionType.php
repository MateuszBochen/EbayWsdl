<?php

namespace EbayWsdl;

class INEscrowWorkflowTimelineDefinitionType
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $any
     */
    public function __construct($any = null)
    {
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \EbayWsdl\INEscrowWorkflowTimelineDefinitionType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}