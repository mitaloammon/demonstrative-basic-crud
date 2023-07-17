# CRUD API in Laravel

This is a Laravel-based API application that implements CRUD operations for Intentions, Products, and Address. The application allows managing the information for each intention, including a single address and multiple associated products. It is possible to update and remove both the products and the address.

## Endpoints

The application has the following endpoints:

### Intentions

-   **List all Intentions**:

    -   Method: GET
    -   Route: `/intentions`
    -   Description: Returns all registered intentions, displaying the changes made to each one, including the user's name, address, and associated product list.

-   **Create an Intention**:

    -   Method: POST
    -   Route: `/intentions`
    -   Description: Creates a new intention with the information provided in the request body. Returns the newly created intention.

-   **Get a specific Intention**:

    -   Method: GET
    -   Route: `/intentions/{id}`
    -   Description: Returns the details of a specific intention with the ID provided in the URL.

-   **Update an Intention**:

    -   Method: PUT
    -   Route: `/intentions/{id}`
    -   Description: Updates the details of a specific intention with the ID provided in the URL. Returns the updated intention.

-   **Delete an Intention**:
    -   Method: DELETE
    -   Route: `/intentions/{id}`
    -   Description: Deletes a specific intention with the ID provided in the URL. Returns a success message upon successful deletion.

### Products

-   **Update a Product**:

    -   Method: PUT
    -   Route: `/products/alterar/{id}`
    -   Description: Updates the details of a specific product with the ID provided in the URL. Returns the updated product.

-   **Delete a Product**:
    -   Method: DELETE
    -   Route: `/products/{id}`
    -   Description: Deletes a specific product with the ID provided in the URL. Returns a success message upon successful deletion.

### Address

-   **Update the Address**:

    -   Method: PUT
    -   Route: `/address/update/{id}`
    -   Description: Updates the details of a specific address with the ID provided in the URL. Returns the updated address.

-   **Delete the Address**:
    -   Method: DELETE
    -   Route: `/address/{id}`
    -   Description: Deletes a specific address with the ID provided in the URL. Returns a success message upon successful deletion.

## Configuration and Execution

To run the application locally, follow these steps:

1. Clone this repository to your local environment.
2. Make sure you have Laravel installed on your machine.
3. Configure the `.env` file with your database information.
4. Run the following command to install project dependencies:
    ```
    composer install
    ```
5. Run the database migrations to create the necessary tables:
    ```
    php artisan migrate
    ```
6. Start the Laravel development server:
    ```
    php artisan serve
    ```
7. You can now send requests to the API endpoints using a REST client such as Postman.

## Conclusion

This API provides CRUD operations to manage the intentions, products, and address of each intention. Make sure to provide the correct data in the requests to achieve the desired results. Feel free to customize and extend this API according to your specific needs.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
