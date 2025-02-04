# Taxi Pro

## Description

This is a simple taxi booking system.

## Userstories

### Read
- As a user, I want to be able to book a taxi.
- As a user, I want to be able to view the list of taxis.
- As a user, I want to be able to view the list of bookings.
- As a user, I want to be able to view the list of drivers.
- As a user, I want to be able to view the list of cars.

### Create

- As a user, I want to be able to create a new car.
- As a user, I want to be able to create a new driver.
- As a user, I want to be able to create a new booking.

### Update

- As a user, I want to be able to update a booking.
- As a user, I want to be able to update a car.
- As a user, I want to be able to update a driver.

### Delete

- As a user, I want to be able to delete a booking.
- As a user, I want to be able to delete a car.
- As a user, I want to be able to delete a driver.


## Entities

### Cars
- attributes: make, model, year, license_plate, color
- relations: has a driver, can have multiple bookings

### Drivers
- attributes: firstname, lastname, phone_number
- relations: can have multiple bookings

### Bookings
- attributes: start_location, end_location, start_time, end_time, status

### Models
- Car
- Driver
- Booking

### Factories
- CarFactory
- DriverFactory
- BookingFactory

### Seeder
- CarSeeder
- DriverSeeder
- BookingSeeder

### Migrations
- CreateCarsTable
- CreateDriversTable
- CreateBookingsTable

### Controllers
- CarController
- DriverController
- BookingController



## Controller opschonen
    ## Request Validatie
    ## Route Model Binding
    ## private functies


    
# Factories

## Gates

## Policies




