<?php

class IsEmailTest extends PHPUnit_Framework_TestCase
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
     * Test isEmail
     *
     * @cover \EmailValidator\Validator::isEmail
     */
    public function testisEmail()
    {
        $this->setupTest();

        // Not valid
        $this->assertFalse(
            $this->validator->isEmail('example.com')
        );

        $this->assertFalse(
            $this->validator->isEmail('example@example')
        );

        $this->assertFalse(
            $this->validator->isEmail('example[AT]example.com')
        );

        $this->assertFalse(
            $this->validator->isEmail(null)
        );

        $this->assertFalse(
            $this->validator->isEmail(['this', 'is', 'array'])
        );

        // Valid
        $this->assertTrue(
            $this->validator->isEmail('example@example.com')
        );

        $this->assertTrue(
            $this->validator->isEmail('example+label@example.com')
        );
    }
}
