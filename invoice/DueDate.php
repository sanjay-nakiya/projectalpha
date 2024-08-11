<?php

/*
 * This file is part of FlugInvoice project.
 *
 * (c) Flug <flug@clooder.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Flug\Invoice;

class DueDate
{
    private string $format;
    private \DateTimeImmutable $date;

    /**
     * DueDate constructor.
     */
    public function __construct(string $format, string $date)
    {
        $this->format = $format;
        $this->date = new \DateTimeImmutable($date);
    }

    public function getFormat(): string
    {
        return $this->format;
    }

    /**
     * @return string
     */
    public function getDate(): \DateTimeImmutable
    {
        return $this->date;
    }
}
