<?php
/*
* This file is part of the ReCaptcha Validator Component.
*
* (c) Ilya Pokamestov
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace DS\ReCaptchaBundle\Tests\Validator;

use DS\ReCaptchaBundle\Validator\ReCaptchaConstraint;

/**
 * ReCaptcha Validator.
 *
 * @author Ilya Pokamestov <dario_swain@yahoo.com>
 */
class ReCaptchaConstraintTest extends \PHPUnit_Framework_TestCase
{
    public function testValidatedBy()
    {
        $constraint  = new ReCaptchaConstraint();
        $this->assertEquals('ds_re_captcha.validator', $constraint->validatedBy());
    }
}
