INSERT INTO `users`(
    `id`,
    `login`,
    `name`,
    `surname`,
    `photo`,
    `password`,
    `salt`,
    `strava_id`,
    `register_date`,
    `superman`,
    `superman_author`,
    `superman_date`
)
VALUES(
          1,
          'xneek@mail.ru',
          'xneek',
          'xneek-test',
          'https://up.quizlet.com/46y4mv-NkZc3-96s.png',
          '',
          NULL,
          NULL,
          '2021-11-19 14:09:22',
          '1',
          '1',
          '2021-11-19 14:09:22'
      );

INSERT INTO `points_groups`
(`id`, `name`, `description`, `created_at`, `updated_at`, `id_author`) VALUES 
('1', 'Серебряная нить', 'Традиционный маршрут для кросс-похода', '2022-01-20 19:07:26.000000', '2022-01-20 19:07:26.000000', '1');

INSERT INTO `points`(
    `id_point_group`,
    `name`,
    `point`,
    `description`,
    `code`,
    `created_at`,
    `updated_at`,
    `id_author`
)
VALUES
(1,'ЖД станция 739км', '53.13741,45.32191', 'Вы находитесь на старте маршрута Серебряная Нить', 'QPP7cdauw2gU7nqP', NOW(), NULL, 1),
(1,'КП Медоевка', '53.09351,45.30854', 'Вы находитесь на старте КП-5 Медоевка, позади 6 километров', 'e8c5apDn2dUKRads', NOW(), NULL, 1),
(1,'Пилорама', '53.09041,45.31164', 'Вы находитесь на окраине поселка Золотаревка', 'CECUt8XuFLHqLDJt', NOW(), NULL, 1),
(1,'Трасса 58Н-270', '53.06579,45.27987', 'Вы пересекаете трассу Пенза - Золотаревка', 'AZaMMmYGw8vjGh3C', NOW(), NULL, 1),
(1,'Акулька', '53.03913,45.28914', 'Вы находитесь на Стоянке Медоевка, здес можно отдохнуть и пополнить запас воды', 'e8W4KPQ6XFm2EDHW', NOW(), NULL, 1),
(1,'Круглый', '53.05235,45.23649', 'Вы на стоняке Круглый, до Лемзяя 3 километра', 'qGWsYQxrncraE29T', NOW(), NULL, 1),
(1,'Лемзяй', '53.07119,45.20824', 'Лемзяй, отличная стоняка с возожностью пополнить запас воды', '8HR7yET8JPaVNkpQ', NOW(), NULL, 1),
(1,'Семенов овраг', '53.08704,45.17871', 'Семенов овраг. До кичкилейки 5км', 't22BR7NDePYDmayj', NOW(), NULL, 1),
(1,'Кичкилейка', '53.12388,45.15541', 'Кичикилейка. До Пензы 6км', 'FBAGAFUusjnKDLU2', NOW(), NULL, 1),
(1,'Молодёжная', '53.12569,45.15011', 'Стоянка Молодежная', 'Stnc49DHQVfgCVaE', NOW(), NULL, 1),
(1,'Дорога на Кичкилейку', '53.13574,45.13549', 'Вы пересекаете трассу Пенза - Кичкилейка', 'J4ggMynWbMu2bLXv', NOW(), NULL, 1),
(1,'Ахуны (труба)', '53.16510,45.11173', 'Финиш маршрута Серебряная нить.', 'CKSmEzWNpqwRL4pS', NOW(), NULL, 1);
