<?php

declare(strict_types=1);

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2019 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Jose\Component\Encryption\Algorithm\KeyEncryption;

final class A192GCMKW extends AESGCMKW
{
    public function name(): string
    {
        return 'A192GCMKW';
    }

    protected function getKeySize(): int
    {
        return 192;
    }
}
