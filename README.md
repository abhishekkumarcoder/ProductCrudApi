
## Introduction

# Product CRUD API with Laravel

This repository contains a simple Product CRUD (Create, Read, Update, Delete) API built with Laravel. The API allows you to manage products with basic operations.


## Introduction

This API provides endpoints to perform CRUD operations on products. Each product has the following attributes:
-image
- Name
- Description
- Price
- Quantity

## Features

- Create a new product
- Retrieve a list of products
- Retrieve a single product by ID
- Update an existing product
- Delete a product

- API Endpoints
Retrieve All Products
    URL: /api/showProducts
    Method: GET
    Response:
       json
     {
    "message": "Product Showed SuccesFully",
    "product": 
    
       [
             {
              "id": 2,
            "image": "images/1720090389_cloth.jpg",
            "name": "cloth",
            "description": "Next Generation Cloth With Less Amount I",
            "price": 600,
            "quantity": 1,
            "created_at": "2024-07-04T10:53:09.000000Z",
            "updated_at": "2024-07-04T10:53:09.000000Z"
        },
        {
            "id": 3,
            "image": "images/1720090469_headPhone.jpg",
            "name": "headphone",
            "description": "Next Generation Headphone With Less Amount in Electronics",
            "price": 900,
            "quantity": 1,
            "created_at": "2024-07-04T10:54:29.000000Z",
            "updated_at": "2024-07-04T10:54:29.000000Z"
        },
        {
            "id": 4,
            "image": "images/1720090549_AirConditioner.jpg",
            "name": "AirConditioner",
            "description": "Next Generation AirConditioner With Less Amount in Electronics",
            "price": 16000,
            "quantity": 1,
            "created_at": "2024-07-04T10:55:49.000000Z",
            "updated_at": "2024-07-04T10:55:49.000000Z"
        },
        {
            "id": 5,
            "image": "images/1720090637_smartPhone.jpg",
            "name": "Smartphone",
            "description": "Next Generation  Smartphone With Less Amount in Electronics",
            "price": 24000,
            "quantity": 2,
            "created_at": "2024-07-04T10:57:17.000000Z",
            "updated_at": "2024-07-04T10:57:17.000000Z"
        },
        {
            "id": 6,
            "image": "images/1720091076_Camera.jpg",
            "name": "Camera",
            "description": "Camera Of New Generation In Less Amount",
            "price": 910000,
            "quantity": 2,
            "created_at": "2024-07-04T10:58:27.000000Z",
            "updated_at": "2024-07-04T11:04:36.000000Z"
        },
        {
            "id": 7,
            "image": "images/1720091277_Product6.jpg",
            "name": "Product",
            "description": "Next Generation  Product With Less Amount",
            "price": 1100,
            "quantity": 1,
            "created_at": "2024-07-04T11:07:57.000000Z",
            "updated_at": "2024-07-04T11:07:57.000000Z"
        }
    ]
}
Retrieve a Single Product
   ##URL: http://127.0.0.1:8000/api/singleProduct/{id}
    Method: GET
    Response:
     json{
    "message": "Show Single Product SuccesFully",
    "product": {
        "id": 6,
        "image": "images/1720091076_Camera.jpg",
        "name": "Camera",
        "description": "Camera Of New Generation In Less Amount",
        "price": 910000,
        "quantity": 2,
        "created_at": "2024-07-04T10:58:27.000000Z",
        "updated_at": "2024-07-04T11:04:36.000000Z"
   }
   
Create a Product
    URL: http://127.0.0.1:8000/api/storeProduct
    Method: POST
    Request Body:
  
  json
{
        "id": 6,
        "image": "images/1720091076_Camera.jpg",
        "name": "Camera",
        "description": "Camera Of New Generation In Less Amount",
        "price": 910000,
        "quantity": 2,
        "created_at": "2024-07-04T10:58:27.000000Z",
        "updated_at": "2024-07-04T11:04:36.000000Z"
    }
Response:
{
        "message": "Product Created  SuccesFully",
        "product": {
        "id": 6,
        "image": "images/1720091076_Camera.jpg",
        "name": "Camera",
        "description": "Camera Of New Generation In Less Amount",
        "price": 910000,
        "quantity": 2,
        "created_at": "2024-07-04T10:58:27.000000Z",
        "updated_at": "2024-07-04T11:04:36.000000Z"
    }
    }

Update a Product
    URL:http://127.0.0.1:8000/api/editProduct/{id}
    Method: PUT
    Request Body:

    json
{
           "id": 4,
            "image": "images/1720090549_AirConditioner.jpg",
            "name": "AirConditioner",
            "description": "Next Generation AirConditioner With Less Amount in Electronics",
            "price": 16000,
            "quantity": 1,
            "created_at": "2024-07-04T10:55:49.000000Z",
            "updated_at": "2024-07-04T10:55:49.000000Z"
}

Response:
json
   {
             "message": "Product Created  SuccesFully"
            "id": 4,
            "image": "images/1720090549_AirConditioner.jpg",
            "name": "AirConditioner",
            "description": "Next Generation AirConditioner With Less Amount in Electronics",
            "price": 16000,
            "quantity": 1,
            "created_at": "2024-07-04T10:55:49.000000Z",
            "updated_at": "2024-07-04T10:55:49.000000Z"

    }

Delete a Product
    URL: http://127.0.0.1:8000/api/deleteProduct/{id}
    Method: DELETE
    Response:

    json
    {
        "message": "Product deleted"
    }

## Requirements

- PHP >= 7.3
- Composer
- Laravel >= 8.x
- MySQL

## Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/your-username/product-crud-api.git
   cd product-crud-api
     Install dependencies:
      bash
     composer install

Configuration
Copy the .env.example file to .env:
bash
cp .env.example .env
Update the .env file with your database credentials:

env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=productcrudapi
DB_USERNAME=root
DB_PASSWORD=your_password

Generate an application key:
bash
php artisan key:generate
  
Database Migration
Run the database migrations to create the necessary tables:

bash
php artisan migrate

Testing the API
You can test the API using tools like Postman
  Retrieve All Products
    URL: http://127.0.0.1:8000/api/showProducts
    Method: GET
    Response:
       json
     {
    "message": "Product Showed SuccesFully",
    "product": 
    
    [
             {
              "id": 2,
            "image": "images/1720090389_cloth.jpg",
            "name": "cloth",
            "description": "Next Generation Cloth With Less Amount I",
            "price": 600,
            "quantity": 1,
            "created_at": "2024-07-04T10:53:09.000000Z",
            "updated_at": "2024-07-04T10:53:09.000000Z"
        },
        {
            "id": 3,
            "image": "images/1720090469_headPhone.jpg",
            "name": "headphone",
            "description": "Next Generation Headphone With Less Amount in Electronics",
            "price": 900,
            "quantity": 1,
            "created_at": "2024-07-04T10:54:29.000000Z",
            "updated_at": "2024-07-04T10:54:29.000000Z"
        },
        {
            "id": 4,
            "image": "images/1720090549_AirConditioner.jpg",
            "name": "AirConditioner",
            "description": "Next Generation AirConditioner With Less Amount in Electronics",
            "price": 16000,
            "quantity": 1,
            "created_at": "2024-07-04T10:55:49.000000Z",
            "updated_at": "2024-07-04T10:55:49.000000Z"
        },
        {
            "id": 5,
            "image": "images/1720090637_smartPhone.jpg",
            "name": "Smartphone",
            "description": "Next Generation  Smartphone With Less Amount in Electronics",
            "price": 24000,
            "quantity": 2,
            "created_at": "2024-07-04T10:57:17.000000Z",
            "updated_at": "2024-07-04T10:57:17.000000Z"
        },
        {
            "id": 6,
            "image": "images/1720091076_Camera.jpg",
            "name": "Camera",
            "description": "Camera Of New Generation In Less Amount",
            "price": 910000,
            "quantity": 2,
            "created_at": "2024-07-04T10:58:27.000000Z",
            "updated_at": "2024-07-04T11:04:36.000000Z"
        },
        {
            "id": 7,
            "image": "images/1720091277_Product6.jpg",
            "name": "Product",
            "description": "Next Generation  Product With Less Amount",
            "price": 1100,
            "quantity": 1,
            "created_at": "2024-07-04T11:07:57.000000Z",
            "updated_at": "2024-07-04T11:07:57.000000Z"
        }
    ]
}
Retrieve a Single Product
   URL: http://127.0.0.1:8000/api/singleProduct/{id}
    Method: GET
    Response:
     json
 {
    "message": "Show Single Product SuccesFully",
    "product": {
        "id": 6,
        "image": "images/1720091076_Camera.jpg",
        "name": "Camera",
        "description": "Camera Of New Generation In Less Amount",
        "price": 910000,
        "quantity": 2,
        "created_at": "2024-07-04T10:58:27.000000Z",
        "updated_at": "2024-07-04T11:04:36.000000Z"
    }
}
Create a Product
    URL: http://127.0.0.1:8000/api/storeProduct
    Method: POST
    Request Body:
  
  json
{
        "id": 6,
        "image": "images/1720091076_Camera.jpg",
        "name": "Camera",
        "description": "Camera Of New Generation In Less Amount",
        "price": 910000,
        "quantity": 2,
        "created_at": "2024-07-04T10:58:27.000000Z",
        "updated_at": "2024-07-04T11:04:36.000000Z"
    }
Response:
{
        "message": "Product Created  SuccesFully",
        "product": {
        "id": 6,
        "image": "images/1720091076_Camera.jpg",
        "name": "Camera",
        "description": "Camera Of New Generation In Less Amount",
        "price": 910000,
        "quantity": 2,
        "created_at": "2024-07-04T10:58:27.000000Z",
        "updated_at": "2024-07-04T11:04:36.000000Z"
    }
    }

Update a Product
    URL:http://127.0.0.1:8000/api/editProduct/{id}
    Method: PUT
    Request Body:

    json
{
           "id": 4,
            "image": "images/1720090549_AirConditioner.jpg",
            "name": "AirConditioner",
            "description": "Next Generation AirConditioner With Less Amount in Electronics",
            "price": 16000,
            "quantity": 1,
            "created_at": "2024-07-04T10:55:49.000000Z",
            "updated_at": "2024-07-04T10:55:49.000000Z"
}

Response:
json
   {
             "message": "Product Created  SuccesFully"
            "id": 4,
            "image": "images/1720090549_AirConditioner.jpg",
            "name": "AirConditioner",
            "description": "Next Generation AirConditioner With Less Amount in Electronics",
            "price": 16000,
            "quantity": 1,
            "created_at": "2024-07-04T10:55:49.000000Z",
            "updated_at": "2024-07-04T10:55:49.000000Z"

    }

Delete a Product
    URL: http://127.0.0.1:8000/api/deleteProduct/{id}
    Method: DELETE
    Response:

    json
    {
        "message": "Product deleted"
    }
