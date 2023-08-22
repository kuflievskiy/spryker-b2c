<?php

namespace Pyz\Zed\StringReverser\Business\Reverser;

use Generated\Shared\Transfer\StringReverserTransfer;

interface StringReverserInterface
{
    public function reverse(StringReverserTransfer $stringReverserTransfer): StringReverserTransfer;
}
