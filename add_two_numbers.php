<?php
class ListNode
{
    public $val;
    public $next;

    public function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

function addTwoNumbers($l1, $l2)
{
    $dummyHead = new ListNode(0);
    $current = $dummyHead;
    $carry = 0;

    while ($l1 !== null || $l2 !== null) {
        $x = ($l1 !== null) ? $l1->val : 0;
        $y = ($l2 !== null) ? $l2->val : 0;

        $sum = $x + $y + $carry;
        $carry = (int)($sum / 10);
        $current->next = new ListNode($sum % 10);
        $current = $current->next;

        if ($l1 !== null) $l1 = $l1->next;
        if ($l2 !== null) $l2 = $l2->next;
    }

    if ($carry > 0) {
        $current->next = new ListNode($carry);
    }

    return $dummyHead->next;
}


function printLinkedList($head)
{
    $current = $head;
    while ($current !== null) {
        echo $current->val . " -> ";
        $current = $current->next;
    }
    echo "NULL\n";
}


$l1 = new ListNode(2, new ListNode(4, new ListNode(3)));
$l2 = new ListNode(5, new ListNode(6, new ListNode(4)));


$result = addTwoNumbers($l1, $l2);
printLinkedList($result);
