<?php

// 1. выделить уникальные записи (убрать дубли) в отдельный массив. в конечном массиве не должно быть элементов с одинаковым id.
$array = [
    ['id' => 1, 'date' => "12.01.2020", 'name' => "test1"],
    ['id' => 2, 'date' => "02.05.2020", 'name' => "test2"],
    ['id' => 4, 'date' => "08.03.2020", 'name' => "test4"],
    ['id' => 1, 'date' => "22.01.2020", 'name' => "test1"],
    ['id' => 2, 'date' => "11.11.2020", 'name' => "test4"],
    ['id' => 3, 'date' => "06.06.2020", 'name' => "test3"],
];

//$temp = [];
//array_map(function ($item) use (&$temp) {
//    if (!isset($temp[$item['id']])) {
//        $temp[$item['id']] = $item;
//    }
//
//}, $array);


// 2. отсортировать многомерный массив по ключу (любому)
//usort($array, fn($a, $b) => $a['name'] <=> $b['name']);

// 3. вернуть из массива только элементы, удовлетворяющие внешним условиям (например элементы с определенным id)
//$array = array_filter($array, fn($item) => $item['id'] == 1);

// 4. изменить в массиве значения и ключи (использовать name => id в качестве пары ключ => значение)
//$array = array_map(function ($item) {
//    return array_flip($item);
//}, $array);

// 5. В базе данных имеется таблица с товарами goods (id INTEGER, name TEXT), таблица с тегами tags (id INTEGER, name TEXT) и таблица связи товаров и тегов goods_tags (tag_id INTEGER, goods_id INTEGER, UNIQUE(tag_id, goods_id)). Выведите id и названия всех товаров, которые имеют все возможные теги в этой базе.
//    SELECT id, good_name FROM goods
//    JOIN goods_tags gt on goods.id = gt.good_id
//    GROUP BY goods.id, goods.good_name
//    HAVING COUNT(DISTINCT gt.tag_id) = (SELECT COUNT(tags.id) FROM tags)

// 6.
//  SELECT
//      department_id, MIN(value) as min_value
//  FROM `evaluations`
//  WHERE gender = 1
//  GROUP BY department_id
//  HAVING min_value > 5

