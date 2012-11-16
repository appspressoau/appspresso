
-- stores
DROP TABLE IF EXISTS stores;
DROP SEQUENCE IF EXISTS stores_id_seq;

CREATE SEQUENCE stores_id_seq;
CREATE TABLE stores (
    id          INT NOT NULL DEFAULT NEXTVAL('stores_id_seq'),
    name        VARCHAR(100),
    address     VARCHAR(255),
    -- for mockup purposes, we store "distance" as a strong
    -- in reality we want to store GPS co-ordinates and
    -- calculate the distance from any given point
    distance    VARCHAR(255)
);

-- some initial store values
INSERT INTO stores (name, address, distance) VALUES (
    'Essential Cafe',
    '26 Flinders Street, Adelaide',
    '120m'
);
INSERT INTO stores (name, address, distance) VALUES (
    'Town Hall Garden Cafe',
    'Prince Alfred Lane, Adelaide',
    '170m'
);
INSERT INTO stores (name, address, distance) VALUES (
    'Kappy''s',
    '53 Flinders Street, Adelaide',
    '210m'
);
INSERT INTO stores (name, address, distance) VALUES (
    'BTS Cafe',
    '33 Pirie Street, Adelaide',
    '220m'
);
INSERT INTO stores (name, address, distance) VALUES (
    'Delish Espresso',
    '195 Victoria Square, Adelaide',
    '230m'
);
