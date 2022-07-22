<?php

namespace Customer\Data\CustomerData;

use Magento\Customer\CustomerData\SectionSourceInterface;
use Magento\Customer\Model\Session;
use Magento\Framework\Exception\LocalizedException;

class Show implements SectionSourceInterface
{
    /**
     * @var Session
     */
    protected Session $customer;

    public function __construct(Session $customer)
    {
        $this->customer=$customer;
    }

    /**
     * Get Section Name
     *
     * @return array
     * @throws LocalizedException
     */
    public function getSectionData()
    {
        return [
            'customdata' => $this->customer->getCustomer()->getName(),
        ];
    }
}
