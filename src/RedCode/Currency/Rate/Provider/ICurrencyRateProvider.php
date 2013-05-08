<?php


namespace RedCode\Currency\Rate\Provider;

use RedCode\Currency\ICurrency;
use RedCode\Currency\Rate\ICurrencyRate;

/**
 * @author maZahaca
 */
interface ICurrencyRateProvider
{
    /**
     * Load rates by date
     *
     * @param ICurrency[] $currencies
     * @param \DateTime|null $date
     * @return ICurrencyRate[]
     */
    public function getRates($currencies, \DateTime $date = null);

    /**
     * Get base currency
     * @return ICurrency
     */
    public function getBaseCurrency();

    /**
     * @return string
     */
    public function getName();
}