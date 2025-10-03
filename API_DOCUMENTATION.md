# Fur E-commerce API Documentation

## Base URL
```
http://your-domain.com/api/v1
```

## Authentication
The API uses Laravel Sanctum for authentication. Include the Bearer token in the Authorization header:
```
Authorization: Bearer {your_token}
```

## Response Format
All API responses follow this format:
```json
{
    "success": true|false,
    "data": {...},
    "message": "Response message"
}
```

## Endpoints

### Authentication

#### Register User
- **POST** `/register`
- **Body:**
```json
{
    "name": "John Doe",
    "email": "john@example.com",
    "password": "password123",
    "password_confirmation": "password123"
}
```

#### Login User
- **POST** `/login`
- **Body:**
```json
{
    "email": "john@example.com",
    "password": "password123"
}
```

#### Logout User
- **POST** `/logout`
- **Headers:** Authorization required

#### Update Profile
- **PUT** `/user/profile`
- **Headers:** Authorization required
- **Body:**
```json
{
    "name": "John Doe",
    "email": "john@example.com",
    "current_password": "oldpassword",
    "password": "newpassword",
    "password_confirmation": "newpassword"
}
```

### Products

#### Get All Products
- **GET** `/products`
- **Query Parameters:**
  - `category_id` - Filter by category
  - `min_price` - Minimum price filter
  - `max_price` - Maximum price filter
  - `min_rating` - Minimum rating filter
  - `search` - Search in name/description
  - `sort_by` - Sort field (default: created_at)
  - `sort_order` - Sort direction (asc/desc, default: desc)
  - `per_page` - Items per page (default: 15)

#### Get Single Product
- **GET** `/products/{id}`

#### Search Products
- **GET** `/products/search/{query}`

#### Create Product (Admin)
- **POST** `/admin/products`
- **Headers:** Authorization + Admin required
- **Body:**
```json
{
    "name": "Product Name",
    "price": 99.99,
    "rating": 5,
    "description": "Product description",
    "category_id": "category_id_here",
    "images": [file1, file2]
}
```

#### Update Product (Admin)
- **PUT** `/admin/products/{id}`
- **Headers:** Authorization + Admin required

#### Delete Product (Admin)
- **DELETE** `/admin/products/{id}`
- **Headers:** Authorization + Admin required

### Categories

#### Get All Categories
- **GET** `/categories`

#### Get Single Category
- **GET** `/categories/{id}`

#### Get Category Products
- **GET** `/categories/{id}/products`
- **Query Parameters:** Same as products list

#### Create Category (Admin)
- **POST** `/admin/categories`
- **Headers:** Authorization + Admin required
- **Body:**
```json
{
    "name": "Category Name",
    "description": "Category description"
}
```

#### Update Category (Admin)
- **PUT** `/admin/categories/{id}`
- **Headers:** Authorization + Admin required

#### Delete Category (Admin)
- **DELETE** `/admin/categories/{id}`
- **Headers:** Authorization + Admin required

### Cart

#### Get Cart
- **GET** `/cart`
- **Headers:** Authorization required

#### Add to Cart
- **POST** `/cart/add`
- **Headers:** Authorization required
- **Body:**
```json
{
    "product_id": "product_id_here",
    "qty": 2
}
```

#### Update Cart Item
- **PUT** `/cart/update/{item_id}`
- **Headers:** Authorization required
- **Body:**
```json
{
    "qty": 3
}
```

#### Remove from Cart
- **DELETE** `/cart/remove/{item_id}`
- **Headers:** Authorization required

#### Clear Cart
- **DELETE** `/cart/clear`
- **Headers:** Authorization required

### Orders

#### Get User Orders
- **GET** `/orders`
- **Headers:** Authorization required

#### Get Single Order
- **GET** `/orders/{id}`
- **Headers:** Authorization required

#### Create Order
- **POST** `/orders`
- **Headers:** Authorization required
- **Body:**
```json
{
    "payment_method": "credit_card",
    "shipping_address": {
        "name": "John Doe",
        "street": "123 Main St",
        "city": "New York",
        "state": "NY",
        "zip": "10001",
        "country": "USA"
    },
    "billing_address": {
        "name": "John Doe",
        "street": "123 Main St",
        "city": "New York",
        "state": "NY",
        "zip": "10001",
        "country": "USA"
    }
}
```

#### Update Order Status
- **PUT** `/orders/{id}/status`
- **Headers:** Authorization required
- **Body:**
```json
{
    "status": "shipped"
}
```

#### Get All Orders (Admin)
- **GET** `/admin/orders`
- **Headers:** Authorization + Admin required
- **Query Parameters:**
  - `status` - Filter by status
  - `from_date` - Filter from date
  - `to_date` - Filter to date

#### Update Order (Admin)
- **PUT** `/admin/orders/{id}`
- **Headers:** Authorization + Admin required

### Deals

#### Get All Deals
- **GET** `/deals`
- **Query Parameters:**
  - `category` - Filter by category
  - `min_discount` - Minimum discount
  - `max_discount` - Maximum discount

#### Get Single Deal
- **GET** `/deals/{id}`

#### Create Deal (Admin)
- **POST** `/admin/deals`
- **Headers:** Authorization + Admin required
- **Body:**
```json
{
    "title": "Deal Title",
    "description": "Deal description",
    "discount": 20,
    "distance": 5,
    "category": "Pet Food",
    "is_active": true,
    "image": "file_upload_or_base64"
}
```

#### Update Deal (Admin)
- **PUT** `/admin/deals/{id}`
- **Headers:** Authorization + Admin required

#### Delete Deal (Admin)
- **DELETE** `/admin/deals/{id}`
- **Headers:** Authorization + Admin required

### Events

#### Get All Events
- **GET** `/events`
- **Query Parameters:**
  - `category` - Filter by category
  - `from_date` - Filter from date
  - `to_date` - Filter to date
  - `tags` - Filter by tags (array)

#### Get Single Event
- **GET** `/events/{id}`

#### Create Event (Admin)
- **POST** `/admin/events`
- **Headers:** Authorization + Admin required
- **Body:**
```json
{
    "title": "Event Title",
    "excerpt": "Event excerpt",
    "content": "Event content",
    "author": "Author Name",
    "event_date": "2024-12-31",
    "category": "Pet Care",
    "tags": ["tag1", "tag2"],
    "is_active": true,
    "image": "file_upload_or_base64"
}
```

#### Update Event (Admin)
- **PUT** `/admin/events/{id}`
- **Headers:** Authorization + Admin required

#### Delete Event (Admin)
- **DELETE** `/admin/events/{id}`
- **Headers:** Authorization + Admin required

### Contact

#### Send Contact Message
- **POST** `/contact`
- **Body:**
```json
{
    "name": "John Doe",
    "email": "john@example.com",
    "subject": "Inquiry",
    "message": "Your message here"
}
```

#### Get Contact Messages (Admin)
- **GET** `/admin/contacts`
- **Headers:** Authorization + Admin required
- **Query Parameters:**
  - `email` - Filter by email
  - `subject` - Filter by subject
  - `from_date` - Filter from date
  - `to_date` - Filter to date

#### Delete Contact Message (Admin)
- **DELETE** `/admin/contacts/{id}`
- **Headers:** Authorization + Admin required

## Error Codes

- **200** - Success
- **201** - Created
- **401** - Unauthorized
- **403** - Forbidden (Admin required)
- **404** - Not Found
- **422** - Validation Error
- **500** - Server Error

## Example Usage

### JavaScript/Fetch
```javascript
// Login
const loginResponse = await fetch('/api/v1/login', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
    },
    body: JSON.stringify({
        email: 'user@example.com',
        password: 'password'
    })
});

const loginData = await loginResponse.json();
const token = loginData.data.token;

// Get products
const productsResponse = await fetch('/api/v1/products', {
    headers: {
        'Authorization': `Bearer ${token}`,
        'Content-Type': 'application/json',
    }
});

const productsData = await productsResponse.json();
```

### cURL
```bash
# Login
curl -X POST http://your-domain.com/api/v1/login \
  -H "Content-Type: application/json" \
  -d '{"email":"user@example.com","password":"password"}'

# Get products with token
curl -X GET http://your-domain.com/api/v1/products \
  -H "Authorization: Bearer YOUR_TOKEN_HERE"
```

## Notes

1. All timestamps are in ISO 8601 format
2. File uploads support both multipart/form-data and base64 strings
3. Pagination uses Laravel's default pagination format
4. Admin routes require the user to have `is_admin = true`
5. All prices are in decimal format
6. Image paths are relative to the storage/app/public directory
