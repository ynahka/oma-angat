CREATE DATABASE omaANGATDatabase;
USE omaANGATDatabase;

CREATE TABLE UserAccount (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    Username VARCHAR(50) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Password VARCHAR(100) NOT NULL,
    codeV VARCHAR(100) NOT NULL,
    verification TINYINT NOT NULL,
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL
);

CREATE TABLE Farmer (
    farmer_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT UNIQUE,
    FirstName VARCHAR(50) NOT NULL,
    MidName VARCHAR(50),
    LastName VARCHAR(50) NOT NULL,
    Address VARCHAR(100) NOT NULL,
    Phone_Num VARCHAR(20) NOT NULL,
    image BLOB,
    date_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    FOREIGN KEY (user_id) REFERENCES UserAccount (user_id) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE Buyer (
    buyer_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT UNIQUE,
    FirstName VARCHAR(50) NOT NULL,
    MidName VARCHAR(50),
    LastName VARCHAR(50) NOT NULL,
    Address VARCHAR(100) NOT NULL,
    Phone_Num VARCHAR(20) NOT NULL,
    image BLOB,
    date_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    FOREIGN KEY (user_id) REFERENCES UserAccount (user_id) ON UPDATE CASCADE ON DELETE RESTRICT 
);

CREATE TABLE AdminInfo (
    admin_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT UNIQUE,
    FirstName VARCHAR(50) NOT NULL,
    MidName VARCHAR(50),
    LastName VARCHAR(50) NOT NULL,
    image BLOB,
    date_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP  NOT NULL,
    FOREIGN KEY (user_id) REFERENCES UserAccount (user_id)ON UPDATE CASCADE ON DELETE RESTRICT 
);

CREATE TABLE Store (
    store_id INT PRIMARY KEY AUTO_INCREMENT,
    farmer_id INT UNIQUE,
    storeName VARCHAR(100) NOT NULL,
    storeRate DECIMAL(10, 2) NOT NULL,
    Address VARCHAR(100) NOT NULL,
    storeDesc TEXT NOT NULL,
    OpensAt TIME NOT NULL,
    ClosesAt TIME NOT NULL,
    image BLOB NOT NULL,
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP  NOT NULL,
    FOREIGN KEY (farmer_id) REFERENCES Farmer (farmer_id) ON UPDATE RESTRICT ON DELETE RESTRICT 
);

CREATE TABLE HarvestingCalendar (
    harvest_id INT PRIMARY KEY AUTO_INCREMENT,
    store_id INT,
    HarvestDate DATE NOT NULL,
    FOREIGN KEY (store_id) REFERENCES Store (store_id) ON DELETE RESTRICT 
);
CREATE TABLE ProductCategory(
	category_id INT PRIMARY KEY AUTO_INCREMENT,
    ctgry_name VARCHAR(50)NOT NULL,
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL
);
CREATE TABLE Products (
    product_id INT PRIMARY KEY AUTO_INCREMENT,
    store_id INT,
    category_id INT,
    harvest_id INT,
    ProductName VARCHAR(100) NOT NULL,
    Price DECIMAL(10, 2) NOT NULL,
    QuantityAvlbl INT NOT NULL,
    QuantiSold INT NOT NULL,
    product_image BLOB NOT NULL,
    AddedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    FOREIGN KEY (store_id) REFERENCES Store (store_id) ON DELETE RESTRICT,
    FOREIGN KEY (category_id) REFERENCES ProductCategory (category_id) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (harvest_id) REFERENCES HarvestingCalendar (harvest_id) ON UPDATE CASCADE ON DELETE RESTRICT
);



CREATE TABLE MethodOfPayment(
    method_id INT PRIMARY KEY AUTO_INCREMENT,
    MethodType VARCHAR(20) NOT NULL, 
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL
);
CREATE TABLE statusType(
	sttype_id INT PRIMARY KEY,
    type_name VARCHAR(50),
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL
);
CREATE TABLE DeliveryContactInfo (
    delivery_id INT PRIMARY KEY AUTO_INCREMENT,
    buyer_id INT,
    FirstName VARCHAR(50) NOT NULL,
    MidName VARCHAR(50),
    LastName VARCHAR(50) NOT NULL,
    Address VARCHAR(100) NOT NULL,
    SHBNumber VARCHAR(10),
    Barangay VARCHAR(50) NOT NULL,
    City VARCHAR(50) NOT NULL,
    Province VARCHAR(50) NOT NULL,
    ZipCode INT NOT NULL,
    ContactNum VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
	FOREIGN KEY (buyer_id) REFERENCES Buyer (buyer_id) ON DELETE RESTRICT 
);
CREATE TABLE Reservation (
    reservation_id INT PRIMARY KEY AUTO_INCREMENT,
    buyer_id INT,
    delivery_id INT,
    product_id INT,
    method_id INT,
    ReserveQuantity INT NOT NULL,
    Price DECIMAL (10, 2) NOT NULL,
    TotalPrice DECIMAL(10, 2) NOT NULL,
    DeliveryIns TEXT,
    ReservationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    FOREIGN KEY (buyer_id) REFERENCES Buyer (buyer_id) ON UPDATE CASCADE ON DELETE RESTRICT ,
    FOREIGN KEY (product_id) REFERENCES Products (product_id) ON DELETE RESTRICT ,
    FOREIGN KEY (method_id) REFERENCES MethodOfPayment (method_id)ON UPDATE CASCADE ON DELETE RESTRICT , 
    FOREIGN KEY (delivery_id) REFERENCES DeliveryContactInfo (delivery_id)ON UPDATE CASCADE ON DELETE RESTRICT 
);

CREATE TABLE ReservationStatus(
	resStatus_id INT PRIMARY KEY AUTO_INCREMENT,
    status_type int,
	reservation_id int,
	date_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    FOREIGN KEY (reservation_id) REFERENCES Reservation (reservation_id),
    FOREIGN KEY (status_type) REFERENCES statusType (sttype_id)
);

CREATE TABLE Message (
    message_id INT PRIMARY KEY AUTO_INCREMENT,
    sender_id INT NOT NULL,
    receiver_id INT NOT NULL,
    msg_content TEXT NOT NULL,
    msg_datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    FOREIGN KEY (sender_id) REFERENCES UserAccount (user_id) ON DELETE RESTRICT ,
    FOREIGN KEY (receiver_id) REFERENCES UserAccount (user_id) ON DELETE RESTRICT 
);

CREATE TABLE OrderProduct (
    order_id INT PRIMARY KEY AUTO_INCREMENT,
    buyer_id INT,
    product_id INT,
    method_id INT,
    delivery_id INT,
    quantity INT,
    Price DECIMAL (10, 2),
    order_total DECIMAL(10,2),
    DeliveryIns TEXT NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    FOREIGN KEY (buyer_id) REFERENCES Buyer (buyer_id) ON DELETE RESTRICT ,
    FOREIGN KEY (product_id) REFERENCES Products (product_id) ON DELETE RESTRICT ,
    FOREIGN KEY (method_id) REFERENCES MethodOfPayment (method_id) ON DELETE RESTRICT,
    FOREIGN KEY (delivery_id) REFERENCES  DeliveryContactInfo (delivery_id)ON DELETE RESTRICT
);


DELIMITER //
CREATE TRIGGER trg_update_order_total
BEFORE UPDATE ON OrderProduct
FOR EACH ROW
BEGIN
    IF NEW.quantity <> OLD.quantity OR NEW.Price <> OLD.Price THEN
        SET NEW.order_total = NEW.quantity * NEW.Price;
    END IF;
END;
//
DELIMITER ;

CREATE TABLE orderStatus(
	status_id INT PRIMARY KEY,
    status_type int,
	order_id int,
	date_update TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    FOREIGN KEY (order_id) REFERENCES OrderProduct (order_id),
    FOREIGN KEY (status_type) REFERENCES statusType (sttype_id)
);
CREATE TABLE ShoppingCart (
    cart_id INT PRIMARY KEY AUTO_INCREMENT,
    buyer_id INT,
    product_id INT,
    Quantity INT NOT NULL,
    TotalPrice DECIMAL(10, 2) NOT NULL,
    DateAdded TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    FOREIGN KEY (buyer_id) REFERENCES Buyer (buyer_id) ON DELETE RESTRICT ,
    FOREIGN KEY (product_id) REFERENCES Products (product_id) ON DELETE RESTRICT 
);
CREATE TABLE Referral (
    referral_id INT PRIMARY KEY AUTO_INCREMENT,
    Referred_id INT,
    Referrer_id INT,
    ReferralDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    FOREIGN KEY (Referred_id) REFERENCES Farmer (farmer_id) ON DELETE RESTRICT ,
    FOREIGN KEY (Referrer_id) REFERENCES Buyer (buyer_id) ON DELETE RESTRICT 
);

CREATE TABLE Review_RateProduct (
    review_id INT PRIMARY KEY AUTO_INCREMENT,
    buyer_id INT,
    product_id INT,
    ReviewText TEXT,
    product_img BLOB,
    Rate TINYINT NOT NULL,
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    FOREIGN KEY (buyer_id) REFERENCES Buyer (buyer_id) ON DELETE RESTRICT,
    FOREIGN KEY (product_id) REFERENCES Products (product_id) ON DELETE RESTRICT
);

DELIMITER //
CREATE TRIGGER trg_check_rate_value
BEFORE INSERT ON Review_RateProduct
FOR EACH ROW
BEGIN
    IF NEW.Rate < 0 OR NEW.Rate > 5 THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Rate value must be between 0 and 5';
    END IF;
END;
//
DELIMITER ;

CREATE TABLE Donation (
    donation_id INT PRIMARY KEY AUTO_INCREMENT,
    Donor_id INT,
    DonationType VARCHAR(20) NOT NULL,
    donatedate TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
	FOREIGN KEY (Donor_id) REFERENCES Buyer (buyer_id) ON DELETE RESTRICT 
);
