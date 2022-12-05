<?php

namespace App\Sources;

use App\Scraper\Contracts\SourceInterface;

class Coindesk implements SourceInterface
{
    public function getUrl(): string
    {
        return 'https://www.coindesk.com/news';
    }

    public function getName(): string
    {
        return 'Coinbase';
    }

    public function getWrapperSelector(): string
    {
        return 'section.list-body .list-item-wrapper';
    }

    public function getTitleSelector(): string
    {
        return 'a h4.heading';
    }

    public function getDescSelector(): string
    {
        return 'a p.card-text';
    }

    public function getDateSelector(): string
    {
        return 'time.time';
    }

    public function getLinkSelector(): string
    {
        return 'div.text-content a:nth-child(2)';
    }

    public function getImageSelector(): string
    {
        return 'img.list-img';
    }
}