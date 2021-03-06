<?php
/**
 * @author Robin 'codeFareith' von den Bergen <robinvonberg@gmx.de>
 * @copyright (c) 2018 by Robin von den Bergen
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version 1.0.0
 *
 * @link https://github.com/codeFareith/cf_google_authenticator
 * @see https://www.fareith.de
 * @see https://typo3.org
 */

namespace CodeFareith\CfGoogleAuthenticator\Exception;

use Throwable;
use TYPO3\CMS\Extbase\Exception;

class PropertyNotFound extends Exception
{
    /*─────────────────────────────────────────────────────────────────────────────*\
            Constants
    \*─────────────────────────────────────────────────────────────────────────────*/
    public const CODE = 6132;

    /*─────────────────────────────────────────────────────────────────────────────*\
            Methods
    \*─────────────────────────────────────────────────────────────────────────────*/
    public function __construct(string $property, string $class, Throwable $previous = null)
    {
        $message = \vsprintf(
            'The requested property "%s" was not found in class "%s".',
            [
                $property,
                $class
            ]
        );

        parent::__construct($message, self::CODE, $previous);
    }
}
