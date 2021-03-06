<?php

declare(strict_types=1);

/*
 * This file is part of YeahMobi PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\YeahMobi\API;

use Plients\Http\HttpResponse;

class Offers extends AbstractAPI
{
    public function findAll(array $parameters = []): HttpResponse
    {
        return $this->client->get('offers/offers.json', $parameters);
    }
}
