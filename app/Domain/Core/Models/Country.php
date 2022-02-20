<?php

namespace App\Domain\Core\Models;

/**
 * Class Country
 * @package App\Domain\Core\Models
 *
 * @property-read int                           $id
 * @property-read string                        $callingcode
 * @property-read string                        $capital
 * @property-read string                        $code
 * @property-read string                        $code_alpha3
 * @property-read int                           $continent_id
 * @property-read string                        $currency_code
 * @property-read string                        $currency_name
 * @property-read string                        $emoji
 * @property-read string                        $full_name
 * @property-read int                           $has_division
 * @property-read string                        $name
 * @property-read string                        $tld
 */
class Country extends \Khsing\World\Models\Country
{
    //
}
