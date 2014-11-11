<?php

class isRoleTest extends PHPUnit_Framework_TestCase
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
     * Test isRole
     *
     * @cover \EmailValidator\Validator::isDisposable
     */
    public function testIsRole()
    {
        $this->setupTest();

        // Not an email
        $this->assertNull(
            $this->validator->isRole('example.com')
        );

        $this->assertFalse(
            $this->validator->isRole('example@example.com')
        );

        $this->assertFalse(
            $this->validator->isRole('hello@example.com')
        );

        $this->assertTrue(
            $this->validator->isRole('abuse@example.com')
        );

        $this->assertTrue(
            $this->validator->isRole('admin@example.com')
        );
    }
}
