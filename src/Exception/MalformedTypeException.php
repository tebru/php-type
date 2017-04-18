<?php

namespace Tebru\PhpType;

use RuntimeException;
use Throwable;

/**
 * Class MalformedTypeException
 *
 * Thrown if the type could not be parsed.
 *
 * @author Nate Brunette <nate.brunette@wheniwork.com>
 */
class MalformedTypeException extends RuntimeException implements Throwable
{
}
