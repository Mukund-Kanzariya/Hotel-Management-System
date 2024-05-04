DROP DATABASE IF EXISTS `HotelManagement`;

CREATE DATABASE `HotelManagement`;

USE `HotelManagement`;

CREATE TABLE
    `Roles` (
        `Id` INT PRIMARY KEY AUTO_INCREMENT,
        `Name` VARCHAR(200) NOT NULL
    );

CREATE TABLE
    `Users` (
        `Id` INT PRIMARY KEY AUTO_INCREMENT,
        `RoleId` INT NOT NULL,
        `Name` VARCHAR(200) NOT NULL,
        `Salary` INT NOT NULL,
        `Email` VARCHAR(200) NOT NULL,
        `Mobile` INT NOT NULL,
        `Address` VARCHAR(500) NOT NULL,
        `City` VARCHAR(200) NOT NULL,
        `State` VARCHAR(200) NOT NULL,
        FOREIGN KEY (`RoleId`) REFERENCES `Roles` (`Id`)
    );

CREATE TABLE
    `Modules` (
        `Id` INT PRIMARY KEY AUTO_INCREMENT,
        `Name` VARCHAR(200)
    );

CREATE TABLE
    `Permissions` (
        `Id` INT PRIMARY KEY AUTO_INCREMENT,
        `UserId` INT NOT NULL,
        `ModuleId` INT NOT NULL,
        `AddPermission` INT NOT NULL,
        `EditPermission` INT NOT NULL,
        `DeletePermission` INT NOT NULL,
        `ViewPermission` INT NOT NULL,
        FOREIGN KEY (`UserId`) REFERENCES `Users` (`Id`),
        FOREIGN KEY (`ModuleId`) REFERENCES `Modules` (`Id`)
    );

CREATE TABLE
    `RoomTypes` (
        `Id` INT PRIMARY KEY AUTO_INCREMENT,
        `Name` VARCHAR(200) NOT NULL
    );

CREATE TABLE
    `Rooms` (
        `Id` INT PRIMARY KEY AUTO_INCREMENT,
        `RoomTypeId` INT NOT NULL,
        `RoomNumber` INT NOT NULL,
        `Price` INT NOT NULL,
        `IsAvailable` BOOLEAN NOT NULL,
        FOREIGN KEY (`RoomTypeId`) REFERENCES `RoomTypes` (`Id`)
    );

CREATE TABLE
    `Guests` (
        `Id` INT PRIMARY KEY AUTO_INCREMENT,
        `AllotedRoomId` INT NOT NULL,
        `Name` VARCHAR(200) NOT NULL,
        `MobileNo` INT NOT NULL,
        `Address` VARCHAR(200) NOT NULL,
        `Email` VARCHAR(200) NOT NULL,
        `InTime` DATETIME NOT NULL,
        `OutTime` DATETIME NOT NULL,
        `TotalPrice` INT NOT NULL,
        `IdentityImageFile` VARCHAR(200) NOT NULL,
        FOREIGN KEY (`AllotedRoomId`) REFERENCES `Rooms` (`Id`)
    );

CREATE TABLE
    `Expenses` (
        `Id` INT PRIMARY KEY AUTO_INCREMENT,
        `Name` VARCHAR(2000) NOT NULL,
        `Amount` INT NOT NULL
    );

INSERT INTO
    Roles (Name)
VALUES
    ('admin');

INSERT INTO
    Users (
        RoleId,
        Name,
        Salary,
        Email,
        Mobile,
        Address,
        City,
        State
    )
VALUES
    (
        1,
        'admin',
        '50000',
        'test@gmail.com',
        9737708721,
        'test',
        'jamnagar',
        'gujrat'
    );

INSERT INTO
    Modules (Name)
VALUES
    ('Roles'),
    ('Users'),
    ('RoomTypes'),
    ('Room'),
    ('Guests'),
    ('Expenses');

INSERT INTO
    Permissions (
        UserId,
        ModuleId,
        AddPermission,
        EditPermission,
        DeletePermission,
        ViewPermission
    )
VALUES
    (1, 1, 1, 1, 1, 1),
    (1, 2, 1, 1, 1, 1),
    (1, 3, 1, 1, 1, 1),
    (1, 4, 1, 1, 1, 1),
    (1, 5, 1, 1, 1, 1),
    (1, 6, 1, 1, 1, 1);