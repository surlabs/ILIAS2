<?php
/* Copyright (c) 2017 Nils Haagen <nils.haagen@concepts-and-training.de> Extended GPL, see docs/LICENSE */
namespace ILIAS\UI\Component\ViewControl;

use \ILIAS\UI\Component as C;
use ILIAS\UI\Component\JavaScriptBindable;
use ILIAS\UI\Component\Triggerer;
/**
 * This describes a Pagination Control
 */
interface Pagination extends C\Component, JavaScriptBindable, Triggerer {

	/**
	 * Initialize with the total amount of entries
	 * of the controlled data-list
	 *
	 * @param 	int 	$total
	 *
	 * @return \Pagination
	 */
	public function withTotalEntries($total);

	/**
	 * Set the amount of entries per page.
	 *
	 * @param 	int 	$size
	 *
	 * @return \Pagination
	 */
	public function withPageSize($size);

	/**
	 * Get the numebr of entries per page.
	 *
	 * @return int
	 */
	public function getPageSize();

	/**
	 * Set the selected page.
	 *
	 * @param 	int 	$page
	 *
	 * @return \Pagination
	 */
	public function withCurrentPage($page);

	/**
	 * Get the currently slected page.
	 *
	 * @return int
	 */
	public function getCurrentPage();

	/**
	 * Get the data's offset according to current page and page size.
	 *
	 * @return int
	 */
	public function getOffset();

	/**
	 * Register a signal with the control.
	 *
	 * @param ILIAS\UI\Component\Signal $signal
	 *
	 * @return \Pagination
	 */
	public function withOnSelect(C\Signal $signal);

	/**
	 * Calculate the total number of pages.
	 *
	 * @return int
	 */
	public function getNumberOfPages();

	/**
	 * Layout; define, how many page-options are shown (max).
	 *
	 * @param int 	$amount
	 *
	 * @return \Pagination
	 */
	public function withMaxPaginationButtons($amount);

	/**
	 * Get the maximum amount of page-entries (not records per page!)
	 * to be shown.
	 *
	 * @return int
	 */
	public function getMaxPaginationButtons();

}
