<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FolhinhasParedeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FolhinhasParedeTable Test Case
 */
class FolhinhasParedeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FolhinhasParedeTable
     */
    public $FolhinhasParede;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.folhinhas_parede'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('FolhinhasParede') ? [] : ['className' => 'App\Model\Table\FolhinhasParedeTable'];
        $this->FolhinhasParede = TableRegistry::get('FolhinhasParede', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FolhinhasParede);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
