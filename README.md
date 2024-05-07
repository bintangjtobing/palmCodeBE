# PalmCode Test - Backend API

This repository contains the backend API for the PalmCode Test project. It provides endpoints for managing members, surfing bookings, and ID verifications. You can see the results on https://be-palmcode.octansidn.com.

## Technologies Used

-   Laravel: The PHP framework used for building the API.
-   Cloudinary: For handling image uploads and storage.
-   Postman: Used for testing API endpoints.
-   Mailtrap: For email testing and debugging.

## Installation

1. Clone the repository to your local machine:

```

git clone https://github.com/bintangjtobing/palmCodeBE.git

```

2. Navigate to the project directory:

```

cd palmCodeTestBE

```

3. Install composer dependencies:

```

composer install

```

4. Create a copy of the `.env.example` file and rename it to `.env`:

```

cp .env.example .env

```

5. Generate application key:

```

php artisan key:generate

```

6. Update the database configuration in the `.env` file with your database credentials.

7. Run database migrations:

```

php artisan migrate

```

8. Start the development server:

```

php artisan serve

```

## API Endpoints

**Members**: `/api/members`

-   `GET`: Retrieve all members.
-   `POST`: Create a new member.
-   `GET`: Retrieve details of a specific member.
-   `PUT`: Update information of an existing member.
-   `DELETE`: Delete a member.

**Surfing Bookings**: `/api/surfing-bookings`

-   `GET`: Retrieve all surfing bookings.
-   `POST`: Create a new surfing booking.
-   `GET`: Retrieve details of a specific surfing booking.
-   `PUT`: Update information of an existing surfing booking.
-   `DELETE`: Delete a surfing booking.

**Bookings with member data**: `/api/booking`

-   `GET`: Retrieve all ID verifications.
-   `POST`: Create a new ID verification.
-   `GET`: Retrieve details of a specific ID verification.
-   `PUT`: Update information of an existing ID verification.
-   `DELETE`: Delete an ID verification.

## Testing

You can use Postman to test the API endpoints from `https://documenter.getpostman.com/view/32442929/2sA3JJ9PAY`. Import the provided Postman collection and environment files, and start testing the endpoints.

## Documentation

-   Refer to the API documentation in the `docs` folder for detailed information about each endpoint and how to use them.

## Contributors

-   Bintang Tobing
-   PalmCode

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
