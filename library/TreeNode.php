<?php
class TreeNode {
	public $left;
	public $right;

	public function __construct($left=null, $right=null)
	{
		$this->left = $left;
		$this->right = $right;
	}

	public function isEmpty()
	{
		return !$this->left && !$this->right;
	}

	public function balanced()
	{
		return $this->isEmpty() || ($this->left && $this->right && $this->leftRightHeightDifference() <= 1);
	}

	public function leftRightHeightDifference()
	{
		return abs($this->getLeftHeight() - $this->getRightHeight());
	}

	public function getLeftHeight()
	{
		return $this->getHeight($this->left);
	}

	public function getRightHeight()
	{
		return $this->getHeight($this->right);
	}

	private function getHeight($node, $height=1)
	{
		$left_height = $right_height = 0;

		if ($node->left) {
			$left_height = $node->getHeight($node->left, $height+1);
		}

		if ($node->right) {
			$right_height = $node->getHeight($node->right, $height+1);
		}

		return max($height, $left_height, $right_height);
	}
}
