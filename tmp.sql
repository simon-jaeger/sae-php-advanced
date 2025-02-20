"select * from \"articles\" where (
    select count(*) from \"tags\"
    inner join \"article_tag\" on \"tags\".\"id\" = \"article_tag\".\"tag_id\"
    where \"articles\".\"id\" = \"article_tag\".\"article_id\"
    and \"tags\".\"id\" in (?, ?, ?)) >= 3"
