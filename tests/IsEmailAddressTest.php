<?php

class IsEmailAddressTest extends PHPUnit_Framework_TestCase
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
     * Test isEmailAddress
     *
     * @cover \EmailValidator\Validator::isEmailAddress
     */
    public function testIsEmailAddress()
    {
        $this->setupTest();

        // Not valid
        $this->assertFalse(
            $this->validator->isEmailAddress('example.com')
        );

        $this->assertFalse(
            $this->validator->isEmailAddress('example@example')
        );

        $this->assertFalse(
            $this->validator->isEmailAddress('example[AT]example.com')
        );

        // Valid
        $this->assertTrue(
            $this->validator->isEmailAddress('example@example.com')
        );

        $this->assertTrue(
            $this->validator->isEmailAddress('example+label@example.com')
        );
    }
}