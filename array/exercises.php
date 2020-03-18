<?php

$array = array(
    'first_name' => 'Regner',
    'last_name' => 'atillo',
    'email' => 'atilloregner@gmail.com',
    'meta_info' => array(
        'age' => 23,
        'biography' => 'Web Programmer',
    ),
    'experiences' => array(
        array(
            'company_id' => 1,
            'company_title' => 'Light media',
            'company_description' => 'Web Development',
        ),
        array(
            'company_id' => 4,
            'company_title' => 'Zylun',
            'company_description' => 'Outsourcing',
        )
    )
);

function array_get($ar, $key, $default = 0)
{
    $keys = explode('.', $key);

    $current = $ar;
    foreach ($keys as $key)
    {
        if (array_key_exists($key, $current))
        {
            $current = $current[$key];
        }
        elseif ($key == null)
        {
            return $ar;
        }
        else
            {
            return $default;
        }

    }

    return $current;
}


if (array_get($array, 'meta_info.biography') != 'Web Programmer') {
    throw new Exception('error');
}

if (array_get($array, 'meta_info.age') != 23) {
    throw new Exception('error');
}

if (array_get($array, 'email') != 'atilloregner@gmail.com') {
    throw new Exception('error');
}
if (array_get($array, 'experiences.0', 'nothing is found') != array(
        'company_id' => 1,
        'company_title' => 'Light media',
        'company_description' => 'Web Development',
    )) {
    throw new Exception('error');
}
if (array_get($array, 'experiences.2', 'nothing is found') != 'nothing is found') {
    throw new Exception('error');
}
if (array_get($array, null) != $array) {
    throw new Exception('error');
}
