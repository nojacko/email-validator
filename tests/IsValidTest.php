<?php

class IsValidTest extends PHPUnit_Framework_TestCase
{
    /**
     * Set up for tests in this file.
     *
     * @access private
     */
    private function setupTest()
    {
        $this->validator = new \EmailValidator\Validator();
    }

    /**
     * Test isValid
     *
     * @cover \EmailValidator\Validator::isValid
     */
    public function testIsValid()
    {
        $this->setupTest();

        // Fails isEmail
        $this->assertFalse(
            $this->validator->isValid('example.com')
        );

        // Fails isExample
        $this->assertFalse(
            $this->validator->isValid('example@example.com')
        );

        // Fails isDisposable
        $this->assertFalse(
            $this->validator->isValid('example@mailinater.com')
        );

        // Fails isRole
        $this->assertFalse(
            $this->validator->isValid('abuse@example.com')
        );

        // Fails hasMx
        $this->assertFalse(
            $this->validator->isValid('example@example.comnetorg')
        );

        // Passes
        $this->assertTrue(
            $this->validator->isValid('example@google.com')
        );
    }
}
