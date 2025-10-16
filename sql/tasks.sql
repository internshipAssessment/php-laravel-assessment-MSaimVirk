-- Schema (reference)
-- users(id, name, email, created_at)
-- orders(id, user_id, total_amount, created_at)
-- order_items(id, order_id, product_id, quantity, unit_price)
-- products(id, name, sku, price)

-- Task 1 — Users with >3 orders in the last 30 days
-- Return: user_id, name, order_count
-- Sort: order_count DESC
-- TODO: Write the SQL below
--SELECT
  -- TODO
  select user_id, name, order_count
  from (select count(orders) from users join orders where id=user_id
        group by user_id ) 
;

-- Task 2 — Products never ordered
-- Return: id, name of products that appear in ZERO order_items
-- TODO: Write the SQL below
SELECT name, id from (products join order_items where id=product_id)
where quantity='empty' or null
  -- TODO
;
