#Tasks:
1. Implement routing.
    I used the component `bramus/router` it minimal and lightweight
2. Implement DB connection class
    I used components `simplon/mysql` it also minimal
3.  Implement a template engine 
    I used component `twig/twig`, because he will be in top result search in google by request `PHP template engine
4. Implements MVC pattern
	I create an abstract class `AController`,  this class can accept user request via `bramus/router`  in public method `action` and search method in called class with a name like 'METHODNAME_NAME ' if the method exists that I called his with params otherwise I showing user 404 page
	Next, all controllers in the application must be extends abstract class `AController`. inside constructor class, I passed the instance DB-connector class. I do this in order to realize it later with fewer labor costs unit-testing each controller

#What did I do
1. All of the above
2. All models for db tables
3. Docker env
4. Schema for db see in `/mysql/scheme`
5. Registration customer in app

#What I did not have time:
1. Logical for make purchase
2. Logical for make report