<?php

define('PATH', 'https://' . $_SERVER['HTTP_HOST']);


function debugs($arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

function outputFiles($path)
{
    echo "<div class='items-conteiner w-100'> <div class=\"row items\">";
    if (is_dir($path)) {

        showlands($path);
    } else {
        echo "<h1 class='text-danger'>Такой папки не существует</h1>";
    }
    echo " </div></div>";
}

function showNormalArr($folder)
{
    $files = array_diff($folder, array('.', '..'));
    return $files;
}

function scanFolder($path)
{
    $results = scandir($path);
    $res = showNormalArr($results);
    return $res;
}

function showTemplate($path, $re, $column = 3)
{
    $template = "<div class='item-col col-md-" . $column . "' >
              <div class='card card-chart' data-aos=\"fade-up\">
                <div class='card-header card-header-primary '>
                <div class='card-icon show-info card-header-danger' data-toggle=\"modal\" data-target=\"#modal-show\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" id=\"Capa_1\" x=\"0px\" y=\"0px\" width=\"30\" height=\"30\" viewBox=\"0 0 48.832 48.832\" style=\"enable-background:new 0 0 48.832 48.832;\" xml:space=\"preserve\"><g><g id=\"Layer_20_51_\"><g><polygon points=\"15.42,32.814 22.23,32.814 22.23,34.385 15.42,34.385 15.42,35.68 36.838,35.68 36.838,34.385 28.898,34.385 28.898,32.814 37.729,32.814 37.729,29.227 15.42,29.227 \" fill=\"#FFFFFF\"/><polygon points=\"9.489,11.231 41.957,11.231 41.957,24.209 44.739,24.209 44.739,8.449 6.707,8.449 6.707,17.14 9.489,17.14 \" fill=\"#FFFFFF\"/><path d=\"M0,39.799h14.523V18.013H0V39.799z M7.568,38.705c-0.386,0-0.7-0.312-0.7-0.699c0-0.386,0.314-0.699,0.7-0.699 c0.387,0,0.699,0.312,0.699,0.699S7.955,38.705,7.568,38.705z M2.1,20.113h10.325l-0.001,16.072H2.1V20.113z\" fill=\"#FFFFFF\"/><path d=\"M38.715,25.046v15.337h10.117V25.046H38.715z M43.979,25.68c0.121,0,0.22,0.101,0.22,0.221 c0,0.121-0.099,0.222-0.22,0.222c-0.123,0-0.223-0.101-0.223-0.222C43.756,25.78,43.855,25.68,43.979,25.68z M42.665,26.416 h2.623v0.212h-2.623V26.416z M43.891,39.721c-0.291,0-0.524-0.236-0.524-0.525c0-0.29,0.233-0.524,0.524-0.524 c0.289,0,0.525,0.234,0.525,0.524C44.416,39.484,44.18,39.721,43.891,39.721z M47.369,37.915 c-2.368,0.013-6.016,0.022-7.189,0.012V27.382l7.189-0.001V37.915z\" fill=\"#FFFFFF\"/></g></g></g></svg>
                  </div>
                  <div class='ct-chart' > " . showImage($path, $re) . "</div></div>
                <div class='card-body'>
                  <h4 class='card-title'>" . showTitle($path, $re) . "</h4>
                </div>
              </div>
            </div>";
    echo $template;
}

function showlands($path)
{
    $arrFold = ['v2', 'v3', 'v4', 'en', 'ru'];
    $results = scanFolder($path);
    echo "<div class='col-md-12 '><div class='card card-p'><div class=\"card-header card-header-tabs card-header-danger card-title \">
                  <div class=\"nav-tabs-navigation\">
                    <div class=\"nav-tabs-wrapper\">
                      <h2 class=\"nav-tabs-title mb-0 \" id='". preg_replace('~\D+~','',strtolower($path)) ."'><strong> ".ucfirst($path)."</strong> Общее количество: ". count($results) ."</h2>
                    </div>
                  </div>
            </div></div></div>";

    foreach ($results as $k => $re) {
        $childDir = scanFolder('./' . $path . '/' . $re);
        if (in_array('ru', $childDir) || in_array('v2', $childDir) || in_array('ru', $childDir) || in_array('v1', $childDir) || in_array('ar', $childDir)) {
            echo "<div class='wrap-carousel col-md-3 item-col'>";
            showTemplate($path, $re, 12);
            foreach ($arrFold as $v) {
                if (in_array($v, $childDir)) {
                    $resultsChild = scanFolder('./' . $path . '/' . $re . '/' . $v);
                    showTemplate('./' . $path . '/' . $re, $v, 12);
                }
            }
            echo "</div>";
        } else {
            showTemplate($path, $re);
        }
    }

}

function inArrToArr($arr, $arr2)
{
    foreach ($arr as $item) {
        if (in_array($item, $arr2)) return $item;

    }
}

function showTitle($path, $el)
{
    return " <a class='link-color' href='/" . $path . "/" . $el . "' > " . ucfirst($el) . "</a>";
}

function showImage($path, $el)
{

    $result = scandir($path . '/' . $el);
    if (!in_array('screen.jpg', $result)) {
        return "<img class='w-100 mx-h-4' src='https://dummyimage.com/320x160'>";
    } else {
        return "<img class='w-100 mx-h-4' src='/$path" . '/' . "$el" . '/screen.jpg' . "'>";
    }
}


outputFiles("landings-10.2018");
outputFiles("landings-09.2018");
outputFiles("landings-08.18");





