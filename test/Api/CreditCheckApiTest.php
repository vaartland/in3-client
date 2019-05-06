<?php
/**
 * CreditCheckApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Capayable API V2
 *
 * API for Pay after delivery and Pay in 3 installments
 *
 * OpenAPI spec version: v2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.5
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * CreditCheckApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditCheckApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for creditCheckV2Post
     *
     * # Request credit check     You can perform a credit check on a user.If accepted, the order is final and is going to be paid on invoice.Remember to store the TransactionNumber of the response somewhere with the order, you’ll need it for the invoice follow up.                 The credit check counts as registering an order, so it has to be followed up by an invoice or a cancellation.If not, the order will remain open and may block the customer from doing another order with Capayable.                Note: the credit check on the live environment may take a while, so be sure to set longer timeouts (max 2 minutes). .    In the test environment, use the LastName ‘Refuse’ to get a refused response (`IsAccepted` = `false`) with a random refuse reason.    In the production environment IsFinal should always be ‘true’. In your test environment, you can use ‘false’ while building your connection, as it will not actually register an order and therefore allow you to do multiple checks on the same address(and TransactionNumber will be empty).    If three installments is supported please use the new PaymentMethod property to select the correct payment method. The IsInThreeInstallments property is obsolete.    ## Refuse reason     (Ignore if IsAccepted=true)  There are several possible reasons for refusing:  - `AMOUNT_EXCEEDS_LIMIT` = 1 means the order amount is above this limit. Each shop has an order amount limit above which pay after delivery by Capayable is not available.  - `BALANCE_EXCEEDS_LIMIT`= 2 means the order amount plus the balance of unpaid orders by the customer is above this limit. There is a limit on the unpaid sum of all orders with this shops or other shops using Capayable.   -  `NOT_CREDITWORTHY` = 3 means the customer is not accepted for credit by this service.  Capayable uses services for the actual credit check (B2C: Experian, B2B: Graydon).   - `CREDITCHECK_UNAVAILABLE` = 4 means the extern credit check service is not be available.  - `NOT_FOUND` = 5 means the corporation could not be found based on its name and/or its address(B2B only).  - `ADDRESS_BLOCKED` = 6: the invoice address is blocked by Capayable   - `TOO_YOUNG` = 7: the customer is 18-  - `DIFFERENT_SHIPPING_ADDRESS` = 8: for some shops, the shipping address must be the same as the invoice address  - `SHIPPING_ADDRESS_BLOCKED` = 9: the shipping address is blocked by Capayable   - `IP_ADDRESS_BLOCKED` = 10: the IP address is blocked by Capayable   - `COUNTRY_BLOCKED` = 11: the country of the invoice address is blocked by Capayable   - `SHIPPING_COUNTRY_BLOCKED` = 12: the country of the shipping address is blocked by Capayable   - `AMOUNT_TOO_LOW` = 13: the invoice amount is to low. Each shop has a mimimum amount.  - `TOO_MANY_OPEN_INVOICES` = 14: the customer has too still open invoices with Capyable  - `IP_ADDRESS_BLOCKED_MULTIPLE_ORDERS_WITHIN_24HRS` = 15: for some shops, only one order per IP address is allowed in 24 hours.    In all cases the relevant contact info for the customer (or shop) is returned: the name of the company and a phone number.The customer can contact this number if he has questions about the refusal.  Get the translation of the refusereason by adding lang=nl to the querystring in the request..
     *
     */
    public function testCreditCheckV2Post()
    {
    }
}
