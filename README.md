<p align="center">
    <h1 align="center">Clinical Appointment Scheduling Management System</h1>
    <br>
    <p align="center"> Its a web application to help Health Facilities to schedule and manage patients clinical appointments. 
    <br>
    Currently the application only allows medical appointments to be scheduled from the health unit, but in versions
 later, the system will allow scheduling to be done remotely.
    </p>

</p>

This application is in its initial phase and currently has the following features:


       1. Register Patients
       2. Register Doctors
       3. Register Medical Areas
       4. Register Types of Doctors
       5. Dashboard
       
This application was built in PHP using Yii Framework and follows the directory structure bellow:

APPLICATION DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
HOW TO INSTALL AND TEST
1. Clone the project repository
2. Follow the [Yii Advanced Template installation](https://www.yiiframework.com/extension/yiisoft/yii2-app-advanced/doc/guide/2.0/en/start-installation) process based on your Operating System 
3. Run ``` php init ``` to choose how environment to run the application.
 3.1 If you are experienced with Yii2, select 0 [Development env]
 3.2 If you are a starter with Yii2, select 1 [Production env]
4. Create a database and name it how you prefer.
5. Update the following file:
