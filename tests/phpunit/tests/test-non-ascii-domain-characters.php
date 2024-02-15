<?php
use PHPUnit\Framework\TestCase;

class Tests_Non_Ascii_Domain_Characters extends WP_UnitTestCase{

    /**
     * @dataProvider non_ascii_character_provider
     */
    public function test_non_ascii_domain_names($ascii_character) {
        $domain = 'example' . $ascii_character . '.com';
    }

    public function non_ascii_character_provider() {
        return [
            ['¡'], ['¢'], ['£'], ['¤'], ['¥'], ['¦'], ['§'], ['¨'], ['©'], ['ª'],
            ['«'], ['¬'], ['®'], ['¯'], ['°'], ['±'], ['²'], ['³'], ['´'], ['µ'],
            ['¶'], ['·'], ['¸'], ['¹'], ['º'], ['»'], ['¼'], ['½'], ['¾'], ['¿'],
            ['À'], ['Á'], ['Â'], ['Ã'], ['Ä'], ['Å'], ['Æ'], ['Ç'], ['È'], ['É'],
            ['Ê'], ['Ë'], ['Ì'], ['Í'], ['Î'], ['Ï'], ['Ð'], ['Ñ'], ['Ò'], ['Ó'],
            ['Ô'], ['Õ'], ['Ö'], ['×'], ['Ø'], ['Ù'], ['Ú'], ['Û'], ['Ü'], ['Ý'],
            ['Þ'], ['ß'], ['à'], ['á'], ['â'], ['ã'], ['ä'], ['å'], ['æ'], ['ç'],
            ['è'], ['é'], ['ê'], ['ë'], ['ì'], ['í'], ['î'], ['ï'], ['ð'], ['ñ'],
            ['ò'], ['ó'], ['ô'], ['õ'], ['ö'], ['÷'], ['ø'], ['ù'], ['ú'], ['û'],
            ['ü'], ['ý'], ['þ'], ['ÿ']
        ];
    }

    // test valid non ascii domain name

    // test invalid non-ascii domain name

    // test url generation

    // test redirects

    // test database handling

    // input validation
    
}


?>