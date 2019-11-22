DROP TABLE forecast CASCADE CONSTRAINTS
CREATE TABLE forecast (
    theday varchar2(10) not null,
    totalprecipitation DECIMAL(2, 2),
    totalsnowfall DECIMAL(2, 2),
    avgwindspeed DECIMAL(3, 2),
    humidity varchar2(4),
    weather varchar2(12),
    dewpoint varchar2(4),
    pressureinhg DECIMAL(3, 2),
    zcode varchar2(10),
    primary key(theday),
    foreign key (zcode) references area(zipcode)
);

DROP TABLE thedate CASCADE CONSTRAINTS
CREATE TABLE thedate (
    dayoftheweek varchar2(9),
    dayinfo varchar2(10) not null,
    season varchar2(6) not null,
    foreign key (dayinfo) references forecast(theday)
);

DROP TABLE temperature CASCADE CONSTRAINTS
CREATE TABLE temperature (
    ltemp number(3),
    htemp number(3),
    tempfeelslike number(3),
    absolutetemperature number(3)
);

DROP TABLE area CASCADE CONSTRAINT
CREATE TABLE area (
    cityname varchar2(25),
    statename varchar2(20),
    regionofcountry varchar2(12),
    zipcode varchar2(10),
    airportcode varchar2(4),
    primary key (zipcode)
);