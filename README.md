# Carmudi "Unit of Measurement" Test

## Meet Carmudi
Carmudi is a vehicle classifieds platform that operates in 20 countries. Among other departments, we have a highly qualified and strong team based in [Berlin, Germany](https://www.google.com/maps/place/Berlin,+Germany) balanced with different profiles. This team deals with different PHP frameworks and technologies in the many projects it manages.

## Story

*The story below is fictional, created only for this test's purpose.*

On our vehicle platform, one important information that we need to display for combustion vehicles is the [engine displacement value](https://en.wikipedia.org/wiki/Engine_displacement). Usually cars and trucks are described using **liters** as measurement unit, but motorcycles are described using **cubic centimetres**. Some countries use **cubic inches**.

Due to the lack of validation on our application vehicle registration form, for years people provided all sort of different formats, such as "1L", "1.0L", "1.0", "1 L", "1000CC", "1000 CC". Some customers want to classify the vehicles by power rating and the lack of pattern makes it nearly impossible.

We realized that it does not make sense to force a specific unit, since customers that are registering motorcycles usually don't know the value in **liters**, and also people registering cars and trucks don't know the value in **cubic centimetres**. In some countries **cubic inches** is used for the same models registered with other units in other countries.

## Task

You need to write a simple **rest webservice application**, where the client will be allowed to register a vehicle specifying the engine displacement using different measurement units. The client can also see a list of all other vehicles already inserted, but after a vehicle is registered, it can't be modified or deleted.

The vehicle needs to contain the following information:
 - unique identifier
 - name
 - engine displacement
 - engine power

## Requirements
 - Unusual cases when the client provide the engine displacement for a car in **cubic centimetres** or **cubic inches** instead **liters** should be tolaterated. This means that the unit itself is not directly related to the vehicle type, but is a separate context instead.
 - You are **NOT ALLOWED** to use any `full stack web frameworks` (e.g. Laravel, Symfony, Zend Framework). Any microframework, or library, or component (even if they're part of a `full stack` framework) are ok to use though (e.g. Silex, Eloquent, Symfony Components, Zend Components), as long as it is in PHP and can be installed with composer. We will be particularly interested in the way that measurement unit problem is solved, so be careful if you are using a library for this specific problem, because the library code will be considered.
 - You are free to use any storage type you prefer. Please provide instructions on how to create a schema if necessary.
 - Git knowledge is required. Workflow is also evaluated, so having history is desirable. It is not required, but it is recommended that you push your changes as frequently as possible to the repository, and not only at the very end.
 - Docker configuration is provided only for your convenience. You can deliver your running application using Docker (which you are also free to modify the configuration) or using also the internal PHP server, or any other tool you prefer, as long as you provide clear instructions on how to run it.
 - The result needs to be delivered in 72 hours from the time it is made available. The repository write access will be removed and the code will be evaluated the way it is in the respository.
 - Use any tool you think make sense to ensure that good quality code is delivered (clue: *unit testing*)

## Evaluation process
 - We will read the code first. The criterias are ordered by importance (ranked highest to lowest).
  1. Code Quality
  2. Maintainability
  3. Code Design
  4. Data storage choice
  5. Task understanding
  2. Task completeness
 - We will evaluate the workflow (if Git history is available).
 - We will run the application and send HTTP requests

## Optional (This will not impact in your result)

**You're NOT supposed to change the code on any of the following items. Just describe how you would implement it.**

 - Consider also electric vehicles. They do not have a combustion chamber, and also consequently no engine displacement. What would you do to support eletric vehicles?
 - As very last evaluation point we have performance. Keep in mind that this is not the main goal of this application, since the users are our own employees, even if it takes 10 minutes to load the page, the business can still be successful.
 - Describe the flaws of technologies you are using. For example, if you decided to use Zend Framework 1, then you should say which parts of the framework are bad and reasons why you consider them bad.
 - This test is also a continuous improvement process. Suggest how you would improve it.
