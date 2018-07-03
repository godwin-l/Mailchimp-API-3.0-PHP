<?php
/**
 * Created by IntelliJ IDEA.
 * User: hutch
 * Date: 7/3/18
 * Time: 3:18 PM
 */

namespace MailchimpTests\Reports;

use MailchimpAPI\Reports;
use MailchimpAPI\Reports\DomainPerformance;
use MailchimpTests\MailChimpTestCase;

/**
 * Class DomainPerformanceTest
 * @package MailchimpTests\Reports
 */
class DomainPerformanceTest extends MailChimpTestCase
{
    /**
     * @throws \MailchimpAPI\MailchimpException
     */
    public function testCollectionUrl()
    {
        $this->endpointUrlBuildTest(
            Reports::URL_COMPONENT . 1 . DomainPerformance::URL_COMPONENT,
            $this->mailchimp->reports(1)->domainPerformance(),
            "The Domain Performance collection endpoint should be constructed correctly"
        );
    }

    /**
     * @throws \MailchimpAPI\MailchimpException
     */
    public function testInstanceUrl()
    {
        $this->endpointUrlBuildTest(
            Reports::URL_COMPONENT . 1 . DomainPerformance::URL_COMPONENT . 1,
            $this->mailchimp->reports(1)->domainPerformance(1),
            "The Domain Performance instance endpoint should be constructed correctly"
        );
    }
}