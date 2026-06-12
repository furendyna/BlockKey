<?php
/**
 * Tests for BlockKey
 */

use PHPUnit\Framework\TestCase;
use Blockkey\Blockkey;

class BlockkeyTest extends TestCase {
    private Blockkey $instance;

    protected function setUp(): void {
        $this->instance = new Blockkey(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockkey::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
