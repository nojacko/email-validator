<?php

class isDisposableTest extends PHPUnit_Framework_TestCase
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
     * Test isDisposable
     *
     * @cover \EmailValidator\Validator::isDisposable
     */
    public function testIsDisposable()
    {
        $this->setupTest();

        // Not an email
        $this->assertNull(
            $this->validator->isDisposable('example.com')
        );

        $this->assertFalse(
            $this->validator->isDisposable('example@example.com')
        );

        $this->assertFalse(
            $this->validator->isDisposable('example@google.com')
        );

        $this->assertTrue(
            $this->validator->isDisposable('example@mailinater.com')
        );
    }
}
