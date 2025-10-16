<?php
/**
 * Laravel 10+ pseudocode stubs.
 * Paste your code in the TODO blocks. You can run these inside a Laravel Tinker session
 * after adapting namespaces/imports as needed.
 */

use App\Models\Order;

// ------------------------------------------------------------
// Task 1 — Eloquent query (one-liner or two small lines)
// Fetch latest 5 orders with: user, items.product
// Constraint: total_amount > 100
// Order by created_at desc
// Save result in $orders
// ------------------------------------------------------------
$orders = null; // TODO: assign Eloquent query result to $orders
  




//    NO Experience in laravel so no idea of any santax






// ------------------------------------------------------------
// Task 2 — FormRequest rules for storing a User
// name: required, string, 2–60
// email: required, valid, unique:users,email
// password: required, min 8, confirmed
// Return the array from this function.
// ------------------------------------------------------------
function userStoreRules(): array
{
    // TODO: return array of Laravel validation rules
    return [];
}

// ------------------------------------------------------------
// Task 3 — Eloquent scope in Order model
// Add this method into App\Models\Order
// Filters created_at to last $days days.
// ------------------------------------------------------------
/*
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

class Order extends Model
{
    // TODO: paste the scope here
    // public function scopeRecentDays(Builder $query, int $days)
    // {
    // }
}
*/
