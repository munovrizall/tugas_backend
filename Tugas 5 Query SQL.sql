-- 1. Tulis Query untuk insert data ke dalam table actor
INSERT INTO actor(first_name, last_name)
VALUES ('Mohammad', 'Novrizal')
;

/* 2. Tulis Query untuk insert data untuk kolom title, description, release_year,
language_id, rental_duration, rental_rate, replacement_cost, last_update pada
table film */
INSERT INTO film(title, description, release_year, language_id, rental_duration, rental_rate, replacement_cost, last_update)
VALUES ('PHP PROGRAMMER', 'A Story about Stressed, Depressed Backend Engineer', 2021, 1, 3, 0.99, 9.99, '2021-10-30 15:03:42')
;

-- 3. Tulis Query untuk menampilkan first_name dan last_name dari tabel actor
SELECT first_name, last_name
FROM actor
;

/* 4. Tulis Query untuk menampilkan nama film yang tidak berawalan huruf a pada
tabel film */
SELECT title
FROM film
WHERE title NOT LIKE "A%"
;

/* 5. Tulis Query untuk menampilkan amount tertinggi selama bulan juni 2005 pada
tabel payment. hasilnya seperti gambar dibawah ini */
SELECT MAX(amount)
FROM payment
WHERE payment_date >= '2005-06-01' AND payment_date <= '2005-06-31'
;
