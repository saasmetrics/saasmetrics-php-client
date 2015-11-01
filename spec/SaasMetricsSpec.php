<?php

namespace spec\SaasMetrics;

use GuzzleHttp\ClientInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SaasMetricsSpec extends ObjectBehavior
{
    function let($apiKey)
    {
        $this->beConstructedWith($apiKey);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('SaasMetrics\SaasMetrics');
    }

    function it_is_initializable_with_an_handler($apiKey, ClientInterface $handler)
    {
        $this->beConstructedWith($apiKey, [
            'handler' => $handler,
        ]);
        $this->shouldHaveType('SaasMetrics\SaasMetrics');
    }

    function it_should_only_allow_specific_handler($apiKey)
    {
        $this->beConstructedWith($apiKey, [
            'handler' => 'foo',
        ]);
        $this->shouldThrow('\InvalidArgumentException')->duringInstantiation();
    }

    function it_gets_bookings_metric($value, \DateTime $date)
    {
        $this->bookings($value, $date)->shouldHaveType('SaasMetrics\Metric');
    }

    function it_gets_new_mrr_metric($value, \DateTime $date)
    {
        $this->newMRR($value, $date)->shouldHaveType('SaasMetrics\Metric');
    }

    function it_gets_avg_deal_size_metric($value, \DateTime $date)
    {
        $this->avgDealSize($value, $date)->shouldHaveType('SaasMetrics\Metric');
    }

    function it_gets_avg_months_paid_upfront_metric($value, \DateTime $date)
    {
        $this->avgMonthsPaidUpfront($value, $date)->shouldHaveType('SaasMetrics\Metric');
    }

    function it_gets_newmrr_metric($value, \DateTime $date)
    {
        $this->newMRR($value, $date)->shouldHaveType('SaasMetrics\Metric');
    }

    function it_gets_expansion_mrr_metric($value, \DateTime $date)
    {
        $this->expansionMRR($value, $date)->shouldHaveType('SaasMetrics\Metric');
    }

    function it_gets_churned_mrr_metric($value, \DateTime $date)
    {
        $this->churnedMRR($value, $date)->shouldHaveType('SaasMetrics\Metric');
    }

    function it_gets_visitors_metric($value, \DateTime $date)
    {
        $this->visitors($value, $date)->shouldHaveType('SaasMetrics\Metric');
    }

    function it_gets_leads_metric($value, \DateTime $date)
    {
        $this->leads($value, $date)->shouldHaveType('SaasMetrics\Metric');
    }

    function it_gets_trials_in_progress_metric($value, \DateTime $date)
    {
        $this->trialsInProgress($value, $date)->shouldHaveType('SaasMetrics\Metric');
    }

    function it_gets_new_customers_metric($value, \DateTime $date)
    {
        $this->newCustomers($value, $date)->shouldHaveType('SaasMetrics\Metric');
    }

    function it_gets_sales_reps_metric($value, \DateTime $date)
    {
        $this->salesReps($value, $date)->shouldHaveType('SaasMetrics\Metric');
    }

    function it_gets_quota_per_sales_rep_metric($value, \DateTime $date)
    {
        $this->quotaPerSalesRep($value, $date)->shouldHaveType('SaasMetrics\Metric');
    }

    function it_gets_billings_metric($value, \DateTime $date)
    {
        $this->billings($value, $date)->shouldHaveType('SaasMetrics\Metric');
    }

    function it_gets_revenue_metric($value, \DateTime $date)
    {
        $this->revenue($value, $date)->shouldHaveType('SaasMetrics\Metric');
    }

    function it_gets_cogs_metric($value, \DateTime $date)
    {
        $this->cogs($value, $date)->shouldHaveType('SaasMetrics\Metric');
    }

    function it_gets_sales_marketing_expenses_metric($value, \DateTime $date)
    {
        $this->salesMarketingExpenses($value, $date)->shouldHaveType('SaasMetrics\Metric');
    }

    function it_gets_research_development_expenses_metric($value, \DateTime $date)
    {
        $this->researchDevelopmentExpenses($value, $date)->shouldHaveType('SaasMetrics\Metric');
    }

    function it_gets_general_administrative_expenses_metric($value, \DateTime $date)
    {
        $this->generalAdministrativeExpenses($value, $date)->shouldHaveType('SaasMetrics\Metric');
    }

    function it_gets_ending_cash_metric($value, \DateTime $date)
    {
        $this->endingCash($value, $date)->shouldHaveType('SaasMetrics\Metric');
    }

    function it_gets_churned_customers_metric($value, \DateTime $date)
    {
        $this->churnedCustomers($value, $date)->shouldHaveType('SaasMetrics\Metric');
    }

    function it_gets_customer_engagement_score_metric($value, \DateTime $date)
    {
        $this->customerEngagementScore($value, $date)->shouldHaveType('SaasMetrics\Metric');
    }

    function it_gets_net_promoter_score_metric($value, \DateTime $date)
    {
        $this->netPromoterScore($value, $date)->shouldHaveType('SaasMetrics\Metric');
    }
}
