<?php

class IsExampleTest extends PHPUnit_Framework_TestCase
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
     * Test isExample
     *
     * @cover \EmailValidator\Validator::isExample
     */
    public function testIsExample()
    {
        $this->setupTest();

        // Not an email
        $this->assertNull(
            $this->validator->isExample('example.com')
        );

        // Normal
        $this->assertFalse(
            $this->validator->isExample('example@google.com')
        );

        // Example TDLs
        $this->assertTrue(
            $this->validator->isExample('example@example.test')
        );

        $this->assertTrue(
            $this->validator->isExample('example@example.example')
        );

        $this->assertTrue(
            $this->validator->isExample('example@example.invalid')
        );

        $this->assertTrue(
            $this->validator->isExample('example@example.localhost')
        );

        // Example Domains
        $this->assertTrue(
            $this->validator->isExample('example@example.com')
        );

        $this->assertTrue(
            $this->validator->isExample('example@example.net')
        );

        $this->assertTrue(
            $this->validator->isExample('example@example.org')
        );
    }
}
