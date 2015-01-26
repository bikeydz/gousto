<?php
require(dirname(__FILE__).'/library/TreeNode.php');

$height_balanced_tree = new TreeNode(
	new TreeNode(new TreeNode,new TreeNode(new TreeNode)), new TreeNode(null,new TreeNode)
);

$height_unbalanced_tree = new TreeNode(
	new TreeNode(new TreeNode(new TreeNode,new TreeNode(new TreeNode)),new TreeNode(null,new TreeNode(new TreeNode))), new TreeNode(new TreeNode,new TreeNode)
);

if ($height_balanced_tree->balanced()) {
	echo "Tree is balanced.\n";
} 

if (!$height_unbalanced_tree->balanced()) {
	echo "Tree is unbalanced.\n";
}

$empty_tree = new TreeNode;

if ($empty_tree->balanced()) {
	echo "Empty tree is balanced.\n";
} else {
	echo "Empty tree is unbalanced.\n";
}
