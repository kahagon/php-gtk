<?php
// Call GdkPixbufAnimationTest::main() if this source file is executed directly.
if (!defined("PHPUnit_MAIN_METHOD")) {
    define("PHPUnit_MAIN_METHOD", "GdkPixbufAnimationTest::main");
}

require_once "PHPUnit/Framework/TestCase.php";
require_once "PHPUnit/Framework/TestSuite.php";

// You may remove the following line when all tests have been implemented.
require_once "PHPUnit/Framework/IncompleteTestError.php";



/**
 * Test class for GdkPixbufAnimation.
 * Generated by PHPUnit_Util_Skeleton on 2006-03-07 at 13:26:40.
 */
class GdkPixbufAnimationTest extends PHPUnit_Framework_TestCase {
    /**
     * Runs the test methods of this class.
     *
     * @access public
     * @static
     */
    public static function main() {
        require_once "PHPUnit/TextUI/TestRunner.php";

        $suite  = new PHPUnit_Framework_TestSuite("GdkPixbufAnimationTest");
        $result = PHPUnit_TextUI_TestRunner::run($suite);
    }

    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     *
     * @access protected
     */
    protected function setUp() {
    }

    /**
     * Tears down the fixture, for example, close a network connection.
     * This method is called after a test is executed.
     *
     * @access protected
     */
    protected function tearDown() {
    }

    /**
     * @todo Implement testGet_height().
     */
    public function testGet_height() {
        // Remove the following line when you implement this test.
        throw new PHPUnit_Framework_IncompleteTestError;
    }

    /**
     * @todo Implement testGet_static_image().
     */
    public function testGet_static_image() {
        // Remove the following line when you implement this test.
        throw new PHPUnit_Framework_IncompleteTestError;
    }

    /**
     * @todo Implement testGet_width().
     */
    public function testGet_width() {
        // Remove the following line when you implement this test.
        throw new PHPUnit_Framework_IncompleteTestError;
    }

    /**
     * @todo Implement testIs_static_image().
     */
    public function testIs_static_image() {
        // Remove the following line when you implement this test.
        throw new PHPUnit_Framework_IncompleteTestError;
    }
}

// Call GdkPixbufAnimationTest::main() if this source file is executed directly.
if (PHPUnit_MAIN_METHOD == "GdkPixbufAnimationTest::main") {
    GdkPixbufAnimationTest::main();
}
?>
