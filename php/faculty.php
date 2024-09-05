<?php
$faculties = [
    "computing" => [
        "computer science" => ['hod' => [
            'name' => 'Mr. D. O. Okeh',
            'picture' => 'https://unidel.edu.ng/cms/media/dept_images/CSC_profilehead.jpg'
        ]],
        'software engineering',
        'cyber security',
        'information communications technology',
    ],
    "law" => [
        'public law',
        'estate law',
        'private law',
    ],
    'science' => [
        'microbiology',
        'marine science',
        'bio technology',
        'bio chemistry',
        'maths',
        'physics',
        'biology'
    ]
];

$search = readline("Which department do you want to search?");

foreach ($faculties as $faculty => $department) {
    if (strtolower($faculty) == strtolower($search)) {
        echo "Faculty exists in the school it has " . count($department) . " departments in it";
        return;
    }
}
echo "Faculty does not exist";
