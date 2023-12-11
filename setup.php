mysql -u root
Create database Oyam;
use Oyam;

CREATE TABLE Users (
        UserID int NOT NULL PRIMARY KEY,
        UserName varchar(255)
     );
CREATE TABLE Student (
         StudentID int NOT NULL PRIMARY KEY,
         FirstName varchar(255),
        LastName varchar(255),
        DateOfBirth date,
        Email varchar(255),
        Phone varchar(255)
     );
CREATE TABLE Course (
         CourseID int NOT NULL PRIMARY KEY,
         CourseName varchar(255),
         Credits varchar(255)
    
     );
CREATE TABLE Instructor (
         InstructorID int NOT NULL PRIMARY KEY,
         FirstName varchar(255),
         LastName varchar(255),
         Email varchar(255),
         Phone int(255)
    );
CREATE TABLE Enrollment (
         EnrollmentID int NOT NULL PRIMARY KEY,
         StudentID int,
         CourseID int,
         FOREIGN KEY (StudentID) REFERENCES Student (StudentID),
         FOREIGN KEY (CourseID) REFERENCES Course (CourseID),
         EnrollmentDate date,
         Grade varchar(255)
     );
show tables;
