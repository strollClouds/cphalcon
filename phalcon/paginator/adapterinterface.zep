
/*
 +------------------------------------------------------------------------+
 | Phalcon Framework                                                      |
 +------------------------------------------------------------------------+
 | Copyright (c) 2011-2017 Phalcon Team (http://www.phalconphp.com)       |
 +------------------------------------------------------------------------+
 | This source file is subject to the New BSD License that is bundled     |
 | with this package in the file LICENSE.txt.                             |
 |                                                                        |
 | If you did not receive a copy of the license and are unable to         |
 | obtain it through the world-wide-web, please send an email             |
 | to license@phalconphp.com so we can send you a copy immediately.       |
 +------------------------------------------------------------------------+
 | Authors: Andres Gutierrez <andres@phalconphp.com>                      |
 |          Eduar Carvajal <eduar@phalconphp.com>                         |
 +------------------------------------------------------------------------+
 */

namespace Phalcon\Paginator;

/**
 * Phalcon\Paginator\AdapterInterface
 *
 * Interface for Phalcon\Paginator adapters
 */
interface AdapterInterface
{
	/**
	 * Set the current page number
	 */
	public function setCurrentPage(int page);

	/**
	 * Returns a slice of the resultset to show in the pagination
	 */
	public function getPaginate() -> <\stdClass>;

	/**
	 * Set current rows limit
	 */
	public function setLimit(int limit);

	/**
	 * Get current rows limit
	 */
	public function getLimit() -> int;
}
