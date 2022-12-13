<?php

use Staditek\App\Controller\cars\CarsController;
use Staditek\App\Controller\manager\ManagerController;
use Staditek\App\Controller\userRegis\UserRegisController;
use Staditek\App\Controller\userAccount\UserAccountController;
use Staditek\App\Controller\employeeData\EmployeeDataController;
use Staditek\App\Controller\employeeAccount\EmployeeAccountController;
use Staditek\App\Controller\shipment\ShipmentController;
use Staditek\App\Controller\paymentConfirmation\PaymentConfirmationController;
use Staditek\App\Controller\onlinePayment\OnlinePaymentController;
use Staditek\App\Controller\confirmItem\ConfirmItemController;
use Staditek\App\Controller\deliveryStatus\DeliveryStatusController;
use Staditek\App\Controller\guestBuyer\GuestBuyerController;

use Staditek\App\Core\Router;

require_once __DIR__ . '/../vendor/autoload.php';
session_start();

// CARS
Router::addRoute('GET', '/cars', CarsController::class, 'cars', []);
Router::addRoute('GET', '/addCarsDisplay', CarsController::class, 'addCarsDisplay', []);
Router::addRoute('GET', '/saveAddCars', CarsController::class, 'saveAddCars', []);
Router::addRoute('GET', '/viewOneCars/:id', CarsController::class, 'viewOneCars', []);
Router::addRoute('GET', '/updateCars/:id', CarsController::class, 'updateAddCars', []);
Router::addRoute('GET', '/deleteCars/:id', CarsController::class, 'deleteCars', []);

// MANAGER
Router::addRoute('GET', '/manager', ManagerController::class, 'manager', []);
Router::addRoute('GET', '/addManagerDisplay', ManagerController::class, 'addManagerDisplay', []);
Router::addRoute('GET', '/saveAddManager', ManagerController::class, 'saveAddManager', []);
Router::addRoute('GET', '/viewOneManager/:id', ManagerController::class, 'viewOneManager', []);
Router::addRoute('GET', '/updateManager/:id', ManagerController::class, 'updateAddManager', []);
Router::addRoute('GET', '/deleteManager/:id', ManagerController::class, 'deleteManager', []);

// USER REGIS
Router::addRoute('GET', '/userregis', UserRegisController::class, 'userRegis', []);
Router::addRoute('GET', '/addUserRegisDisplay', UserRegisController::class, 'addUserRegisDisplay', []);
Router::addRoute('GET', '/saveAddUserRegis', UserRegisController::class, 'saveAddUserRegis', []);
Router::addRoute('GET', '/viewOneUserRegis/:id', UserRegisController::class, 'viewOneUserRegis', []);
Router::addRoute('GET', '/updateUserRegis/:id', UserRegisController::class, 'updateAddUserRegis', []);
Router::addRoute('GET', '/deleteUserRegis/:id', UserRegisController::class, 'deleteUserRegis', []);

// USER ACCOUNT
Router::addRoute('GET', '/useraccount', UserAccountController::class, 'userAccount', []);
Router::addRoute('GET', '/addUserAccountDisplay', UserAccountController::class, 'addUserAccountDisplay', []);
Router::addRoute('GET', '/saveAddUserAccount', UserAccountController::class, 'saveAddUserAccount', []);
Router::addRoute('GET', '/viewOneUserAccount/:id', UserAccountController::class, 'viewOneUserAccount', []);
Router::addRoute('GET', '/updateUserAccount/:id', UserAccountController::class, 'updateAddUserAccount', []);
Router::addRoute('GET', '/deleteUserAccount/:id', UserAccountController::class, 'deleteUserAccount', []);

// EMPLOYEE DATA
Router::addRoute('GET', '/employeeData', EmployeeDataController::class, 'employeeData', []);
Router::addRoute('GET', '/addEmployeeDataDisplay', EmployeeDataController::class, 'addEmployeeDataDisplay', []);
Router::addRoute('GET', '/saveAddEmployeeData', EmployeeDataController::class, 'saveAddEmployeeData', []);
Router::addRoute('GET', '/viewOneEmployeeData/:id', EmployeeDataController::class, 'viewOneEmployeeData', []);
Router::addRoute('GET', '/updateEmployeeData/:id', EmployeeDataController::class, 'updateAddEmployeeData', []);
Router::addRoute('GET', '/deleteEmployeeData/:id', EmployeeDataController::class, 'deleteEmployeeData', []);

// EMPLOYEE ACCOUNT
Router::addRoute('GET', '/employeeAccount', EmployeeAccountController::class, 'employeeAccount', []);
Router::addRoute('GET', '/addEmployeeAccountDisplay', EmployeeAccountController::class, 'addEmployeeAccountDisplay', []);
Router::addRoute('GET', '/saveAddEmployeeAccount', EmployeeAccountController::class, 'saveAddEmployeeAccount', []);
Router::addRoute('GET', '/viewOneEmployeeAccount/:id', EmployeeAccountController::class, 'viewOneEmployeeAccount', []);
Router::addRoute('GET', '/updateEmployeeAccount/:id', EmployeeAccountController::class, 'updateAddEmployeeAccount', []);
Router::addRoute('GET', '/deleteEmployeeAccount/:id', EmployeeAccountController::class, 'deleteEmployeeAccount', []);

// ONLINE PAYMENT
Router::addRoute('GET', '/onlinePayment', OnlinePaymentController::class, 'onlinePayment', []);
Router::addRoute('GET', '/addOnlinePaymentDisplay', OnlinePaymentController::class, 'addOnlinePaymentDisplay', []);
Router::addRoute('GET', '/saveAddOnlinePayment', OnlinePaymentController::class, 'saveAddOnlinePayment', []);
Router::addRoute('GET', '/viewOneOnlinePayment/:id', OnlinePaymentController::class, 'viewOneOnlinePayment', []);
Router::addRoute('GET', '/updateOnlinePayment/:id', OnlinePaymentController::class, 'updateAddOnlinePayment', []);
Router::addRoute('GET', '/deleteOnlinePayment/:id', OnlinePaymentController::class, 'deleteOnlinePayment', []);

// PAYMENT CONFIRMATION
Router::addRoute('GET', '/paymentConfirmation', PaymentConfirmationController::class, 'paymentConfirmation', []);
Router::addRoute('GET', '/addPaymentConfirmationDisplay', PaymentConfirmationController::class, 'addPaymentConfirmationDisplay', []);
Router::addRoute('GET', '/saveAddPaymentConfirmation', PaymentConfirmationController::class, 'saveAddPaymentConfirmation', []);
Router::addRoute('GET', '/viewOnePaymentConfirmation/:id', PaymentConfirmationController::class, 'viewOnePaymentConfirmation', []);
Router::addRoute('GET', '/updatePaymentConfirmation/:id', PaymentConfirmationController::class, 'updateAddPaymentConfirmation', []);
Router::addRoute('GET', '/deletePaymentConfirmation/:id', PaymentConfirmationController::class, 'deletePaymentConfirmation', []);

// Shipment
Router::addRoute('GET', '/shipment', ShipmentController::class, 'shipment', []);
Router::addRoute('GET', '/addShipmentDisplay', ShipmentController::class, 'addShipmentDisplay', []);
Router::addRoute('GET', '/saveAddShipment', ShipmentController::class, 'saveAddShipment', []);
Router::addRoute('GET', '/viewOneShipment/:id', ShipmentController::class, 'viewOneShipment', []);
Router::addRoute('GET', '/updateShipment/:id', ShipmentController::class, 'updateAddShipment', []);
Router::addRoute('GET', '/deleteShipment/:id', ShipmentController::class, 'deleteShipment', []);

// CONFIRM ITEM RECIEVE
Router::addRoute('GET', '/confirmItem', ConfirmItemController::class, 'confirmItem', []);
Router::addRoute('GET', '/addConfirmItemDisplay', ConfirmItemController::class, 'addConfirmItemDisplay', []);
Router::addRoute('GET', '/saveAddConfirmItem', ConfirmItemController::class, 'saveAddConfirmItem', []);
Router::addRoute('GET', '/viewOneConfirmItem/:id', ConfirmItemController::class, 'viewOneConfirmItem', []);
Router::addRoute('GET', '/updateConfirmItem/:id', ConfirmItemController::class, 'updateAddConfirmItem', []);
Router::addRoute('GET', '/deleteConfirmItem/:id', ConfirmItemController::class, 'deleteConfirmItem', []);

// GUEST BUYER
Router::addRoute('GET', '/guestBuyer', GuestBuyerController::class, 'guestBuyer', []);
Router::addRoute('GET', '/addGuestBuyerDisplay', GuestBuyerController::class, 'addGuestBuyerDisplay', []);
Router::addRoute('GET', '/saveAddGuestBuyer', GuestBuyerController::class, 'saveAddGuestBuyer', []);
Router::addRoute('GET', '/viewOneGuestBuyer/:id', GuestBuyerController::class, 'viewOneGuestBuyer', []);
Router::addRoute('GET', '/updateGuestBuyer/:id', GuestBuyerController::class, 'updateAddGuestBuyer', []);
Router::addRoute('GET', '/deleteGuestBuyer/:id', GuestBuyerController::class, 'deleteGuestBuyer', []);

// DELIVERY STATUS 
Router::addRoute('GET', '/deliveryStatus', DeliveryStatusController::class, 'deliveryStatus', []);
Router::addRoute('GET', '/addDeliveryStatusDisplay', DeliveryStatusController::class, 'addDeliveryStatusDisplay', []);
Router::addRoute('GET', '/saveAddDeliveryStatus', DeliveryStatusController::class, 'saveAddDeliveryStatus', []);
Router::addRoute('GET', '/viewOneDeliveryStatus/:id', DeliveryStatusController::class, 'viewOneDeliveryStatus', []);
Router::addRoute('GET', '/updateDeliveryStatus/:id', DeliveryStatusController::class, 'updateAddDeliveryStatus', []);
Router::addRoute('GET', '/deleteDeliveryStatus/:id', DeliveryStatusController::class, 'deleteDeliveryStatus', []);

Router::run();
