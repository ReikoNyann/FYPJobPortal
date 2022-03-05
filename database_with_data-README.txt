============================
Sample Data v3.1 Description (2022-03-05)
============================
WILUSER sample data user photo with random face url insert.
STUDENT sample data skills & knowledges created. 

Encourage following database setup:

Create Database with files/mu2Wil_v3.1.sql

Create database name as: 
mu2Wil      (Case sensitive)

Create user with database credential as: 
mu2Wil          (All lowercase)

Password as: 
mu2Wil@mu2Wil       (Case sensitive)

============================
Sample Data v3.0 Description (2022-03-04)
============================
WILUSER Split out additional table ADMINISTRATOR, EMPLOYER, STUDENT. (Check new ERD design in google doc.)
https://docs.google.com/document/d/1FPzetwpcU5tBg7bPHHE0T3Ui9uYXH77tMzOT5MQeGQo/edit

Sample data minimize, with key data in Design document added in. 
Audrey Ang - UserID - 1000000032
ST Engineering - UserID - 1000000016
IT Support Intern - JobID - 1000001 (with three applicant exist)
ST Engineering have three testimonial - 1000001, 1000002, 1000040
Lee Sin Tian Enquiries - CaseID - 1000001



============================
Sample Data v2.0 Description (2022-03-02)
============================
Team Mates login included in user (details login in excel file.)
Location name updates, no longer have question mark issues.
USER table name change to WILUSER; CASE table name change to CASEQ (due to system reserved words.)
Date format change from dd/mm/yyyy to yyyy-mm-dd (database requirement.)
CONSTRAINT CHECK ignored for now (phpMyAdmin have issue to add CHECK CONSTRAINT.)