<?php

namespace App\Constants;

class Status
{
    public const DRAFT = 'draft';
    public const PUBLISHED = 'published';

    public const LIST = [
        self::DRAFT,
        self::PUBLISHED
    ];
}
