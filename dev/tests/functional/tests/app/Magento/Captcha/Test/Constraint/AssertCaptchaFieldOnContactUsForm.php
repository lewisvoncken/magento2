<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Captcha\Test\Constraint;

use Magento\Contact\Test\Page\ContactIndex;
use Magento\Mtf\Constraint\AbstractConstraint;

/**
 * Assert captcha on the Contact Us page.
 */
class AssertCaptchaFieldOnContactUsForm extends AbstractConstraint
{
    /**
     * Assert captcha on the Contact Us page.
     *
     * @param ContactIndex $contactIndex
     * @return void
     */
    public function processAssertRegisterForm(ContactIndex $contactIndex)
    {
        \PHPUnit_Framework_Assert::assertTrue(
            $contactIndex->getFormWithCaptcha()->isVisibleCaptcha(),
            'Captcha image is not displayed on the Contact Us page.'
        );

        \PHPUnit_Framework_Assert::assertTrue(
            $contactIndex->getFormWithCaptcha()->isVisibleCaptchaReloadButton(),
            'Captcha reload button is not displayed on the Contact Us page.'
        );
    }

    /**
     * Returns a string representation of the object.
     *
     * @return string
     */
    public function toString()
    {
        return 'Captcha and reload button are present on the Contact Us page.';
    }
}
