# Order Item Project
Order Item is a RESTful API dedicated to managing `Orders` and `Items`.

## Domain Logic 
### Item
`Item` represents a stock item - something a user can potentially buy. It does not have to belong to any `Orders`. It can belong to many `Orders`.

### Order 
`Order` represents a request for `Items` user wants to buy. It should contain at least one `Item` to be valid.

## API
* GET `/items` get all items
* GET `/items/{item_id}` get a specific item
* GET `/orders` get all orders
* GET `/orders/{order_id}` get a specific order

As you can see, currently API allows for fetching items and orders, but that's about it. We're working hard to extend it. 
Here's a list of tasks in case you'd like to contribute:  https://github.com/jakubgiminski/order-item/projects/1

