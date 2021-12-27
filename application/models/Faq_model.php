<?php


class Faq_model extends BaseMySQL_model
{
	public function __construct()
	{
		parent::__construct("faqs");
	}
	/**
	 * Get a user's details by different fields
	 * @param $fields
	 * @return mixed
	 */
	public function getFaqBy($fields)
	{
		return self::getOneItem(self::getBy(null, $fields));
	}
	public function createFaq($data)
	{
		$result = parent::add($data);
		return $result;
	}
	public function getFaqs()
	{
		return parent::getAll("*");
	}
}