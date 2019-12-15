<?php

namespace App\Http\Controllers;
include "simple_html_dom.php";

class SearchController extends Controller
{
    public function search(string $search = "")
    {
            //Coloquei para buscar entre 3 páginas somente, pois pode demorar muito dependendo da pesquisa
            for ($start = 00; $start <= 20; $start = ($start + 10)) {
                sleep(1);
                $url = "https://www.google.com/search?q=$search";
                $html = file_get_html($url);
                foreach ($html->find('a[href^=/url?]') as $element) {

                    if (isset($element)) {
                        $title = explode("https://", ($element->plaintext));
                        $title = explode("www.", $title[0]);
                        if ($title[0] != "Fazer login") {
                            $item['title'] = utf8_encode($title[0]);
                            $href = str_replace("/url?q=", "", ($element->href.""));
                            $href = explode(";sa=", $href);
                            $href = explode("/&", $href[0]);
                            $href = explode("&", $href[0]);
                            $item['url'] = utf8_encode($href[0]);
                            $googleResults[] = $item;
                        }
                    }
                }
            }
        return isset($googleResults) ? json_encode($googleResults) : json_encode(false);
    }
}
