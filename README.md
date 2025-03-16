# Quotations API

This project is a PHP OOP REST API to managing quotes. It supports retrieving, adding, updating, and deleting quotes, authors and categories.

## Setup Instructions

1. Go ahead and feel free to clone this repository to your local machine.
2. Set up a MySQL database with the name `quotesdb`.
3. Update the database connection details in `config/config.php`.
4. Deploy the files to your web host and test the API.

## API Endpoints

- GET `/quotes/` - All quotes
- GET `/quotes/?id={id}` - A specific quote
- GET `/authors/` - All authors
- GET `/authors/?id={id}` - A specific author
- GET `/categories/` - All categories
- GET `/categories/?id={id}` - A specific category

## License

MIT License
