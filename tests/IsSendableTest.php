<?php

class IsSendableTest extends PHPUnit_Framework_TestCase
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
     * Test isSendable
     *
     * @cover \EmailValidator\Validator::isSendable
     */
    public function testIsSendable()
    {
        $this->setupTest();

        // Not an email
        $this->assertFalse(
            $this->validator->isSendable('example.com')
        );

        // Example
        $this->assertFalse(
            $this->validator->isSendable('example@example.com')
        );

        // Disposable
        $this->assertTrue(
            $this->validator->isSendable('example@mailinater.com')
        );

        // Role
        $this->assertTrue(
            $this->validator->isSendable('abuse@google.com')
        );

        // Fails hasMx
        $this->assertFalse(
            $this->validator->isSendable('example@example.comnetorg')
        );

        // Passes
        $this->assertTrue(
            $this->validator->isSendable('example@google.com')
        );
    }
}
