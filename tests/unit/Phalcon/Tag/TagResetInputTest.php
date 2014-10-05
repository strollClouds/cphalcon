<?php
/**
 * TagResetInputTest.php
 * \Phalcon\Tag
 *
 * Tests the \Phalcon\Tag component
 *
 * Phalcon Framework
 *
 * @copyright (c) 2011-2014 Phalcon Team
 * @link      http://www.phalconphp.com
 * @author    Andres Gutierrez <andres@phalconphp.com>
 * @author    Nikolaos Dimopoulos <nikos@phalconphp.com>
 *
 * The contents of this file are subject to the New BSD License that is
 * bundled with this package in the file docs/LICENSE.txt
 *
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world-wide-web, please send an email to license@phalconphp.com
 * so that we can send you a copy immediately.
 */

namespace Phalcon\Tests\unit\Phalcon\Tag;

use \Phalcon\Tag as PhTag;

class TagResetInputTest extends Helper\TagBase
{
    /**
     * Tests resetInput with setDefault
     *
     * @author Nikolaos Dimopoulos <nikos@phalconphp.com>
     * @since  2014-09-05
     */
    public function testResetInputWithSetDefault()
    {
        $this->specify(
            "resetInput with setDefault returns invalid HTML Strict",
            function () {

                PhTag::setDoctype(PhTag::XHTML10_STRICT);

                $options  = 'x_name';
                $expected = '<input type="text" id="x_name" name="x_name" '
                          . 'value="x_other" />';
                PhTag::setDefault('x_name', 'x_other');
                $actual   = PhTag::textField($options);
                PhTag::resetInput();

                expect($actual)->equals($expected);

                $expected = '<input type="text" id="x_name" name="x_name" />';
                $actual   = PhTag::textField($options);

                expect($actual)->equals($expected);
            }
        );

        $this->specify(
            "resetInput with setDefault returns invalid HTML XHTML",
            function () {

                PhTag::setDoctype(PhTag::HTML5);

                $options  = 'x_name';
                $expected = '<input type="text" id="x_name" '
                          . 'name="x_name" value="x_other">';
                PhTag::setDefault('x_name', 'x_other');
                $actual   = PhTag::textField($options);
                PhTag::resetInput();

                expect($actual)->equals($expected);

                $expected = '<input type="text" id="x_name" name="x_name">';
                $actual   = PhTag::textField($options);

                expect($actual)->equals($expected);
            }
        );
    }

    /**
     * Tests resetInput with displayTo
     *
     * @author Nikolaos Dimopoulos <nikos@phalconphp.com>
     * @since  2014-09-05
     */
    public function testResetInputWithDisplayTo()
    {
        $this->specify(
            "resetInput with displayTo returns invalid HTML Strict",
            function () {

                PhTag::setDoctype(PhTag::XHTML10_STRICT);

                $options  = 'x_name';
                $expected = '<input type="text" id="x_name" name="x_name" '
                          . 'value="x_other" />';
                PhTag::displayTo('x_name', 'x_other');
                $actual   = PhTag::textField($options);
                PhTag::resetInput();

                expect($actual)->equals($expected);

                $expected = '<input type="text" id="x_name" name="x_name" />';
                $actual   = PhTag::textField($options);

                expect($actual)->equals($expected);
            }
        );

        $this->specify(
            "resetInput with displayTo returns invalid HTML XHTML",
            function () {

                PhTag::setDoctype(PhTag::HTML5);

                $options  = 'x_name';
                $expected = '<input type="text" id="x_name" name="x_name" '
                          . 'value="x_other">';
                PhTag::displayTo('x_name', 'x_other');
                $actual   = PhTag::textField($options);
                PhTag::resetInput();

                expect($actual)->equals($expected);

                $expected = '<input type="text" id="x_name" name="x_name">';
                $actual   = PhTag::textField($options);

                expect($actual)->equals($expected);
            }
        );
    }
}
