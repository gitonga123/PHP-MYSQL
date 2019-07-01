<?php
function anagrams(string $word, array $words): array
{
    $anagrams = [];
    for ($i = 0; $i < count($words); $i++) {
        if (array_count_values(str_split($word)) == array_count_values(str_split($words[$i]))) {
            $anagrams[] = $words[$i];
        }
    }
    
    return $anagrams;
}

print_r(anagrams('racer', ['carer', 'arcre', 'carre', 'racrs', 'racers', 'arceer', 'raccer', 'carrer', 'cerarr']));
