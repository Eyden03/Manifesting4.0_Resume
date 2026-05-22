<?php
//  NICOLE ANNE V. EBRON infos

$member = [
    "name"     => "Nicole Anne V. Ebron",
    "first"    => "Nicole Anne",
    "last"     => "Ebron",
    "role"     => "BSCSSE | Software Engineer",
    "phone"    => "(+63) 966 064 9729",
    "email"    => "nvebron@fit.edu.ph",
    "location" => "Pasig City, Philippines",
    "linkedin" => "https://www.linkedin.com/in/nicole-anne-ebron-538b6a382/",
    "github"   => "https://github.com/nicoleanneebron-art",
    "photo"    => "../assets/Nicole.jpeg",
    "slug"     => "nicole",
];

//   Career Objective  
$career_objective =
    "A Software Engineer with hands-on experience in designing, developing, and optimizing full-stack " .
    "web applications and backend systems. My expertise lies in building scalable and maintainable " .
    "software solutions using modern development practices, with a strong focus on performance, " .
    "usability, and clean architecture. With a foundation in both software engineering and a future " .
    "path toward game development, I aim to contribute to teams that build meaningful digital " .
    "experiences — whether in enterprise systems, web platforms, or interactive media. I am driven " .
    "by clean code, thoughtful design, and continuous growth as a developer.";

//   Education  
$education = [
    [
        "degree"         => "BS Computer Science",
        "specialization" => "Specialization: Software Engineering",
        "school"         => "FEU Institute of Technology",
        "year"           => "2024 – 2028",
        "status"         => "Currently Enrolled",
    ],
    [
        "degree"         => "BS Computer Science",
        "specialization" => "Specialization: Game Development",
        "school"         => "FEU Institute of Technology",
        "year"           => "2031 – 2034",
        "status"         => "Planned",
    ],
];

//   Skills  
$skills = [
    ["name" => "Java Development",               "years" => 4, "label" => "years", "max" => 5],
    ["name" => "C++ Programming",                "years" => 3, "label" => "years", "max" => 5],
    ["name" => "PHP Web Development",            "years" => 3, "label" => "years", "max" => 5],
    ["name" => "MySQL Database Management",      "years" => 3, "label" => "years", "max" => 5],
    ["name" => "HTML & CSS",                     "years" => 3, "label" => "years", "max" => 5],
    ["name" => "Data Structures & Algorithms",   "years" => 3, "label" => "years", "max" => 5],
    ["name" => "Object-Oriented Programming",    "years" => 3, "label" => "years", "max" => 5],
    ["name" => "JavaScript Basics",              "years" => 2, "label" => "years", "max" => 5],
    ["name" => "Cybersecurity Fundamentals",     "years" => 2, "label" => "years", "max" => 5],
    ["name" => "Software Engineering Principles","years" => 2, "label" => "years", "max" => 5],
];

//   Affiliations  
$affiliations = [
    [
        "year"  => "2024–Present",
        "role"  => "Student Member",
        "org"   => "FEU Tech Computer Science Department",
        "desc"  => "Active participant in department academic activities, programs, and student initiatives.",
    ],
    [
        "year"  => "2024–Present",
        "role"  => "Collaborative Team Member",
        "org"   => "BSCSSE Group Portfolio Project — FEU Tech",
        "desc"  => "Worked with teammates to build a multi-member web-based portfolio system using PHP, applying include() and require() for modular page structure.",
    ],
];

//   Work Experience  
class WorkExperience {
    private $_title, $_date, $_project, $_company, $_description, $_bullets, $_skills;
    function setTitle($v)       { $this->_title       = $v; }
    function setDate($v)        { $this->_date        = $v; }
    function setProject($v)     { $this->_project     = $v; }
    function setCompany($v)     { $this->_company     = $v; }
    function setDescription($v) { $this->_description = $v; }
    function setBullets($v)     { $this->_bullets     = $v; }
    function setSkills($v)      { $this->_skills      = $v; }
    function getTitle()         { return $this->_title;       }
    function getDate()          { return $this->_date;        }
    function getProject()       { return $this->_project;     }
    function getCompany()       { return $this->_company;     }
    function getDescription()   { return $this->_description; }
    function getBullets()       { return $this->_bullets;     }
    function getSkills()        { return $this->_skills;      }
}

$job1 = new WorkExperience();
$job1->setTitle("Software Engineer");
$job1->setDate("2024 – Present");
$job1->setProject("Full-Stack Web Application Development");
$job1->setCompany("Self-initiated / Project-based");
$job1->setDescription(
    "Designs and develops full-stack web applications with a focus on scalability, maintainability, " .
    "and performance. Works across the entire development lifecycle from architecture to deployment, " .
    "applying best practices in both front-end and back-end development."
);
$job1->setBullets([
    "Designed and developed full-stack web applications using PHP, MySQL, HTML, CSS, and JavaScript with a focus on scalability and maintainability.",
    "Built robust CRUD-based systems with optimized relational database structures and efficient query handling.",
    "Improved system performance through code refactoring, reducing redundancy, and enhancing backend logic efficiency.",
    "Implemented responsive and user-centered UI designs ensuring cross-device and cross-browser compatibility.",
    "Collaborated in development workflows using Git for version control and structured team-based project delivery.",
]);
$job1->setSkills("PHP, MySQL, HTML, CSS, JavaScript, Git, REST APIs, Responsive Design");

$job2 = new WorkExperience();
$job2->setTitle("Freelance Full-Stack Web Developer");
$job2->setDate("2023 – 2024");
$job2->setProject("Custom Websites & Web Applications");
$job2->setCompany("Self-employed");
$job2->setDescription(
    "Delivered custom-built websites and web applications for clients including academic institutions " .
    "and small businesses. Managed complete project lifecycles independently, from requirement " .
    "gathering to deployment and post-launch maintenance."
);
$job2->setBullets([
    "Delivered custom-built websites and web applications for clients including academic institutions and small businesses.",
    "Translated UI/UX mockups into fully functional, responsive front-end interfaces.",
    "Integrated backend functionalities such as form processing, authentication logic, and database storage systems.",
    "Ensured performance optimization, accessibility compliance, and mobile responsiveness across all projects.",
    "Managed end-to-end project lifecycles from requirement analysis to deployment and maintenance.",
]);
$job2->setSkills("HTML, CSS, JavaScript, PHP, MySQL, UI/UX, Client Management, Git");

$job3 = new WorkExperience();
$job3->setTitle("Junior Systems Developer");
$job3->setDate("2023");
$job3->setProject("Academic & Prototype Systems");
$job3->setCompany("Contract-Based Projects");
$job3->setDescription(
    "Assisted in developing academic and prototype systems including inventory management and " .
    "information systems. Applied structured programming principles to deliver working, " .
    "reliable software under contract-based engagements."
);
$job3->setBullets([
    "Assisted in developing academic and prototype systems including inventory management and information systems.",
    "Implemented structured programming solutions using C++ and Java for logic-based applications.",
    "Conducted debugging and testing to ensure system reliability and correctness.",
]);
$job3->setSkills("C++, Java, Debugging, Testing, Systems Development");

$jobs = [$job1, $job2, $job3];