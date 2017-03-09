<?php

namespace CodePress\CodeCategory\Tests\Models;

use CodePress\CodeCategory\Models\Category;
use CodePress\CodeCategory\Tests\AbstractTestCase;

class CategoryTest extends AbstractTestCase
{
	public function test_persistenciaCategory()
	{
		$category = Category::create(['name' => 'Category Test']);
		$this->assertEquals('Category Test', $category->name);

		$category = Category::all()->first();
		$this->assertEquals('Category Test', $category->name);
	}
}