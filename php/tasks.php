<?php
/**
 * PHP 8+
 * Edit only inside the TODO blocks.
 *
 * Quick self-check (optional):
 *   php php/tasks.php
 */

// ------------------------------------------------------------
// Task 1 — firstUniqueChar(string $s): ?string
// Return the first non-repeating character or null if none.
// ------------------------------------------------------------
function firstUniqueChar(string $s): ?string {
    // TODO: implement
    queue arr[len(s)] = {null}; 
    string arr1[] = {null};
    for (i=0;i<len(s);i++)
    {
        if(s[i] in arr1)
        {
            if(s[i] in arr)
            {
                pop[s[i]];
            }
        }
        else
        {
            arr1.insert(s[i]);
            arr.insert(s[i]);
        }
    }
    if(!arr.is_empty())
    {
        return arr.pop[top];
    }
    return null;
}

// ------------------------------------------------------------
// Task 2 — sumOrder(array $items): int
// $items = [['qty'=>2,'unit_price'=>150], ['qty'=>1,'unit_price'=>299]];
// Return the integer total (e.g., 599)
// ------------------------------------------------------------
function sumOrder(array $items): int {
    // TODO: implement
    sum,i=0;
    while (items)
    {
        sum=items[i].qty*items[i].unit_price;
        i++;
    }
    if(sum>0)
        return sum;
    return 0;
}

// ------------------------------------------------------------
// Optional quick tests (won’t be graded by runner)
// Run: php php/tasks.php
// ------------------------------------------------------------
if (PHP_SAPI === 'cli' && basename(__FILE__) === basename($_SERVER['argv'][0])) {
    echo "Self-check:\n";

    $res1 = firstUniqueChar("swiss");   // expected 'w'
    echo "firstUniqueChar('swiss') => "; var_dump($res1);

    $res2 = firstUniqueChar("aabb");    // expected null
    echo "firstUniqueChar('aabb') => "; var_dump($res2);

    $total = sumOrder([
        ['qty'=>2,'unit_price'=>150],
        ['qty'=>1,'unit_price'=>299],
    ]); // expected 599
    echo "sumOrder(...) => $total\n";
}
