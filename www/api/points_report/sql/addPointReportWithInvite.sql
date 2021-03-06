INSERT INTO `points_reports`(
    `id_point`,
    `id_author`,
    `id_user`,
    `id_event`,
    `id_event_member`,
    `coordinates`,
    `comment`,
    `created_at`,
    `upload_at`
)
VALUES(
    @id_point,
    @id_author,
    @id_user,
    @id_event,
    @id_event_member,
    '@coordinates',
    '@comment',
    '@created_at',
    NOW()
);
